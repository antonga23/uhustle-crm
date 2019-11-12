<style scoped>
  label, label input, label a-select{
    width: 100%;
    font-family: "Rubik", sans-serif;
    font-size: 0.52vw;
    color: #999999;
  }
  input.ant-input {
    border-radius: 50rem;
    margin-top: 5px;
  }

  .help-block{
    color: red;
    font-size: 12px;
  }
 
.add-box-shadow {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
    border: 0;
    padding: 4.4% 5.6% 6.8%;
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
    <div class="w-100 ml-4" style="margin-top: 20px;">
      <div v-for="( field, index) in active_module.module_fields" :key="index" >
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
        <a-col :span="7" class="m-2"
          v-show="field.name !== 'owner' 
          && field.name !== 'assignee' 
          && field.name !== 'status'
          && field.name !== 'title'"
          >
          <label>
              {{ field.display_name }}
              <a-input :id="field.name" :name="field.display_name" :value="field.value" v-model="field.value" v-if="field.required == 1 && field.type == 'email'" v-validate="'required|email'" />
              <a-input :id="field.name" :name="field.display_name" v-model="field.value" v-else-if="field.required == 1" v-validate="'required'" />
              <a-input :id="field.name" :name="field.display_name" v-model="field.value" v-else-if="field.required == 0 || field.required === null" />
              <span v-show="errors.has(field.display_name)" class="help-block">{{ errors.first(field.display_name) }}</span>
          </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'owner'">    
          <label>Owner
              <a-select defaultValue="Please Select" v-model="field.value" style="width: 100%">
                <a-select-option :value="item.id" v-for="(item,i) in users" :key="i">{{ item.name + ' ' + item.lastname }}</a-select-option>
              </a-select>
          </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'assignee'">
          <label>Assign To
              <a-select defaultValue="Please Select" v-model="field.valye" style="width: 100%">
                <a-select-option :value="item.id" v-for="(item,i) in users" :key="i">{{ item.name + ' ' + item.lastname }}</a-select-option>
              </a-select>
          </label>
        </a-col>
        <a-col :span="7" class="m-2" v-show="field.name == 'status'">
          <label>Status
              <a-select defaultValue="Please Select" v-model="field.value" style="width: 100%">
                  <a-select-option value="1">Active</a-select-option>
                  <a-select-option value="2">Inactive</a-select-option>
                  <a-select-option value="0">Canceled</a-select-option>
                  <a-select-option value="3">Disabled</a-select-option>
              </a-select>
          </label>
        </a-col> 
      </div>
      <div>
            <label>
                <button type="submit" class="btn btn-primary update-user" @click="addItem()">
                    Submit
                </button>
            </label>
      </div>
    </div>
  </a-card>
</template>
<script>
export default {
  props: ['module', 'active_users', 'active_roles'],
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