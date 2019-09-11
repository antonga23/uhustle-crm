<style scoped>
.row{
    margin-bottom: 1%; 
}
.top-section{
    list-style: none;
}
.top-section li{    
    float: left;
    margin-right: 52px;
    padding: 6px 83px 3px 15px;
    border-right: 1px solid #e3e3e3;
}
li p.bottom{
    margin-bottom: 0;
    font-size: 19px;
    font-weight: 900;
}
.card{
    border-radius: 27px;
    border: none;
}
.card-body{
    text-align: center;
}
.card-body p{
    color: #fff;
    width: 68%;
    margin-right: 0;
    text-align: right;
    float: left;
    margin-bottom: 0;
    font-size: 11px;
}
.card-title {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #fff;
}
.calls{
    background: linear-gradient(to right, rgba(255,164,128,1) 0%, rgba(255,128,134,1) 100% ) ;
    color: #fff;
}
.sales{
    background: linear-gradient(to right, rgba(159,204,226,1) 0%, rgba(4,149, 240,1) 100% ) ;
    color: #fff;
}
.sales-amount{
    background: linear-gradient(to right, rgba(221,192,241,1) 0%, rgba(160,117, 209,1) 100% ) ;
    color: #fff;
}
.call-backs{
    background: linear-gradient(to right, rgba(101,215,207,1) 0%, rgba(111,148, 211,1) 100% ) ;
    color: #fff;
}
.ave-time{
    background: linear-gradient(to right, rgba(226,111,145,1) 0%, rgba(239,84,128,1) 100% ) ;
    color: #fff;
}
.con-ratio{
    background: linear-gradient(to right, rgba(97,167,221,1) 0%, rgba(99,101,202 ,1) 100% ) ;
    color: #fff;
}
h5{
    color: #fff;
}
h5 .icon{
    width: 15px;
    margin: -5px 15px 0 0;
}
p.card-text{           
    font-size: 15px;
    color: #fff;
    font-weight: bolder;
    margin: 0;
    width: 29%;
    float: right;
}
p.card-text span{
    font-size: 19px;
    color: #333333;
    font-weight: bolder;
}
p.card-link{
    font-size: 22px;
    color: #333333;
}
.stats .card{
    border-radius: 10px;
}

.stats .card h5{
    color: #818284;
}
.stats .card h5 .icon{
    width: 25px;
    margin: -5px 15px 0 0;
}
.stats .card .card-title {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #bfccd2;
}
span.right{
    float: right;
}
.truncate {
    width: 250px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.list-group-item p{
    margin: 0;
}
.list-group-item p strong{
    font-size: 25px;
    margin-right: 30px;
}
.choose-comment-type{
    float: left;
    display: block;
    height: 50px;
    width: 50px;
    padding: 11px;
    margin: 10px 10px 10px 0;
    background: #f6f8f9;
    border-radius: 9px;
    cursor: pointer;
}

.comment-desc{
    display: block;
    height: 50px;
    width: 75%;
    padding: 11px;
    margin: 10px 10px 10px 0;
    background: #f6f8f9;
    border-radius: 9px;
    border: none;
    cursor: pointer;
    float: left;
}
#send-btn{
    height: 50px;
    margin: 10px 0px 10px 0;
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
    margin-left: -53px;
    margin-right: -66px;
    padding: 0px 37px;

}
.green{
    color:#00a25a !important;
}
.red{
    color:red !important;
}.card-text-small{
    margin-top: -7px;
    color: #3b3b3b;
}
.badge{
    width: 12%;
}
.badge img{
    width: 100%;
}
ul.filters{
    list-style: none;
    padding: 0;
}

ul.filters li{
   width: 10%;
}
ul.headings{
    list-style: none;
    padding-left: 90px;
    display: block;
    width: 100%;
    height: 39px;
    margin-bottom: 0;
}
ul.headings li {
    float: left;
    font-weight: 700;
    color: #9fb3bb;
    width: 15%;
    text-align: left;
}
ul.items{
    list-style: none;
    padding-left: 1px;
    display: block;
    width: 100%;
    height: 39px;
    margin-bottom: 0;
}
ul.items li {
    float:left;
    font-weight: 700;
    color:#003449;    
    width: 14%;
    text-align: left;

}
ul.items li.actions{
    padding-left: 22px;
    width: 10%;
    text-align: right;
}
ul.items li.active{
    padding-left: 16px;
    width: 12%;
}
ul.items li.name{
    width: 20%;
    padding-top: 4px;
}
ul.items li.role{
    padding-top: 7px;
}
ul.items li.mobile{
    padding-left: 17px;
    padding-top: 7px;
}
ul.items li.check{
    width: 1%;
    margin-right: 10px;
    margin-top: 10px;
}
ul.items li.active-date{
    padding-left: 11px;
    padding-top: 7px;
}
ul.items li a:hover{
    text-decoration: none;
}
.scroll-hidden{
    overflow-y: scroll;
    height: 70vh;
    padding-top: 6px;
    padding-right: 6px;
    width: 104%;
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
#top-section .col-lg-2{
    cursor: pointer;
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
</style>
<template>
    <div class="">
        <div id="top-section" class="row" style="margin-top:2%;">
          <div class="col-lg-2" @click="getUsers()">
            <div class="card call-backs">
              <div class="card-body">


                <p class="card-text-small" style="text-align:left">
                    All
                </p>

                <p class="card-text">
                  {{ users.count_all }}
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2" @click="getUsers(1)">
            <div class="card call-backs">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                    Admin
                </p>

                <p class="card-text">
                  {{ users.manager }}
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2"  @click="getUsers(2)">
            <div class="card sales-amount">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                    Account Managers
                </p>

                <p class="card-text">
                  {{ users.account_manager }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2" @click="getUsers(3)">
            <div class="card ave-time">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                      Team Leaders
                </p>

                <p class="card-text">
                  {{ users.team_leader }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2" @click="getUsers(4)">
            <div class="card con-ratio">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                      Agents
                </p>

                <p class="card-text">
                  {{ users.agent }} 
                </p>

              </div>
            </div>
          </div>
        </div>
        <hr style="margin-bottom: 2%;">
        <div v-if="!add_user">
            <div class="row stats scroll-hidden">
                <div class="col-lg-12">
                    <vcl-table v-if="show_page_loader" ></vcl-table>
                    <datatable v-if="!show_page_loader" id="datatable" :rows="users.all_users" :columns="columns" :role="current_user.role_id" :users="users"  title=""></datatable>
                </div>
            </div>
        </div>
        <div v-else>
              <a-card title="Add User"   style="overflow-y: scroll;height: 380px;">
                <div style="margin-top: 20px;width: 100% !important;" >
                    <div :class="{'input': true, 'form-group' :true }">
                        <label class="col-lg-12 control-label">Role
                            <select type="text" id="role"  name="Role" v-model="user.role_id"  class="form-control">
                                <option value="">- Please Choose Role </option>
                                <option :value="item.id" v-for="(item, index) in users.roles" :key="index">{{ item.display_name }}</option>
                            </select>
                            <span id="error" v-show="errors.has('Role')" class="help-block">{{ errors.first('Role') }}</span>
                        </label>
                        <label class="col-lg-4 control-label">Name
                            <input type="text" id="email"  name="Name" v-model="user.name"  class="form-control">
                            <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
                        </label>
                        <label class="col-lg-4 control-label">Surname
                            <input type="text" id="email"  name="Surname" v-model="user.lastname"  class="form-control">
                            <span id="error" v-show="errors.has('Surname')" class="help-block">{{ errors.first('Surname') }}</span>
                        </label>
                        <label class="col-lg-4 control-label">Prefered Nickname
                            <input type="text" id="nickname"  name="Nickname" v-model="user.nickname" class="form-control">
                        </label>
                        <label class="col-lg-4 control-label">Email
                            <input type="text" id="email"  name="Email" v-model="user.email" v-validate="'email'" class="form-control">
                            <span id="error" v-show="errors.has('Email')" class="help-block">{{ errors.first('Email') }}</span>
                        </label>
                        <label class="col-lg-4 control-label">Work Telephone
                            <input type="text" id="work_number"  name="Work Tel" v-model="user.work_number" v-validate="'min:10'" class="form-control">
                            <span id="error" v-show="errors.has('Work Tel')" class="help-block">{{ errors.first('Work Tel') }}</span>
                        </label>
                        <label class="col-lg-4 control-label">Cellphone number
                            <input type="text" id="personal_number"  name="Cell Number" v-model="user.personal_number" v-validate="'min:10'" class="form-control">
                            <span id="error" v-show="errors.has('Cell Number')" class="help-block">{{ errors.first('Cell Number') }}</span>
                        </label>
                        <label class="col-lg-12 control-label">Address
                            <textarea id="address"  name="Address" v-model="user.address"  class="form-control"></textarea>
                            <span id="error" v-show="errors.has('Address')" class="help-block">{{ errors.first('Address') }}</span>
                        </label>
                        <label class="col-lg-3 control-label">Username
                            <input type="text" id="email"  name="Old Password" v-model="user.email" class="form-control" disabled>
                            <span id="error" v-show="errors.has('Old Password')" class="help-block">{{ errors.first('Old Password') }}</span>
                        </label>
                        <label class="col-lg-3 control-label">New Password <em><small>Default: P@ssword</small></em>
                            <input type="password" id="password" ref="password" name="New Password" v-model="user.password" v-validate="'min:6'" class="form-control">
                            <span id="error" v-show="errors.has('New Password')" class="help-block">{{ errors.first('New Password') }}</span>
                        </label>
                        <label class="col-lg-3 control-label">Confirm New Password
                            <input type="password" id="password_confirm"  name="Password Confirm" v-model="user.password_confirmation" v-validate="'min:6|confirmed:password'" class="form-control">
                            <span id="error" v-show="errors.has('Password Confirm')" class="help-block">{{ errors.first('Password Confirm') }}</span>
                        </label>
                        <label class="col-lg-12 control-label">
                            <button type="submit" class="btn btn-primary update-user" @click="createUser()">
                                Add User
                            </button>
                        </label>
                    </div>
                </div>
            </a-card>
        </div>
    </div>
</template>

<script>
    import { Bar } from 'vue-chartjs';
    import { BarChart } from 'vue-morris';
    import DataTable from '../DataTables/UsersDataTable';
    import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
    export default {
        extends: Bar,
        components: { 
            BarChart,
            VclFacebook,
            VclInstagram,
            VclTable,
            'datatable' : DataTable
        },
        mounted() {
            console.log('Component mounted');
            this.current_user = JSON.parse(this.logged_user);
            this.getUsers();

            var vm = this;

			Fire.$on('AddingUser', function(data){
				vm.add_user = !vm.add_user;
            });
            
			Fire.$on('ReloadUsers', function(data){
				vm.getUsers();
            });

			Fire.$on('FilterData', function(data){
				vm.applyFilter(data);
            });

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
                users : {
                    all_users: [],
                    count_all: '',
                    manager: '',
                    account_manager: '',
                    team_leader: '',
                    agent: '',
                    roles: '',
                    current_user: '',
                },
				user: {
                    leads: [],
                    clients: [],
                },
                current_user: {},
                add_user: false,
                show_page_loader: false,
                avatarUrl: '/images/avatars/',
                noImageUrl: '/images/icons/user_icon@4x.png',
                bulk_actions: "",
                Toast: null,
                columns:[
                    {
                        label: 'FULL NAME',  // Column name
                        field: 'full_name',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'EMAIL',  // Column name
                        field: 'email',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'ROLE',  // Column name
                        field: 'role',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'CONTACT NUMBER',  // Column name
                        field: 'personal_number',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true,
                        exportable: true
                    },
                    {
                        label: 'LAST ACTIVE',  // Column name
                        field: 'updated_at',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'STATUS',  // Column name
                        field: 'status',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'ACTIONS',  // Column name
                        field: 'actions',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                ]
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
            getUsers(role = ''){
                var vm = this;

                if(role == ''){
                    var endpoint = '/users/get-user-counts';
                }else{
                    var endpoint = '/users/get-user-counts/' + role;
                }
                vm.show_page_loader = true;
                vm.$Progress.start();

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.users.all_users = response.data.selected_users;
                        vm.users.count_all = response.data.count_all;
                        vm.users.manager = response.data.manager;
                        vm.users.account_manager = response.data.account_manager;
                        vm.users.team_leader = response.data.team_leader;
                        vm.users.agent = response.data.agent;
                        vm.users.roles = response.data.roles;
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
                            
                            axios.post('/users/create',this.user).then(function (response) {
                                    
                                if(response.data.success == true){
                                    vm.Toast.fire({ type: 'success', title: response.data.message });
                                    vm.$Progress.finish();
                                    vm.add_user = !vm.add_user;
                                    vm.user = {
                                        leads: [],
                                        clients: [],
                                    };
                                    vm.getUsers();
                                    Fire.$emit('DoneAddingUser');
                                }
                                
                                if(response.data.errors.email[0] != ''){
                                    vm.$Progress.fail();
                                    vm.$swal('Failed', response.data.errors.email[0] ,'warning');
                                }
                                
                                if(response.data.success == false){
                                    vm.$Progress.fail();
                                    vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                                }
                            });
						}
				});
            },
            showEditModal(user, leads, clients){
                var vm = this;
                this.user = user;
                this.user.leads = leads;
                this.user.clients = clients;
                this.$bvModal.show('update-user-modal');
            },
            handleOk(bvModalEvt) {
                // Prevent modal from closing
                bvModalEvt.preventDefault()
                // Trigger submit handler
                this.handleSubmit()
            },
            handleSubmit(){
				var vm = this;  
				vm.$Progress.start();
				this.$validator.validateAll().then((result) => {
                        if(!result){
                        }else{
                            axios.post('/users/update',vm.user).then(function (response) {
                                    
                                if(response.data.success == true){
                                    vm.Toast.fire({ type: 'success', title: response.data.message });
                                    vm.getUsers();
                                    vm.$bvModal.hide('update-user-modal');
                                    vm.user = {
                                        leads: [],
                                        clients: [],
                                    };
                                    vm.$Progress.finish();
                                }else if(response.data.errors.email[0] != ''){
                                    vm.$Progress.fail();
                                    vm.$swal('Failed', response.data.errors.email[0] ,'warning');
                                }else{
                                    vm.$Progress.fail();
                                    vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                                }
                            });
						}
				});
            },
            orderBy(){

            }
        }
    }
</script>
