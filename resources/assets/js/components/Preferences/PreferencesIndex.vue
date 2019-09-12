<style scoped>

	/*Right Component*/
	li.title a strong{
		color: #003449;
		font-size: 25px;
	    letter-spacing: 4.2px;
	}

	.navbar-nav li.title{
		line-height: 20px;
	}

	.pull-right{
		float: right;
	}

	.pull-right li{
    	float: left !important;
	    width: 43px;
        margin-left: 15px !important;
	}

	.pull-right li a{
	    background-size: 100%;
	    background-repeat: no-repeat;
	    color: black;
	    padding: 0 !important;
	    background-size: 59px !important;
	    background-repeat: no-repeat !important;
	    background-position: center center !important;
	}

	.pull-right li a.search{
    	background-image: url('/images/icons/Asset 60.svg') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.pull-right li a.search:hover{
    	background-image: url('/images/icons/Asset 61.svg') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}
	.pull-right li.idle .status{
    	background-image: url('/images/icons/Asset 55.svg') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}


	.pull-right li.on-call .status{
    	background-image: url('/images/icons/Asset 56.svg') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.pull-right li.offline .status{
    	background-image: url('/images/icons/Asset 57.svg') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.pull-right li .call{
    	background-image: url('/images/icons/Asset 59.svg') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.pull-right li .call:hover{
    	background-image: url('/images/icons/Asset 58.svg') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.pull-right li .add-call-back-btn{
    	background-image: url('/images/workstation/Asset 28@4x.png') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
		background-color: transparent;
		border: none;
		padding: 14px;
		margin-top: 5px;
		margin-left: 20px;
	}

	.pull-right button{
	    background-color: transparent;border: none;padding: 29px;margin-top: -10px;
	}

	.border-bottom {
	    border-bottom: none !important;
        margin-left: -10px !important;
        padding: 0 0 0;
	}
	.modal-content{
		background: linear-gradient(to right, rgba(255,129,51,1) 0%, rgba(255,147,58,1) 100%);
	}
	.error{
		color:#F98B39;
	}

	a.top-link{    
		border-radius: 26px;
	    margin: 5px 8px 8px 55px !important;
	    height: 29px !important;
	    padding: 2px 17px 6px !important;
		display: block;
		width: 84%;
		text-align: center;
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

    .final-modal{
        padding: 0 0 1rem;
        border: none
    }
    .final-modal .tab-card{
        border: none;
        box-shadow: none;
    }
    .final-modal .row-a{
        width: 100%;
        border-bottom: 1px solid #e3e3e3;
        margin-left: 0;
    }
    .final-modal label button img{
        width: 20px;
        margin-right: 15px;
    }
    .final-modal .navbar-nav .nav-item{
        font-size: 55px;
        color: #FF933A;
    }
    .final-modal .card-header-tabs{
        border-bottom: none;
        margin-bottom: 0;
    }
    .final-modal .card-header{    
        padding: 0 11px 0;
        border-bottom: none;
    }
    .final-modal .card-header a[aria-selected="true"]{
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
    }
    .final-modal .card-header-tabs .left a.active[aria-selected="true"]{
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
        box-shadow: 11px -7px 16px -11px rgba(138,134,134,0.75);
        -webkit-box-shadow: 11px -7px 16px -11px rgba(138,134,134,0.75);
        -moz-box-shadow: 11px -7px 16px -11px rgba(138,134,134,0.75);
        border:none;
    }
    .final-modal .card-header-tabs .left a[aria-selected="false"]{
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
        box-shadow: -4px -7px 16px -11px rgba(138,134,134,0.75) inset;
        -webkit-box-shadow: -4px -7px 16px -11px rgba(138,134,134,0.75) inset;
        -moz-box-shadow: -4px -7px 16px -11px rgba(138,134,134,0.75) inset;
        border:none;
    }
    .final-modal .card-header-tabs .right a.active[aria-selected="true"]{
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
        box-shadow: -8px -7px 14px -9px rgba(138,134,134,0.75);
        -webkit-box-shadow:-8px -7px 14px -9px rgba(138,134,134,0.75);
        -moz-box-shadow: -8px -7px 14px -9px rgba(138,134,134,0.75);
        border:none;
    }
    .final-modal .card-header-tabs .right a[aria-selected="false"]{
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
        box-shadow: 5px -7px 16px -11px rgba(138,134,134,0.75) inset;
        -webkit-box-shadow: 5px -7px 16px -11px rgba(138,134,134,0.75) inset;
        -moz-box-shadow: 5px -7px 16px -11px rgba(138,134,134,0.75) inset;
        border:none;
    }
    .control-sidebar-dark .nav-tabs {
        border-bottom: 0;
    }
    .final-modal .card ul li.left{
        width: 50%;
    }
    .final-modal .card ul li.left .nav-link {
        padding: 6px 12px;
        font-size: 16px;
        color: #818284;
    }
    .final-modal .card ul li.left .nav-link:hover {
        border: none;
        background: #fff;
        padding: 6px 12px;
        font-size: 16px;
    }
    .final-modal .card ul li.right{
        width: 50%;
    }
    .final-modal .card ul li.right .nav-link {
        background: #fff;
        padding: 6px 12px;
        font-size: 16px;
        color: #818284;
    }
    .final-modal .card ul li.right .nav-link:hover {
        background: #fff;
        padding: 6px 12px;
        font-size: 16px;
    }
    .final-modal input{
        font-size: 9px;
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
    .user-roles .tab-pane .row .col-lg-2 button{
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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" @click="addNew();" :class="{ 'nav-link top-link' : true, 'active' : user_roles_active }" class="nav-link">User Roles</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" @click="addNew();" :class="{ 'nav-link top-link' : true, 'active' : api_inte_active }" class="nav-link">API Integration</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" @click="addNew();" :class="{ 'nav-link top-link' : true, 'active' : leads_active }" class="nav-link">Leads</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" @click="addNew();" :class="{ 'nav-link top-link' : true, 'active' : contacts_active }" class="nav-link">Contacts</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" @click="addNew();" :class="{ 'nav-link top-link' : true, 'active' : add_new_section_active }" class="nav-link" title="Add new section">+ Add New</a>
                </li>
            </ul>
		</nav>
        <hr style="margin-bottom: 2%;">
        <div>
            <div class="row stats scroll-hidden">
                <div class="col-lg-12">
                    <vcl-table v-if="show_page_loader" ></vcl-table>
                    <div class="col-lg-12 final-modal user-roles" v-if="!show_page_loader">
                        <b-card no-body>
                            <b-tabs card>
                                <b-tab :title="role.display_name" v-for="(role,index) in roles" :key="index" :active="(index == 0)? true : false">
                                    <div class="row" >
                                        <b-card :title="a_module.display_name" sub-title="Permisions"  v-for="(a_module,i) in modules" :key="i" class="col-lg-3">
                                            <div v-for="(permission,k) in permissions" :key="k">
                                                <b-form-group  class="permisions" v-if="permission.module_id == a_module.id && role.id == permission.role_id && a_module.id == 1">
                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.status">{{ (permission.status == 1)? 'On' : 'Off' }}</b-form-checkbox>
                                                </b-form-group>
                                                <b-form-group  class="permisions" v-else-if="permission.module_id == a_module.id && role.id == permission.role_id">
                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.read">View</b-form-checkbox>
                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.write">Edit</b-form-checkbox>
                                                    <b-form-checkbox value="1" unchecked-value="0" v-model="permission.delete">Delete</b-form-checkbox>
                                                </b-form-group>
                                            </div>
                                        </b-card>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <b-button variant="success" @click="applyPermissions">Apply Permissions</b-button>
                                        </div>
                                        <div class="col-lg-2">
                                            <b-button variant="success" @click="editRole(role)">Edit Role</b-button>
                                        </div>
                                        <div class="col-lg-2">
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
                user : {
                    all_users: [],
                    count_all: '',
                    manager: '',
                    account_manager: '',
                    team_leader: '',
                    agent: '',
                    roles: '',
                    current_user: '',
                },
                edit_role: {
                    display_name : '',
                    description : '',
                    status : '',
                },
                roles: null,
                modules: null,
                permissions:[],
				user: {
                    leads: [],
                    clients: [],
                },
                current_user: {},
                add_user: false,
                user_roles_active: true,
                leads_active: false,
                contacts_active: false,
                add_new_section_active: false,
                api_inte_active: false,
                show_page_loader: false,
                role_edit: false,
                role_add: false,
                avatarUrl: '/images/avatars/',
                noImageUrl: '/images/icons/user_icon@4x.png',
                bulk_actions: "",
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
