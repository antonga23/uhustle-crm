<template>
  <div class='table-container'>
    <b-table 
      class="order-listing" 
      :items="orderHistory" 
      :per-page="perPage" 
      sticky-header="190px" 
      responsive 
      :current-page="currentPage"
    >
      <template slot="type_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>

       <template slot="class_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>

       <template slot="origin_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>

       <template slot="Status" slot-scope="data">
        <a-select class v-model="data.item.Status">
          <a-select-option value="PENDING">PENDING</a-select-option>
          <a-select-option value="IN TRANSIT">IN TRANSIT</a-select-option>
          <a-select-option value="DELIVERED">DELIVERED</a-select-option>
          <a-select-option value="PAID">PAID</a-select-option>
        </a-select>
      </template>

       <template slot="Actions" slot-scope="data">
        <a :href="'/orders/download-po/' + data.item.ID" class="btn btn-default">Download Purchase Order</a>
        <a :href="'/orders/download-inv/' + data.item.ID" class="btn btn-default" style="display:none;">Download Invoice</a>
        <a :href="'/orders/download-dn/' + data.item.ID" class="btn btn-primary btn-default" v-if="checkForDeliveryNote">Download Delivery Note</a>
      </template>
    </b-table>

    <b-pagination
      v-model="currentPage"
      :per-page="perPage"
      align="center"
      size="sm"
      :total-rows="rows"
    ></b-pagination>
  </div>
</template>
<script>
  export default {
    props: ['user_id','user_name','order_clases','order_types'],
    mounted() {
      var vm = this;
      
      vm.getOrders();

      Fire.$on('OrderCreated', function(data){
      
        vm.orderHistory = [];

        vm.orders.push(data.order);

        vm.mapOrders(vm.orders);

      });
    },
    data() {
      return {
        orders: [],
        requestor_id: '',
        status: '',
        perPage: 20, 
        currentPage: 1,
        orderHistory: []
      }
    },
    methods:{
      getOrders(){
        var vm = this;

        axios.get('/orders/get-all').then(function (response) {

          vm.orders = response.data.orders;

          vm.mapOrders(vm.orders);

        });
      },
      mapOrders(orders){
        var vm = this;

        orders.map( (order) => {
          vm.requestor_id = order.requestor_id;
          vm.status = order.status;
          vm.orderHistory.push({
            ID: order.id,
            Type: order.type.name,
            Class: order.class.name,
            Requestor: order.requestor,
            BillingAddress: order.billing_address,
            ContactPerson: order.contact_name,
            ContactNumber: order.contact_number,
            ContactEmail: order.contact_email,
            Rate: order.tax_percent + '%',
            Vat: 'R' + order.vat,
            TotalAmount: 'R' + order.amount,
            DateCreated: order.created_at,
            Status: order.status,
            Actions: ''
          });
        });

      }
    },
    computed: {
      rows: function() {
        return this.orderHistory.length
      },
      checkSelectDisabled: function(){
        
      },
      checkForDeliveryNote: function(data){
        return this.status == 'IN TRANSIT' || this.status == 'DELIVERED' || this.status == 'PAID';
      }
    }
  }
</script>

<style scoped>
  .btn-default{
  background: #fff;
  color: #999999;    
  border: none!important;
  padding: 11px 14px 10px;
  font-size: 10px;
  text-transform:uppercase;
  border-radius: 50rem!important;
  line-height:1em;
  margin-left: 0.9%;
  margin-right: 0.9%;
  -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  -o-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
}
.btn-primary {
  border-radius: 50rem!important;
  text-transform:uppercase;
  font-size: 10px;
  padding: 11px 14px 10px;
  line-height:1em;
  margin-left: 0.9%;
  margin-right: 0.9%;
}
</style>