<style scoped>
  .tab-pane{
    padding: 4.4% 5.6%;
  }
  .help-block{
    color: #dc3545;
    font-size: 12px;
  }
  .b-container{
    margin-bottom: 25px
  }
  .col {
    padding-right: 1.3%;
    padding-left: 1.3%;
  }
  table {
    width:max-content;
  }
  td {
    vertical-align:baseline;
    padding-bottom:1.1%;
  }
  .scrollable{
    height: 789px;
    overflow: overlay;
  }
  .add-fields {
    border-color: #ccc;
  }
  .add-fields:last-child {
    border: 0!important;
  }
  .col-sm-6 input {
    border-radius: 50rem;
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    padding: 11px 18px!important;
    font-size: 12px;
    color: #003449;
    border-color: #ccc;
    margin-bottom: 17px;
    font-family: 'Rubik', sans-serif;
    height: auto!important;
  }
  .col input, .col-sm-1, .col-sm-2, .col-sm-3 input {
    font-size: 12px;
    color: #003449;
    font-family: 'Rubik', sans-serif;
    height:auto!important;
    border:0;
  }
  label {
    font-family: 'Rubik', sans-serif;
    font-size: 10px;
    color: #999999;
    margin-bottom:7px;
    margin-left: 17px;
  }
  h5 {
    font-size: 0.83vw;
  }
  .fields-divider {
    margin-top:3.7%;
    margin-bottom:2.45%;
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
</style>
<template>
  <div id="add-module">
    <b-card no-body>
      <b-tabs>
        <b-tab :title="'Add Module'">
          <div class="row mt-0 mx-0 align-items-center fields-divider">
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
                v-model="new_module.display_name" 
                v-validate="'required'" 
                data-vv-name="Module Name"
              ></a-input>
              <span 
                v-show="errors.has('Module Name')" 
                class="help-block"
              >{{ errors.first('Module Name') }}</span>
            
              <label for="input-valid">Module Description:</label>
              <a-input id="input-valid"  v-model="new_module.description"></a-input>
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

          <b-row 
            class="mx-0 border-bottom add-fields" 
            v-for="(field, index) in new_module.module_fields" 
            :key="index">
            <b-col sm="3" class="pt-0 pl-0">
              <label for="input-none">Field name:</label>
              <a-input 
                v-model="field.name" 
                v-validate="'required'" 
                :data-vv-name="'Field ' + (index + 1) +'\'s Name'"
                class="rounded-pill"/>
              <span 
                v-show="errors.has('Field ' + (index + 1) +'\'s Name')" 
                class="help-block"
              >{{ errors.first('Field ' + (index + 1) +'\'s Name') }}</span>
            </b-col>

            <b-col sm="2">
              <label for="input-none" class="w-100 ml-0">Field type:</label>
              <a-select 
                v-model="field.type" 
                placeholder="Select" 
                class="border-0 fieldType"
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

            <b-col sm="1">
              <label for="input-none" class="w-100 ml-0">Required:</label>
              <a-select 
                v-model="field.required" 
                placeholder="Select" 
                class="border-0 w-100"
              >
                <a-select-option  value="1">Yes</a-select-option>
                <a-select-option  value="0">No</a-select-option>
              </a-select>
              <span 
                v-show="errors.has('Field ' + (index + 1) +'\'s Type')" 
                class="help-block"
              >{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
            </b-col>

            <b-col>
              <label for="input-none" class="w-100 ml-1">Can Read:</label>
              <a-select 
                mode="multiple" 
                class="border-0 w-100" 
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

            <b-col class="pr-0">
              <label for="input-none" class="w-100 ml-1">Can Edit:</label>
              <a-select 
                mode="multiple" 
                class="w-100 border-0" 
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

            <b-col sm="auto" class="pr-0" style="padding-top: 36px;">
              <b-button
                v-if="(index + 1) < new_module.module_fields.length" 
                @click="removeField(index)"
                class="icon m-0 p-0"
              >
                <img src="images/icons/Field_Delete.svg" alt="Delete field icon" width="19"/>
              </b-button>

              <b-button 
                v-else 
                @click="addField()" 
                class="icon m-0 p-0"
              >
                <img src="images/icons/Field_Add.svg" alt="Add field icon" width="19"/>
              </b-button>
            </b-col>
          </b-row>

          <!-- <table>
            <tr 
              v-for="(field, index) in new_module.module_fields" 
              :key="index"
            >
              <td class="pt-0 pl-0">
                <label for="input-none">Field name:</label>
                <a-input 
                  v-model="field.name" 
                  v-validate="'required'" 
                  :data-vv-name="'Field ' + (index + 1) +'\'s Name'"/>
                <span 
                  v-show="errors.has('Field ' + (index + 1) +'\'s Name')" 
                  class="help-block"
                >{{ errors.first('Field ' + (index + 1) +'\'s Name') }}</span>
              </td>

              <td class="pt-0">
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

              <td class="pt-0">
                <label for="input-none" class="w-100 ml-0">Required:</label>
                <a-select 
                  v-model="field.required" 
                  placeholder="Select" 
                  class="border-0 w-100"
                >
                  <a-select-option  value="1">Yes</a-select-option>
                  <a-select-option  value="0">No</a-select-option>
                </a-select>
                <span 
                  v-show="errors.has('Field ' + (index + 1) +'\'s Type')" 
                  class="help-block"
                >{{ errors.first('Field ' + (index + 1) +'\'s Type') }}</span>
              </td>

              <td class="pt-0">
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

              <td class="pt-0">
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

              <td class="pt-0">
                <b-button
                  v-if="(index + 1) < new_module.module_fields.length" 
                  @click="removeField(index)"
                  class="icon m-0 p-0"
                >
                  <img src="images/icons/Field_Delete.svg" alt="Delete field icon" width="19"/>
                </b-button>

                <b-button 
                  v-else 
                  @click="addField()" 
                  class="icon m-0 p-0"
                >
                  <img src="images/icons/Field_Add.svg" alt="Add field icon" width="19"/>
                </b-button>
              </td>
            </tr>
          </table> -->

          <b-row class="mx-0 justify-content-end">
            <b-button variant="primary" @click="addModule()" class="font-weight-bold">Add</b-button>
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
          { value: null, text: 'Select' },
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