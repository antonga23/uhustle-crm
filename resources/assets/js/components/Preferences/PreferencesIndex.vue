<style scoped>

	/*Right Component*/
	li.title a strong{
		color: #003449;
		font-size: 25px;
	    letter-spacing: 4.2px;
    }
    div.top-nav{
        margin-top: 15px;
    }
    ul.top-menu{
        list-style: none;
        padding: 0;
    }
    ul.top-menu li.item{
        float: left;
        margin-left: 10px;
        margin-bottom: 8px;
    }
    ul.top-menu li.item a{
        color: rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        padding: 4px 16px;
    }
    ul.top-menu li.item a:hover,
    ul.top-menu li.item a.active{
        color: rgba(0, 0, 0, 0.5);
		border-radius: 20px;
        padding: 4px 16px;
	    background: #F98B39;
	    border-color: #F98B39;
	    color: #fff !important;
    }
	.border-bottom {
	    border-bottom: none !important;
        margin-left: -10px !important;
        padding: 0 0 0;
	}
	.navbar-nav a.active{    
		border-radius: 26px;
	    margin: 5px 8px 8px 55px !important;
	    height: 29px !important;
	    background: #F98B39 !important;
	    border-color: #F98B39 !important;
	    color: #fff !important;
	    padding: 4px 17px 6px !important;
	}
    .form-control {
        border-radius: 25px;
        padding: 7px;
        height: 28px !important;
        font-size: 9px;
    }
    .user-roles .tab-pane .col-lg-3{
        float: left;
        flex: 0 0 24%;
        max-width: 24%;
        margin-right: 1%;
        min-height: 50px;
    }
    .user-roles .tab-pane .row{
        margin-right: 0;
        margin-left: 0;
    }
    .user-roles .tab-pane .row .col-lg-3 button{
       width: 100%;
    }
    .user-roles .tab-pane .col-lg-3 .card-body .permisions{
        padding-left: 30px;
    }

    .btn-default{
        padding: 6px 12px 6px 10px;
        font-size: 9px;
        border: transparent !important;
        border-radius: 5px !important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .btn-default:hover{
        background: #00344a;
        color: #ffffff;    
        border: transparent !important;
        padding: 6px 12px 6px 10px;
        font-size: 9px;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .btn-block {
        display: block;
        width: 98%;
    }
    .card-body .form-group{
        margin-left: 0%;
    }
    .pt-0, .py-0 {
        padding-top: 0 !important;
        padding-bottom: 0;
    }
</style>
<template>
    <div class="">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
			<!-- Left navbar links -->
            <ul class="navbar-nav left">
                <li class="nav-item d-none d-sm-inline-block title">
                    <a href="#" class="nav-link"><strong>Preferences</strong></a>
                </li> 
            </ul>
		</nav>
        <div class="row top-nav">
            <ul class="top-menu">
                <li class="item">
                    <a href="#" @click="showModulePreferences('roles', 'roles', null);" :class="{ 'active' : ( active_module_name ===  'roles')? true : false }">Roles</a>
                </li>
                <li class="item" style="display_none">
                    <a href="#" @click="showModulePreferences('dialer', 'dialer', null);" :class="{ 'active' : ( active_module_name ===  'dialer')? true : false }">Dialer</a>
                </li>
                <li class="item">
                    <a href="#" @click="showModulePreferences('api_integration', 'api_integration', null);" :class="{ 'active' : ( active_module_name ===  'api_integration')? true : false }">API Integration</a>
                </li>
                <li class="item" v-for="(module, index) in modules" :key="index">
                    <a href="#" @click="showModulePreferences(module.tag, 'edit_module', module);" :class="{ 'active' : ( active_module_name ===  module.tag)? true : false }">{{ module.display_name }}</a>
                </li>
                <li class="item">
                    <a role="button" rel="addModuleLink" @click="showModulePreferences('add_module','add_module', null);" :class="{ 'active' : ( active_module_name ===  'add_module')? true : false }" title="Add new Module">+ Add New</a>
                </li>
            </ul>
		    </div>
        <hr style="margin-bottom: 2%;">
        <div>
            <div class="row stats scroll-hidden">
                <div class="col-lg-12">
                    <vcl-table v-if="show_page_loader" > </vcl-table>
                    <div class="col-lg-12  user-roles" v-if="!show_page_loader && active_module_name == 'roles'">
                        <b-card no-body>
                            <b-tabs card>
                                <b-tab :title="role.display_name" @click="editRole(role)" v-for="(role,index) in roles" :key="index" :active="(index == 0)? true : false">
                                    
                                    <div class="row" v-if="role_edit">
                                        <edit-role :role="role" />
                                    </div>
                                    <div class="row">
                                        <b-button class="btn btn-success" @click="updateRole(role)">Update {{ role.display_name }}</b-button>
                                        <b-button class="btn btn-danger" @click="deleteRole(role)">Delete {{ role.display_name }}</b-button>
                                    </div>
                                    <div class="row" v-if="role_add">
                                        <add-role/>
                                    </div>
                                    <div class="row">
                                        <hr>
                                    </div>
                                    <transition name="fade">
                                        <div class="row" v-if="!role_add" >
                                            <div role="tablist" class="col-lg-12">
                                                <h5>Permissions</h5>
                                                <div>
                                                    <div>
                                                        <b-card no-body class="mb-1">
                                                            <b-card-header header-tag="header" class="p-1" role="tab">
                                                                <b-button block href="#" v-b-toggle="'accordion-0'"  :aria-controls="'accordion-0'" variant="info">Dialer</b-button>
                                                            </b-card-header>
                                                            <b-collapse :id="'accordion-0'" visible accordion="my-accordion" role="tabpanel">
                                                                <b-card-body>
                                                                    <div v-for="(permission,k) in dialer_permissions" :key="k">
                                                                        <div v-if="permission.role_id == role.id">
                                                                            <b-form-group  class="permisions">
                                                                              <a-row >
                                                                                <a-col :span="8">
                                                                                    <b-form-checkbox inline value="1" unchecked-value="0" v-model="permission.disabled" @change="applyDialerPermissions()">{{ (permission.disabled == 1)? 'Enabled' : 'Disabled' }}</b-form-checkbox>
                                                                                </a-col>
                                                                                <a-col :span="8">    
                                                                                    <b-form-checkbox inline value="1" unchecked-value="0" v-model="permission.whisper" @change="applyDialerPermissions()">Whisper </b-form-checkbox>
                                                                                </a-col>
                                                                                <a-col :span="8">    
                                                                                    <b-form-checkbox inline value="1" unchecked-value="0" v-model="permission.barge" @change="applyDialerPermissions()">Barge</b-form-checkbox>
                                                                                </a-col>
                                                                              </a-row>
                                                                            </b-form-group>
                                                                        </div> 
                                                                    </div>
                                                                </b-card-body>
                                                            </b-collapse>
                                                        </b-card>
                                                    </div>
                                                    <div v-for="(a_module, i) in modules" :key="i">
                                                        <b-card no-body class="mb-1">
                                                            <b-card-header header-tag="header" class="p-1" role="tab">
                                                                <b-button block href="#" v-b-toggle="'accordion-' + (i+1)"  :aria-controls="'accordion-' + (i+1)" variant="info">{{ a_module.display_name }}</b-button>
                                                            </b-card-header>
                                                            <b-collapse :id="'accordion-' + (i+1)" accordion="my-accordion" role="tabpanel">
                                                                <div v-for="(permission, k) in permissions" :key="k" >
                                                                  <b-card-body v-if="permission.module_id == a_module.id && permission.role_id == role.id">
                                                                      <a-row >
                                                                          <a-col :span="8">
                                                                            <b-form-checkbox inline value="1" unchecked-value="0" v-model="permission.read" @change="updatePermmissions()">Read </b-form-checkbox>
                                                                          </a-col>
                                                                          <a-col :span="8">
                                                                            <b-form-checkbox inline value="1" unchecked-value="0" v-model="permission.write" @change="updatePermmissions()">Edit </b-form-checkbox>
                                                                          </a-col>
                                                                          <a-col :span="8">
                                                                            <b-form-checkbox inline value="1" unchecked-value="0" v-model="permission.delete" @change="updatePermmissions()">Delete </b-form-checkbox>
                                                                          </a-col>
                                                                      </a-row>
                                                                  </b-card-body>
                                                                </div>
                                                            </b-collapse>
                                                        </b-card>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </transition>
                                </b-tab>
                                <b-tab :title="'+'" @click="addRole">
                                    <div class="row" v-if="role_add">
                                        <add-role/>
                                    </div>
                                </b-tab>
                            </b-tabs>
                        </b-card>
                    </div>
                    <div class="col-lg-12  user-roles" v-if="!show_page_loader && active_module_action == 'api_integration'">
                        <api-integration :apis="apis"/>
                    </div>
                    <div class="col-lg-12  user-roles" v-if="!show_page_loader && active_module_action == 'add_module'">
                        <add-module/>
                    </div>
                    <div class="col-lg-12  user-roles" v-if="!show_page_loader && active_module_action == 'edit_module'">
                        <edit-module :in_module="editing_module"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Bar } from 'vue-chartjs';
    import { BarChart } from 'vue-morris';
    import DataTable from '../DataTables/UsersDataTable';
    import EditRole from './EditRole';
    import AddRole from './AddRole';
    import AddModule from './AddModule';
    import EditModule from './EditModule';
    import ApiIntegration from './ApiIntegration';
    import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
    export default {
        extends: Bar,
        components: { 
            BarChart,
            VclFacebook,
            VclInstagram,
            VclTable,
            EditRole,
            AddRole,
            AddModule,
            EditModule,
            ApiIntegration,
            'datatable' : DataTable
        },
        mounted() {
            this.current_user = JSON.parse(this.logged_user);
            this.getRoles();
            this.getModules();
            this.getPermissions();
            this.getDialerPermissions();
            this.getApis();

            var vm = this;

            Fire.$on('DoneAddingRole', function(){
                vm.getRoles();
                vm.getPermissions();
                vm.getDialerPermissions();
            });

            Fire.$on('DoneEditingRole', function(){
                vm.getRoles();
                vm.getPermissions();
                vm.getDialerPermissions();    
            });

            Fire.$on('DoneAddingModule', function(){
                vm.getModules();
            });

            Fire.$on('AfterModuleDelete', function(){
                vm.getModules();
                vm.showModulePreferences('add_module','add_module', null);
            });

            Fire.$on('AfterUpdatingApis', function(){
                vm.getApis();
            });

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        computed: {
        },
        props: ['logged_user'],
        data: function(){
            return {
                edit_role: {
                    display_name : '',
                    description : '',
                    status : '',
                },
                roles: null,
                modules: null,
                apis: null,
                editing_module: null,
                permissions:[],
                dialer_permissions: null,
                current_user: {},
                add_user: false,
                active_module_action: null,
                active_module_name: 'roles',
                show_page_loader: false,
                role_edit: false,
                role_add: false,
                Toast: null,
                dialer_options: ['On', 'Off', 'Can Whisper', 'Can Barge'],
                dialer_selected: [],
                dialer_allSelected: false,
                dialer_indeterminate: false,
                flavours: ['Orange', 'Grape', 'Apple', 'Lime', 'Very Berry'],
                selected: [],
                allSelected: false,
                indeterminate: false
            }
        },
        methods: {
            toggleAll(){

            },
            dialerToggleAll(checked) {
                this.dialer_selected = checked ? this.dialer_options.slice() : []
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
            getRoles(){
                var vm = this;
                var endpoint = '/roles/get-all';

                vm.show_page_loader = true;
                vm.$Progress.start();

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.roles = response.data.roles;
                        vm.editRole(vm.roles[0]);
                        vm.show_page_loader = false;
                        vm.$Progress.finish();
                    }else{
                        vm.show_page_loader = false;
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },	
            getModules(){
                var vm = this;
                var endpoint = '/modules/get-all';

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.modules = response.data.modules;
                    }else{
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },
            getApis(){
                var vm = this;
                var endpoint = '/apis/get-all';

                vm.$Progress.start();

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.apis = response.data.apis;
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },	
            getPermissions(){
                var vm = this;
                var endpoint = '/roles/get-permissions';

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.permissions = response.data.permissions;
                    }else{
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },
            getDialerPermissions(){
                var vm = this;
                var endpoint = '/roles/get-dialer-permissions';

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.dialer_permissions = response.data.permissions;
                    }else{
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },
            applyDialerPermissions(){
                var vm = this;
                var endpoint = '/roles/apply-dialer-permissions';

                vm.$Progress.start();

                axios.put(endpoint, {'permissions':vm.dialer_permissions}).then(function (response) {
                    if(response.data.success == true){
                        vm.dialer_permissions = response.data.permissions;
                        vm.Toast.fire({ type: 'success'});
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },
            editRole(edit_role = null){
                var vm = this;
                vm.edit_role = edit_role;
                vm.role_edit = true;
                vm.role_add = false;
            },
            addRole(){
                var vm = this;
                vm.role_add = true;
                vm.role_edit = false;
            },
            updateRole(role){
                Fire.$emit('UpdateRole', { 
                    'role' : role,
                });
            },
            deleteRole(role){
              var vm = this;  
              vm.$swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#409EFF',
                  cancelButtonColor: '#F56C6C',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.value) {  
                    vm.$Progress.start();

                    var end_point = '/roles/delete';
                    console.log(role);
                    axios.post(end_point,{ 'role' : role }).then(function (response) {
                            
                        if(response.data.success == true){
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
            },
            showModulePreferences(active_module, action, in_module){
                Fire.$emit(action, { 'module' : in_module });
                this.editing_module = in_module;
                this.active_module_name = active_module;
                this.active_module_action = action;
            },
            updatePermmissions(){
                var vm = this;
                var endpoint = '/roles/update-permissions';

                vm.$Progress.start();

                axios.put(endpoint, {'permissions':vm.permissions}).then(function (response) {
                    if(response.data.success == true){
                        vm.permissions = response.data.permissions;
                        vm.Toast.fire({ type: 'success'});
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            }
        },
        watch: {
            selected(newVal, oldVal) {
                // Handle changes in individual flavour checkboxes
                if (newVal.length === 0) {
                this.indeterminate = false
                this.allSelected = false
                } else if (newVal.length === this.flavours.length) {
                this.indeterminate = false
                this.allSelected = true
                } else {
                this.indeterminate = true
                this.allSelected = false
                }
            },
            dialer_selected(newVal, oldVal) {
                // Handle changes in individual flavour checkboxes
                if (newVal.length === 0) {
                this.dialer_indeterminate = false
                this.dialer_allSelected = false
                } else if (newVal.length === this.flavours.length) {
                this.dialer_indeterminate = false
                this.dialer_allSelected = true
                } else {
                this.dialer_indeterminate = true
                this.dialer_allSelected = false
                }
            }
        }
    }
</script>
