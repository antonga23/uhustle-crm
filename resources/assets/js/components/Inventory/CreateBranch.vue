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
h5 {
  font-family: 'Rubik', sans-serif;
  font-size: 0.73vw;
  color: #2D2D2D;
  margin-bottom: 20px;
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
  <div class="createDeal">  
    <h5>Add Company</h5>
    <b-row class="mx-0">
      <b-col sm="7" class="px-0">
        <b-row class="mx-0">
          <b-col sm="7" class="pl-0">
            <label for="input-none">Company Type</label>
            <span id="error" v-show="errors.has('Type')" class="help-block">{{ errors.first('Type') }}</span>
            <a-select  v-validate="'required'" name="Type" v-model="branch.type_id" class="custom-select rounded-pill border-0">   
              <a-select-option value="">-None-</a-select-option>   
              <a-select-option :value="s_type.id" v-for="(s_type, index) in company_types" :key="index">{{s_type.name}}</a-select-option> 
            </a-select>
          
            <label for="input-none">Name</label>
            <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
            <input 
              v-validate="'required'"
              v-model="branch.name"    
              type="text"    
              id="name"     
              name="Name"   
              class="form-control rounded-pill"/>

            <label for="input-none">Select Province</label>
            <span id="error" v-show="errors.has('Province')" class="help-block" >{{ errors.first('Province') }}</span>
            <a-select @change="changeProvince()" name="Province" v-validate="'required'" v-model="branch.province" class="custom-select rounded-pill border-0">   
              <a-select-option value="" selected>-None-</a-select-option>   
              <a-select-option :value="s_province.id" v-for="(s_province, index) in provinces" :key="index">{{s_province.name}}</a-select-option> 
            </a-select>

            <span id="error" v-show="errors.has('City')" class="help-block">{{ errors.first('City') }}</span>
            <label for="input-none">Select City</label>
            <a-select name="City" v-validate="'required'" v-model="branch.city" class="custom-select rounded-pill border-0">   
              <a-select-option value="" selected>-None-</a-select-option>   
              <a-select-option :value="s_city.id" v-for="(s_city, index) in filtered_cities" :key="index">{{s_city.name}}</a-select-option> 
            </a-select>

            <label for="input-none">Address</label>
            <span id="error" v-show="errors.has('Address')" class="help-block">{{ errors.first('Address') }}</span>
            <textarea
              name="Address" 
              v-validate="'required'"  
              v-model="branch.address"   
              id="info"     
              class="form-control"/>
          </b-col>

          <b-col sm="5">
            <label for="input-none">Telephone no.</label>
            <span id="error" v-show="errors.has('Tel')" class="help-block">{{ errors.first('Tel') }}</span>
            <input 
              v-validate="'required|numeric'" 
              v-model="branch.tell"    
              type="tell"    
              id="branch-tell"     
              name="Tel"   
              class="form-control rounded-pill"/>

            <label for="input-none">Fax No.</label>
            <input 
              v-model="branch.fax"    
              type="tell"    
              id="branch-fax"     
              name="branchFax"   
              class="form-control rounded-pill"/>

            <label for="input-none">Tax Number</label>
            <span id="error" v-show="errors.has('Tax Number')" class="help-block">{{ errors.first('Tax Number') }}</span>
            <input
              v-validate="'required|numeric'"  
              v-model="branch.tax_number"    
              type="text"    
              id="branch-tax-number"     
              name="Tax Number"   
              class="form-control rounded-pill"/>
              
            <label for="input-none">Code</label>
            <input 
              v-model="branch.code"    
              type="text"    
              id="branch-code"     
              name="branchCode"   
              class="form-control rounded-pill"/>

            <label for="input-none" class="w-100">Status</label>
            <span id="error" v-show="errors.has('Status')" class="help-block">{{ errors.first('Status') }}</span>
            <a-switch v-model="branch.status" v-validate="'required'" name="Status"/>
            <label v-if="branch.status == 1 || branch.status == true">Active</label>
            <label v-if="branch.status == 0 || branch.status == false">Inactive</label>
          </b-col>
        </b-row>

        <div class="row mx-0 justify-content-end">
          <div class="col-auto pl-0">
            <b-button class="btn btn-default my-0 ml-0" @click="cancelCreate">Cancel</b-button>
          </div>

          <div class="col-auto pl-0">
            <b-button class="btn btn-primary font-weight-bold my-0 mr-0" @click="createCompany">Save</b-button>
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
    this.company_types = JSON.parse(this.prop_company_types);
    this.provinces = JSON.parse(this.prop_provinces);
    this.cities = JSON.parse(this.prop_cities);
    this.filtered_cities = this.cities;

    this.Toast = this.$swal.mixin({ 
      toast: true, 
      position: 'top-end', 
      showConfirmButton: false, 
      timer: 3000 
    }); 
  },
  created: function () {},
  props: [
    'prop_company_types',
    'prop_provinces',
    'prop_cities',
  ],
  data: function(){
    return { 
      branch: {
        name: '',
        address: '',
        province_id:'',
        city: '',
        tell: '',
        fax: '',
        tax_number: '',
        type_id: '',
        code: '',
        status: true,
      },
      company_types: [],
      provinces: [],
      filtered_cities: [],
      cities: [],
      Toast: null,
    }
  },
  methods: {
    changeProvince(){
      var vm = this;
      vm.filtered_cities = vm.cities.filter( (city) => {
        return city.province_id == vm.branch.province;
      });
    },
    createCompany(){ 
        var vm = this; 
        vm.$validator.validateAll().then((result) => { 
          if (!result) {} else { 
            axios.post('/company/create', { 
              company: vm.branch,
            }).then(function(response) { 

              if (response.data.success === true) { 
                vm.Toast.fire({ 
                  type: 'success', 
                  title: response.data.message 
                }); 

                Fire.$emit('CompanyCreated', {
                  company : response.data.company
                }); 
                vm.cancelCreate();
                vm.$Progress.finish(); 
              } else { 
                vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
                vm.$Progress.fail(); 
              } 
            }); 
          } 
        });
    },
    cancelCreate(){
      this.branch.name = '';
      this.branch.address = '';
      this.branch.province_id = '';
      this.branch.city = '';
      this.branch.tell = '';
      this.branch.fax = '';
      this.branch.tax_number = '';
      this.branch.type_id = '';
      this.branch.code = '';
      this.branch.status = '';
    }
  }
}
</script>