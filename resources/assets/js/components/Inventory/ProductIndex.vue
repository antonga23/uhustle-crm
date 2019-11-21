<style scoped>
.trans-tabs {
  padding-left:5.2%;
  padding-right:5.2%;
}
.tab-pane.card-body {
  padding:4.4% 5.6% 6.8%;
}
.nav-link.active img {
  display:inline-block!important;
  margin-left: 20px;
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
</style>

<template>
  <div id="branches">
    <div class="row mx-0 productss-tabs">
      <div class="col-lg-12 px-0">
        <b-card no-body>
          <b-tabs card>
            <b-tab active>
              <template v-slot:title>
                <h5 class="d-inline-block">Products</h5>
              </template>

              <transition name="fade">
                <ProductListingTable></ProductListingTable>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 class="d-inline-block">Category</h5>
              </template>

              <transition name="fade">
                <CategoryListingTable></CategoryListingTable>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <img src="images/icons/Field_Add.svg" alt="Add field icon" width="16"/>
              </template>

              <div class="row mx-0">
                <div class="col-6 px-0 mb-5">
                  <a-select v-model="create_new" class="custom-select rounded-pill border-0">
                    <a-select-option value="-Select-">Select</a-select-option>  
                    <a-select-option value="category">Category</a-select-option>   
                    <a-select-option value="product">Product</a-select-option> 
                  </a-select>
                </div>
              </div>

              <div class="create-category" v-if="create_new === 'category'">
                <create-category/>
              </div>

              <div class="create-products" v-if="create_new === 'product'">
                <create-product/>
              </div>
            </b-tab>
          </b-tabs>
        </b-card>
      </div>
    </div>
  </div>
</template>

<script>
import ProductListingTable from "../DataTables/ProductListingTable";
import CategoryListingTable from "../DataTables/CategoryListingTable";
import CreateCategory from "./CreateCategory";
import CreateProduct from "./CreateProduct";
  export default {
    components: { 
      ProductListingTable,
      CategoryListingTable,
      CreateProduct,
      CreateCategory
    },
    mounted() {
      
    },
    created: function () {
    },
    props: [
      
    ],
    data: function(){
      return {
        create_new: '-Select-'
      }
    },
    methods: {
      showModulePreferences(active_module, action, in_module){
        Fire.$emit(action, { 'module' : in_module });
        this.editing_module = in_module;
        this.active_module_name = active_module;
        this.active_module_action = action;
      },
    }
  }
</script>