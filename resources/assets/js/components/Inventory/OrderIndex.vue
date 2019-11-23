<style scoped>
.trans-tabs {
  padding-left:5.2%;
  padding-right:5.2%;
}
.tab-pane.card-body {
  padding:4.4% 5.6% 6.8%;
}
.products .tab-pane .row{
  margin-right: 0;
  margin-left: 0;
}
h5 {
  font-size: 0.83vw;
}
.nav-link.active img {
  margin-left:20px;
  display: inline-block!important;
  box-shadow: 0 0 2px rgba(0,0,0,0.15);
  -webkit-box-shadow: 0 0 2px rgba(0,0,0,0.15);
  -moz-box-shadow: 0 0 2px rgba(0,0,0,0.15);
  -o-box-shadow: 0 0 2px rgba(0,0,0,0.15);
  border-radius: 50rem;
}
.add-module-btn {
  box-shadow:none!important;
  -webkit-box-shadow:none!important;
  -moz-box-shadow:none!important;
  -o-box-shadow:none!important;
}
.tab-pane.card-body {
  padding:4.4% 5.6% 6.8%;
}
.order-summary {
  box-shadow: 0 0 20px rgba(0,0,0,0.1)!important;
  -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.1)!important;
  -moz-box-shadow: 0 0 20px rgba(0,0,0,0.1)!important;
  -o-box-shadow: 0 0 20px rgba(0,0,0,0.1)!important;
  border-radius: 25px;
}
label{
  font-family: 'Rubik', sans-serif;
  font-size: 10px;
  color: #999999;
  margin-bottom: 7px;
  margin-left: 17px;
}
textarea {
  box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  padding: 11px 18px!important;
  font-size: 12px;
  color: #003449;
  border-color: #ccc;
  margin-bottom: 17px;
  font-family: 'Rubik', sans-serif;
  height: auto!important;
  border-radius: 10px;
}
.order-totals {
  min-width: 184px;
}

</style>

<template>
  <div id="branches">
    <div class="row mx-0 orders-tabs">
      <div class="col-lg-12 px-0">
          <b-tabs v-model="tabIndex" card>
            <b-tab active class="start-order-table">
              <template v-slot:title>
                <h5 @click="order_summary = false" class="d-inline-block mb-0">Start Order</h5>
              </template>

              <transition name="fade">
                <ProductListingTable :role="role" :mode="'view'"></ProductListingTable>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 @click="order_summary = true" class="d-inline-block mb-0">Complete Order</h5>
              </template>

              <transition name="fade">
                <create-order :user_name="user_name" :order_clases="order_clases" :order_types="order_types"/>
              </transition>
            </b-tab>

            <b-tab class="order-history-table">
              <template v-slot:title>
                <h5 @click="order_summary = false" class="d-inline-block mb-0">Order History</h5>
              </template>

              <transition name="fade">
                <OrdersListingTable></OrdersListingTable>
              </transition>
            </b-tab>
          </b-tabs>
      </div>
    </div>
  </div>
</template>

<script>
import ProductListingTable from "../DataTables/ProductListingTable";
import OrdersListingTable from "../DataTables/OrdersListingTable";
import CreateOrder from './CreateOrder';
  export default {
    components: { 
      ProductListingTable,
      OrdersListingTable,
      CreateOrder
    },
    mounted() {
      var vm = this;

      vm.getSelectOPtions();

      Fire.$on('StartOrder', function(data){

        vm.tabIndex = 1;

        vm.order_summary = true;

      });
    },
    created: function () {
    },
    props: [
      'role',
      'user_name',
      'provinces',
      'cities',
      'company_types'
    ],
    data: function(){
      return {
        tabIndex: 0,
        product: [],
        order_types: [],
        order_clases: [],
        order_summary: false,
        requesition_notes: ''
      }
    },
    methods: {
      getSelectOPtions(){
        var vm = this;
        axios.get('/orders/get-types').then( (response) => {
          vm.order_clases = response.data.order_clases;
          vm.order_types = response.data.order_types;
        });
      }
    }
  }
</script>