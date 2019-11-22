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
  border-radius: 10px;
  height: 124px!important;
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
    <div class="row mx-0">
      <div class="col-6 border-right pl-0">  
        <div class="row mx-0"> 
          <div class="col-7 pl-0">
            <div class="row mx-0">
              <div class="col-8 pl-0">
                <label class="control-label w-100 p-0 mb-2">Requestor</label>   
                <a-select v-model="order.requestor" class="custom-select rounded-pill border-0">   
                  <a-select-option value="-None-" selected>-None-</a-select-option>   
                  <a-select-option v-for="(o_requestor, index) in order.requestors" :key="index">{{o_requestor}}</a-select-option>   
                </a-select> 
              </div>

              <div class="col-4 pr-0">
                <label class="col-lg-12 control-label w-100 p-0 mb-2">Request Time</label>   
                <a-time-picker 
                  v-model='request_time' 
                  :allowEmpty="false" 
                  use24Hours 
                  format="hh:mm"/>
              </div>

              <div class="col-12 px-0">
                <label class="col-lg-12 control-label w-100 p-0 mb-2">Request Date</label>  
                <div class="calendar-container"> 
                  <vc-calendar class="border-0" is-expanded color="orange"/>
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 pr-0">
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Type</label>   
            <a-select v-model="order.type" class="custom-select rounded-pill border-0">   
              <a-select-option :value="'-None-'">-None-</a-select-option>   
              <a-select-option v-for="(o_type, index) in order.types" :key="index">{{o_type}}</a-select-option>  
            </a-select>  

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Class</label>   
            <a-select v-model="order.order_class" class="custom-select rounded-pill border-0">   
              <a-select-option :value="'-None-'">-None-</a-select-option>   
              <a-select-option v-for="(o_class, index) in order.order_classes" :key="index">{{o_class}}</a-select-option>  
            </a-select>

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Origin</label>   
            <input 
              v-model="order.origin"
              type="text"   
              id="origin"     
              name="origin"   
              class="rounded-pill form-control"/>

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Origin Type</label> 
            <a-select v-model="order.origin_type" class="custom-select rounded-pill border-0">   
              <a-select-option value="-None-" selected>-None-</a-select-option>   
              <a-select-option v-for="(o_type, index) in order.origin_types" :key="index">{{o-type}}</a-select-option> 
            </a-select>  
          </div>
        </div>
      </div>

      <div class="col-6 pr-0">   
        <div class="row mx-0">
          <div class="col-6 pl-0">
            <label class="control-label w-100 p-0 mb-2">Related Item</label>   
            <textarea 
              v-model="order.related_item"   
              id="info"     
              name="Info"   
              class="form-control"/>

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Name</label>   
            <input
              v-model="order.contact_name"    
              type="text"    
              id="contact-name"     
              name="contactName"   
              class="form-control rounded-pill"/>    
     
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Email</label> 
            <input 
              v-model="order.contact_email"    
              type="tel"    
              id="contact-number"     
              name="ContactNumber"   
              class="form-control rounded-pill"/>
          </div>

          <div class="col-6 pr-0">
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Phone</label> 
            <input 
              v-model="order.contact_number"    
              type="tel"    
              id="contact-number"     
              name="ContactNumber"   
              class="form-control rounded-pill"/> 

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Billing Address</label>   
            <textarea 
              v-model="order.billing_address"   
              id="info"     
              name="Info"   
              class="form-control "/>
          </div>
        </div> 
      </div>   
    </div>  

    <div class="row mx-0 justify-content-end">
      <b-button variant="primary" class="font-weight-bold m-0">Add</b-button>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {
    
  },
  created: function () {},
  props: [],
  data: function(){
    return { 
      order: {
        type: '',
        types: ['Maintenance Requessition', 'New Requisition'],
        order_class: '-None-',
        order_classes: ['Inventory'],
        billing_address: '',
        contact_number: '',
        contact_email:'' ,
        contact_name:'' ,
        origin_type:'-None-' ,
        origin_types: ['Warehouse'],
        origin:'' ,
        related_item:'' ,
        requestor:'-None-',
        requestors: ['Ilan Brooks']
      },
      Toast: null,
    }
  },
  methods: {
  }
}
</script>
