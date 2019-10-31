<style scoped>
  .tab-pane.card-body{
    padding: 4.4% 5.6% 6.8%;
  }
  .form-control {
    border-radius: 50rem;
    padding: 11px 18px!important;
    font-size: 0.63vw;
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    color: #003449;
    border-color: #ccc;
    margin-bottom: 17px;
    font-family: 'Rubik', sans-serif;
    height:auto!important;
  }
  label {
    font-family: 'Rubik', sans-serif;
    font-size: 0.52vw;
    color: #999999;
    margin-bottom:7px;
    margin-left: 17px;
  }
  .btn-default{
    background: #fff;
    color: #999999;    
    border: none!important;
    padding: 11px 14px 10px;
    font-size: 0.52vw;
    text-transform:uppercase;
    border-radius: 50rem!important;
    line-height:1em;
    margin-left: 0.9%;
    margin-right: 0.9%;
    -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
    -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
    box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  }
  .btn-primary {
    border-radius: 50rem!important;
    text-transform:uppercase;
    font-size: 0.52vw;
    padding: 11px 14px 10px;
    line-height:1em;
    margin-left: 0.9%;
    margin-right: 0.9%;
  }
</style>
<template>
  <div id="api-integration">
    <b-card no-body>
      <b-tabs pills card>
        <b-tab :title="api.name"  v-for="(api,index) in apis" :key="index" :active="(index == 0)? true : false">
          <div class="col-lg-6 px-0">
            <b-container fluid class="px-0">
              <div v-for="(attr,i) in api.attributes"  :key="i">
                <div v-if="attr.key != 'default_dialing_api' && attr.key != 'default_payment_api'">
                  <label for="input-none">{{ attr.display_name }}</label>
                  <b-form-input id="input-none" :state="null" v-model="attr.value"></b-form-input>
                </div>

                <div v-else>
                  <label for="input-valid">{{ attr.display_name }}</label>
                  <b-form-checkbox
                  id="checkbox-1"
                  v-model="attr.value"
                  name="checkbox-1"
                  value="1"
                  unchecked-value="0"
                  >
                  </b-form-checkbox>
                </div>
              </div>

              <div class="row justify-content-end mx-0">
                <b-button class="btn-default ml-0 my-0" @click="updateDetails()">Cancel</b-button>
                <b-button class="btn-primary font-weight-bold mr-0 my-0" @click="updateDetails()">Update</b-button>
              </div>
            </b-container>
          </div>
        </b-tab>
      </b-tabs>
    </b-card>
  </div>
</template>
<script>
  export default {
    components: { 
    },
    mounted() {
      console.log('API Component mounted');
      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
    },
    props: ['apis'],
    data: function(){
      return {
        default_calling_api: '',
        default_payment_api: '',
        Toast: null,
      }
    },
    methods: {
      updateDetails(){
        var vm = this;  
        vm.$Progress.start();
        this.$validator.validateAll().then((result) => {
          if(!result){
            vm.display_name_state = false;
          }else{
              
            vm.display_name_state = true;

            var end_point = '/apis/update';

            axios.post(end_point,this.apis).then(function (response) {
                    
              if(response.data.success == true){                                   
                Fire.$emit('AfterUpdatingApis');
                vm.$Progress.finish();
                vm.Toast.fire({ type: 'success', title: response.data.message });
              }else {
                vm.$Progress.fail();
                vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
              }
            });
          }
        });
      },
      resteRole(){
        this.role.display_name = '';
        this.role.description = '';
        this.role.status = '';
      }
    }
  }
</script>