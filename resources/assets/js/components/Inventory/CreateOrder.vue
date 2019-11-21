<style scoped>
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
.col.align-self-end {
  margin-bottom:17px;
}
.cancel-deal {
  border-radius: 50rem!important;
  font-size: 10px;
  text-transform: uppercase;
  box-shadow: 0 0 4px rgba(0,0,0,0.05);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.05);
  -moz-box-shadow: 0 0 4px rgba(0,0,0,0.05);
  -o-box-shadow: 0 0 4px rgba(0,0,0,0.05);
  color: #999999;
  padding: 11px 14px 10px;
  line-height: 1em;
}
.save-deal {
  font-size: 10px;
  text-transform:uppercase;
  font-weight: 700;
  padding: 11px 14px 10px;
  line-height: 1em;
}

@media screen and (max-width:1643px) {
  .col .row {
    justify-content: flex-end;
  }
  .col-7 {
    flex: 0 0 66.666667%!important;
    max-width: 66.666667%!important;
  }
  .col-3 {
    flex: 0 0 33.333332%!important;
    max-width: 33.333332%!important;
    padding-right: 0!important;
  }
}
</style>

<template>
  <div class="createDeal">   
    <p>Requisition information</p>   
    <div class="row mx-0 align-items-end">
      <div class="col-3 pl-0">   
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Type</label>   
        <input
          v-model="order.type"    
          type="text"    
          id="agent-name"     
          name="AgentName"   
          class="form-control rounded-pill"/>   

        <label class="col-lg-12 control-label w-100 p-0 mb-2">Class</label>   
        <a-select v-model="order.order_class" class="custom-select rounded-pill border-0">   
          <a-select-option :value="'-None-'">-None-</a-select-option>   
          <a-select-option v-for="(order_class, index) in order_classes" :key="index">{{order_class}}</a-select-option>  
        </a-select>

        <label class="col-lg-12 control-label w-100 p-0 mb-2">Request Date</label>   
        <a-date-picker    
          @change="handleDateChange"    
          id="request-date"     
          name="RequestDate"   
          class="form-control rounded-pill p-0 border-0"/> 

        <label class="control-label w-100 p-0 mb-2">Requestor</label>   
        <a-select v-model="order.requestor" class="custom-select rounded-pill border-0">   
          <a-select-option value="-None-" selected>-None-</a-select-option>   
          <a-select-option v-for="(requestor, index) in requestors" :key="index">{{requestor}}</a-select-option>   
        </a-select>   
      </div>   

      <div class="col-3">   
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Billing Address</label>   
        <textarea 
          v-model="order.billing_address"   
          id="info"     
          name="Info"   
          class="form-control "/> 

        <label class="col-lg-12 control-label w-100 p-0 mb-2">Phone</label> 
        <input 
          v-model="order.contact_number"    
          type="tel"    
          id="contact-number"     
          name="ContactNumber"   
          class="form-control rounded-pill"
          disabled/>     
      </div>   

      <div class="col-3"> 
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Email</label> 
        <input 
          v-model="order.contact_email"    
          type="tel"    
          id="contact-number"     
          name="ContactNumber"   
          class="form-control rounded-pill"
          disabled/>

        <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Name</label>   
        <input
          v-model="order.contact_name"    
          type="text"    
          id="contact-name"     
          name="contactName"   
          class="form-control rounded-pill" 
          disabled/>  

        <label class="col-lg-12 control-label w-100 p-0 mb-2">Origin Type</label> 
        <a-select v-model="order.origin_type" class="custom-select rounded-pill border-0">   
          <a-select-option value="-None-" selected>-None-</a-select-option>   
          <a-select-option v-for="(origin_type, index) in origin_types" :key="index">{{origin-type}}</a-select-option> 
        </a-select>  
      </div>

      <div class="col-3 pr-0"> 
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Origin</label>   
        <input 
          v-model="order.origin"
          type="text"   
          id="origin"     
          name="origin"   
          class="rounded-pill form-control"
          disabled/>

        <label class="control-label w-100 p-0 mb-2">Related Item</label>   
        <textarea 
          v-model="order.related_item"   
          id="info"     
          name="Info"   
          class="form-control"
          disabled/>    
      </div>   
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
