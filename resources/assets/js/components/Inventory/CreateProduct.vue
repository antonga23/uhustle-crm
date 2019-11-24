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
h5 {
  font-family: 'Rubik', sans-serif;
  font-size: 0.73vw;
  color: #2D2D2D;
  margin-bottom: 20px;
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
.ant-switch {
  margin-left: 17px;
}
</style>

<template>
  <div class="createProduct">  
    <h5>Add Product</h5>

    <b-row class="mx-0">
      <b-col sm="3" class="pl-0">
        <label for="input-none">Name</label>
        <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
        <input 
          v-validate="'required'"
          v-model="product.name"    
          type="text"    
          id="name"     
          name="Name"   
          class="form-control rounded-pill"/>
      </b-col>

      <b-col sm="6">
        <label for="input-none">Description</label>
        <span id="error" v-show="errors.has('Description')" class="help-block">{{ errors.first('Description') }}</span>
        <input 
          v-model="product.description"   
          id="info"     
          name="Info"   
          class="form-control rounded-pill"/>
      </b-col>

      <b-col sm="3" class="pr-0">
        <label for="input-none">Part Type</label>
        <span id="error" v-show="errors.has('Part Type')" class="help-block">{{ errors.first('Part Type') }}</span>
        <a-select v-validate="'required'" name="Part Type" v-model="product.category_id" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="cat.id" v-for="(cat, index) in categories" :key="index">{{cat.name}}</a-select-option> 
        </a-select>
      </b-col>

      <b-col sm="3" class="pl-0">
        <label for="input-none">Origin Type</label>
        <span id="error" v-show="errors.has('Origin Type')" class="help-block">{{ errors.first('Origin Type') }}</span>
        <a-select v-validate="'required'" name="Origin Type" @change="filterCompaniesByType" v-model="product.origin_type_id" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="type.id" v-for="(type, index) in company_types" :key="index">{{type.name}}</a-select-option> 
        </a-select>
      </b-col>

      <b-col sm="3">
        <label for="input-none">Origin</label>
        <span id="error" v-show="errors.has('Origin')" class="help-block">{{ errors.first('Origin') }}</span>
        <a-select v-validate="'required'" name="Origin" v-model="product.origin_id" class="custom-select rounded-pill border-0" :disabled="!product.origin_type_id">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="company.id" v-for="(company, index) in filtered_companies" :key="index">{{company.name}}</a-select-option> 
        </a-select>
      </b-col>

      <b-col sm="3">
        <label for="input-none">Supplier</label>
        <span id="error" v-show="errors.has('Supplier')" class="help-block">{{ errors.first('Supplier') }}</span>
        <a-select v-validate="'required'" name="Supplier" v-model="product.supplier_id" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="supplier.id" v-for="(supplier, index) in suppliers" :key="index">{{supplier.name}}</a-select-option> 
        </a-select>
      </b-col>

      <b-col sm="3" class="pr-0">
        <label for="input-none">Model Number</label>
        <input
          v-validate="'required'" 
          name="Model Number" 
          v-model="product.model_number"    
          type="text"    
          id="model-number" 
          class="form-control rounded-pill"/>
      </b-col>

      <b-col sm="3" class="pl-0">
        <label for="input-none">Part Code</label>
        <input 
          v-model="product.part_code"    
          type="text"    
          id="part-code"     
          name="partCode"   
          class="form-control rounded-pill"/>
      </b-col>

      <b-col sm="6">
        <label for="input-none">Unit Cost</label>
        <span id="error" v-show="errors.has('Unit Cost')" class="help-block">{{ errors.first('Unit Cost') }}</span>
        <input 
          v-validate="'required'"
          v-model="product.unit_cost"    
          type="number"    
          id="unit_cost"     
          name="Unit Cost"   
          class="form-control rounded-pill"/>
      </b-col>
      
      <b-col sm="3" class="pl-0">
        <label for="input-none">Current Stock</label>
        <input 
          v-validate="'required'"
          v-model="product.current_stock"    
          type="number"    
          id="stock"     
          name="Current Stock"   
          class="form-control rounded-pill"/>
      </b-col>

      <b-col sm="3">
        <label for="input-none">Reserved Stock</label>
        <input 
          @blur="calculateStock"
          v-model="product.reserved_stock"    
          type="number"    
          id="reserved_stock"     
          name="Reserved Stock"   
          class="form-control rounded-pill"/>
      </b-col>

      <b-col sm="3">
        <label for="input-none">Available Stock</label>
        <input 
          disabled
          v-model="product.available_stock"    
          type="number"    
          id="available_stock"     
          name="Available Stock"   
          class="form-control rounded-pill"/>
      </b-col>

      <b-col sm="3" class="pr-0">
        <label for="input-none">Tax Type</label>
        <a-select v-validate="'required'" name="Tax Type" v-model="product.tax_type" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="type" v-for="(type, index) in tax_types" :key="index">{{type}}</a-select-option> 
        </a-select>
      </b-col>
    </b-row>

    <b-row class="mx-0">
      <b-col sm="auto" class="px-0">
        <label for="input-none" class="d-block">Status</label>
        <span id="error" v-show="errors.has('Status')" class="help-block">{{ errors.first('Status') }}</span>
        <a-switch v-model="product.status" v-validate="'required'" name="Status"/>
        <label v-if="product.status == 1 || product.status == true">Active</label>
        <label v-if="product.status == 0 || product.status == false">Inactive</label>
      </b-col>
    </b-row>  

    <div class="row mx-0 justify-content-end">
      <div class="col-auto pl-0">
        <b-button class="btn btn-default my-0 ml-0" @click="clearProduct">Cancel</b-button>
      </div>

      <div class="col-auto pr-0">
        <b-button class="btn btn-primary font-weight-bold my-0 mr-0" @click="createProduct">Save</b-button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {
    console.log('Create Product Component Mounted');

    var vm = this;

    vm.getSelectOptions();

    vm.filtered_companies = vm.companies;

    this.Toast = this.$swal.mixin({ 
      toast: true, 
      position: 'top-end', 
      showConfirmButton: false, 
      timer: 3000 
    });
  },
  created: function () {},
  props: ['role'],
  data: function(){
    return { 
      product: {
        supplier_id: '',
        category_id: '',
        origin_type_id: '',
        origin_id: '',
        part_code: 'MIT-12535455654GNL',
        model_number: 'Z12535455654GNL',
        name: '',
        description: 'ECOSYS M3645dn 222-2464545/64HZ',
        unit_cost: '7259.40',
        rate: '',
        current_stock: '500',
        reserved_stock: 0,
        available_stock: '',
        tax_type: '',
        status: 1,
      },
      suppliers: [],
      companies: [],
      filtered_companies: [],
      categories: [],
      company_types: [],
      tax_types:1,
      Toast: null,
    }
  },
  methods: {
    clearProduct(){
      this.product.supplier_id = '';
      this.product.category_id = '';
      this.product.origin_type_id = '';
      this.product.origin_id = '';
      this.product.part_code = '';
      this.product.name = '';
      this.product.description = '';
      this.product.unit_cost = '';
      this.product.rate = '';
      this.product.current_stock = '';
      this.product.reserved_stock = 0;
      this.product.available_stock = '';
      this.product.tax_type = '';
      this.product.status = '';
    },
    getSelectOptions(){
      var vm = this;
      axios.get('/products/get-categories').then(function (response) {
        vm.categories = response.data.categories;
        vm.tax_types = response.data.tax_types;
      });
      axios.get('/company/get-types').then(function (response) {
        vm.company_types = response.data.company_types;
      });
      axios.get('/company/get-all').then(function (response) {
        vm.companies = response.data.companies;
        vm.suppliers = vm.companies.filter( (item) => {
          return item.type_id == 4;
        });
      });
    },
    createProduct(){
      var vm = this; 
      vm.$validator.validateAll().then((result) => { 
        if (!result) {} else { 
          axios.post('/products/create', { 
            product: vm.product,
          }).then(function(response) { 

            if (response.data.success === true) { 
              vm.Toast.fire({ 
                type: 'success', 
                title: response.data.message 
              }); 

              Fire.$emit('ProductCreated', {
                product : response.data.product
              }); 
              vm.clearProduct();
              vm.$Progress.finish(); 
            } else { 
              vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
              vm.$Progress.fail(); 
            } 
          }); 
        } 
      });
    },
    filterCompaniesByType(){
      var vm = this;
      vm.filtered_companies = vm.companies.filter( (item) => {
        return item.type_id == vm.product.origin_type_id;
      });
    },
    calculateStock(){
      vm.product.available_stock = vm.product.current_stock - vm.product.reserved_stock;
    }
    
  }
}
</script>