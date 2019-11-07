<style scoped>
  #preferences {
    height:100vh;
    overflow-y: auto;
  }
  .tab-pane{
    padding: 4.4% 5.6% 6.8%;
  }
  .help-block{
    color: #dc3545;
    font-size: 0.63vw;
  }
  .b-container{
    margin-bottom: 25px
  }
  .col, .col-sm-1, .col-sm-2, .col-sm-3, td {
    padding-right: 1.2%;
    padding-left: 1.2%;
  }
  table {
    width:max-content;
  }
  td {
    vertical-align:baseline;
    padding-top:1%;
    padding-bottom:1.1%;
  }
  .scrollable{
    height: 500px;
    overflow: auto;
  }
  .nav-link a {
    color: #1A1C43;
  }
  .add-fields {
    margin-top:1.6%;
  }
  .col-sm-6 input {
    border-radius: 50rem;
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    padding: 11px 18px!important;
    font-size: 0.63vw;
    color: #003449;
    border-color: #ccc;
    margin-bottom: 17px;
    font-family: 'Rubik', sans-serif;
    height:auto!important;
  }
  .scrollable input{
    font-size: 0.63vw;
    color: #003449;
    font-family: 'Rubik', sans-serif;
    height:auto!important;
    border:0;
    margin-left:8px;
  }
  label {
    font-family: 'Rubik', sans-serif;
    font-size: 10px;
    color: #999999;
    margin-bottom:7px;
    margin-left:17px;
  }
  h5 {
    font-size: 16px;
  }
  .fields-divider {
    margin-top:3.7%;
    margin-bottom:2.45%;
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
  .icon.btn-secondary {
    line-height: 1em;
    background: transparent;
    border: none;
  }
  .nav-link.active img {
    margin-left:20px;
    box-shadow: 0 0 2px rgba(0,0,0,0.15);
    -webkit-box-shadow: 0 0 2px rgba(0,0,0,0.15);
    -moz-box-shadow: 0 0 2px rgba(0,0,0,0.15);
    -o-box-shadow: 0 0 2px rgba(0,0,0,0.15);
    border-radius: 50rem;
  }
  tr {
    border-bottom: 1px solid #ccc;
  }
  tr:last-child {
    border-bottom: 0;
  }
  .truncate {
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }
</style>
<template>
  <div id="edit-module">
    <b-card no-body>
      <b-tabs>
        <b-tab>
          <template v-slot:title>
            <a href="#">{{ (module === null)? 'Add Module' : 'Update ' + module.display_name }}</a>
            <img @click="deleteModule()" src="images/icons/delete.svg" width="16"/>
          </template>

          <div class="row my-0 mx-0 align-items-center fields-divider">
            <div class="col-auto pl-0">
              <h5 class="mb-0">Module Information</h5>
            </div>

            <div class="col px-0">
              <div class="divider-line"></div>
            </div>
          </div>

          <b-row class="mx-0">
            <b-col sm="6" class="px-0">
              <label for="input-none">Module Name:</label>
              <a-input 
                id="input-none" 
                v-model="module.display_name" 
                v-validate="'required'" 
                data-vv-name="Module Name"
              ></a-input>
              <span 
                v-show="errors.has('Module Name')" 
                class="help-block">{{ errors.first('Module Name') }}
              </span>
            
              <label for="input-valid">Module Description:</label>
              <a-input id="input-valid"  v-model="module.description"></a-input>
            </b-col>
        
            <b-col sm="6" class="px-0">
            </b-col>
          </b-row>

          <div class="row mx-0 align-items-center fields-divider">
            <div class="col-auto pl-0">
              <h5 class="mb-0">Module Fields</h5>
            </div>

            <div class="col px-0">
              <div class="divider-line"></div>
            </div>
          </div>

          <!-- <b-container fluid class="b-container p-0 scrollable">
            <b-row 
              class="mx-0 flex-nowrap add-fields" 
              v-for="(field, index) in module.module_fields" 
              :key="index"
            >
              <b-col sm="auto" class="pl-0">
                <label for="input-none">Field name:</label>
                <a-input 
                  id="input-none" 
                  v-model="field.display_name" 
                  v-validate="'required'" 
                  :data-vv-name="'Field ' + (index + 1) +'\'s Name'"
                ></a-input>
                <span 
                  v-show="errors.has('Field ' + (index + 1) +'\'s Name')" 
                  class="help-block"
                >{{ errors.first('Field ' + (index + 1) +'\'s Name') }}</span>
              </b-col>

              <b-col sm="auto">
                <label for="input-none" class="w-100">Field type:</label>
                <a-select 
                  v-model="field.type" 
                  placeholder="Select"
                >
                  <a-select-option 
                    :value="type.value" 
                    v-for="(type, index) in types" 
                    :key="index"
                  >{{ type.text }}</a-select-option>
                </a-select>
                <span 
                  v-show="errors.has('Field ' + (index + 1) +'\'s Type')" 
                  class="help-block"
                >{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
              </b-col>

              <b-col sm="auto">
                <label for="input-none" class="w-100">Required:</label>
                <a-select 
                  v-model="field.required" 
                  placeholder="Select"
                >
                  <a-select-option value="1">Yes</a-select-option>
                  <a-select-option value="0">No</a-select-option>
                </a-select>
                <span 
                  v-show="errors.has('Field ' + (index + 1) +'\'s Type')" 
                  class="help-block"
                >{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
              </b-col>

              <b-col sm="auto">
                <label for="input-none" class="w-100">Can Read:</label>
                <a-select 
                  mode="multiple"
                  v-model="field.can_read" 
                  placeholder="Select"
                >
                  <a-select-option 
                    :value="role.id" 
                    v-for="(role, index) in roles" 
                    :key="index"
                  >{{ role.display_name }}</a-select-option>
                </a-select>
              </b-col>

              <b-col sm="auto">
                <label for="input-none" class="w-100">Can Edit:</label>
                <a-select 
                  mode="multiple"
                  v-model="field.can_edit" 
                  placeholder="Select"
                >
                  <a-select-option 
                    :value="role.id" 
                    v-for="(role, index) in roles" 
                    :key="index"
                  >{{ role.display_name }}</a-select-option>
                </a-select>
              </b-col>

              <b-col sm="auto" style="padding-top: 36px;">
                <b-button
                  v-if="(index + 1) < module.module_fields.length" 
                  @click="removeField(index)"
                  class="icon m-0 p-0"
                >
                  <img src="images/icons/Field_Delete.svg" width="19"/>
                </b-button>

                <b-button 
                  v-else 
                  @click="addField()" 
                  class="icon m-0 p-0"
                >
                  <img src="images/icons/Field_Add.svg" width="19"/>
                </b-button>
              </b-col>
            </b-row>
          </b-container> -->

          <div class="scrollable">
            <table>
              <tr 
                v-for="(field, index) in module.module_fields" 
                :key="index"
              >
                <td class="pl-0">
                  <label for="input-none w-100">Field name:</label>
                  <a-input 
                    id="input-none" 
                    v-model="field.display_name" 
                    v-validate="'required'" 
                    :data-vv-name="'Field ' + (index + 1) +'\'s Name'"
                    class="border-0"
                  ></a-input>
                  <span 
                    v-show="errors.has('Field ' + (index + 1) +'\'s Name')" 
                    class="help-block"
                  >{{ errors.first('Field ' + (index + 1) +'\'s Name') }}</span>
                </td>

                <td>
                  <label for="input-none" class="w-100 ml-0">Field type:</label>
                  <a-select 
                    v-model="field.type" 
                    placeholder="Select"
                    class="border-0"
                  >
                    <a-select-option 
                      :value="type.value" 
                      v-for="(type, index) in types" 
                      :key="index"
                    >{{ type.text }}</a-select-option>
                  </a-select>
                  <span 
                    v-show="errors.has('Field ' + (index + 1) +'\'s Type')" 
                    class="help-block"
                  >{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
                </td>

                <td>
                  <label for="input-none" class="w-100 ml-0">Required:</label>
                  <a-select 
                    v-model="field.required" 
                    placeholder="Select"
                    class="border-0 w-100"
                  >
                    <a-select-option value="1">Yes</a-select-option>
                    <a-select-option value="0">No</a-select-option>
                  </a-select>
                  <span 
                    v-show="errors.has('Field ' + (index + 1) +'\'s Type')" 
                    class="help-block"
                  >{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
                </td>

                <td>
                  <label for="input-none" class="w-100 ml-1">Can Read:</label>
                  <a-select 
                    mode="multiple"
                    v-model="field.can_read" 
                    placeholder="Select"
                    class="border-0 w-100"
                  >
                    <a-select-option 
                      :value="role.id" 
                      v-for="(role, index) in roles" 
                      :key="index"
                    >{{ role.display_name }}</a-select-option>
                  </a-select>
                </td>

                <td>
                  <label for="input-none" class="w-100 ml-1">Can Edit:</label>
                  <a-select 
                    mode="multiple"
                    v-model="field.can_edit" 
                    placeholder="Select"
                    class="border-0 w-100"
                  >
                    <a-select-option 
                      :value="role.id" 
                      v-for="(role, index) in roles" 
                      :key="index"
                    >{{ role.display_name }}</a-select-option>
                  </a-select>
                </td>

                <td>
                  <b-button
                    v-if="(index + 1) < module.module_fields.length" 
                    @click="removeField(index)"
                    class="icon m-0 p-0"
                  >
                    <img src="images/icons/Field_Delete.svg" width="19"/>
                  </b-button>

                  <b-button 
                    v-else 
                    @click="addField()" 
                    class="icon m-0 p-0"
                  >
                    <img src="images/icons/Field_Add.svg" width="19"/>
                  </b-button>
                </td>
              </tr>
            </table>
          </div>

          <b-row class="mx-0 mt-4 justify-content-end">
            <b-button variant="default" @click="editModule()" class="my-0">Cancel</b-button>
            <b-button variant="primary" @click="editModule()" class="font-weight-bold my-0">Update</b-button>
          </b-row>
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
      var vm = this;
      vm.module = vm.in_module;
      Fire.$on('edit_module', function(data){
        vm.module = data.module;
      });

      vm.getRoles();

      vm.Toast = vm.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
        
    },
    props: ['in_module'],
    data: function(){
      return {
        roles: [],
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
          { value : `user_select`, text : 'User Select'},
          { value : `role_select`, text : 'Role Select'},
          { value : 'range', text : 'Range'},
          { value : 'color', text : 'Color'}
        ],
        module: {},
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
      editModule(){
        var vm = this;  
        vm.$Progress.start();
        this.$validator.validateAll().then((result) => {
          if(!result){
            vm.display_name_state = false;
          }else{
              
            vm.display_name_state = true;

            var end_point = '/modules/update';

            axios.post(end_point,this.module).then(function (response) {
                    
              if(response.data.success == true){

                vm.module = response.data.module[0];
                
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
      deleteModule(){
        var vm = this;  
        vm.$swal.fire({
          title: 'Are you sure?',
          text: "All module data will be lost. You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#409EFF',
          cancelButtonColor: '#F56C6C',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            axios.get('/modules/destroy/'+this.module.id).then((response) =>{
              Fire.$emit('AfterModuleDelete');
              vm.Toast.fire({ type: 'success', title: 'Module has been deleted.' });
            }).catch(() => {
              vm.$swal('Failed', 'Opps, something went wrong, please try again','warning');
            });
          }
        });
      },
      addField(){
        this.module.module_fields.push(
          {
            id : '',
            name : '',
            type : null,
          }
        );
      },
      removeField(index){
          
        if (index > -1) {
          this.module.module_fields.splice(index, 1);
        }
      }
    }
  }
</script>