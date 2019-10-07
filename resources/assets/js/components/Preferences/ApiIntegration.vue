<style scoped>
    .form-control {
        border-radius: 25px;
        padding: 7px;
        height: 28px !important;
        font-size: 9px;
    }
</style>
<template>
    <div>
        <b-card no-body>
            <b-tabs pills card>
                <b-tab :title="api.name"  v-for="(api,index) in apis" :key="index" :active="(index == 0)? true : false">
                    <div class="col-lg-9">
                        <b-container fluid>
                            <div  v-for="(attr,i) in api.attributes"  :key="i">
                                <b-row class="my-1"  v-if="attr.key != 'default_dialing_api' && attr.key != 'default_payment_api'">
                                    <b-col sm="3">
                                    <label for="input-none">{{ attr.display_name }}</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input id="input-none" :state="null" v-model="attr.value"></b-form-input>
                                    </b-col>   
                                </b-row>                         
                                <b-row class="my-1" v-else>
                                    <b-col sm="3">
                                    <label for="input-valid">{{ attr.display_name }}</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-checkbox
                                        id="checkbox-1"
                                        v-model="attr.value"
                                        name="checkbox-1"
                                        value="1"
                                        unchecked-value="0"
                                        >
                                        </b-form-checkbox>
                                    </b-col>
                                </b-row>
                            </div>
                            <b-row class="my-1">
                                <b-col sm="9">
                                    <b-button variant="default" @click="updateDetails()">Update Details</b-button>
                                </b-col>
                            </b-row>
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