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
        padding: 23px 40px 0;
	}
	.modal-content{
		background: linear-gradient(to right, rgba(255,129,51,1) 0%, rgba(255,147,58,1) 100%);
	}
	select{
	    border-radius: 26px;
	    margin: 5px 8px 8px 55px !important;
	    height: 29px !important;
	    background: #F98B39 !important;
	    border-color: #F98B39 !important;
	    color: #fff !important;
        padding: 2px 17px 6px !important;
	}
	.error{
		color:#F98B39;
	}

	a.top-link{    
		border-radius: 26px;
	    margin: 5px 8px 8px 55px !important;
	    height: 29px !important;
	    padding: 2px 17px 6px !important;
	}
	a.active{    
		border-radius: 26px;
	    margin: 5px 8px 8px 55px !important;
	    height: 29px !important;
	    background: #F98B39 !important;
	    border-color: #F98B39 !important;
	    color: #fff !important;
	    padding: 2px 17px 6px !important;
	}
	/*End Right Component*/
</style>
<template>
	<div>
		<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
			<!-- Left navbar links -->
			<div class="row" style="width: 100%;">
				<div class="col-lg-6">
					<ul class="navbar-nav left">
						<li class="nav-item d-none d-sm-inline-block title">
							<a v-if="active == 'workstation'" href="#" class="nav-link"><strong>Workstation</strong></a>
							<a v-if="active == 'dashboard'" href="#" class="nav-link"><strong>Dashboard</strong></a>
							<a v-if="active == 'call-history'" href="#" class="nav-link"><strong>Call History</strong></a>
							<a v-if="active == 'social-board'" href="#" class="nav-link"><strong>Social Board</strong></a>
						</li> 
						<li v-if="active == 'workstation'" class="nav-item d-none d-sm-inline-block">
							<a href="#" @click="showGeneral();" :class="{ 'nav-link top-link' : true, 'active' : general_active }" class="nav-link">General</a>
						</li>
						<li v-if="active == 'workstation'" class="nav-item d-none d-sm-inline-block">
							<a href="#" @click="showScripts();" :class="{ 'nav-link top-link' : true, 'active' : scripts_active }" class="nav-link">Scripts</a>
						</li>
						<li v-if="active == 'workstation'" class="nav-item d-none d-sm-inline-block">
							<a href="#" @click="showDialer();" :class="{ 'nav-link top-link' : true, 'active' : dialer_active }" class="nav-link">Dialer</a>
						</li>
						<li v-if="active == 'dashboard' || active == 'call-history' || active == 'social-board'" class="nav-item d-none d-sm-inline-block">
							<select class="form-control month-selector" v-model="month">
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
					</ul>
				</div>
				<div class="col-lg-6" style="padding-right: 0"  v-if="active == 'workstation'">
					<ul class="navbar-nav pull-right">
						<li class="nav-item d-none d-sm-inline-block">
							<a href="#" class="nav-link search">
								
							</a>
						</li>
						<li :class="{ 'nav-item d-none d-sm-inline-block' : true, 'idle' : !general_show, 'on-call' : general_show, 'offline' : false }">
		    				<button id="toggle-btn" class="nav-link status" style="background-color: transparent;border: none;padding: 29px;margin-top: -10px;"></button>
						</li>
						<li class="nav-item d-none d-sm-inline-block">
		    				<button id="show-btn" class="nav-link call" @click="endCall()" style="background-color: transparent;border: none;padding: 29px;margin-top: -10px;"></button>
						</li>
					</ul>				
				</div>
			</div>
		</nav>
	</div>
</template>

<script>
	import { setupCalendar, Calendar} from 'v-calendar'
	export default {
		mounted() {

			var d = new Date();
			this.month = d.getMonth();

			this.Toast = this.$swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
		},
		props: ['active'],
		components: {
			
		},
		data: function(){
			return {
				status : 'active',
				call_status : 'active',
				month : '',
				call_back_date : '',
				call_back_time : '',
				call_back_notes : '',
				general_active : false,
				scripts_active : false,
				general_show : false,
				dialer_active : false,
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
                console.log('Call Initiated');
			});

		},
	    methods: {
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
			handleOk(bvModalEvt){
				// Prevent modal from closing
				bvModalEvt.preventDefault();
				// Trigger submit handler
				this.handleSubmit();
			},
			handleSubmit(){
                var vm = this;
                this.$validator.validateAll().then((result) => {
                    if(!result){
                    }else{
						var payload = {
							method : 'POST',
							end_point : 'leads/setcallback',
							form_data : {
								lead_id: ' ',
								user_id: ' ',
								call_back_time: this.call_back_date + ' ' + this.call_back_time,
								notes: this.call_back_notes,
								status: 1
							}
						}
						
						axios.post('/api-request', payload).then(function (response) {
							
							if(response.data.success == true){
								Fire.$emit('AfterCallBackSet');
								vm.$swal('Success', 'Callback captured successfully','success');
							}else{
								vm.$Progress.fail();
								vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
							}

						});
                    }
                });

			},
			showGeneral(){
				this.general_active = true;
				this.scripts_active = false;
				this.dialer_active = false;
				Fire.$emit('ShowGeneral');
			},
			showScripts(){
				this.scripts_active = true;
				this.general_active = false;
				this.dialer_active = false;
				Fire.$emit('ShowScripts');
			},
			showDialer(){
				this.dialer_active = true;
				this.general_active = false;
				this.scripts_active = false;
				Fire.$emit('ShowDialer');
			},
			getFullYear(){
				var d = new Date();
				var n = d.getFullYear();
				return n;
			}
	    }
	}
</script>