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
                <b-tab title="Twillio" active>
                    <div class="col-lg-9">
                        <b-container fluid>
                            <b-row class="my-1">
                                <b-col sm="3">
                                <label for="input-none">Twilio Phone Number</label>
                                </b-col>
                                <b-col sm="7">
                                    <b-form-input v-if="default_calling_api === 'twilio'" v-validate="'required'" id="input-none" :state="null" v-model="twilio.phone_number"></b-form-input>
                                    <b-form-input v-else id="input-none" :state="null" v-model="twilio.phone_number"></b-form-input>
                                </b-col>
                            </b-row>

                            <b-row class="my-1">
                                <b-col sm="3">
                                <label for="input-valid">Account SID</label>
                                </b-col>
                                <b-col sm="7">
                                    <b-form-input v-if="default_calling_api === 'twilio'" v-validate="'required'" id="input-valid" :state="null" v-model="twilio.account_sid"></b-form-input>
                                    <b-form-input v-else id="input-valid" :state="null" v-model="twilio.account_sid"></b-form-input>
                                </b-col>
                            </b-row>

                            <b-row class="my-1">
                                <b-col sm="3">
                                <label for="input-valid">Auth Token</label>
                                </b-col>
                                <b-col sm="7">
                                    <b-form-input v-if="default_calling_api === 'twilio'" v-validate="'required'" id="input-valid" :state="null" v-model="twilio.auth_token"></b-form-input>
                                    <b-form-input v-else id="input-valid" :state="null" v-model="twilio.auth_token"></b-form-input>
                                </b-col>
                            </b-row>

                            <b-row class="my-1">
                                <b-col sm="3">
                                    <label for="input-valid">Twiml App SID</label>
                                </b-col>
                                <b-col sm="7">
                                    <b-form-input v-if="default_calling_api === 'twilio'" v-validate="'required'" id="input-valid" :state="null" v-model="twilio.twiml_app_sid"></b-form-input>
                                    <b-form-input v-else id="input-valid" :state="null" v-model="twilio.twiml_app_sid"></b-form-input>
                                </b-col>
                            </b-row>

                            <b-row class="my-1">
                                <b-col sm="3">
                                <label for="input-valid">Set as default dialing API</label>
                                </b-col>
                                <b-col sm="7">
                                    <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="default_calling_api"
                                    name="checkbox-1"
                                    value="twilio"
                                    unchecked-value=""
                                    >
                                    </b-form-checkbox>
                                </b-col>
                            </b-row>

                            <b-row class="my-1">
                                <b-col sm="9">
                                    <b-button variant="default" @click="updateDetails()">Update Details</b-button>
                                </b-col>
                            </b-row>
                        </b-container>
                    </div>
                    </b-tab>
                    <b-tab title="Nexmo">
                        <div class="col-lg-9">
                            <b-container fluid>
                                <b-row class="my-1">
                                    <b-col sm="3">
                                        <label for="input-none">Nexmo Phone number:</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input v-if="default_calling_api === 'nexmo'" v-validate="'required'"  id="input-none" :state="null" v-model="nexmo.phone_number"></b-form-input>
                                        <b-form-input v-else id="input-none" :state="null" v-model="nexmo.phone_number"></b-form-input>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">API Key</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input v-if="default_calling_api === 'nexmo'" v-validate="'required'"  id="input-valid" :state="null" v-model="nexmo.api_key"></b-form-input>
                                        <b-form-input v-else v-validate="'required'"  id="input-valid" :state="null" v-model="nexmo.api_key"></b-form-input>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">API Secret</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input v-if="default_calling_api === 'nexmo'" id="input-valid" :state="null" v-model="nexmo.api_secrete"></b-form-input>
                                        <b-form-input v-else id="input-valid" :state="null" v-model="nexmo.api_secrete"></b-form-input>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">Set as default dialing API</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-checkbox
                                        id="checkbox-1"
                                        v-model="default_calling_api"
                                        name="checkbox-1"
                                        value="nexmo"
                                        unchecked-value=""
                                        >
                                        </b-form-checkbox>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="9">
                                        <b-button variant="default" @click="updateDetails()">Update Details</b-button>
                                    </b-col>
                                </b-row>
                            </b-container>
                        </div>
                    </b-tab>
                    <b-tab title="Stripe">
                        <div class="col-lg-9">
                            <b-container fluid>
                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">API Key</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input v-if="default_payment_api === 'stripe'" v-validate="'required'"  id="input-valid" :state="null" v-model="stripe.api_key"></b-form-input>
                                        <b-form-input v-validate="'required'"  id="input-valid" :state="null" v-model="stripe.api_key"></b-form-input>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">API Secret</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input id="input-valid" :state="null" v-model="stripe.api_secrete"></b-form-input>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">Set as default payment API</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-checkbox
                                        id="checkbox-1"
                                        v-model="default_payment_api"
                                        name="checkbox-1"
                                        value="stripe"
                                        unchecked-value=""
                                        >
                                        </b-form-checkbox>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="9">
                                        <b-button variant="default" @click="updateDetails()">Update Details</b-button>
                                    </b-col>
                                </b-row>
                            </b-container>
                        </div>
                    </b-tab>
                    <b-tab title="Paypal">
                        <div class="col-lg-9">
                            <b-container fluid>
                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">API Key</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input v-if="default_payment_api === 'paypal'" v-validate="'required'"  id="input-valid" :state="null" v-model="paypal.api_key"></b-form-input>
                                        <b-form-input v-else v-validate="'required'"  id="input-valid" :state="null" v-model="paypal.api_key"></b-form-input>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">API Secret</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-input id="input-valid" :state="null" v-model="paypal.api_secrete"></b-form-input>
                                    </b-col>
                                </b-row>

                                <b-row class="my-1">
                                    <b-col sm="3">
                                    <label for="input-valid">Set as default payment API</label>
                                    </b-col>
                                    <b-col sm="7">
                                        <b-form-checkbox
                                        id="checkbox-1"
                                        v-model="default_payment_api"
                                        name="checkbox-1"
                                        value="paypal"
                                        unchecked-value=""
                                        >
                                        </b-form-checkbox>
                                    </b-col>
                                </b-row>

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
                twilio: {
                    phone_number : '',
                    account_sid : '',
                    auth_token : '',
                    twiml_app_sid : '',
                },
                nexmo: {
                    phone_number: '',
                    api_key: '',
                    api_secrete: '',
                },
                stripe: {
                    api_key: '',
                    api_secrete: '',
                },
                paypal: {
                    api_key: '',
                    api_secrete: '',
                },
                default_calling_api: '',
                default_payment_api: '',
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