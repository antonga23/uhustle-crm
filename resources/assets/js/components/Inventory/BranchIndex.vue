<style scoped>
.trans-tabs {
  padding-left:5.2%;
  padding-right:5.2%;
}
.tab-pane.card-body {
  padding:4.4% 5.6% 6.8%;
}
.branches .tab-pane .row{
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
.tab-pane.card-body {
  padding:4.4% 5.6% 6.8%;
}
</style>

<template>
  <div id="branches">
    <div class="row mx-0 branches-tabs">
      <div class="col-lg-12 px-0">
        <b-card no-body>
          <b-tabs card>
            <b-tab active class="branch-table">
              <template v-slot:title>
                <h5 class="d-inline-block mb-0">Companies</h5>
              </template>

              <transition name="fade">
                <BranchesListingTable :prop_provinces="provinces" :prop_cities="cities" :prop_company_types="company_types"></BranchesListingTable>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 class="d-inline-block mb-0">Create a Company</h5>
                <img src="images/icons/Field_Add.svg" alt="Add field icon" width="16" class="d-none"/>
              </template>

              <transition name="fade">
                <create-branch :prop_provinces="provinces" :prop_cities="cities" :prop_company_types="company_types"/>
              </transition>
            </b-tab>
          </b-tabs>
        </b-card>
      </div>
    </div>
  </div>
</template>

<script>
  import BranchesListingTable from "../DataTables/BranchesListingTable";
  import CreateBranch from './CreateBranch';
  export default {
    components: { 
      BranchesListingTable,
      CreateBranch
    },
    mounted() {
      
    },
    created: function () {
    },
    props: [
      'company_types',
      'provinces',
      'cities',
    ],
    data: function(){
      return {
        
      }
    },
    methods: {
      listCompanies(){

      }
    }
  }
</script>
