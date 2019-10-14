<style scoped>
    .add-fields .btn{
        margin: 0;
    }
    .help-block{
        color: #dc3545;
        font-size: 12px;
    }
    .b-container{
      margin-bottom: 25px
    }
    .scrollable{
      height: 789px;
      overflow: overlay;
    }
</style>
<template>
    <div>
        <b-card :title="'Add Module'">
            <b-container fluid class="b-container">
                <b-card-text><b>Module Information.</b></b-card-text>
                <b-row class="my-1">
                    <b-col sm="9">
                        <label for="input-none">Module Name:</label>
                        <a-input id="input-none" v-model="new_module.display_name" v-validate="'required'" data-vv-name="Module Name"></a-input>
                        <span v-show="errors.has('Module Name')" class="help-block">{{ errors.first('Module Name') }}</span>
                    </b-col>
                </b-row>

                <b-row class="my-1">
                    <b-col sm="9">
                      <label for="input-valid">Module Description:</label>
                      <a-input id="input-valid"  v-model="new_module.description"></a-input>
                    </b-col>
                </b-row>
            </b-container>
            <b-container fluid class="b-container scrollable">
                <b-card-text><b>Module Fields.</b></b-card-text>
                <b-row class="my-1 add-fields" v-for="(field, index) in new_module.module_fields" :key="index">
                    <b-col sm="2">
                        <label for="input-none">Field name:</label>
                        <a-input v-model="field.name" v-validate="'required'" :data-vv-name="'Field ' + (index + 1) +'\'s Name'" />
                        <span v-show="errors.has('Field ' + (index + 1) +'\'s Name')" class="help-block">{{ errors.first('Field ' + (index + 1) +'\'s Name') }}</span>
                    </b-col>
                    <b-col sm="2">
                        <label for="input-none">Field type:</label>
                        <a-select v-model="field.type" placeholder="Please select" style="width: 100%">
                          <a-select-option  :value="type.value" v-for="(type, index) in types" :key="index">{{ type.value }}</a-select-option>
                        </a-select>
                        <span v-show="errors.has('Field ' + (index + 1) +'\'s Type')" class="help-block">{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
                    </b-col>
                    <b-col sm="2">
                        <label for="input-none">Can Read:</label>
                        <a-select mode="multiple" style="width: 100%" v-model="field.can_read" placeholder="Please select multiple">
                          <a-select-option :value="role.id" v-for="(role, index) in roles" :key="index">{{ role.display_name }}</a-select-option>
                        </a-select>
                    </b-col>
                    <b-col sm="2">
                        <label for="input-none">Can Edit:</label>
                        <a-select mode="multiple" style="width: 100%" v-model="field.can_edit" placeholder="Please select multiple">
                          <a-select-option :value="role.id" v-for="(role, index) in roles" :key="index">{{ role.display_name }}</a-select-option>
                        </a-select>
                    </b-col>
                    <b-col sm="1" style="padding-top: 21px;">
                      <label for="input-none">&nbsp;</label>
                        <b-button variant="danger" v-if="(index + 1) < new_module.module_fields.length" @click="removeField(index)">-</b-button>
                        <b-button variant="success" v-else @click="addField()">+</b-button>
                    </b-col>
                </b-row>
            </b-container>
            <b-container fluid>
                <b-row class="my-1">
                    <b-col sm="9">
                        <b-button variant="success" @click="addModule()">Add Module</b-button>
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
            this.getRoles();

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
                roles: [],
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
            getRoles(){
                var vm = this;
                var endpoint = '/roles/get-all';

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.roles = response.data.roles;
                    }else{
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },
            addModule(){
              var vm = this;  
              vm.$Progress.start();
              this.$validator.validateAll().then((result) => {
                if(!result){
                    vm.display_name_state = false;
                }else{
                    
                    vm.display_name_state = true;

                    var end_point = '/modules/add';

                    axios.post(end_point,this.new_module).then(function (response) {
                            
                        if(response.data.success == true){

                            vm.new_module = response.data.module[0];
                            
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