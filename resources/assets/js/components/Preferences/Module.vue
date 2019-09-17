<style scoped>
    .add-fields .btn{
        margin: 0;
    }
    .help-block{
        color: #dc3545;
        font-size: 12px;
    }
</style>
<template>
    <div>
        <b-card :title="(module === null)? 'Add Module' : 'Update ' + module.display_name">
            <b-container fluid>
                <b-card-text><b>Module Information.</b></b-card-text>
                <b-row class="my-1">
                    <b-col sm="2">
                    <label for="input-none">Module Name:</label>
                    </b-col>
                    <b-col sm="9">
                        <b-form-input id="input-none" :state="display_name_state" v-model="new_module.display_name" v-validate="'required'" data-vv-name="Module Name"></b-form-input>
                        <span v-show="errors.has('Module Name')" class="help-block">{{ errors.first('Module Name') }}</span>
                    </b-col>
                </b-row>

                <b-row class="my-1">
                    <b-col sm="2">
                    <label for="input-valid">Module Description:</label>
                    </b-col>
                    <b-col sm="9">
                    <b-form-input id="input-valid" :state="null" v-model="new_module.description"></b-form-input>
                    </b-col>
                </b-row>
            </b-container>
            <b-container fluid>
                <b-card-text><b>Module Fields.</b></b-card-text>
                <b-row class="my-1 add-fields" v-for="(field, index) in new_module.module_fields" :key="index">
                    <b-col sm="2">
                        <label for="input-none">Field name:</label>
                    </b-col>
                    <b-col sm="3">
                        <b-form-input id="input-none" :state="null" v-model="field.name" v-validate="'required'" :data-vv-name="'Field ' + (index + 1) +'\'s Name'"></b-form-input>
                        <span v-show="errors.has('Field ' + (index + 1) +'\'s Name')" class="help-block">{{ errors.first('Field ' + (index + 1) +'\'s Name') }}</span>
                    </b-col>
                    <b-col sm="2">
                        <label for="input-none">Field type:</label>
                    </b-col>
                    <b-col sm="3">
                        <b-form-select v-model="field.type" :options="types" v-validate="'required'" :data-vv-name="'Field ' + (index + 1) +'\'s Type'"></b-form-select>
                        <span v-show="errors.has('Field ' + (index + 1) +'\'s Type')" class="help-block">{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
                    </b-col>
                    <b-col sm="2">
                        <b-button variant="danger" v-if="(index + 1) < new_module.module_fields.length" @click="removeField(index)">-</b-button>
                        <b-button variant="success" v-else @click="addField()">+</b-button>
                    </b-col>
                </b-row>
            </b-container>
            <b-container fluid>
                <b-row class="my-1">
                    <b-col sm="9">
                        <b-button variant="success" @click="addModule()" v-if="module === null">Add Module</b-button>
                        <b-button variant="success" @click="addModule()" v-else>Update Module</b-button>
                    </b-col>
                </b-row>
            </b-container>
        </b-card>
    </div>
</template>

<script>
    export default {
        components: { 
        },
        mounted() {
            console.log('Add Module Component mounted');

            if(this.module !== null){
                this.new_module = this.module;
            }else{
                this.new_module = {
                    display_name: null,
                    description: null,
                    module_fields:[
                        {
                            id : '',
                            name : '',
                            type : null,
                        }
                    ]
                }
            }

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        created: function () {
        },
        props: ['module'],
        data: function(){
            return {
                new_module: {
                    display_name: null,
                    description: null,
                    module_fields:[
                        {
                            id : '',
                            name : '',
                            type : null,
                        }
                    ]
                },
                types: [
                    { value: null, text: 'Please select' },
                    { value : 'text', text : 'Text'},
                    { value : 'password', text : 'Password'},
                    { value : 'email', text : 'Email'},
                    { value : 'number', text : 'Number'},
                    { value : 'url', text : 'Url'},
                    { value : 'tel', text : 'Tel'},
                    { value : 'date', text : 'Date'},
                    { value : `time`, text : 'Time'},
                    { value : 'range', text : 'Range'},
                    { value : 'color', text : 'Color'}
                ],
                display_name_state: null,
                Toast: null,
            }
        },
        methods: {
            addModule(){
				var vm = this;  
				vm.$Progress.start();
				this.$validator.validateAll().then((result) => {
                        if(!result){
                            vm.display_name_state = false;
                        }else{
                            
                            vm.display_name_state = true;

                            if(vm.module !== null){
                                var end_point = '/modules/update';
                            }else{
                                var end_point = '/modules/add';
                            }

                            axios.post(end_point,this.new_module).then(function (response) {
                                    
                                if(response.data.success == true){

                                    vm.new_module = response.data.module;
                                    
                                    Fire.$emit('DoneAddingModule');
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
            addField(){
                this.new_module.module_fields.push(
                    {
                        id : '',
                        name : '',
                        type : null,
                    }
                );
            },
            removeField(index){
                
                if (index > -1) {
                    this.new_module.module_fields.splice(index, 1);
                }
            }
        }
    }
</script>