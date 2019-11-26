<template>
  <div class='table-container'>
    <div v-if="show_page_loader">
      <vcl-table v-if="show_page_loader" ></vcl-table>
    </div>
    <div v-else>
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

        <template slot="Status"  slot-scope="data">
          <a-select class v-model="data.item.Status" @change="updateOrder(data.item)">
            <a-select-option value="PENDING" v-if="diableOrderStage(data.item,'PENDING')">PENDING</a-select-option>
            <a-select-option value="IN TRANSIT" v-if="diableOrderStage(data.item, 'IN TRANSIT')">IN TRANSIT</a-select-option>
            <a-select-option value="DELIVERED"  v-if="diableOrderStage(data.item, 'DELIVERED')">DELIVERED</a-select-option>
            <a-select-option value="PAID"   v-if="diableOrderStage(data.item, 'PAID')">PAID</a-select-option>
          </a-select>
        </template>

        <template slot="Actions"  slot-scope="data">
          <a :href="'/orders/download-po/' + data.item.ID" class="btn btn-primary"><a-icon type="download" /> Purchase Order</a>
          <a :href="'/orders/download-inv/' + data.item.ID" class="btn btn-primary" style="display:none;"><a-icon type="download" /> Invoice</a>
          <a :href="'/orders/download-dn/' + data.item.ID" class="btn btn-primary" v-if="checkForDeliveryNote(data.item.Status)"><a-icon type="download" /> Delivery Note</a>
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
  </div>
</template>
<script>

  import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
  export default {
    components: { 
      VclFacebook,
      VclInstagram,
      VclTable,
    },
    props: ['user_id','user_name','company_id','order_clases','order_types'],
    mounted() {
      var vm = this;
      
      vm.getOrders();

      Fire.$on('OrderCreated', function(data){
      
        vm.orderHistory = [];

        vm.orders.push(data.order);

        vm.mapOrders(vm.orders);

      });

      this.Toast = this.$swal.mixin({ 
        toast: true, 
        position: 'top-end', 
        showConfirmButton: false, 
        timer: 3000 
      });
    },
    data() {
      return {
        orders: [],
        requestor_id: '',
        status: '',
        perPage: 20, 
        currentPage: 1,
        orderHistory: [],
        orderRelations: [],
        show_page_loader: false,
        Toast: null
      }
    },
    methods:{
      getOrders(){
        var vm = this;
        vm.show_page_loader = true;
        axios.get('/orders/get-all').then(function (response) {

          vm.orders = response.data.orders;

          vm.mapOrders(vm.orders);

          vm.show_page_loader = false;
        });
      },
      mapOrders(orders){
        var vm = this;

        orders.map( (order) => {
          
          vm.orderRelations.push({
            order_id: order.id,
            requestor_id : order.requestor_id,
            status : order.status,
            requestor_company_id : order.requestor_company_id,
            origin_id : order.origin_id,
          });

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

      },
      updateOrder(order){
        var vm = this;
        vm.$Progress.start();
        axios.post('/orders/update', { 
          order_id : order.ID,
          order_status : order.Status,
         }).then(function (response) {

          if(response.data.success === true){

            vm.orders = response.data.orders;

            vm.orderHistory = [];

            vm.mapOrders(vm.orders);

            vm.Toast.fire({ type: 'success', title: response.data.message });

            vm.$Progress.finish();
          }else{
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong, please try again','warning');
          }

        });
      },
      checkForDeliveryNote: function(data){
        return data == 'IN TRANSIT' || data == 'DELIVERED' || data == 'PAID';
      },
      diableOrderStage: function(data, stage){
        var vm = this;
        var outcome = false;
        vm.orderRelations.forEach( (relation) => {
          if(relation.requestor_company_id == vm.company_id && data.Status == 'PENDING'){
            outcome = false;
          }else if(relation.requestor_company_id == vm.company_id && data.Status == 'DELIVERED'){
            outcome = false;
          }else if(relation.requestor_company_id == vm.company_id && data.Status == 'IN TRANSIT'){
            outcome = (stage == 'DELIVERED') ? true : false;
          }

          if(relation.origin_id == vm.company_id && data.Status == 'PENDING'){

            outcome = (stage == 'IN TRANSIT') ? true : false;

          }else if(relation.origin_id == vm.company_id && data.Status == 'DELIVERED'){

            outcome = (stage == 'PAID') ? true : false;

          }

        });

        return outcome;
      }
    },
    computed: {
      rows: function() {
        return this.orderHistory.length
      },
      checkSelectDisabled: function(){
        
      },
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