<style scoped>
    .form-control {
        border-radius: 25px;
        padding: 7px;
        height: 28px !important;
        font-size: 9px;
    }
</style>
<template>
    <div class="col-lg-9">
        <b-container fluid>
            <b-row class="my-1">
                <b-col sm="2">
                <label for="input-none">Role Name</label>
                </b-col>
                <b-col sm="9">
                <b-form-input id="input-none" :state="null" v-model="edit_role.display_name"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                <label for="input-valid">Role Description</label>
                </b-col>
                <b-col sm="9">
                <b-form-input id="input-valid" :state="null" v-model="edit_role.description"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                    <label for="input-invalid">Role Status</label>
                </b-col>
                <b-col sm="9">
                    <a-switch v-model="edit_role.status"/>
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