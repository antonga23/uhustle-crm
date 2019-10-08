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
                <b-form-input id="input-none" :state="null" v-model="role.display_name"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                <label for="input-valid">Role Description</label>
                </b-col>
                <b-col sm="9">
                <b-form-input id="input-valid" :state="null" v-model="role.description"></b-form-input>
                </b-col>
            </b-row>

            <b-row class="my-1">
                <b-col sm="2">
                    <label for="input-invalid">Role Status</label>
                </b-col>
                <b-col sm="9">
                    <b-form-select v-model="role.status" :options="[{ value: '', text: 'Please Select' },{ value: 1, text: 'Active' },{ value: 0, text: 'Disaled' }]" class="form-control"></b-form-select>
                </b-col>
            </b-row>

            <!-- <b-row class="my-1">
                <b-col sm="9">
                    <b-button variant="default" @click="updateRole()">Update Role</b-button>
                </b-col>
            </b-row> -->
        </b-container>
    </div>
</template>

<script>
    export default {
        components: { 
        },
        mounted() {
            console.log('Component mounted');

            Fire.$on('UpdateRole', (data) => {
                this.role = data.role;
                this.updateRole();
                console.log(data);
            });

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        created: function () {
        },
        props: ['role'],
        data: function(){
            return {
                edit_role: {
                    display_name : '',
                    description : '',
                    status : '',
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

                            axios.post(end_point,this.role).then(function (response) {
                                    
                                if(response.data.success == true){

                                    vm.role = response.data.role;
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