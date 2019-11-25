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
input, select{
  margin-bottom: 0;
}
.calendar-container { 
  margin-left: 17px; 
  margin-right: 17px; 
} 
.scroll-x{ 
  overflow: auto !important; 
} 
.orders .createOrder .order-summary .product-listing td { 
  font-size: 12px  !important; 
} 
.error{
  color: red;
}
</style> 
 
<template> 
  <div class="createOrder">   
    <b-card no-body>     
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
                  <label class="col-lg-12 control-label w-100 p-0 mb-2">Request Date</label>   
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
 
            <div class="col-5 pr-0"> 
              <label class="col-lg-12 control-label w-100 p-0 mb-2">Type</label>    
              <a-select  v-validate="'required'" name="Type" v-model="order.type" class="custom-select rounded-pill border-0">    
                <a-select-option :value="''">- Please Select -</a-select-option>    
                <a-select-option :value="o_type.id" v-for="(o_type, index) in order_types" :key="index">{{o_type.name}}</a-select-option>   
              </a-select> 
              <span id="error" v-show="errors.has('Type')" class="help-block">{{ errors.first('Type') }}</span>   
 
              <label class="col-lg-12 control-label w-100 p-0 mb-2">Class</label>    
              <a-select v-validate="'required'" name="Class" v-model="order.order_class" class="custom-select rounded-pill border-0">    
                <a-select-option :value="''">- Please Select -</a-select-option>    
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
                v-validate="'required'" 
                v-model="order.billing_address"    
                id="info"      
                name="Billing Address"    
                class="form-control "/> 
                <span id="error" v-show="errors.has('Billing Address')" class="help-block">{{ errors.first('Billing Address') }}</span>   
 
 
              <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Name</label>    
              <input 
                v-validate="'required'" 
                v-model="order.contact_name"     
                type="text"     
                id="contact-name"      
                name="Contact Name"    
                class="form-control rounded-pill"/> 
                <span id="error" v-show="errors.has('Contact Name')" class="help-block">{{ errors.first('Contact Name') }}</span>     
       
              <label class="col-lg-12 control-label w-100 p-0 mb-2">Email</label>  
              <input 
                v-validate="'required|email'"  
                v-model="order.contact_email"     
                type="tel"     
                id="contact-email"      
                name="Email"    
                class="form-control rounded-pill"/> 
                <span id="error" v-show="errors.has('Email')" class="help-block">{{ errors.first('Email') }}</span>   
 
              <label class="col-lg-12 control-label w-100 p-0 mb-2">Phone</label>  
              <input  
                v-validate="'required|numeric'"  
                v-model="order.contact_number"     
                type="tel"     
                id="contact-Phone"      
                name="Phone"    
                class="form-control rounded-pill"/> 
                <span id="error" v-show="errors.has('Phone')" class="help-block">{{ errors.first('Phone') }}</span>   
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
        </div>    
      </div> 
    </b-card>  
    <b-card class="order-summary"> 
 
      <b-row class="mx-0 mt-4 justify-content-between align-items-end scroll-x"> 
        <b-table class="product-listing" :items="order_items"> 
         
          <template slot="Available"  slot-scope="data"> 
            <input  
              disabled
              v-model="data.item.Available"  
              type="number" 
              min="1"   
              max="10"   
              id="Available"     
              name="Available"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="Quantity"  slot-scope="data"> 
            <input  
              @change="updateRow(data.item)"  
              @blur="updateRow(data.item)" 
               @keyup.enter="updateRow(data.item)" 
               @keyup="updateRow(data.item)"  
              v-model="data.item.Quantity"  
              type="number" 
              min="1"
              :max="data.item.Available"   
              id="Quantity"     
              name="Quantity"   
              class="form-control rounded-pill border-0"/>
              <span id="error" v-show="max_quantity_reached" class="help-block">Max quantiy reached</span>
          </template>          
          
          <template slot="Priority"  slot-scope="data"> 
            <input  
              v-model="data.item.Priority"  
              type="number" 
              min="1"   
              max="10"   
              id="Priority"     
              name="Priority"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="WarehouseName"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.WarehouseName"
              :title="data.item.WarehouseName"   
              type="text" 
              id="origin"     
              name="origin"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="UnitCost"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.UnitCost"
              :title="data.item.UnitCost"    
              id="cost"     
              name="cost"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="TaxRate"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.TaxRate"
              :title="data.item.TaxRate"    
              id="rate"     
              name="rate"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="Vat"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.Vat"
              :title="data.item.Vat"    
              id="vat"     
              name="vat"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="Total"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.Total"   
              id="p-total"     
              name="p-total"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="ProductId"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.ProductId"   
              id="p-total"     
              name="p-total"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="PartType"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.PartType"  
              :title="data.item.PartType"   
              id="p-total"     
              name="p-total"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="PartCode"  slot-scope="data">
            <input 
              disabled
              v-model="data.item.PartCode"
              :title="data.item.PartCode"   
              id="p-total"     
              name="p-total"   
              class="form-control rounded-pill border-0"/>
          </template>

          <template slot="Description"  slot-scope="data">
            <input 
              disabled
              :title="data.item.Description"
              v-model="data.item.Description"   
              id="p-total"     
              name="p-total"   
              class="form-control rounded-pill border-0"/>
          </template>

        </b-table>
      </b-row>

      <b-row class="mx-0 mt-4 justify-content-between align-items-end">
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
              <p class="text-right mb-0">{{ calculateGrandTotal.sub_total }}</p>
              <p class="text-right mb-0">{{ calculateGrandTotal.tax_amount }}</p>
              <p class="font-weight-bold text-right mb-0">{{ calculateGrandTotal.grand_total }}</p>
            </b-col>
          </b-row>
        </b-col>
      </b-row>

      <div class="row mt-5 mx-0 justify-content-end">
        <div class="col-auto pl-0">
          <b-button class="btn btn-default my-0 ml-0" @click="cancelOrder">Cancel</b-button>
        </div>

        <div class="col-auto pl-0">
          <b-button class="btn btn-primary font-weight-bold my-0 mr-0" @click="saveOrder" v-if="max_quantity_reached" disabled>
            <a-icon type="loading" v-if="loading" /> Save
          </b-button>
          <b-button class="btn btn-primary font-weight-bold my-0 mr-0" @click="saveOrder" v-else>
            <a-icon type="loading" v-if="loading" /> Save
          </b-button>
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

    this.Toast = this.$swal.mixin({ 
      toast: true, 
      position: 'top-end', 
      showConfirmButton: false, 
      timer: 3000 
    });
  },
  created: function () {},
  props: ['user_id','user_name','order_clases','order_types'],
  data: function(){
    return { 
      item: {},
      product: { 
        origin: [],
        origin_type: [],
      },
      order: {
        type: '',
        order_class: '',
        billing_address: '',
        contact_number: '',
        contact_email:'' ,
        contact_name:'' ,
        related_item:'' ,
        requestor:'',
        requesition_notes: '',
        vat: 0.00,
        sub_amount: 0.00,
        amount: 0.00,
      },
      order_items: [],
      tableRow: [],
      max_quantity_reached: false,
      loading: false,
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

        vm.order_items.push({
          ProductId: vm.product.id,
          PartType: vm.product.category.name,
          PartCode: vm.product.part_code,
          Description: vm.product.description,
          WarehouseName: vm.product.origin.name,
          Available: vm.product.current_stock - vm.product.reserved_stock,
          Priority: 1,
          Quantity: 1,
          UnitCost: vm.product.unit_cost,
          TaxRate: vm.product.tax.percentage,
          Vat: vm.calculateProductTAxAmount(vm.product.tax.percentage, vm.product.unit_cost),
          Total: vm.calculateProductTotal(vm.calculateProductTAxAmount(vm.product.tax.percentage, vm.product.unit_cost), vm.product.unit_cost)
        });

      });
    },
    updateRow(row){
      var vm = this;
      if(row.Quantity >= row.Available){
        vm.max_quantity_reached = true;
      }else{
        vm.max_quantity_reached = false;
        row.Vat = vm.calculateProductTAxAmount(row.TaxRate, ( parseFloat(row.UnitCost) * parseFloat(row.Quantity) ));
        row.Total = vm.calculateProductTotal(row.Vat, ( parseFloat(row.UnitCost) * parseFloat(row.Quantity) ) );
      }
    },
    getDate(){
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      var time = today.getHours() + ":" + today.getMinutes();
      var dateTime = date+' '+time;
      return dateTime;
    },
    calculateProductTAxAmount(rate, unit_cost){
      var amount = (rate/100) * unit_cost;
      return amount.toFixed(2);
    },
    calculateProductTotal(vat_amout, unit_cost){
      return parseFloat(vat_amout) + parseFloat(unit_cost);
    },
    clearOrder(){
      this.order.type = '';
      this.order.order_class = '';
      this.order.billing_address = '';
      this.order.contact_number = '';
      this.order.contact_email ='';
      this.order.contact_name ='';
      this.order.related_item ='';
      this.order.requestor ='';
      this.order.requesition_notes = '';
      this.order.vat = 0.00;
      this.order.amount = 0.00;
      this.order_items = [];
    },
    cancelOrder(){
      this.clearOrder();
      Fire.$emit('CancelOrder');
    },
    saveOrder(){ 
      var vm = this;  
      vm.$Progress.start(); 
      vm.loading = true; 
      vm.$validator.validateAll().then((result) => {  
        if (!result) {} else {  
          axios.post('/orders/create', {  
            order: vm.order, 
            order_items: vm.order_items, 
          }).then(function(response) {  
 
            if (response.data.success === true) {  
              vm.Toast.fire({  
                type: 'success',  
                title: response.data.message  
              });  
 
              Fire.$emit('OrderCreated', { 
                order : response.data.order 
              });  
              vm.clearOrder(); 
              vm.$Progress.finish();  
              vm.loading = false; 
            } else {  
              vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning');  
              vm.$Progress.fail();  
            }  
          });  
        }  
      }); 
    } 
  }, 
  computed:{
    calculateGrandTotal: function(){

      var vm = this;
      vm.order.amount = 0;
      var tax_amount = 0;
      var sub_total = 0;
      var grand_total = 0;

      vm.order_items.forEach( (item) => {
        vm.order.amount += item.Total;
        tax_amount +=  item.Vat;
        sub_total += (item.UnitCost * item.Quantity );
      });

      vm.order.vat = parseFloat(tax_amount);
      vm.order.sub_amount = parseFloat(sub_total);

      return {
              sub_total : parseFloat(sub_total).toFixed(2),
              tax_amount : parseFloat(tax_amount).toFixed(2),
              grand_total : parseFloat(vm.order.amount).toFixed(2),
            }
    }
  }
}
</script>
