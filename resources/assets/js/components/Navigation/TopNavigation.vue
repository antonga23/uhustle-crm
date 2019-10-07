<style scoped>
	/*Right Component*/
	.main-header.navbar.navbar-expand {
		padding: 23px 4% 0;
	}
	.navbar-nav li.title{
		line-height: 20px;
	}
	li.title a strong{
		color: #003449;
		font-size: 25px;
	  letter-spacing: 4.2px;
	}
	a.top-link{    
		border-radius: 26px;
    height: 30px !important;
    padding: 2px 17px 6px !important;
		font-family: 'Rubik', sans-serif;
		letter-spacing: 1px;
	}
	a.active{    
		border-radius: 26px;
    height: 30px !important;
    background: #F98B39 !important;
    border-color: #F98B39 !important;
    color: #fff !important;
    padding: 4px 17px 6px !important;
	}
	select{
    border-radius: 26px;
    margin: 5px 8px 8px 55px !important;
    height: 30px !important;
    background: #F98B39 !important;
    border-color: #F98B39 !important;
    color: #fff !important;
    padding: 2px 17px 6px !important;
	}
	select.month-selector {
		margin-left: 0!important;
		margin-right: 0!important;
	}
	.callIcons li{
    width: 43px;
    margin-left: 15px !important;
	}
	.callIcons li a{
    background-repeat: no-repeat;
    color: black;
    background-size: 59px !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;
	}
	.callIcons li a.search{
    background-image: url('/images/icons/Asset 60.svg') !important;
    background-size: contain;
    background-repeat: no-repeat;
	}
	.callIcons li a.search:hover{
    background-image: url('/images/icons/Asset 61.svg') !important;
    background-size: contain;
    background-repeat: no-repeat;
	}
	.callIcons li.idle .status{
    background-image: url('/images/icons/Asset 55.svg') !important;
    background-size: contain;
    background-repeat: no-repeat;
	}
	.callIcons li.on-call .status{
    background-image: url('/images/icons/Asset 56.svg') !important;
    background-size: contain;
    background-repeat: no-repeat;
	}
	.callIcons li.offline .status{
    background-image: url('/images/icons/Asset 57.svg') !important;
    background-size: contain;
    background-repeat: no-repeat;
	}
	.callIcons li .call{
    background-image: url('/images/icons/Asset 59.svg') !important;
    background-size: contain;
    background-repeat: no-repeat;
	}
	.callIcons li .call:hover{
    background-image: url('/images/icons/Asset 58.svg') !important;
    background-size: contain;
    background-repeat: no-repeat;
	}
	.callIcons li .add-call-back-btn{
    background-image: url('/images/workstation/Asset 28@4x.png') !important;
    background-size: contain;
    background-repeat: no-repeat;
	background-color: transparent;
	border: none;
	padding: 14px;
	margin-top: 5px;
	margin-left: 20px;
	}
	.callIcons button.status, .callIcons button.call {
		padding: 31px;
		margin-top: -11px;
		margin-left: -7px;
	}
	.modal-content{
		background: linear-gradient(to right, rgba(255,129,51,1) 0%, rgba(255,147,58,1) 100%);
	}
	/*is error being used?*/
	.error{
		color:#F98B39;
	}
	/*End Right Component*/
</style>
<template>
	<div>
		<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0">
			<!-- Left navbar links -->
			<div class="row w-100 justify-content-between">
				<div class="col-auto">
					<ul class="navbar-nav left align-items-center">
						<li class="nav-item d-none d-sm-inline-block title pr-3">
							<a v-if="active == 'workstation'" href="#" class="nav-link pl-0"><strong>Workstation</strong></a>
							<a v-if="active == 'dashboard'" href="#" class="nav-link pl-0"><strong>Dashboard</strong></a>
							<a v-if="active == 'call-history'" href="#" class="nav-link pl-0"><strong>Call History</strong></a>
							<a v-if="active == 'social-board'" href="#" class="nav-link pl-0"><strong>Social Board</strong></a>
							<a v-if="active == 'users'" href="#" class="nav-link pl-0"><strong>Users</strong></a>
							<a v-if="active == 'leads'" href="#" class="nav-link pl-0"><strong>Leads</strong></a>
							<a v-if="active == 'contacts'" href="#" class="nav-link pl-0"><strong>Contacts</strong></a>
						</li>

						<li v-if="active_calls" class="nav-item d-none d-sm-inline-block px-3">
							<a 
								role="button" 
								ref="ActiveCallsBtn" 
								@click="showActiveCalls()" 
								:class="{ 'nav-link top-link d-block text-center' : true, 'active' : active_calls_active }"
							>Active Calls</a>
						</li>

						<li v-if="active == 'workstation' && lead_id !== ''" class="nav-item d-none d-sm-inline-block px-3">
							<a 
								href="#" 
								@click="showGeneral();" 
								:class="{ 'nav-link top-link d-block text-center' : true, 'active' : general_active }"
							>General</a>
						</li>

						<li v-if="active == 'workstation'" class="nav-item d-none d-sm-inline-block px-3">
							<a 
								href="#" 
								@click="showScripts();" 
								:class="{ 'nav-link top-link d-block text-center' : true, 'active' : scripts_active }"
							>Scripts</a>
						</li>

						<li v-if="active == 'workstation'" class="nav-item d-none d-sm-inline-block px-3">
							<a 
								href="#" 
								@click="showDialer();" 
								:class="{ 'nav-link top-link d-block text-center' : true, 'active' : dialer_active }"
							>Dialer</a>
						</li>

						<li v-if="active == 'dashboard' || active == 'call-history' || active == 'social-board'" class="nav-item d-none d-sm-inline-block px-3">
							<select class="form-control month-selector" v-model="month" @change="topMonthFilterChange">
								<option value="1">January {{ getFullYear() }}</option>
								<option value="2">February {{ getFullYear() }}</option>
								<option value="3">March {{ getFullYear() }}</option>
								<option value="4">April {{ getFullYear() }}</option>
								<option value="5">May {{ getFullYear() }}</option>
								<option value="6">June {{ getFullYear() }}</option>
								<option value="7">July {{ getFullYear() }}</option>
								<option value="8">August {{ getFullYear() }}</option>
								<option value="9">September {{ getFullYear() }}</option>
								<option value="10">October {{ getFullYear() }}</option>
								<option value="11">November {{ getFullYear() }}</option>
								<option value="13">December {{ getFullYear() }}</option>
							</select>
						</li>

						<li v-if="(active == 'users' || active == 'leads' || active == 'contacts')" class="nav-item d-none d-sm-inline-block pl-3">
							<a 
								href="#" 
								@click="addNew();" 
								:class="{ 'nav-link top-link d-block text-center' : true, 'active' : adding_user }" 
								class="nav-link"
							>Add New</a>
						</li>
					</ul>
				</div>

				<div class="col-auto px-0" v-if="active == 'workstation'">
					<ul class="navbar-nav callIcons">
						<li class="nav-item d-sm-inline-block">
							<a href="#" class="nav-link search p-0"></a>
						</li>
						<li :class="{ 'nav-item d-sm-inline-block' : true, 'idle' : is_idle, 'on-call' : is_oncall, 'offline' : is_offline }">
		    			<button id="toggle-btn" class="nav-link border-0 bg-transparent status"  @click="switchState()"></button>
						</li>
						<li class="nav-item d-sm-inline-block">
		    			<button id="show-btn" class="nav-link border-0 bg-transparent call" @click="endCall()"></button>
						</li>
					</ul>				
				</div>
			</div>
		</nav>
	</div>
</template>

<script>
	import { setupCalendar, Calendar} from 'v-calendar';
	export default {
    props: ['active','logged_user'],
    components: {},
    data: function(){
      return {
        lead_id: '',
        status : 'active',
        call_status : 'active',
        month : '',
        call_back_date : '',
        call_back_time : '',
        call_back_notes : '',
        general_active : false,
        active_calls_active : false,
        active_calls : false,
        scripts_active : false,
        general_show : false,
        dialer_active : false,
        is_idle: true,
        is_oncall: false,
        is_offline: false,
        top_nav_show_filter: false,
        // Users
        adding_user : false,
        current_user: [],
        filter_data: [],
        types: [
          'date',
          'text'
        ]
      }
    },

    created(){
      var vm = this;
      Fire.$on('AfterLeadEnqueue', function(data){
        vm.lead_id = data.lead_id;
        vm.phone_number = data.contact_number;
      });

      Fire.$on('InitiateCall', function(){
        vm.dialer_active = true;
        vm.general_active = false;
        vm.scripts_active = false;
        vm.active_calls_active = false;
      });

      Fire.$on('DoneAddingUser', function(){
        vm.adding_user = !vm.adding_user;
      });

      Fire.$on('ShowGeneral', function(){
        vm.general_active = true;
        vm.scripts_active = false;
        vm.dialer_active = false;
        vm.active_calls_active = false;
      });
    },

		mounted() {
			this.current_user = JSON.parse(this.logged_user);
			var d = new Date();

			this.month = d.getMonth() + 1;

			if(this.active == 'workstation' && ( this.current_user.role_id == 1 || this.current_user.role_id == 2  || this.current_user.role_id == 3 ) ){
				this.active_calls = true;
				this.showActiveCalls();
			}

			this.Toast = this.$swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
    },

		computed: {},
    
	  methods: {
			showFilter(){
				this.top_nav_show_filter = !this.top_nav_show_filter;
				Fire.$emit('ShowFilter');
      },
      
      endCall() {
        Fire.$emit('CallEnded');
      },

      startCall() {
        Fire.$emit('CallStarted');
      },

      hideModal() {
        this.$refs['my-modal'].hide();
      },

			toggleModal() {
				// We pass the ID of the button that we want to return focus to
				// when the modal has hidden
				this.$refs['my-modal'].toggle('#toggle-btn')
      },
      
			resetModal() {
				this.call_back_date = '';
				this.call_back_time = '';
				this.call_back_notes = '';
      },
      
			handdleOk(bvModalEvt){
				// Prevent modal from closing
				bvModalEvt.preventDefault();
				// Trigger submit handler
				this.handleSubmit();
      },
      
			topMonthFilterChange(){
				Fire.$emit('TopMonthFilterChange',{ 'month' : this.month })
      },
      
			switchState(){
				if (this.is_idle == true){
					this.is_idle = false;
					this.is_oncall = true;
					this.is_offline = false;
					// User is idle , getting no leads
					this.updateTimeLog('idle');
				} else if(this.is_oncall == true){
					this.is_idle = false;
					this.is_oncall = false;
					this.is_offline = true;
					// User is offline , getting no leads
					this.updateTimeLog('offline');
				} else if(this.is_offline == true){
					this.is_idle = true;
					this.is_oncall = false;
					this.is_offline = false;
					// User is on call , enque leads
					this.updateTimeLog('active');
				}
      },
      
			updateTimeLog(type = ''){
				
      },
      
			showActiveCalls(){
				this.active_calls_active = true;
				this.general_active = false;
				this.scripts_active = false;
				this.dialer_active = false;
				Fire.$emit('ShowActiveCalls');
      },
      
			showGeneral(){
				this.general_active = true;
				this.scripts_active = false;
				this.dialer_active = false;
				this.active_calls_active = false;
				Fire.$emit('ShowGeneral');
      },
      
			showScripts(){
				this.scripts_active = true;
				this.general_active = false;
				this.dialer_active = false;
				this.active_calls_active = false;
				Fire.$emit('ShowScripts');
      },
      
			showDialer(){
				this.dialer_active = true;
				this.general_active = false;
				this.scripts_active = false;
				this.active_calls_active = false;
				Fire.$emit('ShowDialer');
      },
      
			addNew(){
				this.adding_user = !this.adding_user;
				Fire.$emit('AddingUser');
      },
      
			getFullYear(){
				var d = new Date();
				var n = d.getFullYear();
				return n;
			}
	  }
	}
</script>