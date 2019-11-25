<template>
  <div class="table-container">
    <b-table class="product-listing" :items="productListing" :per-page="perPage" :current-page="currentPage">
      <template slot="name"  slot-scope="data">
        <input
          :disabled="(mode == 'view')? true : false"
          @blur="updateProduct(data.item)" 
          v-model="data.item.name"    
          type="text"    
          id="name"     
          name="Name"   
          class="form-control rounded-pill  border-0"/>
      </template>

      <template slot="description"  slot-scope="data">
        <input 
          :disabled="(mode == 'view')? true : false"
          @blur="updateProduct(data.item)" 
          v-model="data.item.description"   
          id="description"     
          name="description"   
          class="form-control rounded-pill border-0"/>
      </template>

      <template slot="category_id" slot-scope="data">
        <a-select :disabled="(mode == 'view')? true : false" @change="updateProduct(data.item)"  name="Part Type" v-model="data.item.category_id" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="cat.id" v-for="(cat, index) in categories" :key="index">{{cat.name}}</a-select-option> 
        </a-select>
      </template>

      <template slot="origin_type_id" slot-scope="data">
        <a-select :disabled="(mode == 'view')? true : false" name="Origin Type" @change="filterCompaniesByType(data.item.origin_type_id)" v-model="data.item.origin_type_id" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="type.id" v-for="(type, index) in company_types" :key="index">{{type.name}}</a-select-option> 
        </a-select>
      </template>

      <template slot="origin_id" slot-scope="data">
        <a-select :disabled="(mode == 'view')? true : false" @change="updateProduct(data.item)" name="Origin" v-model="data.item.origin_id" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="company.id" v-for="(company, index) in filtered_companies" :key="index">{{company.name}}</a-select-option> 
        </a-select>
      </template>

      <template slot="supplier_id" slot-scope="data">
        <a-select :disabled="(mode == 'view')? true : false" @change="updateProduct(data.item)" name="Supplier" v-model="data.item.supplier_id" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="supplier.id" v-for="(supplier, index) in suppliers" :key="index">{{supplier.name}}</a-select-option> 
        </a-select>
      </template>

      <template slot="model_number" slot-scope="data">
        <input
          :disabled="(mode == 'view')? true : false"
          @blur="updateProduct(data.item)"
          v-validate="'required'" 
          name="Model Number" 
          v-model="data.item.model_number"    
          type="text"    
          id="model-number" 
          class="form-control rounded-pill  border-0"/>
      </template>

      <template slot="part_code" slot-scope="data">
        <input
          :disabled="(mode == 'view')? true : false" 
          @blur="updateProduct(data.item)"
          v-model="data.item.part_code"    
          type="text"    
          id="part-code"     
          name="partCode"   
          class="form-control rounded-pill border-0"/>
      </template>

      <template slot="unit_cost" slot-scope="data">
        <input
          :disabled="(mode == 'view')? true : false" 
          @blur="updateProduct(data.item)"
          v-validate="'required'"
          v-model="data.item.unit_cost"    
          type="number"    
          id="unit-cost"     
          name="unitCost"   
          class="form-control rounded-pill border-0"/>
      </template>

      <template slot="current_stock" slot-scope="data">
        <input 
          :disabled="(mode == 'view')? true : false"
          @blur="updateProduct(data.item)"
          v-validate="'required'"
          v-model="data.item.current_stock"    
          type="number"    
          id="stock"     
          name="Current Stock"   
          class="form-control rounded-pill border-0"/>
      </template>

      <template slot="reserved_stock" slot-scope="data">
        <input
          :disabled="(mode == 'view')? true : false"
          @blur="updateProduct(data.item)" 
          v-validate="'required'"
          v-model="data.item.reserved_stock"    
          type="number"    
          id="stock"     
          name="Current Stock"   
          class="form-control rounded-pill border-0"/>
      </template>

      <template slot="available_stock" slot-scope="data">
        <input
          disabled
          v-model="data.item.available_stock"    
          type="number"    
          id="stock"     
          name="Current Stock"   
          class="form-control rounded-pill border-0"/>
      </template>

      <template slot="tax_type" slot-scope="data">
        <a-select :disabled="(mode == 'view')? true : false" @change="updateProduct(data.item)" v-validate="'required'" name="Tax Type" v-model="data.item.tax_type" class="custom-select rounded-pill border-0">   
          <a-select-option value="">-None-</a-select-option>   
          <a-select-option :value="type.id" v-for="(type, index) in tax_types" :key="index">{{type.tax_type}}</a-select-option> 
        </a-select>
      </template>

      <template slot="status" slot-scope="data">
        <a-switch 
          :disabled="(mode == 'view')? true : false"
          @change="updateProduct(data.item)"  
          v-model="data.item.status" 
          v-validate="'required'" 
          name="Status" 
          class="ml-3 mr-2"/>
        <label v-if="data.item.status == 1 || data.item.status == true">Active</label>
        <label v-if="data.item.status == 0 || data.item.status == false">Inactive</label>
        <!-- <a-select :disabled="(mode == 'view')? true : false" @change="updateProduct(data.item)" v-validate="'required'" name="Status" v-model="data.item.status" class="custom-select rounded-pill border-0">   
          <a-select-option value="">-None-</a-select-option>   
          <a-select-option :value="1">Active</a-select-option> 
          <a-select-option :value="0">Disabled</a-select-option> 
        </a-select> -->
      </template>

      <template slot="actions" slot-scope="data" v-if="mode == 'view' && (data.item.available_stock > 0 && data.item.current_stock > 0)">
        <span class="actions">
          <!-- <a class="Edit" href="#"  title="Edit" ></a> -->
          <!-- <a class="Delete" href="#" title="Delete"></a> -->
          <a class="Order-button" href="#" title="Order" @click="startOrder(data.item)">Order</a>
        </span>
      </template>
    </b-table>

    <b-pagination
      class="products-pagination"
      v-model="currentPage"
      :per-page="perPage"
      align="center"
      size="sm"
      :total-rows="rows"
    ></b-pagination>
  </div>
</template>
<script>
export default {
  props: ['role', 'mode'],
  mounted(){
    var vm = this;
    vm.getSelectOptions();
    
    vm.getProducts();

    Fire.$on('ProductCreated', function(data){
     
      vm.productListing = [];

      vm.products.push(data.product);

      vm.mapProducts(vm.products);

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
      products: [],
      perPage: 20, 
      currentPage: 1,
      productListing: [],
      suppliers: [],
      companies: [],
      filtered_companies: [],
      categories: [],
      company_types: [],
      tax_types:[],
      Toas: null
    };
  },
  methods:{
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
        vm.filtered_companies = vm.companies;
        vm.suppliers = vm.companies.filter( (item) => {
          return item.type_id == 4;
        });
      });
    },
    getProducts(companies = null){
      var vm = this;
      var endpoint = '';
      if(this.mode == 'view'){
        endpoint = '/products/get-list';
      }else{
        endpoint = '/products/get-all';
      }
      axios.get(endpoint).then(function (response) {

        vm.products = response.data.products;

        vm.mapProducts(vm.products);

      });
    },
    mapProducts(products){
      var vm = this;
      vm.products = products;
      if(vm.mode == 'view'){
        vm.products.map( (product)=> {
          vm.productListing.push({
              id: product.id,
              name: product.name,
              description: product.description,
              supplier_id: product.supplier_id,
              category_id: product.category_id,
              origin_type_id: product.origin_type_id,
              origin_id: product.origin_id,
              part_code: product.part_code,
              model_number: product.model_number,
              unit_cost: product.unit_cost,
              current_stock: product.current_stock,
              reserved_stock: product.reserved_stock,
              available_stock: product.current_stock - product.reserved_stock,
              tax_type: product.tax_type,
              status: product.status,
              model_number: product.model_number,
              actions: ""
            })
        });
      }else{
        vm.products.map( (product)=> {
          vm.productListing.push({
              id: product.id,
              name: product.name,
              description: product.description,
              supplier_id: product.supplier_id,
              category_id: product.category_id,
              origin_type_id: product.origin_type_id,
              origin_id: product.origin_id,
              part_code: product.part_code,
              model_number: product.model_number,
              unit_cost: product.unit_cost,
              current_stock: product.current_stock,
              reserved_stock: product.reserved_stock,
              available_stock: product.current_stock - product.reserved_stock,
              tax_type: product.tax_type,
              status: product.status,
              model_number: product.model_number,
            })
        });
      }
    },
    updateProduct(product){
        var vm = this;
        axios.post('/products/update', { 
            product: product,
          }).then(function(response) { 

            if (response.data.success === true) {

              vm.Toast.fire({ 
                type: 'success', 
                title: response.data.message 
              }); 

              vm.products = response.data.products;

              vm.productListing = [];

              vm.mapProducts(vm.products);

              vm.$Progress.finish(); 
            } else { 
              vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
              vm.$Progress.fail(); 
            } 
        });  
      },
      filterCompaniesByType(origin_type_id){
        var vm = this;
        vm.filtered_companies = vm.companies.filter( (item) => {
          return item.type_id == origin_type_id;
        });
      },
      startOrder(item){
        Fire.$emit('StartOrder', { product: item } );
      }
    },
    computed: {
      rows() {
        return this.productListing.length
      }
    }
};
</script>
 