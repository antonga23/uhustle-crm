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
        min-height: 187px;
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
                    <a href="#" @click="showModulePreferences('roles');" :class="{ 'active' : ( active_module ===  'roles')? true : false }">Roles</a>
                </li>
                <li class="item" v-for="(module, index) in modules" :key="index">
                    <a href="#" @click="showModulePreferences(module.tag);" :class="{ 'active' : ( active_module ===  module.tag)? true : false }">{{ module.display_name }}</a>
                </li>
                <li class="item">
                    <a href="#" @click="showModulePreferences('add_new');" :class="{ 'active' : ( active_module ===  'add_new')? true : false }" title="Add new section">+ Add New</a>
                </li>
            </ul>
		</div>
        <hr style="margin-bottom: 2%;">
        <div>
            <div class="row stats scroll-hidden">
                <div class="col-lg-12">
                    <vcl-table v-if="show_page_loader" ></vcl-table>
                    <div class="col-lg-12  user-roles" v-if="!show_page_loader">
                        <b-card no-body>
                            <b-tabs card>
                                <b-tab :title="role.display_name" v-for="(role,index) in roles" :key="index" :active="(index == 0)? true : false">
                                    <div class="row" >
                                        <b-card :title="a_module.display_name" sub-title="Permisions"  v-for="(a_module,i) in modules" :key="i" class="col-lg-3">
                                            <div v-for="(permission,k) in permissions" :key="k" v-if="a_module.id !== 1">
                                                <b-form-group  class="permisions" v-if="permission.module_id == a_module.id && role.id == permission.role_id && a_module.id == 1">
                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.status">{{ (permission.status == 1)? 'On' : 'Off' }}</b-form-checkbox>
                                                </b-form-group>
                                                <b-form-group  class="permisions" v-else-if="permission.module_id == a_module.id && role.id == permission.role_id">
                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.read">View</b-form-checkbox>

                                                        <b-form-group  class="permisions">
                                                            <b-form-checkbox value="1" unchecked-value="0" v-model="permission.read">Name</b-form-checkbox>
                                                            <b-form-checkbox value="1" unchecked-value="0" v-model="permission.write">Surname</b-form-checkbox>
                                                            <b-form-checkbox value="1" unchecked-value="0" v-model="permission.delete">Phone number</b-form-checkbox>
                                                        </b-form-group>

                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.write">Edit</b-form-checkbox>

                                        
                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.delete">Delete</b-form-checkbox>

                                

                                                </b-form-group>
                                            </div>
                                        </b-card>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <b-button variant="success" @click="applyPermissions">Apply Permissions</b-button>
                                        </div>
                                        <div class="col-lg-3">
                                            <b-button variant="success" @click="editRole(role)">Edit Role</b-button>
                                        </div>
                                        <div class="col-lg-3">
                                            <b-button variant="success" @click="addRole">Add New Role</b-button>
                                        </div>
                                    </div>
                                    <div class="row" v-if="role_edit">
                                        <edit-role :role="edit_role" />
                                    </div>
                                    <div class="row" v-if="role_add">
                                        <add-role/>
                                    </div>
                                </b-tab>
                            </b-tabs>
                        </b-card>
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
            'datatable' : DataTable
        },
        mounted() {
            console.log('Component mounted');
            this.current_user = JSON.parse(this.logged_user);
            this.getRoles();
            this.getModules();
            this.getPermissions();

            var vm = this;

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        created: function () {
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
                permissions:[],
                current_user: {},
                add_user: false,
                active_module: 'roles',
                show_page_loader: false,
                role_edit: false,
                role_add: false,
                Toast: null,
            }
        },
        methods: {
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
            applyPermissions(){
                var vm = this;
                var endpoint = '/roles/apply-permissions';

                vm.$Progress.start();

                axios.put(endpoint, {'permissions':vm.permissions}).then(function (response) {
                    if(response.data.success == true){
                        vm.permissions = response.data.permissions;
                        vm.$Progress.finish();
                        vm.Toast.fire({ type: 'success', title: 'Permissions have been applied' });
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
            }
        }
    }
</script>
