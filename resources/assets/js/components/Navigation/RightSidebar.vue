<style scoped>
p{
	color: #9fb3bb;
	margin: 0;
}
h2{
  color: #003449;
  font-size: 29px;
  letter-spacing: 4.2px;
  font-weight: 600;
}
h3{
  color: #1a1c43;
  font-size: 16px;
  letter-spacing: 2.2px;
  font-weight: 600;
  width: 52%;
}
h3 img{
	float:right;
	cursor: pointer;
	margin-top: -7px;
}
.control-sidebar {
  position: absolute;
  top: 0;
  right: 0 !important;
  bottom: 0;
  z-index: 830;
  width: 350px !important;
  transition: right 0.3s ease-in-out;
  box-shadow: 0 -4px 15px rgba(220, 220, 220, 0.7);
	-webkit-box-shadow: 0 -4px 15px rgba(220, 220, 220, 0.7);
	-moz-box-shadow: 0 -4px 15px rgba(220, 220, 220, 0.7);
}
.control-sidebar-light label.custom-control-label{
  color: inherit;
  font-weight: 200;
  padding-top: 3px;
}
.navbar .navbar-top-conatiner {
  padding-left: 12px;
  padding-right: 18px;
}
.navbar-light .navbar-nav .nav-link.icon {
  color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-nav .nav-link.name {
  font-size: 11px;
  padding-top: 6px;
}
.help-block{
	color: red;
}
.status{
	display: none;
}
.status.active{
  width: 76px;
  text-align: center;
  border-radius: 8px;
  display: block;
  background: #00d68f;
  padding: 4px 3px;
  line-height: 20px;
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
  float: left;
  margin: 0;
}
.status.offline{
  width: 76px;
  text-align: center;
  border-radius: 8px;
  display: block;
  background: orange;
  padding: 4px 3px;
  line-height: 20px;
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
  float: left;
  margin: 0;
}
.status.active:hover,
.status.offline:hover{
	color: #3b3b3b;
	cursor: pointer;
}
.status.show{
	display: block !important;
}
.collapse{
  border-bottom: 1px solid #e3e3e3;
}
.p-3{
  padding: 0.8rem 2.0rem 1.4rem 1.7rem !important;
}
.progress-bar{
	background: #e3e3e3;
	border-radius: 5px;
}
.tank{
	background:  linear-gradient(to right, rgba(161,237,128,1) 0%, rgba(98,211,126,1) 100%) !important;
	border-radius: 5px;
  background: rgb(114, 218, 126);
  height: 8px;
  transition: all 0.5s ease 0s;
}
.monthly-target{
	font-size: 10px;
	letter-spacing: 1px;
}
.value{
  font-weight: 900;
  font-size: 19px;
  color: #1a1c43;
	margin-top: -8px;
	letter-spacing: 1px;
}
.description{
	font-size: 10px;
	font-family: 'Rubik', sans-serif;
	letter-spacing: 1px;
}
.position{
  display: block;
  position: relative;
  background: #ff8234;
  color: #fff;
  height: 62px;
  text-align: center;
  font-size: 17px;
  padding: 18px 9px;
  width: 62px;
  transform: rotate(45deg); /* Standard syntax */
  margin-bottom: 40px;
}
.position span{
  transform: rotate(0deg); /* Standard syntax */
}
p.heading{
  border-bottom: 1px solid #e3e3e3;
  margin-bottom: 10px;
	font-weight: 900;
}
.navbar ul.pull-left{
	width: 35%;
}
.navbar ul.pull-right{
  width: 68%;
	margin-bottom: 10px;
}
.navbar ul.pull-right li.name-li{
	width: 79%;
}
.navbar .pull-right li a.name {
  font-size: 15px; 
  font-weight: 700;
}
.personal-info, .account-info, .general-system-prefs, .notifications .w-100 {
  margin-top: 20px;
}
.personal-info img {
  border-radius:50%;
  width: 27%;
}
.personal-info button.btn-info {
  margin: 18px 0 15px 0;
  font-size: 9px;
}
.settings .row,
.notifications .row{
  border-bottom: 1px solid #f3f3f3;
  padding: 21px 0px 16px 0;
}
.settings .row p.description{
	font-size: 9px;
	display: block;
}
.themes label:first-child, .themes label:nth-child(2), .language label, .notifications label {
  margin-right: 8px;
  float:left;
}
label.control-label,
label.custom-control-label{
	font-weight: 100;
  color: #1a1c43 !important;
  font-size: 12px;
  padding: 0;
  width: 100%;
}
.control-label{
  margin-right: 8px;
  float: left;
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
.btn-active {
	background: #00344a;
	color: #ffffff;
  border: transparent !important;
	padding: 6px 12px 6px 10px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.btn-orange {
	background: #FF9039;
	color: #ffffff;
  border: transparent !important;
	padding: 6px 12px 6px 10px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.orange-btn:hover {
	background: #FF9039;
	color: #ffffff;
  border: transparent !important;
	padding: 6px 12px 6px 10px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.red-btn:hover {
	background: red;
	color: #ffffff;
  border: transparent !important;
	padding: 6px 12px 6px 10px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.blue-btn:hover {
	background: blue;
	color: #ffffff;
  border: transparent !important;
	padding: 6px 12px 6px 10px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.btn-red {
	background: red;
	color: #ffffff;
  border: transparent !important;
	padding: 6px 12px 6px 10px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.btn-blue {
	background: blue;
	color: #ffffff;
  border: transparent !important;
	padding: 6px 12px 6px 10px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.btn-has-new{
  background-image: url('/images/icons/Dot.png') !important;
  background-size: 12px 12px;
	background-repeat: no-repeat;
	background-position: right top;
}
.btn-has-new:hover{
  background-image: url('/images/icons/Dot.png') !important;
  background-size: 12px 12px;
	background-repeat: no-repeat;
	background-position: right top;
}
.logout-wrapper{
	margin-top:14%;
}
#logout{
  background-image: url('/images/icons/Asset 67.svg') !important;
  background-size: contain;
  background-repeat: no-repeat;
  height: 100px;
  background-position: center;
  margin-bottom: 11%;
}
#logout:hover{
  background-image: url('/images/icons/Asset 66.svg') !important;
}
.notifications .btn-default{
  padding: 6px 25px 6px 18px;
  font-size: 9px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.notifications .top-section {
  list-style: none;
}
.notifications .card h3,
.notifications .card h3 a{
  color: #00344a;
  font-size: 16px;
  letter-spacing: 2.2px;
  font-weight: 600;
}
.notifications .card p.call_back_time{
  color: #00344a;
  font-size: 14px;
  letter-spacing: 2.2px;
}
.small-avatar img{
	width: 28px;
  margin-top: 2px;
	border-radius:50%;
}
.update-user{
	margin: 0px 0px 5px 0px;
}
.final-modal{
  padding: 0 0 1rem;
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
.final-modal .card-header{    
	padding: 0 11px 0;
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
}
.final-modal .card-header-tabs .left a[aria-selected="false"]{
  border-bottom: none;
	background: #fff;
  padding: 6px 12px;
	box-shadow: -4px -7px 16px -11px rgba(138,134,134,0.75) inset;
	-webkit-box-shadow: -4px -7px 16px -11px rgba(138,134,134,0.75) inset;
	-moz-box-shadow: -4px -7px 16px -11px rgba(138,134,134,0.75) inset;
}
.final-modal .card-header-tabs .right a.active[aria-selected="true"]{
  border-bottom: none;
	background: #fff;
  padding: 6px 12px;
	box-shadow: -8px -7px 14px -9px rgba(138,134,134,0.75);
	-webkit-box-shadow:-8px -7px 14px -9px rgba(138,134,134,0.75);
	-moz-box-shadow: -8px -7px 14px -9px rgba(138,134,134,0.75);
}
.final-modal .card-header-tabs .right a[aria-selected="false"]{
  border-bottom: none;
	background: #fff;
  padding: 6px 12px;
	box-shadow: 5px -7px 16px -11px rgba(138,134,134,0.75) inset;
	-webkit-box-shadow: 5px -7px 16px -11px rgba(138,134,134,0.75) inset;
	-moz-box-shadow: 5px -7px 16px -11px rgba(138,134,134,0.75) inset;
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
.stats-section {
  margin-top: 35px;
}
.stats-section .commission {
  padding:25px 0;
}
.stats-section .calls {
  border-bottom: 0.5px solid #e3e3e3; 
  margin-bottom: 5px; 
  padding-bottom: 2px;
}
/* is the notification count being used? */
.notification-count{
  position: relative;
  top: -7px;
  right: 15px;
  font-size: 9px;
  color: #003449;
}
/*End Right Component*/
</style>
<template>
	<div>
		<aside class="control-sidebar control-sidebar-light border-left-0">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
        <div class="row">
          <nav class="navbar navbar-expand-md navbar-light bg-white m-0 p-0 w-100">
            <div class="w-100 navbar-top-conatiner">
              <div class="collapse navbar-collapse w-100">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav pull-left">
                  <li class="nav-item">
                    <a 
                      class="nav-link icon p-0" 
                      href="#" 
                      @click="showNotifications()"
                    >
                      <img 
					  	          v-if="notifications_on == true" 
						            src="/images/icons/Notification_active.svg"
                        alt="Notification Bell" 
                        width="50"
                      >
                      <img 
                        v-else-if="notifications_on == false && unread_messages == 0 && call_backs.length == 0" 
                        src="/images/icons/Notification.svg" 
                        alt="Notification Bell" 
                        width="50"
                      >
                      <img v-else-if="notifications_on == false && unread_messages >= 1 || call_backs.length > 0" 
                        src="/images/icons/Notification_new.svg" 
                        alt="Notification Bell" 
                        width="50"
                      >
                    </a>
                  </li>

                  <li class="nav-item">
                    <a 
                      class="nav-link icon pt-0 pr-0" 
                      href="#" 
                      @click="showSettings()"
                    >
                      <img 
                        v-if="settings_on == false" 
                        src="/images/icons/Asset 62.svg" 
                        alt="Settings Cog" 
                        width="50"
                      >
                      <img 
                        v-else src="/images/icons/Asset 63.svg" 
                        alt="Settings Cog" 
                        width="50"
                      >
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav pull-right text-right">
                  <li  
                    class="nav-item name-li" 
                    v-if="user.nickname != null && user.nickname != ''"
                  >
                    <a 
                      class="nav-link name" 
                      href="#" 
                      @click="showSettings()"
                    >{{ user.nickname }}</a>
                  </li>

                  <li class="nav-item name-li" v-else>
                    <a 
                      class="nav-link name" 
                      href="#" 
                      @click="showSettings()"
                    >{{ user.name }}</a>
                  </li>
                  <li class="nav-item">
                    <a 
                      class="nav-link icon pt-0 small-avatar" 
                      href="#" 
                      @click="showSettings()"
                    >
                      <img 
                        v-if="user.avatar != '' && user.avatar != null" 
                        :src="avatarUrl + user.id + '/' + user.avatar"
                      >
                      <img v-else :src="noImageUrl" >
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
				</div>

				<div v-if="settings_on == true" class="settings">
					<div class="row mx-0">
						<h2>Settings</h2>
					</div>

					<div class="row">
						<h3 class="d-block">
							Profile 
							<img 
                @click="expanded = true;profile_on = true;account_on = false;system_settings_on = false;" 
                v-if="profile_on == false" 
                src="/images/icons/settings edit buttin@4x.png" 
                alt="Profile Edit Off" 
                width="30"
              >
							<img 
                @click="expanded = false;profile_on = false;account_on = false;system_settings_on = false;" 
                v-else 
                src="/images/icons/settings edit button hover@4x.png" 
                alt="Profile Edit Off" 
                width="30"
              >
						</h3>
						<p class="description d-block w-100" title="Personal Information">Personal Information</p>
            <transition-expand>
              <div v-if="expanded == true && profile_on == true" class="w-100 personal-info">
                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Address') }">
                  <label class="col-lg-12 control-label text-center p-0 w100" style="float:left;">
                    <img 
                      v-if="user.avatar != '' && user.avatar != null" 
                      :src="avatarUrl + user.id + '/' + user.avatar"
                    >
                    <img 
                      v-else 
                      :src="noImageUrl"
                    >
                    <div>
                      <button
                        class="btn btn-info" 
                        type="button" 
                        @click="showUploader"
                      >Choose Image</button>
                    </div>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">
                  <label class="col-lg-12 control-label w-100 p-0">
                    Name
                    <input 
                      type="text" 
                      id="email"  
                      name="Name" 
                      v-model="user.name" 
                      v-validate="'required'" 
                      class="form-control"
                    >
                    <span 
                      id="error" 
                      v-show="errors.has('Name')" 
                      class="help-block"
                    >{{ errors.first('Name') }}</span>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Surname') }">
                  <label class="col-lg-12 control-label w-100 p-0">Surname
                    <input 
                      type="text" 
                      id="email"  
                      name="Surname" 
                      v-model="user.lastname" 
                      v-validate="'required'" 
                      class="form-control"
                    >
                    <span 
                      id="error" 
                      v-show="errors.has('Surname')" 
                      class="help-block"
                    >{{ errors.first('Surname') }}</span>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Surname') }">
                  <label class="col-lg-12 control-label w-100 p-0">Prefered Nickname
                    <input 
                      type="text" 
                      id="nickname"  
                      name="Nickname" 
                      v-model="user.nickname" 
                      v-validate="'required'" 
                      class="form-control"
                    >
                    <span 
                      id="error" 
                      v-show="errors.has('Nickname')" 
                      class="help-block"
                    >{{ errors.first('Nickname') }}</span>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Email') }">
                  <label class="col-lg-12 control-label w-100 p-0">Email
                    <input 
                      type="text" 
                      id="email"  
                      name="Email" 
                      v-model="user.email" 
                      v-validate="'required|email'" 
                      class="form-control"
                    >
                    <span 
                      id="error" 
                      v-show="errors.has('Email')" 
                      class="help-block"
                    >{{ errors.first('Email') }}</span>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Work Tel') }">
                  <label class="col-lg-12 control-label w-100 p-0">Work Telephone
                    <input 
                      type="text" 
                      id="work_number"  
                      name="Work Tel" 
                      v-model="user.work_number" 
                      v-validate="'required|numeric|min:10'" 
                      class="form-control"
                    >
                    <span 
                      id="error" 
                      v-show="errors.has('Work Telephone')" 
                      class="help-block"
                    >{{ errors.first('Work Tel') }}</span>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Cell Number') }">
                  <label class="col-lg-12 control-label w-100 p-0">Cellphone number
                    <input 
                      type="text" 
                      id="personal_number"  
                      name="Cell Number" 
                      v-model="user.personal_number" 
                      v-validate="'required|numeric|min:10'" 
                      class="form-control"
                    >
                    <span 
                      id="error" 
                      v-show="errors.has('Cell Number')" 
                      class="help-block"
                    >{{ errors.first('Cell Number') }}</span>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Address') }">
                  <label class="col-lg-12 control-label w-100 p-0">Address
                    <textarea 
                      id="address"  
                      name="Address" 
                      v-model="user.address" 
                      v-validate="'required'" 
                      class="form-control"
                    ></textarea>
                    <span 
                      id="error" 
                      v-show="errors.has('Address')" 
                      class="help-block"
                    >{{ errors.first('Address') }}</span>
                  </label>
                </div>

                <div :class="{'input': true, 'form-group' :true }">
                  <button 
                    type="submit" 
                    class="btn btn-primary update-user w-100" 
                    @click="updateUser('profile')"
                  >Update</button>
                </div>
              </div>
            </transition-expand>
					</div>

					<div class="row">
						<h3 class="d-block">
							Account 
							<img 
                @click="expanded = true;account_on = true;profile_on = false;system_settings_on = false;" 
                v-if="account_on == false" 
                src="/images/icons/settings edit buttin@4x.png" 
                alt="Account Edit Off" 
                width="30"
              >
							<img 
                @click="expanded = false;account_on = false;profile_on = false;system_settings_on = false;" 
                v-else 
                src="/images/icons/settings edit button hover@4x.png" 
                alt="Account Edit Off" 
                width="30"
                >
						</h3>
						<p class="description" title="Personal Information">Account Information</p>
					  <transition-expand>
							<div v-if="expanded == true && account_on == true" class="w-100 account-info">
								<div :class="{'input': true, 'form-group' :true }">
									<label class="col-lg-12 control-label w-100 p-0">
										Notifications
										<b-form-checkbox
											id="checkbox-1"
											v-model="user.notifications"
											name="checkbox-1"
											value="1"
											unchecked-value="0"
											@change="updateNotifications"
										>
										Notifications
										</b-form-checkbox> 
									</label>
								</div>

								<div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Old Password') }">
									<label class="col-lg-12 control-label w-100 p-0">Old Password
										<input 
                      type="password" 
                      id="email"  
                      name="Old Password" 
                      v-model="user.old_password" 
                      v-validate="'required|min:6'" 
                      class="form-control"
                    >
										<span 
                      id="error" 
                      v-show="errors.has('Old Password')" 
                      class="help-block"
                    >{{ errors.first('Old Password') }}</span>
									</label>
								</div>

								<div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('New Password') }">
									<label class="col-lg-12 control-label w-100 p-0">New Password
										<input 
                      type="password" 
                      id="password" 
                      ref="password" 
                      name="New Password" 
                      v-model="user.password" 
                      v-validate="'required|min:6'" 
                      class="form-control"
                    >
										<span 
                      id="error" 
                      v-show="errors.has('New Password')" 
                      class="help-block"
                    >{{ errors.first('New Password') }}</span>
									</label>
								</div>

								<div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Password Confirm') }">
									<label class="col-lg-12 control-label w-100 p-0">Confirm New Password
										<input 
                      type="password" 
                      id="password_confirm"  
                      name="Password Confirm" 
                      v-model="user.password_confirmation" 
                      v-validate="'required|min:6|confirmed:password'" 
                      class="form-control"
                    >
										<span 
                      id="error" 
                      v-show="errors.has('Password Confirm')" 
                      class="help-block"
                    >{{ errors.first('Password Confirm') }}</span>
									</label>
								</div>

								<div :class="{'input': true, 'form-group' :true }">
									<button 
                    type="submit" 
                    class="btn btn-primary update-user w-100" 
                    @click="updateUser('account')"
                  >Update</button>
								</div>
							</div>
					  </transition-expand>
					</div>

					<div class="row preferences">
						<h3 class="d-block">
							Preferences 
							<img 
                @click="expanded = true;system_settings_on = true; account_on = false;profile_on = false" 
                v-if="system_settings_on == false" 
                src="/images/icons/settings edit buttin@4x.png" 
                alt="Account Edit Off" 
                width="30"
              >
							<img 
                @click="expanded = false;system_settings_on = false;account_on = false;profile_on = false" 
                v-else 
                src="/images/icons/settings edit button hover@4x.png" 
                alt="Account Edit Off"
                width="30"
              >
						</h3>
						<p class="description" title="Personal Information">General System Preferences</p>
					  <transition-expand>
							<div 
                v-if="expanded == true && system_settings_on == true" 
                class="w-100 general-system-prefs"
              >
								<div class="row" v-if="user.role_id == 1">
									<h3 class="d-block">
										Settings 
									</h3>
									<div 
                    :class="{'input': true, 'form-group' :true }" 
                    v-for="(setting, index) in system_preferences" 
                    :key="index"
                  >
										<div v-if="setting.setting == 'auto_dialer'">
											<label class="col-lg-5 control-label w-100 p-0">
												Auto Dialing
												<select 
                          id="auto_dialler" 
                          v-model="system_settings.auto_dialer.value" 
                          class="form-control" 
                          v-on:change="applySetting()"
                        >
													<option value="on">On</option>
													<option value="off">Off</option>
												</select>
											</label>
											<label class="col-lg-6 control-label w-100 p-0">
												Apply To
												<select 
                          id="auto_dialler" 
                          v-model="system_settings.auto_dialer.applies_to" 
                          class="form-control" 
                          v-on:change="applySetting()"
                        >
													<option 
                            :value="role.id" 
                            v-for="(role, index) in roles" 
                            :key="index"
                          >{{ role.display_name }}</option>
													<option value="-1">Everyone</option>
												</select>
											</label>
										</div>
									</div>
								</div>

								<div class="row" v-if="preferences.length > 0">
									<h3 class="d-block">
										Themes 
									</h3>
									<div v-for="(setting, index) in preferences" :key="index" class="w-100 themes">
										<div v-if="setting.setting == 'theme' && setting.system_setting != 1">
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({ type : 'theme', value : 'orange'})" 
                          type="submit" 
                          :class="{ 'btn orange-btn': true, 'btn-orange' : (setting.value == 'orange')? true : false , 'btn-default' : (setting.value != 'orange')? true : false  }" 
                          class="w-100 m-0"
                        >
													Orange
												</button>
											</label>
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({type : 'theme', value  : 'blue'})" 
                          type="submit" 
                          :class="{ 'btn blue-btn': true, 'btn-blue' : (setting.value == 'blue')? true : false , 'btn-default' : (setting.value != 'blue')? true : false  }" 
                          class="w-100 m-0"
                        >
													Blue
												</button>
											</label>
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({type : 'theme', value  : 'red'})" 
                          type="submit" 
                          :class="{ 'btn red-btn': true, 'btn-red' : (setting.value == 'red')? true : false , 'btn-default' : (setting.value != 'red')? true : false  }" 
                          class="w-100 m-0"
                        >
													Red
												</button>
											</label>
										</div>
									</div>
								</div>

								<div class="row" v-else>
									<h3 class="d-block">
										Themes 
									</h3>
									<div class="w-100">
										<div>
											<label class="col-lg-3 control-label w-100 p-0 themes">
												<button 
                          v-on:click="applySetting({ type : 'theme', value : 'orange'})" 
                          type="submit" 
                          :class="{ 'btn orange-btn': true, 'btn-orange' :true  }" 
                          class="w-100 m-0"
                        >
													Orange
												</button>
											</label>
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({type : 'theme', value  : 'blue'})" 
                          type="submit" 
                          :class="{ 'btn blue-btn': true, 'btn-default' : true }" 
                          class="w-100 m-0"
                        >
													Blue
												</button>
											</label>
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({type : 'theme', value  : 'red'})" 
                          type="submit" 
                          :class="{ 'btn red-btn': true, 'btn-default' :  true }" 
                          class="w-100 m-0"
                        >
													Red
												</button>
											</label>
										</div>
									</div>
								</div>

								<div class="row" v-if="preferences.length > 0">
									<h3 class="d-block">
										Language 
									</h3>
									<div v-for="(setting, index) in preferences" :key="index" class="w-100 language">
										<div v-if="setting.setting == 'language' && setting.system_setting != 1">
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({type : 'language', value : 'english'})" 
                          type="submit" 
                          :class="{ 'btn' : true, 'btn-active' :  (setting.value == 'english')? true : false, 'btn-default' : (setting.value != 'english')? true : false }" 
                          class="w-100 m-0"
                        >
													English
												</button>
											</label>
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({type : 'language', value :'spanish'})" 
                          type="submit" 
                          :class="{ 'btn' : true, 'btn-active' :  (setting.value == 'spanish')? true : false, 'btn-default' : (setting.value != 'spanish')? true : false }" 
                          class="w-100 m-0"
                        >
													Spanish
												</button>
											</label>
										</div>
									</div>
								</div>

								<div class="row" v-else>
									<h3 class="d-block">
										Language 
									</h3>
									<div class="w-100">
										<div>
											<label class="col-lg-3 control-label w-100 p-0 language">
												<button 
                          v-on:click="applySetting({type : 'language', value : 'english'})" 
                          type="submit" 
                          :class="{ 'btn' : true, 'btn-active' :  true }" 
                          class="w-100 m-0"
                        >
													English
												</button>
											</label>
											<label class="col-lg-3 control-label w-100 p-0">
												<button 
                          v-on:click="applySetting({type : 'language', value :'spanish'})" 
                          type="submit" 
                          :class="{ 'btn' : true, 'btn-active' : false , 'btn-default' : true }" 
                          class="w-100 m-0"
                        >
													Spanish
												</button>
											</label>
										</div>
									</div>
								</div>
							</div>
					  </transition-expand>
					</div>

					<div class="row logout-wrapper border-bottom-0"  v-if="profile_on == false">
						<a href="/logout" id="logout" class="w-100 d-block"></a>
						<h3 class="d-block w-100 text-center">
							Logout 
						</h3>
					</div>
				</div>

				<div v-if="notifications_on == true" class="notifications">
					<div class="row mx-0">
						<h2 class="w-100">
							Notifications 
						</h2>
						<div class="w-100">
							<label class="col-lg-3 control-label w-100 p-0">
								<button 
                  @click="showCallbacks"  
                  type="submit" 
                  :class="{'btn' : true, 'btn-active' : callbacks_on, 'btn-default border-0' : !callbacks_on, 'btn-has-new' : call_backs.length > 0 }" 
                  class="w-100 m-0"
                >Callbacks</button>
							</label>
							<label @click="showMessages" class="col-lg-3 control-label w-100 p-0">
								<button 
                  type="submit" 
                  :class="{'btn' : true, 'btn-active' : messages_on, 'btn-default border-0' : !messages_on, 'btn-has-new' : unread_messages >= 1  }" 
                  class="w-100 m-0"
                >Messages</button>
							</label>
						</div>
					</div>

					<div v-if="callbacks_on == true && messages_on == false" class="row">
						<div v-if="call_backs.length > 0">
							<div class="card w-100" v-for="call_back in call_backs" :key="call_back.id">
								<div class="card-body">
									<h3 class="d-block d-block w-100">
										<a :href="'/workstation/' + call_back.lead.id" class="d-block w-100">{{ call_back.lead.name + ' ' +call_back.lead.surname }}</a>
									</h3>
									<p class="call_back_time d-block w-100" title="Personal Information">{{ call_back.call_date }} @ {{ call_back.call_time }}</p>
								</div>
							</div>
						</div>

						<div v-else>
							<div class="card">
								<div class="card-body">
									<p class="call_back_time d-block w-100" title="Personal Information">0 Callbacks at present</p>
								</div>
							</div>
            </div>
					</div>

					<div v-if="callbacks_on == false && messages_on == true" class="row">
            <div class="card">
              <div class="card-body">
								<h3 class="d-block">Steve Hughes</h3>
								<p class="call_back_time d-block w-100" title="Personal Information">Mon 22 March @ 12:22pm</p>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
								<h3 class="d-block">
									Steve Hughes 
								</h3>
								<p class="call_back_time d-block w-100" title="Personal Information">Mon 22 March @ 12:22pm</p>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
								<h3 class="d-block">Steve Hughes</h3>
								<p class="call_back_time d-block w-100" title="Personal Information">Mon 22 March @ 12:22pm</p>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
								<h3 class="d-block">Steve Hughes</h3>
								<p class="call_back_time d-block w-100" title="Personal Information">Mon 22 March @ 12:22pm</p>
              </div>
            </div>
					</div>
				</div>

				<div v-if="notifications_on == false && settings_on == false">
					<div class="row p-0 stats-section">
						<div class="col-lg-12">
							<div class="row p-0">
								<div class="col-lg-12">
									<p class="monthly-target">Monthly Target <span class="value float-right">65%</span></p>
									<div class="progress-bar w-100">
										<span class="tank" :style="'width:' + 65 + '%'"></span>
									</div>
								</div>
							</div>

							<div class="row commission">
								<div class="col-lg-6">
									<p class="description">Commission</p>
									<p><span class="value">$1523</span></p>
								</div>

								<div class="col-lg-6 text-right">
									<p class="description">Con. Ratio</p>
									<p><span class="value">40%</span></p>
								</div>
							</div>

							<div class="row" style="padding:5px  0;">
								<div class="col-lg-12">
									<p class="description calls">Calls</p>
								</div>

								<div class="col-lg-6">
									<p class="description">Leads</p>
									<p><span class="value">125</span></p>
								</div>

								<div class="col-lg-6 text-right">
									<p class="description">Called</p>
									<p><span class="value">25</span></p>
								</div>
							</div>

							<div class="row" style="padding:5px  0;">
								<div class="col-lg-12">
									<p class="description" style="border-bottom: 0.5px solid #e3e3e3; margin-bottom: 5px; padding-bottom: 2px;">Sales</p>
								</div>
								<div class="col-lg-6">
									<p class="description">Quantity</p>
									<p><span class="value">54</span></p>
								</div>
								<div class="col-lg-6 text-right">
									<p class="description">Value</p>
									<p><span class="value">$2725</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 final-modal border-0">
							<div class="card left mt-3 tab-card border-0 shadow-none">
								<div class="card-header tab-card-header border-bottom-0">
									<ul class="nav nav-tabs card-header-tabs border-bottom-0 mb-0" id="myTab" role="tablist">
										<li class="nav-item left w-50">
											<a 
                        class="nav-link active" 
                        id="calendar-tab" 
                        data-toggle="tab" 
                        href="#calendar" 
                        role="tab" 
                        aria-controls="Calendar" 
                        aria-selected="true"
                      >
												<span class="left description">Callback Calendar</span>
											</a>
										</li>

										<li class="nav-item right w-50">
											<a 
                        class="nav-link" 
                        id="search-panel-tab" 
                        data-toggle="tab" 
                        href="#search-panel" 
                        role="tab" 
                        aria-controls="Search" 
                        aria-selected="false"
                      >
												<span class="left description">Search</span>
											</a>
										</li>
									</ul>
								</div>

								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active p-3" id="calendar" role="tabpanel" aria-labelledby="calendar-tab">
										<vc-calendar 
                      class="border-0" 
                      :attributes='attrs' 
                      title-position="right" 
                      is-expanded 
                      :popover="true" />
										<div class="row">
											<div class="col-lg-12">
												<p class="description" style="border-bottom: 0.5px solid #e3e3e3; margin-bottom: 5px; padding-bottom: 2px;">Badges</p>
											</div>

											<div class="col-lg-12">
												<div class="row justify-content-between align-items-end">
													<div class="position d-none">
														<span>12<sup>th</sup></span>
													</div>

													<div class="col-sm-3 badge-1 px-2">
														<img src="/images/icons/Colonel@4x.png" alt="Badge" class="w-100">
														<p class="description text-center">Colonel</p>
													</div>

													<div class="col-sm-3 badge-2 px-2">
														<img src="/images/icons/Corporal@4x.png" alt="Badge" class="w-100">
														<p class="description text-center">Corporal</p>
													</div>

													<div class="col-sm-3 badge-3 px-2">
														<img src="/images/icons/Captain@4x.png" alt="Badge" class="w-100">
														<p class="description text-center">Captain</p>
													</div>

													<div class="col-sm-3 badge-4 px-2">
														<img src="/images/icons/Captain@4x.png" alt="Badge" class="w-100">
														<p class="description text-center">Captain</p>
													</div>
												</div>
											</div>
										</div>          
									</div>

									<div class="tab-pane fade p-3 search" id="search-panel" role="tabpanel" aria-labelledby="search-panel-tab">
										<div class="row">
											<div class="col-lg-12">
												<div class="row" style="padding:5px  0;">
													<div class="col-lg-12">
														<div :class="{'input search': true, 'form-group' :true }">
															<input 
                                v-on:keyup="fireSearchEvent('Search')" 
                                placeholder="Search:" 
                                type="search" 
                                id="search" 
                                ref="search" 
                                name="Search" 
                                v-model="filter.search" 
                                class="form-control"
                              >
														</div>
													</div>
												</div>

												<div class="row" style="padding:5px  0;">
													<div class="col-lg-12">
														<p class="heading">Filter Search</p>
													</div>

													<div class="col-lg-6">
														<div :class="{'input': true, 'form-group' :true }">
															<button 
                                v-on:click="fireTableEvent('Print')" 
                                type="submit" 
                                class="btn btn-default m-0" 
                                style="width: 90%;"
                              >Print</button>
														</div>
													</div>

													<div class="col-lg-6">
														<div :class="{'input': true, 'form-group' :true }">
															<button 
                                v-on:click="fireTableEvent('Export')" 
                                type="submit" 
                                class="btn btn-default m-0" 
                                style="width: 90%;"
                              >Export</button>
														</div>
													</div>
												</div>

												<div class="row" style="padding:5px  0;">		
													<div class="col-lg-12">
														<table class="tg">
															<tr>
																<td  class="tg-0las">
                                  <p class="heading">Filter By</p>
                                </td>
																<td class="tg-1lax">
																</td>
															</tr>

															<tr>
																<td class="tg-0lax"><p class="heading">Owner</p></td>
																<td class="tg-1lax">
																	<select 
                                    v-on:change="filterData()" 
                                    type="text" 
                                    id="role" 
                                    name="Owner" 
                                    v-model="filter.user_created_id" 
                                    class="form-control"
                                  >
																		<option value="">All </option>
																		<option 
                                      :value="item.id" 
                                      v-for="(item,index) in lead_owners" 
                                      :key="index"
                                    >{{ item.name + ' ' + item.lastname }}</option>
																	</select>
																</td>
															</tr>

															<tr>
																<td class="tg-0lax"><p class="heading">Assigned To</p></td>
																<td class="tg-1lax">
																	<select 
                                    v-on:change="filterData()" 
                                    type="text" 
                                    id="Assignee" 
                                    name="Assignee" 
                                    v-model="filter.user_assigned" 
                                    class="form-control"
                                  >
																		<option value="">All</option>
																		<option 
                                      :value="item.id" 
                                      v-for="(item,index) in assignees" 
                                      :key="index"
                                    >{{ item.name + ' ' + item.lastname }}</option>
																	</select>
																</td>
															</tr>

															<tr>
																<td class="tg-0lax"><p class="heading" >Lead Source</p></td>
																<td class="tg-1lax">
																	<select 
                                    type="text" 
                                    v-on:change="filterData()"  
                                    id="Source" 
                                    name="Source" 
                                    v-model="filter.source"  
                                    class="form-control"
                                  >
																		<option value="">All</option>
																		<option 
                                      :value="item.id" 
                                      v-for="(item,index) in sources" 
                                      :key="index"
                                    >{{ item.name}}</option>
																	</select>
																</td>
															</tr>

															<tr>
																<td class="tg-0lax"><p class="heading" >Package</p></td>
																<td class="tg-1lax">
																	<select 
                                    type="text" 
                                    v-on:change="filterData()"  
                                    id="package"  
                                    name="Package" 
                                    v-model="filter.product_id"   
                                    class="form-control"
                                  >
																		<option value="">All</option>
																		<option 
                                      :value="item.id" 
                                      v-for="(item,index) in packages" 
                                      :key="index"
                                    >{{ item.name }}</option>
																	</select>
																</td>
															</tr>

															<tr>
																<td class="tg-0lax"><p class="heading">Status</p></td>
																<td class="tg-1lax">
																	<select type="text" 
                                    v-on:change="filterData()"  
                                    id="role"  
                                    name="Status" 
                                    v-model="filter.status"  
                                    class="form-control"
                                  >
																		<option value="">All</option>
																		<option value="1">Active</option>
																		<option value="2">Inactive</option>
																		<option value="0">Canceled</option>
																	</select>
																</td>
															</tr>
														</table>
													</div>

													<div class="col-lg-12" style="margin-top:17px">
														<div :class="{'input': true, 'form-group' :true }">
															<label class="col-lg-3 control-label" style="margin-right: 8px;float:left;">
																<button 
                                  v-on:click="filterData()" 
                                  type="submit" 
                                  class="btn btn-default w-100 m-0"
                                >Apply</button>
															</label>
															<label class="col-lg-3 control-label" style="margin-right: 8px;float:left;">
																<button 
                                  v-on:click="clearFilter();" 
                                  type="submit" 
                                  class="btn btn-default w-100 m-0"
                                >Clear</button>
															</label>
															<div>
																<table class="tg">
																	<tr>
																		<td class="tg-0lax"><p class="heading" >Save Search:</p></td>
																		<td class="tg-1lax">
																			<input 
                                        type="title" 
                                        id="title" 
                                        placeholder="Filter Title" 
                                        ref="title" 
                                        name="Filter Title" 
                                        v-model="filter.title" 
                                        v-validate="'required'" 
                                        class="form-control"
                                      >
																			<span 
                                        id="error" 
                                        v-show="errors.has('Filter Title')" 
                                        class="help-block"
                                      >{{ errors.first('Filter Title') }}</span>
																		</td>
																		<td>
																			<button 
                                        v-on:click="saveFilter" 
                                        type="submit" 
                                        :class="{ 'btn btn-default' : true, 'btn-active': show_filter_save }" 
                                        class="w-100 m-0"
                                      >Save</button>
																		</td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</aside>
	</div>
</template>

<script>
	import { setupCalendar, Calendar} from 'v-calendar'
	import TransitionHeight from '../Plugins/TransitionExpand.vue';
	export default {
    props: ['auth_user','active'],
    components: {
      'transition-expand' : TransitionHeight
    },
    data: function(){
      return {
        user : {
          notifications: 1,
        },
        status : 'active',
        notifications_on: false,
        settings_on: false,
        system_settings_on: false,
        profile_on: false,
        account_on: false,
        callbacks_on: true,
        messages_on: false,
        call_backs: [],
        messages: [],
        unread_messages: 1,
        expanded: false,
        show_filter: false,
        show_filter_save: false,
        show:false,
        lead_owners : [],
        assignees : [],
        sources : [],
        packages : [],
        filters : [],
        preferences : [],
        system_preferences : [],
        roles: [],
        attrs: [{
          key: 'today',
          highlight: true,
          class: 'today_date',
          dates: new Date(),
        }],
        filter:{
          title: '',
          search: '',
          user_created_id: '',
          user_assigned: '',
          source: '',
          product_id: '',
          status: '',
        },
        system_settings: {
          id:'',
          auto_dialer: {
            value : '',
            applies_to : ''
          }
        },
        user_settings: {
          id:'',
          theme: 'orange',
          language : 'english'
        },
        avatarUrl: '/images/avatars/',
          noImageUrl: '/images/icons/user_icon@4x.png',
      }
    },

		mounted() {
			var vm = this;

			this.user = JSON.parse(this.auth_user);

			vm.getUserCallBacks();

			Fire.$on('AfterCallBackSet', function(){
        vm.getUserCallBacks();
			});

			Fire.$on('AvatarUploadComplete', function(){
				axios.get('/get-current-user').then(function (response) {
					vm.user = response.data.user;	
				});
			});

			Fire.$on('ShowFilter', function(){
				vm.show_filter = !vm.show_filter;
			});

			Fire.$on('CustomFilterApplied', function(data){
				vm.filter = data.filter;
				vm.show_filter = true;
			});

			axios.get('/leads/get-select-options').then(function (response) {
				vm.lead_owners = response.data.lead_owners;	
				vm.assignees = response.data.assignees;	
				vm.sources = response.data.sources;	
				vm.packages = response.data.packages;	
				vm.roles = response.data.roles;	
			});
			
			vm.getPreferences();

			this.Toast = this.$swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
    },
    
		methods: {
			showNotifications(){
				this.notifications_on = !this.notifications_on;
				this.settings_on = false;
				this.profile_on = false;
      },
      
			showSettings(){
				this.settings_on = !this.settings_on;
				this.notifications_on = false;
				this.profile_on = false;
      },
      
			showCallbacks(){
				this.callbacks_on = true;
				this.messages_on = false;
      },
      
			showMessages(){
				this.callbacks_on = false;
				this.messages_on = true;
				this.unread_messages = 0;
      },
      
			getUserCallBacks(){

				var vm = this;  

				axios.get('/leads/get-user-callbacks').then(function (response) {
					vm.call_backs = response.data.call_backs;		
					
					vm.attrs = [ 
						{
							key: 'today',
							highlight: true,
							class: 'today_date',
							dates: new Date(),
						}
					];

					vm.call_backs.forEach(function(call_back){

						vm.attrs.push(
							{
								key: 'call_back'+call_back.id,
								highlight: 'red',
								class: 'call_back_date',
								dates: new Date(call_back.call_date),
								popover: {
									label: 'Call ' + call_back.lead.name + ' ' + call_back.lead.surname + ' @' + call_back.call_time,
								},
							}
						);
					});	
				});
			},
			applySetting(settings = null){

				var vm = this;

				if(settings != null && settings.type == 'language'){
					vm.user_settings.language = settings.value;
				}else if(settings != null && settings.type == 'theme'){
					vm.user_settings.theme = settings.value;
				}

				vm.$Progress.start();

				axios.post('/update-preferences',{ system_settings: vm.system_settings,  user_settings: vm.user_settings }).then(function (response) {
										
					if(response.data.success == true){
						vm.Toast.fire({ type: 'success', title: response.data.message });
						vm.getPreferences();
						vm.$Progress.finish();
					}else{
						vm.$Progress.fail();
						vm.$swal('Failed', 'Opps, something went wrong while update, please try again','warning');
					}
				});
			},
			getPreferences(){

				var vm = this;

				axios.get('/get-preferences').then(function (response) {
					vm.preferences = response.data.preferences;
					vm.system_preferences = response.data.system_preferences;
					vm.system_preferences.forEach(function(preference){
						if(preference.setting == 'auto_dialer'){
							vm.system_settings.auto_dialer.value = preference.value;
							vm.system_settings.auto_dialer.applies_to = preference.applies_to_role;
						}
					});
					vm.preferences.forEach(function(preference){
						vm.system_settings.id = preference.id;
						if(preference.setting == 'theme'){
							vm.user_settings.theme = preference.value;
						}else if(preference.setting == 'language'){
							vm.user_settings.language = preference.value;
						}
					});
				});
      },

			updateNotifications(){
				var vm = this;
				axios.post('/update-user',this.user).then(function (response) {
						
					if(response.data.success == true){
						vm.Toast.fire({ type: 'success', title: response.data.message });
						vm.user = response.data.user;
						vm.$Progress.finish();
					}else if(response.data.errors.email[0] != ''){
						vm.$Progress.fail();
						vm.$swal('Failed', response.data.errors.email[0] ,'warning');
					}else{
						vm.$Progress.fail();
						vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
					}
				});
      },
      
			updateUser(type){
				var vm = this;  
				vm.$Progress.start();
				this.$validator.validateAll().then((result) => {
          if(!result) {

          } else {
                            
            if (type == 'profile'){ 
              axios.post('/update-user',this.user).then(function (response) {
                  
                if (response.data.success == true){
                  vm.Toast.fire({ type: 'success', title: response.data.message });
                  vm.user = response.data.user;
                  vm.$Progress.finish();
                } else if (response.data.errors.email[0] != ''){
                  vm.$Progress.fail();
                  vm.$swal('Failed', response.data.errors.email[0] ,'warning');
                } else {
                  vm.$Progress.fail();
                  vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                }
              });
						} else {
              axios.post('/update-account',this.user).then(function (response) {
                
                if (response.data.success === true){
                  vm.Toast.fire({ type: 'success', title: response.data.message });
                  vm.user = response.data.user;
                  vm.$Progress.finish();
                } else if (typeof response.data.errors['old_password'] !== 'undefined' && response.data.errors.old_password.length > 0){
                  vm.$swal('Failed', 'You old password is incorrect','warning');
                } else if (typeof response.data.errors['password'] !== 'undefined' && response.data.errors.password.length > 0){
                  var this_error = '';
                  response.data.errors.password.forEach(function(error){
                    this_error = this_error + error + '\n';
                  });
                  vm.$swal('Failed', this_error,'warning');
                } else {
                  vm.$Progress.fail();
                  vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                }
              });
						}
					}
				});
      },
      
			showUploader(){
				Fire.$emit('ShowAvatarUploader');
      },
      
			clearFilter(){
				this.filter = {
					title: '',
					search: '',
					user_created_id: '',
					user_assigned: '',
					source: '',
					product_id: '',
					status: ''
				}
				this.show_filter_save = false;
      },
      
			filterData(){
				var vm = this;
				Fire.$emit('FilterData', {'filter' : vm.filter });
      },
      
			saveFilter(){
				var vm = this;
				vm.$validator.validateAll().then((result) => {
					if (!result){
					} else {
						axios.post('/filters/create',{ filter : this.filter, type: this.active }).then(function (response) {
							
							if (response.data.success === true){
								vm.Toast.fire({ type: 'success', title: response.data.message });
								
								Fire.$emit('SaveFilter', {'filters' : response.data.filters });

								vm.$Progress.finish();
							} else {
								vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
								vm.$Progress.fail();
							}
						});
					}
				});
      },
      
			fireTableEvent(event = ''){
				Fire.$emit(event);
      },
      
			fireSearchEvent(){
				Fire.$emit('Search',{'search_term' : this.filter.search});
			}
    },

		computed: {}
	}
</script>