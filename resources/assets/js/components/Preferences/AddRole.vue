<style scoped>
  .form-control {
    border-radius: 50rem;
    padding: 11px 18px!important;
    font-size: 12px;
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    color: #003449;
    border-color: #999999;
    margin-bottom: 17px;
    font-family: 'Rubik', sans-serif;
  }
  label {
    font-family: 'Rubik', sans-serif;
    font-size: 10px;
    color: #999999;
    margin-bottom:7px;
  }
  .btn-primary {
    border-radius: 50rem!important;
  }
</style>
<template>
  <div class="col-lg-6 px-0">
    <b-container fluid class="px-0">
      <b-row class="mx-0">
        <b-col sm="12" class="px-0">
          <label for="input-none">Role Name</label>
          <b-form-input id="input-none" :state="null" v-model="role.display_name"></b-form-input>

          <label for="input-valid">Role Description</label>
          <b-form-input id="input-valid" :state="null" v-model="role.description"></b-form-input>

          <label for="input-invalid">Role Status</label>
          <a-switch v-model="status"/>
          <label v-if="status == 1">Active</label>
          <label v-if="status == 0">Inactive</label>
          <b-form-select v-model="status" :options="[{ value: null, text: 'Please Select' },{ value: 1, text: 'Active' },{ value: 0, text: 'Disaled' }]" class="form-control"></b-form-select>

          <b-button variant="primary" class="m-0" @click="addRole()">Add Role</b-button>
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

      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
    },
    props: [],
    data: function(){
      return {
        status : null,
        role: {
          display_name : '',
          description : '',
          status : null,
        },
        Toast: null,
      }
    },
    methods: {
      addRole(){
        var vm = this;  
        vm.$Progress.start();
        this.$validator.validateAll().then((result) => {
          if(!result){
            vm.display_name_state = false;
          }else{
              
            vm.display_name_state = true;

            var end_point = '/roles/create';

            axios.post(end_point,this.role).then(function (response) {
                    
              if(response.data.success == true){

                vm.resteRole();
                
                Fire.$emit('DoneAddingRole');
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