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
    font-size: 49px;
    color: #fff;
    font-weight: bolder;
    margin: 0;
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
          <div class="col-lg-2"  @click="getUsers()">
            <div class="card sales-amount">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                      All
                </p>

                <p class="card-text">
                  {{ users.count_leads }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2" @click="getUsers(1)" v-if="current_user.role_id == 1 || current_user.role_id == 2">
            <div class="card ave-time">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                      Assigned
                </p>

                <p class="card-text">
                  {{ users.count_assigned }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2" @click="getUsers(0)" v-if="current_user.role_id == 1 || current_user.role_id == 2">
            <div class="card con-ratio">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                      Unassigned
                </p>

                <p class="card-text">
                  {{ users.count_unassigned }} 
                </p>

              </div>
            </div>
          </div>
        </div>
        <hr style="margin-bottom: 2%;">
        <div v-if="!add_user">
            <div class="row stats">
                <div class="col-lg-12">
                    <div class="left" style="text-align: left;">
                        <div class="card-body" style="padding-bottom: 18px;">
                            <ul class="headings" v-if="current_user.role_id == 1 || current_user.role_id == 2">
                                <li>FULL NAME</li>
                                <li>ACCOUNT</li>
                                <li>EMAIL</li>
                                <li>OWNER</li>
                                <li>MOBILE #</li>
                                <li>PACKAGE</li>
                                <li>LAST ACTIVITY</li>
                                <li>ACTIVITY</li>
                                <li>STATUS</li>
                            </ul>
                            <ul class="headings" v-if="current_user.role_id == 4">
                                <li>FULL NAME</li>
                                <li>ACCOUNT</li>
                                <li>EMAIL</li>
                                <li>OWNER</li>
                                <li>MOBILE #</li>
                                <li>PACKAGE</li>
                                <li>LAST ACTIVITY</li>
                                <li>ACTIVITY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div :class="{ 'row stats': true, 'scroll-hidden' : users.leads.length > 8 }" v-if="users.leads.length > 0">
                <div class="col-lg-12" v-for="(item,index) in users.leads" :key="index">
                    <div class="card left" style="text-align: left;">
                        <div class="card-body" style="padding-bottom: 12px;padding-top: 12px;">
                            <ul class="items">
                                <li v-if="current_user.role_id == 1 || current_user.role_id == 2">
                                    <a href="#" @click="showEditModal(item)">
                                        {{ item.name +  ' ' + item.surname }}
                                    </a>
                                </li>
                                <li v-if="current_user.role_id == 4">
                                    <a :href="'/workstation/' + item.id">
                                        {{ item.name +  ' ' + item.surname }}
                                    </a>
                                </li>
                                <li class="truncate" :title="item.account" style="padding-left: 30px;" >{{ item.account }}</li>
                                <li class="truncate"  :title="item.email" >{{ item.email }}</li>
                                <li class="truncate" :title="item.creator.name + ' ' + item.creator.lastname" style="padding-left: 11px;" >{{ item.creator.name + ' ' + item.creator.lastname }}</li>
                                <li style="padding-left: 23px;" >{{ item.phone_number }}</li>
                                <li style="padding-left: 11px;" >{{ item.product.name }}</li>
                                <li class="truncate" :title="getLastCommentDade(item.comments)" style="padding-left: 11px;" >{{ getLastCommentDade(item.comments) }}</li>
                                <li class="truncate" :title="getLastCommentType(item.comments)" style="padding-left: 11px;" >{{ getLastCommentType(item.comments) }}</li>
                                <li v-if="current_user.role_id == 1 || current_user.role_id == 2">
                                    <span v-if="item.status == 1" style="color:green;">Active</span>
                                    <span v-if="item.status == 2" style="color:orange;">Inactive</span>
                                    <span v-if="item.status == 0" style="color:red;">Canceled</span>
                                </li>
                                <li v-if="current_user.role_id == 1 || current_user.role_id == 2" style="width:1%">
                                    <a href="#" class="btn btn-danger" @click="deleteItem(item.id)" style="margin: -3px 0 0 0;padding: 0px 7px;">
                                        x
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row stats"  v-else>
                <div class="card left" style="width: 100%;">
                    <div class="card-body" style="padding-bottom: 12px;">
                        <ul class="items">
                            <li colspan="7" style="text-align:center;width: 100%;">0 Contacts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
              <a-card title="Add Lead">
                <div style="margin-top: 20px;width: 100% !important;" >
                    <div :class="{'input': true, 'form-group' :true }">
                            <label class="col-lg-4 control-label">Title
                                <input type="text" id="Name"  name="Name" v-model="user.title" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Name
                                <input type="text" id="Name"  name="Name" v-model="user.name" v-validate="'required'" class="form-control">
                                <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Surname
                                <input type="text" id="Surname"  name="Surname" v-model="user.surname" v-validate="'required'" class="form-control">
                                <span id="error" v-show="errors.has('Surname')" class="help-block">{{ errors.first('Surname') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Account
                                <input type="text" id="Account"  name="Account" v-model="user.account" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Email
                                <input type="text" id="email"  name="Email" v-model="user.email" v-validate="'required|email'"  class="form-control">
                                <span id="error" v-show="errors.has('Email')" class="help-block">{{ errors.first('Email') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Owner
                                <select type="text" id="role"  name="Owner" v-model="user.user_created_id" class="form-control">
                                    <option value="">- Please Choose Lead Owner </option>
                                    <option :value="item.id" v-for="(item,index) in users.lead_owners" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label">Mobile number
                                <input type="text" id="work_number"  name="Mobile" v-model="user.phone_number" v-validate="'required|min:10'" class="form-control">
                                <span id="error" v-show="errors.has('Mobile')" class="help-block">{{ errors.first('Mobile') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Package
                                <select type="text" id="package"  name="Package" v-model="user.product_id"  v-validate="'required'" class="form-control">
                                    <option value="">- Please Choose Package</option>
                                    <option :value="item.id" v-for="(item,index) in users.packages" :key="index">{{ item.name }}</option>
                                </select>
                                <span id="error" v-show="errors.has('Package')" class="help-block">{{ errors.first('Package') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Assigned To
                                <select type="text" id="Assignee"  name="Assignee" v-model="user.user_assigned"  class="form-control">
                                    <option value="">- Please Choose Assignee</option>
                                    <option :value="item.id" v-for="(item,index) in users.assignees" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label">Lead Source
                                <select type="text" id="Source"  name="Source" v-model="user.source"  class="form-control">
                                    <option value="">- Please Choose Source</option>
                                    <option :value="item" v-for="(item,index) in users.sources" :key="index">{{ item.name}}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label">Country
                                <input type="text" id="Country"  name="Country" v-model="user.country" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">City
                                <input type="text" id="City"  name="City" v-model="user.city" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Status
                                <select type="text" id="role"  name="Role" v-model="user.status" v-validate="'required'" class="form-control">
                                    <option value="">- Please Choose Status </option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="0">Canceled</option>
                                </select>
                            </label>
                        <label class="col-lg-12 control-label">
                            <button type="submit" class="btn btn-primary update-user" @click="createUser()">
                                Add Lead
                            </button>
                        </label>
                    </div>
                </div>
            </a-card>
        </div>
        <div>
            <b-modal
            id="update-user-modal"
            ref="modalUpdateUser"
            title="Update Lead"
            size="lg"
            header-text-variant="light"
            header-bg-variant="warning"
            @ok="handleOk"
            >
                <a-card title="Lead Information">
                    <form ref="form" @submit.stop.prevent="handleSubmit">
                        <div :class="{'input': true, 'form-group' :true }">
                            <label class="col-lg-4 control-label">Title
                                <input type="text" id="Name"  name="Name" v-model="user.title" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Name
                                <input type="text" id="Name"  name="Name" v-model="user.name" v-validate="'required'" class="form-control">
                                <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Surname
                                <input type="text" id="Surname"  name="Surname" v-model="user.surname" v-validate="'required'" class="form-control">
                                <span id="error" v-show="errors.has('Surname')" class="help-block">{{ errors.first('Surname') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Account
                                <input type="text" id="Account"  name="Account" v-model="user.account" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Email
                                <input type="text" id="email"  name="Email" v-model="user.email"  v-validate="'required|email'" class="form-control">
                                <span id="error" v-show="errors.has('Email')" class="help-block">{{ errors.first('Email') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Owner
                                <select type="text" id="role"  name="Owner" v-model="user.user_created_id" class="form-control">
                                    <option value="">- Please Choose Lead Owner </option>
                                    <option :value="item.id" v-for="(item,index) in users.lead_owners" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label">Mobile number
                                <input type="text" id="work_number"  name="Mobile" v-model="user.phone_number" v-validate="'required|min:10'" class="form-control">
                                <span id="error" v-show="errors.has('Mobile')" class="help-block">{{ errors.first('Mobile') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Package
                                <select type="text" id="package"  name="Package" v-model="user.product_id"  v-validate="'required'" class="form-control">
                                    <option value="">- Please Choose Package</option>
                                    <option :value="item.id" v-for="(item,index) in users.packages" :key="index">{{ item.name }}</option>
                                </select>
                                <span id="error" v-show="errors.has('Package')" class="help-block">{{ errors.first('Package') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Assigned To
                                <select type="text" id="Assignee"  name="Assignee" v-model="user.user_assigned"  class="form-control">
                                    <option value="">- Please Choose Assignee</option>
                                    <option :value="item.id" v-for="(item,index) in users.assignees" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label">Lead Source
                                <select type="text" id="Source"  name="Source" v-model="user.source"  class="form-control">
                                    <option value="">- Please Choose Source</option>
                                    <option :value="item" v-for="(item,index) in users.sources" :key="index">{{ item.name}}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label">Country
                                <input type="text" id="Country"  name="Country" v-model="user.country" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">City
                                <input type="text" id="City"  name="City" v-model="user.city" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Status
                                <select type="text" id="role"  name="Role" v-model="user.status" v-validate="'required'" class="form-control">
                                    <option value="">- Please Choose Status </option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="0">Canceled</option>
                                </select>
                            </label>
                        </div>
                    </form>
                </a-card>
                <a-card :title="'Comments: ' + user.comments.length " style="margin-top:20px">
                    <a-list itemLayout="horizontal" :dataSource="user.comments">
                        <a-list-item slot="renderItem" slot-scope="item, index">
                            <a-list-item-meta :description="item.comment_type + ': ' + item.description">
                                <a slot="title" href="#">{{item.user_name}}</a>
                            </a-list-item-meta>
                        </a-list-item>
                    </a-list>
                </a-card>
            </b-modal>
        </div>
    </div>
</template>

<script>
    import { Bar } from 'vue-chartjs';
    import { BarChart } from 'vue-morris';
    export default {
        extends: Bar,
        components: { 
            BarChart,
        },
        mounted() {
            console.log('Component mounted');

            var vm = this;

            vm.current_user = JSON.parse(vm.logged_user);

            vm.getUsers();


			Fire.$on('AddingUser', function(data){
				vm.add_user = !vm.add_user;
            });
            
            var interval = setInterval(function() {
                  vm.getUsersSilently();
            }, 2000);
            
            vm.Toast = vm.$swal.mixin({
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
                    leads: '',
                    count_leads: '',
                    count_unassigned: '',
                    count_assigned: '',
                    sources: [],
                    packages: [],
                    assignees: [],
                    lead_owners: [],
                },
				user: {
                    comments: [],
                    assigned: [],
                },
                current_user: [],
                add_user: false,
                Toast: null
            }
        },
        methods: {
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
            getUsers(role = ''){
                var vm = this;

                if(role == 1){
                    var endpoint = '/leads/get-client-counts';
                }else{
                    var endpoint = '/leads/get-client-counts/' + role;
                }

                vm.$Progress.start();

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.users.leads = response.data.leads;
                        vm.users.count_leads = response.data.count_leads;
                        vm.users.count_unassigned = response.data.count_unassigned;
                        vm.users.count_assigned = response.data.count_assigned;
                        vm.users.lead_owners = response.data.lead_owners;
                        vm.users.assignees = response.data.assignees;
                        vm.users.packages = response.data.packages;
                        vm.users.sources = response.data.sources;
                        
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                    }
                });
            },
            getUsersSilently(role = ''){
                var vm = this;

                if(role == 1){
                    var endpoint = '/leads/get-client-counts';
                }else{
                    var endpoint = '/leads/get-client-counts/' + role;
                }

                axios.get(endpoint).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.users.leads = response.data.leads;
                        vm.users.count_leads = response.data.count_leads;
                        vm.users.count_unassigned = response.data.count_unassigned;
                        vm.users.count_assigned = response.data.count_assigned;
                        vm.users.lead_owners = response.data.lead_owners;
                        vm.users.assignees = response.data.assignees;
                        vm.users.packages = response.data.packages;
                        vm.users.sources = response.data.sources;
                        
                    }else{
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
                                    vm.getUsers();
                                    Fire.$emit('DoneAddingUser');
                                }else {
                                    vm.$Progress.fail();
                                    vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                                }
                            });
						}
				});
            },
            showEditModal(user){
                var vm = this;
                this.user = user;
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
                            axios.post('/leads/update',vm.user).then(function (response) {
                                    
                                if(response.data.success == true){
                                    vm.Toast.fire({ type: 'success', title: response.data.message });
                                    vm.getUsers();
                                    vm.$bvModal.hide('update-user-modal');
                                    vm.user = {
                                        comments: [],
                                        assigned: [],
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
            deleteItem(id){
                var vm = this;  
                vm.$swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#F56C6C',
                    cancelButtonColor: '#409EFF',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        vm.$Progress.start();
                        axios.get('/leads/delete/' + id).then(function (response) {
                            if(response.data.success == true){
                                vm.Toast.fire({ type: 'success', title: response.data.message });
                                vm.getUsers();
                                vm.$Progress.finish();
                            }else{
                                vm.$Progress.fail();
                                vm.$swal('Failed', 'Opps, something went wrong while deleting data, please try again','warning');
                            }
                        });
                    }
                });
            }
        }
    }
</script>
