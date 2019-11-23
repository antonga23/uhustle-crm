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
                <input
                  disabled 
                  v-model="order.requestor"
                  type="text"   
                  id="requestor"     
                  name="requestor"   
                  class="rounded-pill form-control"/>
              </div>

              <div class="col-4 pr-0">
                <label class="col-lg-12 control-label w-100 p-0 mb-2">Priority</label>
                <a-select v-model="order.priority" class="custom-select rounded-pill border-0">   
                  <a-select-option value="Low">Low</a-select-option>   
                  <a-select-option value="Mid">Mid</a-select-option>   
                  <a-select-option value="High">High</a-select-option>     
                </a-select>  
              </div>

              <div class="col-12 pl-0">
                <label class="col-lg-12 control-label w-100 p-0 mb-2">Request Date</label>  
                <div class="calendar-container"> 
                  <input
                    disabled 
                    v-model="order.request_date"
                    type="text"   
                    id="request_date"     
                    name="request_date"   
                    class="rounded-pill form-control"/>
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 pr-0">
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Type</label>   
            <a-select v-model="order.type" class="custom-select rounded-pill border-0">   
              <a-select-option :value="'-None-'">- Please Select -</a-select-option>   
              <a-select-option :value="o_type.id" v-for="(o_type, index) in order_types" :key="index">{{o_type.name}}</a-select-option>  
            </a-select>  

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Class</label>   
            <a-select v-validate="'required'" name="Class" v-model="order.order_class" class="custom-select rounded-pill border-0">   
              <a-select-option :value="'-None-'">- Please Select -</a-select-option>   
              <a-select-option :value="o_class.id" v-for="(o_class, index) in order_clases" :key="index">{{o_class.name}}</a-select-option>  
            </a-select>
            <span id="error" v-show="errors.has('Class')" class="help-block">{{ errors.first('Class') }}</span>

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Origin Type</label> 
            <input 
              disabled
              v-model="order.origin_type_name"
              type="text"   
              id="origin"     
              name="origin"   
              class="rounded-pill form-control"/>

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

            <label class="col-lg-12 control-label w-100 p-0 mb-2">Related Item</label>   
            <textarea 
              v-model="order.related_item"   
              id="info"     
              name="Info"   
              class="form-control"/>

          </div>
        </div> 
      </div>   
    </div>  
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
        origin:'' ,
        related_item:'' ,
        requestor:'',
        requestors: this.user_name
      },
      types: ['Maintenance Requessition', 'New Requisition'],
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
      });
    },
    getDate(){
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      var time = today.getHours() + ":" + today.getMinutes();
      var dateTime = date+' '+time;
      return dateTime;
    }
  }
}
</script>
