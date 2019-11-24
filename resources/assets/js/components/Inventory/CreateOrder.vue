<style scoped>
.col-6 {
  padding-left: 3.3%;
  padding-right: 3.3%;
}
.col-6.border-right {
  border-color: #8D8D8D;
}
.col-6 .col-7 .col-8,
.col-6 .col-7 .col-4 {
  padding-left: 10px;
  padding-right:10px;
}
input, textarea, select {
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
.custom-select {
  height: auto;
}
label{
  font-family: 'Rubik', sans-serif;
  font-size: 10px;
  color: #999999;
  margin-bottom: 7px;
  margin-left: 17px;
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
.calendar-container {
  margin-left: 17px;
  margin-right: 17px;
}
</style>

<template>
  <div class="createOrder">  
    <b-card no-body>    
      <div class="row mx-0">
        <div class="col-6 border-right pl-0">  
           <div class="row mx-0"> 
                <div class="col-4 pl-0">
                  <label class="control-label w-100 p-0 mb-2">Requestor</label>  
                  <input
                    disabled 
                    v-model="order.requestor"
                    type="text"   
                    id="requestor"     
                    name="requestor"   
                    class="rounded-pill form-control"/>
                </div>

                <div class="col-4 pl-0">
                  <label class="col-lg-12 control-label w-100 p-0 mb-2">Priority</label>
                  <a-select v-model="order.priority" class="custom-select rounded-pill border-0">   
                    <a-select-option value="Low">Low</a-select-option>   
                    <a-select-option value="Mid">Mid</a-select-option>   
                    <a-select-option value="High">High</a-select-option>     
                  </a-select>  
                </div>

                <div class="col-4 pl-0">
                  <label class="col-lg-12 control-label w-100 p-0 mb-2">Type</label>   
              <a-select v-model="order.type" class="custom-select rounded-pill border-0">   
                <a-select-option :value="'-None-'">- Please Select -</a-select-option>   
                <a-select-option :value="o_type.id" v-for="(o_type, index) in order_types" :key="index">{{o_type.name}}</a-select-option>  
              </a-select>  
                </div>
          </div>
           <div class="row mx-0"> 
                <div class="col-4 pl-0">
                 <label class="col-lg-12 control-label w-100 p-0 mb-2">Class</label>   
              <a-select v-validate="'required'" name="Class" v-model="order.order_class" class="custom-select rounded-pill border-0">   
                <a-select-option :value="'-None-'">- Please Select -</a-select-option>   
                <a-select-option :value="o_class.id" v-for="(o_class, index) in order_clases" :key="index">{{o_class.name}}</a-select-option>  
              </a-select>
              <span id="error" v-show="errors.has('Class')" class="help-block">{{ errors.first('Class') }}</span>
                </div>

                <div class="col-4 pl-0">
                  <label class="col-lg-12 control-label w-100 p-0 mb-2">Origin Type</label> 
              <input 
                disabled
                v-model="order.origin_type_name"
                type="text"   
                id="origin"     
                name="origin"   
                class="rounded-pill form-control"/>
                </div>

                <div class="col-4 pl-0">
                 <label class="col-lg-12 control-label w-100 p-0 mb-2">Origin</label>   
              <input
                disabled 
                v-model="order.origin_name"
                type="text"   
                id="origin"     
                name="origin"   
                class="rounded-pill form-control"/>

                </div>
          </div>
        </div>

        <div class="col-6 pr-0">   
          <div class="row mx-0">
            <div class="col-6 pl-0">
              <label class="control-label w-100 p-0 mb-2">Billing Address</label>   
              <textarea 
                v-model="order.billing_address"   
                id="info"     
                name="Info"   
                class="form-control "/>
                </div>
                <div class="col-6 pr-0">
                 <label class="col-lg-12 control-label w-100 p-0 mb-2">Related Item</label>   
              <textarea 
                v-model="order.related_item"   
                id="info"     
                name="Info"   
                class="form-control"/>
          </div>
          </div> 
          <div class="row mx-0">
            <div class="col-4 pl-0">
              <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Name</label>   
              <input
                v-model="order.contact_name"    
                type="text"    
                id="contact-name"     
                name="contactName"   
                class="form-control rounded-pill"/>    
              </div>
               <div class="col-4 pl-0">
                <label class="col-lg-12 control-label w-100 p-0 mb-2">Email</label> 
                <input 
                  v-model="order.contact_email"    
                  type="tel"    
                  id="contact-number"     
                  name="ContactNumber"   
                  class="form-control rounded-pill"/>
              </div>
            <div class="col-4 pr-0">
              <label class="col-lg-12 control-label w-100 p-0 mb-2">Phone</label> 
              <input 
                v-model="order.contact_number"    
                type="tel"    
                id="contact-number"     
                name="ContactNumber"   
                class="form-control rounded-pill"/> 
            </div>
          </div> 
        </div>   
      </div>
    </b-card> 
    <b-card class="order-summary">

      <b-row class="mx-0 justify-content-between align-items-end">
        <b-col sm="4" class="pl-0">
          <label class="control-label w-100 p-0 mb-2">Requesition Notes</label>   
          <textarea 
            v-model="order.requesition_notes"   
            id="info"     
            name="Info"   
            class="mb-0 form-control"/>
        </b-col>

        <b-col sm="auto" class="pl-0">
          <b-row class="mx-0">
            <b-col sm="auto border-right pl-0">
              <p class="font-weight-bold mb-0">Sub Total</p>
              <p class="font-weight-bold mb-0">{{ order.tax }} ({{ parseInt(order.tax_percent) }}%)</p>
              <p class="font-weight-bold mb-0">Grand Total</p>
            </b-col>

            <b-col sm="auto" class="pr-0 order-totals">
              <p class="text-right mb-0">{{ order.amount }}</p>
              <p class="text-right mb-0">{{ calculateTAxAmount() }}</p>
              <p class="font-weight-bold text-right mb-0">{{ calculateGrandTotal() }}</p>
            </b-col>
          </b-row>
        </b-col>
      </b-row>

      <div class="row mt-5 mx-0 justify-content-end">
        <div class="col-auto pl-0">
          <b-button class="btn btn-default my-0 ml-0">Cancel</b-button>
        </div>

        <div class="col-auto pl-0">
          <b-button class="btn btn-primary font-weight-bold my-0 mr-0">Save</b-button>
        </div>
      </div>
    </b-card> 
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {
    var vm = this;
    Fire.$on('StartOrder', function(data){
        vm.item = data.product;
        vm.getProductInfo(vm.item.id);
    });
  },
  created: function () {},
  props: ['user_name','order_clases','order_types'],
  data: function(){
    return { 
      item: {},
      product: { 
        origin: [],
        origin_type: [],
      },
      order: {
        type: '',
        order_class: '-None-',
        billing_address: '',
        contact_number: '',
        contact_email:'' ,
        contact_name:'' ,
        related_item:'' ,
        requestor:'',
        requesition_notes: '',
        amount: 100.00,

      },
      tableRow: [],
      Toast: null,
    }
  },
  methods: {
    getProductInfo(id){
      var vm = this;
      axios.get('/products/get/'+id).then( (response) => {
        vm.product = response.data.product;
        vm.order.requestor = vm.user_name;
        vm.order.request_date = vm.getDate();
        vm.order.priority = 'Low';
        vm.order.origin_id = vm.product.origin_id;
        vm.order.origin_name = vm.product.origin.name;
        vm.order.origin_type_id = vm.origin_type_id;
        vm.order.origin_type_name = vm.product.origin_type.name;
        vm.order.tax = vm.product.tax.tax_type;
        vm.order.tax_percent = vm.product.tax.percentage;
        vm.order.tax_type = vm.product.tax_type;

        vm.tableRow = {

        };
      });
    },
    getDate(){
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      var time = today.getHours() + ":" + today.getMinutes();
      var dateTime = date+' '+time;
      return dateTime;
    },
    calculateTAxAmount(){
      var amount = (this.order.tax_percent/100) * this.order.amount;
      return amount.toFixed(2);
    },
    calculateGrandTotal(){
      var tax_amount = this.calculateTAxAmount();
      var grand_total = parseFloat(this.order.amount) + parseFloat(tax_amount);
      return parseFloat(grand_total);
    }
  }
}
</script>
