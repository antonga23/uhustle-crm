<template>
  <div class='table-container'>
    <b-table class="category-listing" :items="categoryListing" responsive sticky-header :per-page="perPage" :current-page="currentPage">

      <template slot="name" slot-scope="data">   
        <input
          @blur="updateCat(data.item)"
          v-model="data.item.name"     
          type="text"    
          id="deal-name"     
          name="DealName"   
          class="form-control border-0 rounded-pill"/> 
      </template>

      <template slot="description" slot-scope="data">   
        <input
          @blur="updateCat(data.item)"
          v-model="data.item.description"     
          type="text"    
          id="deal-name"     
          name="DealName"   
          class="form-control border-0 rounded-pill"/> 
      </template>


      <template slot="status" slot-scope="data">   
        <a-switch 
          @change="updateCat(data.item)"  
          v-model="data.item.status" 
          v-validate="'required'" 
          name="Status" 
          class="ml-3 mr-2"/>
        <label v-if="data.item.status == 1 || data.item.status == true">Active</label>
        <label v-if="data.item.status == 0 || data.item.status == false">Inactive</label>
        <!-- <a-select @change="updateCat(data.item)" name="Province" v-validate="'required'" v-model="data.item.status" class="custom-select rounded-pill border-0">   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option :value="s_status.value" v-for="(s_status, index) in category_statuses" :key="index">{{s_status.text}}</a-select-option> 
        </a-select> -->
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
    mounted(){
      var vm = this;

      Fire.$on('CategoryCreated', function(data){

        vm.categoryListing = [];

        vm.categories.push(data.category);

        vm.categories.map( (category)=> {
          vm.categoryListing.push({
            id: category.id,
            name: category.name,
            description: category.description,
            status: category.status,
          })
        });
        
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
        categories: [],
        categoryListing: [],
        category_statuses:[
          {
            value: 1,
            text: 'Active',
          },
          {
            value: 0,
            text: 'Disabled',
          }
        ],
        Toast: null,
        perPage: 20, 
        currentPage: 1
      }
    },
    methods:{
      getCategories(companies = null){
        var vm = this;
          axios.get('/products/get-categories').then(function (response) {

          vm.categories = response.data.categories;

          vm.categories.map( (category)=> {
            vm.categoryListing.push({
              id: category.id,
              name: category.name,
              description: category.description,
              status: category.status,
            })
          });
        });
      },
      updateCat(item){
        var vm = this;
        axios.post('/products/update-category', { 
            category: item,
          }).then(function(response) { 

            if (response.data.success === true) {

              vm.Toast.fire({ 
                type: 'success', 
                title: response.data.message 
              }); 

              vm.categories = response.data.categories;
              vm.categoryListing = [];
              vm.categories.map( (category)=> {
                vm.categoryListing.push({
                  id: category.id,
                  name: category.name,
                  description: category.description,
                  status: category.status,
                })
              });

              vm.$Progress.finish(); 
            } else { 
              vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
              vm.$Progress.fail(); 
            } 
        });  
      }
    },
    created() {
      this.getCategories()
    },
    computed: {
      rows() {
        return this.categoryListing.length
      }
    }
  }
</script>

<style scoped>
.category-listing {
  margin-bottom: 20px;
}
</style>