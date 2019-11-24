<template>
  <div class='table-container'>
    <b-table 
      class="companies-listing" 
      sticky-header="190px" 
      responsive 
      :items="companiesListing"
      :per-page="perPage"
      :current-page="currentPage"
    >
      <template slot="name" slot-scope="data">   
        <input
          @blur="updateCompany(data.item)"
          v-model="data.item.name"     
          type="text"    
          id="deal-name"     
          name="DealName"   
          class="form-control border-0 rounded-pill"/> 
      </template> 

      <template slot="address" slot-scope="data">   
        <input
          @blur="updateCompany(data.item)"
          v-model="data.item.address"     
          type="text"    
          id="deal-name"     
          name="DealName"   
          class="form-control border-0 rounded-pill"/> 
      </template>

      <template slot="province" slot-scope="data">   
        <a-select 
          @change="changeProvince(data.item.province)" 
          name="Province" 
          v-validate="'required'"
          v-model="data.item.province" 
          class="custom-select rounded-pill border-0"
        >   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option 
            :value="s_province.id" 
            v-for="(s_province, index) in provinces" 
            :key="index"
          >{{s_province.name}}</a-select-option> 
        </a-select>
      </template>

      <template slot="city" slot-scope="data">   
        <a-select 
          @change="updateCompany(data.item)" 
          name="City" 
          v-validate="'required'" 
          v-model="data.item.city" 
          class="custom-select rounded-pill border-0"
        >   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option 
            :value="s_city.id" 
            v-for="(s_city, index) in filtered_cities" 
            :key="index"
          >{{s_city.name}}</a-select-option>
        </a-select>
      </template>

      <template slot="type_id" slot-scope="data">   
        <a-select 
          @change="updateCompany(data.item)" 
          name="Type" 
          v-validate="'required'" 
          v-model="data.item.type_id" 
          class="custom-select rounded-pill border-0"
        >   
          <a-select-option value="" selected>-None-</a-select-option>   
          <a-select-option 
            :value="s_type.id" 
            v-for="(s_type, index) in company_types" 
            :key="index"
          >{{s_type.name}}</a-select-option> 
        </a-select>
      </template>>

      <template slot="status" slot-scope="data">  
        <a-switch 
          @change="updateCompany(data.item)" 
          v-model="data.item.status" 
          v-validate="'required'" 
          name="Status" 
          class="ml-3 mr-2"/>
        <label v-if="data.item.status == 1 || data.item.status == true">Active</label>
        <label v-if="data.item.status == 0 || data.item.status == false">Inactive</label>
      </template>     

      <template slot="tell" slot-scope="data">   
        <input
          @blur="updateCompany(data.item)"
          v-model="data.item.tell"     
          type="text"    
          id="fax"     
          name="fax"   
          class="form-control border-0 rounded-pill"/> 
      </template>

      <template slot="fax" slot-scope="data">   
        <input
          @blur="updateCompany(data.item)"
          v-model="data.item.fax"     
          type="text"    
          id="fax"     
          name="fax"   
          class="form-control border-0 rounded-pill"/> 
      </template>

      <template slot="email" slot-scope="data">   
        <input
          @blur="updateCompany(data.item)"
          v-model="data.item.email"     
          type="text"    
          id="fax"     
          name="fax"   
          class="form-control border-0 rounded-pill"/> 
      </template>  

      <template slot="tax_number" slot-scope="data">   
        <input
          @blur="updateCompany(data.item)"
          v-model="data.item.fax"     
          type="text"    
          id="tax_number"     
          name="tax number"   
          class="form-control border-0 rounded-pill"/> 
      </template> 
      
      <template slot="code" slot-scope="data">   
        <input
          @blur="updateCompany(data.item)"
          v-model="data.item.code"     
          type="text"    
          id="code"     
          name="code"   
          class="form-control border-0 rounded-pill"/> 
      </template> 
    </b-table>

    <b-pagination
      class="companies-pagination"
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
      vm.company_types = JSON.parse(vm.prop_company_types);
      vm.provinces = JSON.parse(vm.prop_provinces);
      vm.cities = JSON.parse(vm.prop_cities);
      vm.filtered_cities = vm.cities;

      Fire.$on('CompanyCreated', function(data){
        vm.companiesListing = [];
        vm.companies.push(data.company);

        vm.companies.map( (company)=> {
          vm.companiesListing.push({
            id: company.id,
            name: company.name,
            address: company.address,
            province: company.province,
            city: company.city,
            tell: company.tell,
            fax: company.fax,
            email: company.email,
            tax_number: company.tax_number,
            type_id: company.type_id,
            code: company.code,
            status: company.status,
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
    props: [
      'prop_company_types',
      'prop_provinces',
      'prop_cities',
    ],
    data() {
      return {
        company_types: [],
        provinces: [],
        filtered_cities: [],
        cities: [],
        companies:[],
        companiesListing: [],
        Toast: null,
        perPage: 20, 
        currentPage: 1,
      }
    },

    computed: {
      rows() {
        return this.companiesListing.length
      }
    },

    methods: {
      changeProvince(province_id){
        var vm = this;
        vm.filtered_cities = vm.cities.filter( (city) => {
          return city.province_id == province_id;
        });
      },
      getCompanies(companies = null){
        var vm = this;

        if(companies !== null){
          vm.companies = companies;
        }else{ 

          axios.get('/company/get-all').then(function (response) {

            vm.companies = response.data.companies;

            vm.companies.map( (company)=> {
              vm.companiesListing.push({
                id: company.id,
                name: company.name,
                address: company.address,
                province: company.province,
                city: company.city,
                tell: company.tell,
                fax: company.fax,
                email: company.email,
                tax_number: company.tax_number,
                type_id: company.type_id,
                code: company.code,
                status: company.status,
              })
            });
          });
        }
      },
      updateCompany(item){
        var vm = this;
        axios.post('/company/update', { 
            company: item,
          }).then(function(response) { 

            if (response.data.success === true) { 
              vm.Toast.fire({ 
                type: 'success', 
                title: response.data.message 
              }); 

              vm.getCompanies();

              vm.$Progress.finish(); 
            } else { 
              vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
              vm.$Progress.fail(); 
            } 
          }); 
        } 
      },
      created(){
        this.getCompanies();
      }
  }
</script>