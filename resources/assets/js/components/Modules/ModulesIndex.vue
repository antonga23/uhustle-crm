<style scoped>
.truncate {
  width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.btn-secondary {
  color: #fff;
  background-color: #f6f8f9;
  border-color: #f6f8f9;
}
.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #f6f8f9;
  border-color: #f6f8f9;
}
#chartjs-size-monitor #bar-chart{
  height: 318px !important;
}

#top-section{
  background: #fff;
  padding: 17px 6.7%;
}
#top-section .col-auto {
  padding-left:1.6%;
  padding-right:1.6%;
  margin-bottom:6px;
}
.green{
  color:#00a25a !important;
}
.red{
  color:red !important;
}
ul.headings{
  list-style: none;
  padding-left: 70px;
}
ul.headings li {
  float: left;
  font-weight: 700;
  color: #9fb3bb;
  width: 11%;
  text-align: left;
}
ul.items{
  list-style: none;
  padding-left: 40px;
}
ul.items li {
  float:left;
  font-weight: 700;
  color:#003449;    
  width: 11%;
  text-align: left;

}
ul.items li a:hover{
  text-decoration: none;
}
.scroll-hidden{
  overflow-y: scroll;
  height: 70vh;
  /* padding-top: 6px; */
  padding-right: 6px;
  width: 100%;
}
.horizontal-scroll::-webkit-scrollbar-thumb {
  background: #B3B3B3 !important;
  border-radius: 5px !important;
}

::-webkit-scrollbar-thumb {
  background: #B3B3B3 !important;
  border-radius: 5px !important;
}

::-webkit-scrollbar {
width: 3px;
}

table.listing{
  width: 100%;
}
table.listing tr  th{ 
  float: left;
  font-weight: 700;
  color: #9fb3bb;
  padding: 0 69px 20px 70px;
}
#top-section .filter-stub{
  cursor: pointer;
  margin-right: 15px;
}
.plr-3 {
  padding: 23px 4% 0 !important;
}
.control-label{
  float: left;
  height: 77px;
}
.help-block{
  color:red;
  font-weight: normal;
}
.modal-body {
  background: orange !important;
}
/* assignees section */
.grey-bg-color {
  background-color: #EBEFF3 !important;
}
.grey-bg-color span{
  font-family: 'Rubik', sans-serif;
  color: #999999;
  font-size: 12px;
}

.btn-default.cancel-assign {
  border-radius: 50rem !important;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  background: #ffffff;
  font-size: 10px;
  color: #989899;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  font-weight: 600;
  padding: 6px 12px;
}
.btn-default.assign {
  border-radius: 50rem !important;
  font-size: 10px;
  background: linear-gradient(to right, rgb(255, 128, 51, 1) 0%, rgba(255, 147, 58, 1) 100%) !important;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #ffffff;
  padding: 6px 12px;
}
#bottom-section {
  padding-left: 4%;
}

</style>
<template>
  <div>
    <div id="top-section" class="row pb-4 mb-4 grey-bg-color align-items-end mx-0">
      <div class="col-3">
        <span class="ml-3">Assignees:</span>
        <a-select 
          mode="multiple"
          v-model="assignees" 
          placeholder="Select"
          class="border-0 w-100 mass-assign"
        >
          <a-select-option 
            :value="user.id" 
            v-for="(user, index) in user_options" 
            :key="index"
          >{{ user.name }}</a-select-option>
        </a-select>
      </div>

      <div class="col-3">
        <span class="ml-3">Owners: </span>

        <a-select 
          mode="multiple"
          v-model="owners" 
          placeholder="Select"
          class="border-0 w-100 mass-assign"
        >
          <a-select-option 
            :value="user.id" 
            v-for="(user, index) in user_options" 
            :key="index"
          >{{ user.name }}</a-select-option>
        </a-select>
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-default cancel-assign w-100 m-0">Cancel</button>
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-default assign w-100 m-0" @click="assign()">Assign</button>
      </div>
    </div>

    <div v-if="!add_user" id="bottom-section" class="pr-0">
      <div class="row stats mx-0 scroll-hidden horizontal-scroll">
        <div class="col-lg-12 pl-0">
          <vcl-table v-if="show_page_loader" ></vcl-table>
              
          <datatable 
            v-if="!show_page_loader" 
            id="datatable" 
            :rows="display_items" 
            :module_items="items" 
            :columns="columns" 
            :custom_fields="module_custom_fields" 
            :role="role_id" 
            :active_users="JSON.parse(active_users)" 
            :active_roles="JSON.parse(active_roles)" 
            :sources="JSON.parse(sources)" 
            :packages="JSON.parse(packages)"
            title=""
            >
            </datatable>
              
          <!-- <data-table-editable :active="active"></data-table-editable> -->
        </div>
      </div>
    </div>
    <div v-else class="plr-3" >
      <add-module-item 
        :module="module" 
        :active_users="JSON.parse(active_users)" 
        :active_roles="JSON.parse(active_roles)" 
        :sources="JSON.parse(sources)" 
        :packages="JSON.parse(packages)" 
        />
    </div>
  </div>
</template>

<script>
  import { Bar } from 'vue-chartjs';
  import { BarChart } from 'vue-morris';
  import AddModuleItem from '../Modules/AddModuleItem';
  import DataTable from '../DataTables/ListingDataTable';
  import DataTableEditable from '../DataTables/ListingDataTableEditable';
  import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
  import VSelect from '@alfsnd/vue-bootstrap-select';
  export default {
    extends: Bar,
    components: { 
      BarChart,
      VclFacebook,
      VclInstagram,
      VclTable,
      VSelect,
      AddModuleItem,
      DataTableEditable,
      'datatable' : DataTable
    },
    mounted() {
      console.log('Component mounted');

      var vm = this;
      
      vm.filter_data = JSON.parse(vm.custom_filters);

      vm.module_custom_fields = JSON.parse(vm.custom_fields);

      vm.getItems();

      vm.prepColums();

      vm.prepUserOptions(JSON.parse(vm.active_users));


      Fire.$on('SaveFilter', function(data){
        console.log('in filters', data);
        vm.filter_data = data.filters;
      });
        
      Fire.$on('AddingUser', function(data){
        vm.add_user = !vm.add_user;
      });

      Fire.$on('ReloadLeads', function(data){
        vm.getItems();
      });

      vm.Toast = vm.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
    },
    props: [
      'module', 
      'active', 
      'custom_filters', 
      'custom_fields', 
      'user_id',
      'sources',
      'packages',
      'active_users',
      'active_roles', 
      'role_id'
    ],
    data: function(){
      return {
        assignees: [],
        owners: [],
        items : [],
        cachItems: this.items,
        display_items : [],
        chached_display_items : [],
        count_assigned : 0,
        count_unassigned : 0,
        user: {
          name: '',
          surname: '',
          account: '',
          email: '',
          user_created_id: '',
          phone_number: '',
          product_id: '',
          user_assigned: '',
          source: '',
          status: '',
          title: '',
          country: '',
          city: '',
          comments: [],
          assigned: [],
        },
        current_user: [],
        users: [],
        user_options: [],
        filter_data: [],
        module_custom_fields: [],
        add_user: false,
        show_page_loader: false,
        Toast: null,
        columns:[
          {
              label: '',  // Column name
              field: 'all',  // Field name from row
              numeric: false, // Affects sorting
              html: false,    // Escapes output if false.
              sortable:false
          }
        ]
      }
    },
    methods: {
      assign(){
        Fire.$emit('MassAssign', {
          assignees: this.assignees,
          owners: this.owners
        });
      },
      prepUserOptions(users){
        users.map((user) => {
          this.user_options.push({
            id: user.id,
            name: user.name + ' ' + user.lastname ,
          });
        });
      },
      prepColums(){
        var vm = this;
        this.module_custom_fields.map( (field) => {
          vm.columns.push(
            {
              label: field.display_name.toUpperCase(),  // Column name
              field: field.name,  // Field name from row
              numeric: false, // Affects sorting
              html: false,    // Escapes output if false.
              sortable:true
            });
            
        });

        this.columns.push(
          {
            label: 'ACTIONS',  // Column name
            field: 'actions',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
        );
        
      },
      filterItems(type){
        this.display_items = this.chached_display_items;
        var filtered = this.display_items.filter( (item) => {
          if(type == -1){
            return item;
          }else if(type == 1){
            if(item.assigned == true){
              return item;
            }
          }else if(type == 0){
            if(item.assigned == false){
              return item;
            }
          }
        });

        this.display_items = filtered;
        // console.log(filtered);
      },
      getLastCommentDade(comments){
        if(comments.length > 0){
          var i = comments.length - 1;
          var last_comment = comments[i];
          return last_comment.created_at;
        }else{
          return '-';
        }
      },
      getLastCommentType(comments){
        if(comments.length > 0){
          var i = comments.length - 1;
          var last_comment = comments[i];
          return last_comment.comment_type;
        }else{
          return '-';
        }
      },
      secondsToMinues(time){
        var minutes = Math.floor(time / 60);
        var seconds = time - minutes * 60;
        var finalTime = this.str_pad_left(minutes,'0',2) + ':' + this.str_pad_left(seconds,'0',2);
        return finalTime;
      },
      str_pad_left(string,pad,length) {
        return (new Array(length+1).join(pad)+string).slice(-length);
      },
      getItems(){
        var vm = this;

        var endpoint = '/modules/get-assigned-items/' + vm.active;

        vm.show_page_loader = true;

        vm.$Progress.start();

        axios.get(endpoint).then(function (response) {
            
          if(response.data.success == true){

            vm.items = response.data.items;
            
            vm.cachItems = response.data.items;

            vm.display_items = response.data.display_items;
            
            vm.chached_display_items = response.data.display_items;

            vm.count_assigned = response.data.count_assigned;

            vm.count_unassigned = response.data.count_unassigned;
            
            vm.show_page_loader = false;

            vm.$Progress.finish();
          }else{
            vm.show_page_loader = false;
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
          }
        });
      },		
      createUser(){
          var vm = this;  
          vm.$Progress.start();
          this.$validator.validateAll().then((result) => {
                  if(!result){
                  }else{
                      
                      axios.post('/leads/create',this.user).then(function (response) {
                              
                          if(response.data.success == true){
                              vm.Toast.fire({ type: 'success', title: response.data.message });
                              vm.$Progress.finish();
                              vm.add_user = !vm.add_user;
                              vm.user = {
                                  comments: [],
                                  assigned: [],
                              };
                              vm.getUsers(-1);
                              vm.show_page_loader = false;
                              Fire.$emit('DoneAddingUser');
                          }else {
                              vm.$Progress.fail();
                              vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                          }
                      });
              }
          });
      },
      deleteFilter(id){
        this.$swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#F56C6C',
          cancelButtonColor: '#409EFF',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            var vm = this;
            vm.$Progress.start();
            axios.get('/filters/delete/' + id + '/leads').then(function (response) {
              if(response.data.success == true){
                vm.filter_data = response.data.filters
                vm.Toast.fire({ type: 'success', title: response.data.message });
                vm.$Progress.finish();
              }else{
                vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                vm.$Progress.fail();
              }
            });
          }
        });
      }
    }
  }
</script>
