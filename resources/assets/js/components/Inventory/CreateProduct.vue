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
</style>

<template>
  <div class="createDeal">  
    <h5 class="mb-0">Add Product</h5>

    <b-row class="mx-0">
      <b-col sm="9" class="px-0">
        <b-row class="mx-0">
          <b-col sm="6" class="pl-0">
            <b-row class="mx-0">
              <b-col sm="7" class="pl-0">
                <label for="input-none">Part Type</label>
                <input 
                  v-model="product.part_type"    
                  type="text"    
                  id="part-type"     
                  name="partType"   
                  class="form-control rounded-pill"/>
              </b-col>

              <b-col sm="5" class="pr-0">
                <label for="input-none">Part Code</label>
                <input 
                  v-model="product.part_code"    
                  type="text"    
                  id="part-code"     
                  name="partCode"   
                  class="form-control rounded-pill"/>
              </b-col>

              <b-col sm="12" class="px-0">
                <label for="input-none">Description</label>
                <textarea 
                  v-model="product.description"   
                  id="info"     
                  name="Info"   
                  class="form-control"/>
              </b-col>
            </b-row>
          </b-col>

          <b-col sm="6" class="pr-0">
            <b-row class="mx-0">
              <b-col sm="3" class="pl-0">
                <label for="input-none">Model Number</label>
                <input 
                  v-model="product.model_number"    
                  type="text"    
                  id="model-number"     
                  name="modelNumber"   
                  class="form-control rounded-pill"/>
              </b-col>

              <b-col sm="6">
                <label for="input-none">Select Category</label>
                <a-select v-model="product.product_category" class="custom-select rounded-pill border-0">   
                  <a-select-option value="-None-" selected>-None-</a-select-option>   
                  <a-select-option v-for="(p_category, index) in product.product_categories" :key="index">{{p_category}}</a-select-option> 
                </a-select>
              </b-col>

              <b-col sm="3" class="pl-0">
                <label for="input-none">Current Stock</label>
                <input 
                  v-model="product.stock"    
                  type="text"    
                  id="stock"     
                  name="stock"   
                  class="form-control rounded-pill"/>
              </b-col>
            </b-row>

            <b-row class="mx-0">
              <b-col sm="3" class="pl-0">
                <label for="input-none">Unit Cost</label>
                <input 
                  v-model="product.unit_cost"    
                  type="number"    
                  id="unit-cost"     
                  name="unitCost"   
                  class="form-control rounded-pill"/>
              </b-col>

              <b-col sm="6">
                <label for="input-none">Warehouse</label>
                <a-select v-model="product.supplier" class="custom-select rounded-pill border-0">   
                  <a-select-option value="-None-" selected>-None-</a-select-option>   
                  <a-select-option v-for="(p_supplier, index) in product.product_suppliers" :key="index">{{p_supplier}}</a-select-option> 
                </a-select>
              </b-col>

              <b-col sm="3" class="pl-0">
                <label for="input-none">Reserved Stock</label>
                <input 
                  v-model="product.reserved_stock"    
                  type="number"    
                  id="unit-cost"     
                  name="unitCost"   
                  class="form-control rounded-pill"/>
              </b-col>
            </b-row>
          </b-col>
        </b-row>

        <div class="row mx-0 justify-content-end">
          <div class="col-auto pl-0">
            <b-button class="btn btn-default my-0 ml-0">Cancel</b-button>
          </div>

          <div class="col-auto pl-0">
            <b-button class="btn btn-primary font-weight-bold my-0 mr-0">Save</b-button>
          </div>
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
      product: {
        part_type: '',
        part_code: '',
        model_number: '',
        stock: '',
        unit_cost: '',
        supplier: '-None',
        product_suppliers: [],
        reserved_stock: '',
        product_category: '-None-',
        product_categories: ['Printers, Toners, Cellphones'],
        description: ''
      },
      Toast: null,
    }
  },
  methods: {
  }
}
</script>