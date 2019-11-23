<template>
     <div class='table-container'>
        <b-table class="category-listing" :items="categoryListing">

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
            <a-select @change="updateCat(data.item)" name="Province" v-validate="'required'" v-model="data.item.status" class="custom-select rounded-pill border-0">   
              <a-select-option value="" selected>-None-</a-select-option>   
              <a-select-option :value="s_status.value" v-for="(s_status, index) in category_statuses" :key="index">{{s_status.text}}</a-select-option> 
            </a-select>
          </template>  

        </b-table>
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
        Toas: null
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
    }
  }
</script>