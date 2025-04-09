<style scoped>
  .form-control {
    border-radius: 50rem;
    padding: 11px 18px!important;
    font-size: 12px;
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    color: #003449;
    border-color: #ccc;
    margin-bottom: 17px;
    font-family: 'Rubik', sans-serif;
    height:auto!important;
  }
  label {
    font-family: 'Rubik', sans-serif;
    font-size: 10px;
    color: #999999;
    margin-bottom:7px;
    margin-left: 17px;
  }
  .ant-switch {
    margin-left: 17px;
  }
</style>
<template>
  <div class="col-lg-6 px-0">
    <b-container fluid class="px-0">
      <b-row class="mx-0">
        <b-col sm="12" class="px-0">
          <label for="input-none">Role Name</label>
          <b-form-input id="input-none" :state="null" v-model="edit_role.display_name"></b-form-input>
        
          <label for="input-valid">Role Description</label>
          <b-form-input id="input-valid" :state="null" v-model="edit_role.description"></b-form-input>
        
          <label for="input-invalid">Role Status</label>
          <br/>
          <a-switch v-model="edit_role.status"/>
          <label v-if="edit_role.status == 1">Active</label>
          <label v-if="edit_role.status == 0">Inactive</label>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
  export default {
    components: { 
    },
    mounted() {
      console.log('Component mounted');

      this.edit_role = this.role;

      Fire.$on('UpdateRole', (data) => {
        this.updateRole();
      });

      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
      this.edit_role = this.role;
    },
    props: ['role'],
    data: function(){
      return {

        status : 1,
        edit_role: {
          status : 1
        },
        Toast: null,
      }
      },
      methods: {
        updateRole(){
          var vm = this;  
          vm.$Progress.start();
          this.$validator.validateAll().then((result) => {
            if(!result){
              vm.display_name_state = false;
            }else{
                
              vm.display_name_state = true;

              var end_point = '/roles/update';

              axios.post(end_point,vm.edit_role).then(function (response) {
                      
                  if(response.data.success == true){

                    vm.edit_role = response.data.role;
                    vm.$Progress.finish();
                    vm.Toast.fire({ type: 'success', title: response.data.message });
                    
                    Fire.$emit('DoneEditingRole');
                  }else {
                    vm.$Progress.fail();
                    vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                  }
                });
            }
          });
        }
      }
    }
</script>