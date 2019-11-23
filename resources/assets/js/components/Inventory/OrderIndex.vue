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

<template>
  <div id="branches">
    <div class="row mx-0 orders-tabs">
      <div class="col-lg-12 px-0">
        <b-card no-body>
          <b-tabs card>
            <b-tab active class="start-order-table">
              <template v-slot:title>
                <h5 @click="order_summary = false" class="d-inline-block mb-0">Start Order</h5>
              </template>

              <transition name="fade">
                <ProductListingTable></ProductListingTable>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 @click="order_summary = true" class="d-inline-block mb-0">Complete Order</h5>
              </template>

              <transition name="fade">
                <create-order/>
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
        </b-card>

        <b-card v-if="order_summary" class="order-summary">
          <b-row class="mx-0 justify-content-between align-items-end">
            <b-col sm="4" class="pl-0">
              <label class="control-label w-100 p-0 mb-2">Requesition Notes</label>   
              <textarea 
                v-model="requesition_notes"   
                id="info"     
                name="Info"   
                class="mb-0 form-control"/>
            </b-col>

            <b-col sm="auto" class="pl-0">
              <b-row class="mx-0">
                <b-col sm="auto border-right pl-0">
                  <p class="font-weight-bold mb-0">Sub Total</p>
                  <p class="font-weight-bold mb-0">VAT</p>
                  <p class="font-weight-bold mb-0">Grand Total</p>
                </b-col>

                <b-col sm="auto" class="pr-0 order-totals">
                  <p class="text-right mb-0">0,00</p>
                  <p class="text-right mb-0">0,00</p>
                  <p class="font-weight-bold text-right mb-0">0,00</p>
                </b-col>
              </b-row>
            </b-col>
          </b-row>

          <div class="row mt-5 mx-0 justify-content-end">
          <div class="col-auto pl-0">
            <b-button class="btn btn-default my-0 ml-0">Cancel</b-button>
          </div>

          <div class="col-auto pl-0">
            <b-button class="btn btn-primary font-weight-bold my-0 mr-0">Checkout</b-button>
          </div>
        </div>
        </b-card>
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
      
    },
    created: function () {
    },
    props: [
      
    ],
    data: function(){
      return {
        order_summary: false,
        requesition_notes: ''
      }
    },
    methods: {
      
    }
  }
</script>