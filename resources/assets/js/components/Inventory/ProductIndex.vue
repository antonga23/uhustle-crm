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
                <h5 class="d-inline-block">Create a product</h5>
                <img src="images/icons/Field_Add.svg" alt="Add field icon" width="16"/>
              </template>

              <transition name="fade">
                
              </transition>
            </b-tab>

            <b-tab active>
              <template v-slot:title>
                <h5 class="d-inline-block">Category</h5>
              </template>

              <transition name="fade">
                <CategoryListingTable></CategoryListingTable>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 class="d-inline-block">Create a category</h5>
                <img src="images/icons/Field_Add.svg" alt="Add field icon" width="16"/>
              </template>

              <transition name="fade">
                
              </transition>
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
  export default {
    components: { 
      ProductListingTable,
      CategoryListingTable
      
    },
    mounted() {
      
    },
    created: function () {
    },
    props: [
      
    ],
    data: function(){
      return {
        
      }
    },
    methods: {
      
    }
  }
</script>