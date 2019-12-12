<style scoped>
  label, label input, label a-select{
    width: 100%;
    font-family: "Rubik", sans-serif;
    font-size: 10px;
    color: #999999;
  }
  label:after {
      margin-left: 17px;
  }
  input.ant-input {
    border-radius: 50rem;
    margin-top: 5px;
  }
  .right {
    float: right;
  }
 
 .btn {
    padding: 4px 17px 6px !important;
    font-size: 14px;
 }

.add-box-shadow {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
    border: 0;
    padding: 4.4% 5.6%;
}
.m-lt {
    margin-top: 20px;
    margin-left: 36px;
}

.plr-4 {
  padding: 0px 4% !important;
}

@media screen and (max-width: 1400px) {
.add-box-shadow .small-screen-hide {
  display: none;
}
}
</style>
<template>
  <a-card :title="'Add to ' + active_module.display_name" class="add-box-shadow">
    <div class="divider-line"></div>
    <div class="w-100 m-lt">
      <div v-for="( field, index) in active_module.module_fields" :key="index" >
         <a-col :span="7" class="m-2" v-show="field.name == 'name'">
          <label>Name  <span
                  id="error"
                  v-show="errors.has('Name')"
                  class="help-block"
                >{{ errors.first('Name') }}</span>
          <a-input v-model="field.value" 
                  name="Name"
                  type="text"
                  id="name"
                  v-validate="'required|min:1'"/>
            </label>
        </a-col>
         <a-col :span="7" class="m-2" v-show="field.name == 'surname'">
          <label>Surname  <span
                  id="error"
                  v-show="errors.has('Surname')"
                  class="help-block"
                >{{ errors.first('Surname') }}</span>
          <a-input v-model="field.value" 
                  name="Surname"
                  type="text"
                  id="surname"
                  v-validate="'required|min:1'"/> 
            </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'phone_number'">
          <label>Phone Number  <span
                  id="error"
                  v-show="errors.has('Phone Number')"
                  class="help-block"
                >{{ errors.first('Phone Number') }}</span>
          <a-input v-model="field.value" 
                  name="Phone Number"
                  type="tel"
                  id="phone_number"
                  v-validate="'required|min:10'"
                   />
            </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'email'">
          <label>Email  <span
                  id="error"
                  v-show="errors.has('Email')"
                  class="help-block"
                >{{ errors.first('Email') }}</span>
          <a-input v-model="field.value" 
                  type="text"
                  id="email"
                  name="Email"
                  v-validate="'required|email'"/>
            </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'gender'">
          <label>Gender
              <a-select defaultValue="Please Select" v-model="field.value" style="width: 100%">
                  <a-select-option value="Male">Male</a-select-option>
                  <a-select-option value="Female">Female</a-select-option>
                  <a-select-option value="Other">Other</a-select-option>
              </a-select>
          </label>
        </a-col>
         
        <a-col :span="7" class="m-2" v-show="field.name == 'age'">
           <label>Age <span
              id="error"
              v-show="errors.has('Age')"
              class="help-block"
            >{{ errors.first('Age') }}</span>
           <a-input v-model="field.value" 
                  type="number"
                  id="age"
                  name="Age"
                  />
          </label>
        </a-col> 
        <a-col :span="7" class="m-2" v-show="field.name == 'title'">
          <label>Title
              <a-select defaultValue="Please Select" v-model="field.title" style="width: 100%">
                  <a-select-option value="Mr">Mr</a-select-option>
                  <a-select-option value="Mrs">Mrs</a-select-option>
                  <a-select-option value="Miss">Miss</a-select-option>
                  <a-select-option value="Other">other</a-select-option>
              </a-select>
          </label>
        </a-col> 
        <a-col :span="7" class="m-2" v-show="field.name == 'source'">    
          <label>Source
              <a-select defaultValue="Please Select" v-model="field.value" style="width: 100%">
                <a-select-option :value="item.id" v-for="(item,i) in sources" :key="i">{{ item.name }}</a-select-option>
              </a-select>
          </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'owner'">    
          <label>Owner <span
              id="error"
              v-show="errors.has('Owner')"
              class="help-block"
            >{{ errors.first('Owner') }}</span>
              <a-select  v-validate="'required|min:1'" defaultValue="Please Select" v-model="field.value" style="width: 100%">
                <a-select-option :value="item.id" v-for="(item,i) in users" :key="i">{{ item.name + ' ' + item.lastname }}</a-select-option>
              </a-select>
          </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'assignee'">
          <label>Assign To <span
              id="error"
              v-show="errors.has('Assign To')"
              class="help-block"
            >{{ errors.first('Assign To') }}</span>
              <a-select v-validate="'required|min:1'" defaultValue="Please Select" v-model="field.value" style="width: 100%">
                <a-select-option :value="item.id" v-for="(item,i) in users" :key="i">{{ item.name + ' ' + item.lastname }}</a-select-option>
              </a-select>
          </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'status'">
          <label>Status  <span
              id="error"
              v-show="errors.has('Status')"
              class="help-block"
            >{{ errors.first('Status') }}</span>
              <a-select v-validate="'required|min:1'" defaultValue="Please Select" v-model="field.value" style="width: 100%">
                  <a-select-option value="1">Active</a-select-option>
                  <a-select-option value="2">Inactive</a-select-option>
                  <a-select-option value="0">Canceled</a-select-option>
                  <a-select-option value="3">Disabled</a-select-option>
              </a-select>
          </label>
        </a-col> 
        <a-col :span="7" class="m-2"
          v-show="field.name !== 'owner' 
          && field.name !== 'assignee' 
          && field.name !== 'status'
          && field.name !== 'title'
          && field.name !== 'source'
          && field.name !== 'email'
          && field.name !== 'phone_number'
          && field.name !== 'name'
          && field.name !== 'surname'
          && field.name !== 'age'
           && field.name !== 'gender'"
          >
          <label>
              {{ field.display_name }}  <span id="error" v-show="errors.has(field.display_name)" class="help-block">{{ errors.first(field.display_name) }}</span>
              <a-input :id="field.name" :name="field.display_name" :value="field.value" v-model="field.value" v-if="field.required == 1 && field.type == 'email'" v-validate="'required|email'" />
              <a-input :id="field.name" :name="field.display_name" v-model="field.value" v-else-if="field.required == 1" v-validate="'required'" />
              <a-input :id="field.name" :name="field.display_name" v-model="field.value" v-else-if="field.required == 0 || field.required === null" />
          </label>
        </a-col>
      </div>
      <div>
            <label class="plr-4">
                <button type="submit" class="btn btn-primary update-user right" @click="addItem()">
                    Submit
                </button>
            </label>
      </div>
    </div>
  </a-card>
</template>
<script>
export default {
  props: ['module', 'active_users', 'active_roles', 'sources'],
  data: function(){
      return {
        active_module : '',
        users : [],
        roles : [],
        module_item: {},
        Toast: null
      }
  },
  mounted() {
    this.active_module = JSON.parse(this.module);
    this.users = this.active_users;
    this.roles = this.active_roles;

    this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
  },
  methods:{
    addItem(){
      var vm = this;  
      vm.$Progress.start();
      this.$validator.validateAll().then((result) => {
          if(!result){
            vm.$Progress.fail();
          }else{
              
              vm.display_name_state = true;

              var end_point = '/modules/add-item';

              axios.post(end_point,{ item : vm.active_module }).then(function (response) {
                      
                  if(response.data.success == true){
                      Fire.$emit('DoneAddingModuleItem');
                      vm.active_module = JSON.parse(vm.module);
                      vm.$Progress.finish();
                      vm.Toast.fire({ type: 'success', title: response.data.message });
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