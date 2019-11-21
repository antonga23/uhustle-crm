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
  <div class="createDeal">  
    <div class="row mt-0 mx-0 align-items-center fields-divider">
      <div class="col-auto pl-0">
        <h5 class="mb-0">Branch Information</h5>
      </div>

      <div class="col px-0">
        <div class="divider-line"></div>
      </div>
    </div>

    <b-row class="mx-0">
      <b-col sm="6" class="px-0">
        <label for="input-none">Name</label>
        <input 
          v-model="supplier.name"    
          type="text"    
          id="supplier-name"     
          name="supplierName"   
          class="form-control rounded-pill"/>

        <label for="input-none">Address</label>
        <textarea 
          v-model="supplier.address"   
          id="info"     
          name="Info"   
          class="form-control"/>

        <label for="input-none">Province</label>
        <a-select v-model="supplier.province" class="custom-select rounded-pill border-0">   
          <a-select-option value="-None-" selected>-None-</a-select-option>   
          <a-select-option v-for="(s_province, index) in supplier.provinces" :key="index">{{s_province}}</a-select-option> 
        </a-select>

        <label for="input-none">City</label>
        <a-select v-model="supplier.city" class="custom-select rounded-pill border-0">   
          <a-select-option value="-None-" selected>-None-</a-select-option>   
          <a-select-option v-for="(s_city, index) in supplier.cities" :key="index">{{s_city}}</a-select-option> 
        </a-select>

        <label for="input-none">Phone</label>
        <input 
          v-model="supplier.tel"    
          type="tel"    
          id="supplier-tel"     
          name="supplierTel"   
          class="form-control rounded-pill"/>

        <label for="input-none">Fax</label>
        <input 
          v-model="supplier.fax"    
          type="tel"    
          id="supplier-fax"     
          name="supplierFax"   
          class="form-control rounded-pill"/>

        <label for="input-none">Tax Number</label>
        <input 
          v-model="supplier.tax_number"    
          type="number"    
          id="supplier-tax-number"     
          name="supplierTaxNumber"   
          class="form-control rounded-pill"/>
        
        <label for="input-none">Type</label>
        <a-select v-model="supplier.type" class="custom-select rounded-pill border-0">   
          <a-select-option value="-None-" selected>-None-</a-select-option>   
          <a-select-option v-for="(s_type, index) in supplier.types" :key="index">{{s_type}}</a-select-option> 
        </a-select>

        <label for="input-none">Code</label>
        <input 
          v-model="supplier.code"    
          type="text"    
          id="supplier-code"     
          name="supplierCode"   
          class="form-control rounded-pill"/>

        <label for="input-none">Status</label>
        <a-select v-model="supplier.supplier_status" class="custom-select rounded-pill border-0">   
          <a-select-option value="-None-" selected>-None-</a-select-option>   
          <a-select-option v-for="(s_status, index) in supplier.supplier_statuses" :key="index">{{s_status}}</a-select-option> 
        </a-select>

        <div class="row mx-0 justify-content-end">
          <b-button variant="primary" class="font-weight-bold m-0">Add</b-button>
        </div>
      </b-col>
    </b-row>  
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
      supplier: {
        name: '',
        address: '',
        province:'-None-',
        provinces: ['Eastern Cape', 'Free State', 'Gauteng', 'Kwa-Zulu Natal', 'Limpopo', 'Mpumalanga', 'Northern Cape', 'North West', 'Western Cape'],
        city: '',
        cities: [],
        tel: '',
        fax: '',
        tax_number: '',
        type: '-None-',
        types: [],
        code: '',
        supplier_status:'-None-',
        supplier_statuses: ['In stock', 'Out of Stock']
      },
      Toast: null,
    }
  },
  methods: {
  }
}
</script>