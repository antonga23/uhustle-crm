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
.card-body p{
    color: #fff;
    width: 100%;
    margin-right: 0;
    text-align: left;
    float: left;
    margin-bottom: 0;
    margin-top: 0;
}
.card-body p strong{
    float: right;
}
p.card-text{
    font-size: 16px;
    color: #fff;
    font-weight: bolder;
    margin: 0;
    width: 100%;
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
#top-section .filter-stub{
    cursor: pointer;
    margin-right: 15px;
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
.card-head, .ant-card-padding-transition .ant-card-body {
    transition: padding 0.3s;
    overflow-y: scroll;
    height: 380px;
}
</style>
<template>
    <div class="">
        <div id="top-section" class="row" style="margin-top:2%;">

          <div class="filter-card"  @click="getUsers(-1)">
            <div class="card sales-amount">
              <div class="card-body">
                <p class="card-text-small">All  <strong> {{ users.count_leads }} </strong> </p>
              </div>
            </div>
          </div>

          <div class="filter-card" @click="getUsers(1)" v-if="current_user.role_id == 1">
            <div class="card ave-time">
              <div class="card-body">
                <p class="card-text-small">Assigned <strong> {{ users.count_assigned }}</strong></p>               
              </div>
            </div>
          </div>

          <div class="filter-card" @click="getUsers(0)" v-if="current_user.role_id == 1">
            <div class="card con-ratio">
              <div class="card-body">
                <p class="card-text-small">Unassigned<strong>{{ users.count_unassigned }}</strong></p>
              </div>
            </div>
          </div>

          <div class="filter-card" @click="applyFilter({filter: item})" v-for="(item, index) in filter_data" :key="index">
            <div class="card con-ratio">
                <div class="card-body">
                        <a href="#" class="close" @click="deleteFilter( item.id)"></a>
                        <p class="card-text-small">{{ item.title }}<strong>{{ item.counts }}</strong></p>
                </div>
            </div>
          </div>
        </div>
        <hr style="margin-bottom: 2%;">
        <div v-if="!add_user">
            <div class="row stats scroll-hidden">
                <div class="col-lg-12">
                    <datatable id="datatable" :rows="users.leads" :columns="columns" :role="current_user.role_id" :users="users" title=""></datatable>
                </div>
            </div>
        </div>
        <div v-else>
              <a-card title="Add Contact" style="overflow-y: scroll;height: 380px;">
                <div style="margin-top: 20px;width: 100% !important;" >
                    <div :class="{'input': true, 'form-group' :true }">
                            <label class="col-lg-4 control-label">Title
                                <input type="text" id="Name"  name="Name" v-model="user.title" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Name
                                <input type="text" id="Name"  name="Name" v-model="user.name"  class="form-control">
                                <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Surname
                                <input type="text" id="Surname"  name="Surname" v-model="user.surname"  class="form-control">
                                <span id="error" v-show="errors.has('Surname')" class="help-block">{{ errors.first('Surname') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Account
                                <input type="text" id="Account"  name="Account" v-model="user.account" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Email
                                <input type="text" id="email"  name="Email" v-model="user.email" v-validate="'email'"  class="form-control">
                                <span id="error" v-show="errors.has('Email')" class="help-block">{{ errors.first('Email') }}</span>
                            </label>
                            <label class="col-lg-4 control-label" v-if="current_user.role_id == 4">Owner
                                <select type="text" id="role"  name="Owner" v-model="user.user_created_id" class="form-control">
                                    <option value="">- Please Choose Lead Owner </option>
                                    <option value="2" selected>Winsta IO</option>
                                </select>
                            </label>

                            <label class="col-lg-4 control-label" v-else>Owner
                                <select type="text" id="role"  name="Owner" v-model="user.user_created_id" class="form-control">
                                    <option value="">- Please Choose Lead Owner </option>
                                    <option :value="item.id" v-for="(item,index) in users.lead_owners" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label">Mobile number
                                <input type="text" id="work_number"  name="Mobile" v-model="user.phone_number" v-validate="'min:10'" class="form-control">
                                <span id="error" v-show="errors.has('Mobile')" class="help-block">{{ errors.first('Mobile') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Package
                                <select type="text" id="package"  name="Package" v-model="user.product_id"   class="form-control">
                                    <option value="">- Please Choose Package</option>
                                    <option :value="item.id" v-for="(item,index) in users.packages" :key="index">{{ item.name }}</option>
                                </select>
                                <span id="error" v-show="errors.has('Package')" class="help-block">{{ errors.first('Package') }}</span>
                            </label>
                            <label class="col-lg-4 control-label"  v-if="current_user.role_id == 4">Assigned To
                                <select type="text" id="Assignee"  name="Assignee" v-model="user.user_assigned"  class="form-control">
                                    <option value="">- Please Choose Assignee</option>
                                    <option :value="current_user.id" selected="selected">{{ current_user.name + ' ' + current_user.lastname }}</option>
                                </select>
                            </label>
                            <label class="col-lg-4 control-label" v-else>Assigned To
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
                                <select type="text" id="status"  name="Status" v-model="user.status"  class="form-control">
                                    <option value="">- Please Choose Status </option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="0">Canceled</option>
                                </select>
                            </label>
                        <label class="col-lg-12 control-label">
                            <button type="submit" class="btn btn-primary update-user" @click="createUser()">
                                Add Contact
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
    import DataTable from '../DataTables/ContactsDataTable';
    export default {
        extends: Bar,
        components: { 
            BarChart,
            'datatable' : DataTable
        },
        mounted() {
            console.log('Component mounted');

            var vm = this;

            vm.current_user = JSON.parse(vm.logged_user);
            vm.filter_data = JSON.parse(vm.custom_filters);

            vm.getUsers(-1);

			Fire.$on('SaveFilter', function(data){
                console.log('in filters', data);
				vm.filter_data = data.filters;
            });
            
			Fire.$on('AddingUser', function(data){
				vm.add_user = !vm.add_user;
            });

			Fire.$on('FilterData', function(data){
				vm.applyFilter(data);
            });

			Fire.$on('ReloadLeads', function(data){
				vm.getUsers(-1);
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
        props: ['logged_user', 'contacts', 'custom_filters'],
        data: function(){
            return {
                users : {
                    leads: [],
                    count_leads: '',
                    count_unassigned: '',
                    count_assigned: '',
                    sources: [],
                    packages: [],
                    assignees: [],
                    lead_owners: [],
                },
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
                filter_data: [],
                add_user: false,
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
                        label: 'OWNER',  // Column name
                        field: 'creator',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'ASSIGNEE',  // Column name
                        field: 'assignee',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'MOBILE #',  // Column name
                        field: 'phone_number',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'PACKAGE',  // Column name
                        field: 'product',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true,
                        exportable: true
                    },
                    {
                        label: 'START DATE',  // Column name
                        field: 'start_date',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'STATUS',  // Column name
                        field: 'status',  // Field name from row
                        numeric: true, // Affects sorting
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
            getUsers(role ){
                var vm = this;

                if(role == -1){
                    var endpoint = '/leads/get-lead-counts';
                }else if(role == 0 || role == 1){
                    var endpoint = '/leads/get-lead-counts/' + role;
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
                    var endpoint = '/leads/get-lead-counts';
                }else{
                    var endpoint = '/leads/get-lead-counts/' + role;
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
            applyFilter(filter){
                var vm = this;
                vm.$Progress.start();
                axios.post('/filters/filter/0',{ 'filter' : filter }).then(function (response) {
                    if(response.data.success == true){
                        vm.users.leads = response.data.leads;
                        Fire.$emit('CustomFilterApplied', filter);
                        vm.$Progress.finish();
                    }else{
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
                        vm.$Progress.fail();
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
