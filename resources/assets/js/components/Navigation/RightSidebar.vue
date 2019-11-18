<style scoped>
.main-sidebar {
  right: 0 !important;
  left: auto;
  overflow: visible;
  position: absolute;
  top: 0;
  right: 0 !important;
  bottom: 0;
  z-index: 830;
  transition: right 0.3s ease-in-out;
  box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
}

.main-sidebar,
.main-sidebar:before {
  transition: margin-right 0.3s ease-in-out, width 0.3s ease-in-out !important;
  width: 16.718% !important;
}

.sidebar-collapse .main-sidebar,
.sidebar-collapse .main-sidebar:before {
  margin-left: 0 !important;
  /* margin-right: -10.833%!important;  */
}

@media (max-width: 991.98px) {
  .main-sidebar,
  .main-sidebar:before {
    margin-left: -0 !important;
    margin-left: -10.833% !important;
  }
  .sidebar-open .main-sidebar,
  .sidebar-open .main-sidebar:before {
    margin-right: 0 !important;
  }
}

.sidebar {
  overflow: visible;

}

p {
  color: #9fb3bb;
  margin: 0;
}

h2 {
  color: #003449;
  font-size: 29px;
  letter-spacing: 4.2px;
  font-weight: 600;
}

h3 {
  color: #1a1c43;
  font-size: 0.83vw;
  font-weight: 700;
}

h3 img {
  float: right;
  cursor: pointer;
  margin-top: -7px;
}

.main label.custom-control-label {
  color: inherit;
  font-weight: 200;
  padding-top: 3px;
}

.navbar {
  border-color: #cdcdcf;
  margin-top: 6%;
}

.navbar-light .navbar-nav .nav-link.icon {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link.name {
  font-size: 14px;
  color: #1e2331;
  padding-top: 6px;
  position: relative;
  top: -4%;
}

.help-block {
  color: red;
}

.status {
  display: none;
}

.status.active {
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

.status.offline {
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
.status.offline:hover {
  color: #3b3b3b;
  cursor: pointer;
}

.status.show {
  display: block !important;
}

.collapse {
  border-bottom: 1px solid #cdccce;
}

.p-3 {
  padding: 0.8rem 2rem 1.4rem 1.7rem !important;
}

.pl-34 {
  padding-left: 34px;
}

.ml-12 {
  margin-left: 12px;
}

.progress-bar {
  background: #f7f6fb;
  border-radius: 5px;
}

.tank {
  background: linear-gradient(
    to right,
    rgba(161, 237, 128, 1) 0%,
    rgba(98, 211, 126, 1) 100%
  ) !important;
  border-radius: 5px;
  background: rgb(114, 218, 126);
  height: 8px;
  transition: all 0.5s ease 0s;
}

.value {
  font-weight: 900;
  font-size: 0.83vw;
  color: #1a1c43;
  margin-top: -8px;
  letter-spacing: 0.1em;
  font-family: Montserrat !important;
}

.description {
  font-size: 12px;
  font-family: "Rubik", sans-serif;
  color: #1e2331;
  padding-bottom: 10px;
}

.position {
  display: block;
  position: relative;
  background: #ff8234;
  color: #fff;
  height: 62px;
  text-align: center;
  font-size: 17px;
  padding: 18px 9px;
  width: 62px;
  transform: rotate(45deg);
  /* Standard syntax */
  margin-bottom: 40px;
}

.position span {
  transform: rotate(0deg);
  /* Standard syntax */
}

p.heading {
  border-bottom: 1px solid #cdccce;
  margin-bottom: 10px;
  font-weight: 900;
}

.navbar ul {
  margin-bottom: 10px;
}

.personal-info,
.general-system-prefs,
.notifications .w-100 {
  margin-top: 20px;
}

.personal-info img {
  border-radius: 50%;
  width: 27%;
}

.personal-info button.btn-info {
  margin: 5px 0 15px 0;
  font-size: 9px;
}
.btn-info {
  height: 24px !important;
  background: #f98b39 !important;
  border-color: #f98b39 !important;
  color: #fff !important;
  padding: 4px 17px 6px !important;
  border-radius: 24px !important;
}
.settings .row.border-bottom,
.notifications .row.border-bottom {
  border-color: #cdccce;
  padding: 21px 0px 16px 0;
}
.notification-popup {
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1) !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1) !important;
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1) !important;
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1) !important;
  border-radius: 21px;
  width: 100% !important;
}

.settings .row p.description {
  font-size: 9px;
  display: block;
}

.custom-checkbox .custom-control-label {
  padding-top: 5px;
}

.themes label:first-child,
.themes label:nth-child(2),
.language label,
.notifications label,
.action-btns label:first-child,
.action-btns label:nth-child(2) {
  margin-right: 8px;
  float: left;
}

.control-label {
  color: #989899;
  font-family: "Rubik", sans-serif;
  font-size: 12px;
  text-align: left;
}

.btn-default {
  padding: 6px 12px 6px 10px;
  font-size: 10px;
  border: transparent !important;
  border-radius: 5px !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.btn-default:hover {
  background: #00344a;
  color: #ffffff;
  border: transparent !important;
  padding: 6px 12px 6px 10px;
  font-size: 10px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.btn-active {
  background: #00344a;
  color: #ffffff;
  border: transparent !important;
  padding: 6px 12px 6px 10px;
  font-size: 0.6vw;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.themes .btn-default,
.language .btn-default,
.language .btn-active {
  border-radius: 50rem !important;
  padding: 8px 15px !important;
}

.btn-orange,
.btn-orange-active {
  background: linear-gradient(
    to right,
    rgb(255, 128, 51, 1) 0%,
    rgba(255, 147, 58, 1) 100%
  ) !important;
  color: #ffffff;
  border: transparent !important;
  font-size: 10px;
  border-radius: 50rem !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.btn-white {
  background: #fff;
  border: transparent !important;
  font-size: 10px;
  border-radius: 50rem !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.orange-btn:hover {
  background: linear-gradient(
    to right,
    rgb(255, 128, 51, 1) 0%,
    rgba(255, 147, 58, 1) 100%
  ) !important;
  color: #ffffff;
  border: transparent !important;
  padding: 8px 15px;
  font-size: 10px;
  border-radius: 50rem !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.btn-blue {
  background: linear-gradient(
    to right,
    rgb(60, 144, 206, 1) 0%,
    rgba(65, 197, 231, 1) 100%
  ) !important;
  color: #ffffff;
  border: transparent !important;
  padding: 8px 15px;
  font-size: 10px;
  border-radius: 50rem !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.blue-btn:hover {
  background: linear-gradient(
    to right,
    rgb(60, 144, 206, 1) 0%,
    rgba(65, 197, 231, 1) 100%
  ) !important;
  color: #ffffff;
  border: transparent !important;
  padding: 8px 15px;
  font-size: 10px;
  border-radius: 50rem !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.btn-dark {
  background: linear-gradient(
    to right,
    rgb(25, 25, 26, 1) 0%,
    rgba(23, 23, 66, 1) 100%
  ) !important;
  color: #ffffff;
  border: transparent !important;
  padding: 8px 15px;
  font-size: 10px;
  border-radius: 50rem !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.dark-btn:hover {
  background: linear-gradient(
    to right,
    rgb(25, 25, 26, 1) 0%,
    rgba(23, 23, 66, 1) 100%
  ) !important;
  color: #ffffff;
  border: transparent !important;
  padding: 8px 15px;
  font-size: 10px;
  border-radius: 50rem !important;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}
.notifications-close img {
  width: 20px;
  top: 5px;
  position: relative;
}

.btn-has-new-dot {
  background-image: url("/images/icons/Red-Notification-Dot.svg") !important;
  background-size: 12px 12px;
  background-repeat: no-repeat;
  background-position: right top;
  width: 13px;
  height: 100%;
  z-index: 1;
  position: absolute;
  left: 66px;
  top: -5px;
}

.btn-has-new-messages {
  background-image: url("/images/icons/blue dot.svg") !important;
  background-size: 69% 34%;
  background-repeat: no-repeat;
  background-position: left top;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
}

.btn-has-new:hover {
  background-image: url("/images/icons/Dot.png") !important;
  background-size: 12px 12px;
  background-repeat: no-repeat;
  background-position: right top;
}

.logout-wrapper {
  margin-top: 14%;
}

#logout {
  background-image: url("/images/icons/Asset 67.svg") !important;
  background-size: contain;
  background-repeat: no-repeat;
  height: 100px;
  background-position: center;
  margin-bottom: 11%;
}

#logout:hover {
  background-image: url("/images/icons/Asset 66.svg") !important;
}

.notifications .btn-default {
  padding: 6px 25px 6px 18px;
  font-size: 12px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.notifications .top-section {
  list-style: none;
}

.notifications .card-body-notifications h3,
.notifications .card-body-notifications h3 a,
.caller-name {
  color: #333333;
  font-size: 0.7vw;
  font-weight: 600;
}
.caller-time {
  float: right;
  font-size: 0.6vw;
  color: #808080;
}

.notifications .card-body-notifications p.call_back_time {
  color: #808080;
  font-size: 0.7vw;
}

.personal-info .row.mx-0.border-left,
.account-info .row.mx-0.border-left {
  border-color: #cdccce;
}

.settings .title {
  color: #7f8080;
  padding-bottom: 16px;
  font-size: 12px;
}

.small-avatar img {
  width: 30px;
  border-radius: 50%;
}

.update-user,
.update-filter,
.save-filter {
  margin: 0px 0px 5px 0px;
}

.final-modal {
  padding: 0 0 1rem;
}

.final-modal .row-a {
  width: 100%;
  border-bottom: 1px solid #cdccce;
  margin-left: 0;
}

.final-modal label button img {
  width: 20px;
  margin-right: 15px;
}

.final-modal .navbar-nav .nav-item {
  font-size: 55px;
  color: #ff933a;
}

.card-header {
  color: rgba(28, 35, 49, 0.5);
  border-bottom: 0.5px solid #f4f4f5 !important;
  background-color: #fff !important;
  font-size: 10px;
  font-weight: 600;
}

.card-body-notifications {
  padding: 11px 10px;
}
.card-body-notifications img {
  padding-right: 10px;
}
.callback-cal p {
  font-size: 0.73vw;
  color: #666666;
  border-color: #ccc;
  margin-top: 25px;
}
.final-modal .card-header {
  padding: 0 11px 0;
}

.final-modal .card-header a[aria-selected="true"] {
  border-bottom: none;
  background: #fff;
  padding: 6px 12px;
}

.final-modal .card-header-tabs .left a.active[aria-selected="true"] {
  border-bottom: none;
  background: #fff;
  padding: 6px 12px;
  box-shadow: 11px -7px 16px -11px rgba(138, 134, 134, 0.75);
  -webkit-box-shadow: 11px -7px 16px -11px rgba(138, 134, 134, 0.75);
  -moz-box-shadow: 11px -7px 16px -11px rgba(138, 134, 134, 0.75);
  -o-box-shadow: 11px -7px 16px -11px rgba(138, 134, 134, 0.75);
}

.final-modal .card-header-tabs .left a[aria-selected="false"] {
  border-bottom: none;
  background: #fff;
  padding: 6px 12px;
  box-shadow: -4px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
  -webkit-box-shadow: -4px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
  -moz-box-shadow: -4px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
  -o-box-shadow: -4px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
}

.final-modal .card-header-tabs .right a.active[aria-selected="true"] {
  border-bottom: none;
  background: #fff;
  padding: 6px 12px;
  box-shadow: -8px -7px 14px -9px rgba(138, 134, 134, 0.75);
  -webkit-box-shadow: -8px -7px 14px -9px rgba(138, 134, 134, 0.75);
  -moz-box-shadow: -8px -7px 14px -9px rgba(138, 134, 134, 0.75);
  -o-box-shadow: -8px -7px 14px -9px rgba(138, 134, 134, 0.75);
}

.final-modal .card-header-tabs .right a[aria-selected="false"] {
  border-bottom: none;
  background: #fff;
  padding: 6px 12px;
  box-shadow: 5px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
  -webkit-box-shadow: 5px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
  -moz-box-shadow: 5px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
  -o-box-shadow: 5px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
}

.final-modal .card ul li.left .nav-link {
  padding: 6px 12px;
  font-size: 0.83vw;
  color: #818284;
}

.final-modal .card ul li.left .nav-link:hover {
  border: none;
  background: #fff;
  padding: 6px 12px;
  font-size: 0.83vw;
}

.final-modal .card ul li.right .nav-link {
  background: #fff;
  padding: 6px 12px;
  font-size: 0.83vw;
  color: #818284;
}

.final-modal .card ul li.right .nav-link:hover {
  background: #fff;
  padding: 6px 12px;
  font-size: 0.83vw;
}

.final-modal input {
  font-size: 9px;
}

.form-control {
  padding: 10px 12px !important;
  font-size: 12px;
  box-shadow: 0px 0 5px rgba(0, 0, 0, 0.1) !important;
  -webkit-box-shadow: 0px 0 5px rgba(0, 0, 0, 0.1) !important;
  -moz-box-shadow: 0px 0 5px rgba(0, 0, 0, 0.1) !important;
  -o-box-shadow: 0px 0 5px rgba(0, 0, 0, 0.1) !important;
  color: #193246;
  font-weight: 600;
  margin-top: 6px;
}

textarea.form-control {
  height: 100px !important;
  border-radius: 15px;
}

.stats-section {
  margin-top: 25px;
}

.stats-section .commission {
  padding: 25px 0;
}

.stats-section .sales,
.stats-section .calls,
.search-input,
.filter-search,
.filter-by {
  padding: 5px 0;
}

.stats-section .calls .col-lg-12 p,
.stats-section .sales .col-lg-12 p,
p.badges {
  border-bottom: 0.5px solid #f4f4f5;
  margin-bottom: 5px;
  padding-bottom: 2px;
}

.print-btn,
.export-btn {
  width: 90%;
}

.action-btns {
  margin-top: 17px;
}
/* is the notification count being used? */

.notification-count {
  position: relative;
  top: -7px;
  right: 15px;
  font-size: 9px;
  color: #003449;
}

.nav-item .nav-link.generalIcon:hover {
  background-image: url("/images/icons/right-sidebar/General_Active.svg") !important;
}

.nav-item .nav-link.filterIcon:hover {
  background-image: url("/images/icons/right-sidebar/Filter_Active.svg") !important;
}

.nav-item .nav-link.notificationsIcon:hover {
  background-image: url("/images/icons/right-sidebar/Notifications_Active.svg") !important;
}

.nav-item .nav-link.settingsIcon:hover {
  background-image: url("/images/icons/right-sidebar/Settings_Active.svg") !important;
}

.nav-item .nav-link.notificationsIcon img.inactive-icon:hover {
  background-image: url("/images/icons/right-sidebar/New_Not_Red_Active.svg") !important;
}

/* .menu-toggle {
  background-image: url("/images/icons/right-sidebar/Filter.svg") !important;
    background-repeat: no-repeat;
    height: 43px;
    width: 43px;
    top: 2px;
    position: relative;
    left: -11px;
}
.menu-toggle:hover {
  background-image: url("/images/icons/right-sidebar/Filter_Active.svg") !important;
}

.sidebar-collapse .menu-toggle {
  background-image: url("/images/icons/right-sidebar/General.svg") !important;
}
.sidebar-collapse .menu-toggle:hover {
  background-image: url("/images/icons/right-sidebar/General_Active.svg") !important;
}

.reminders { 
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 0 7px rgba(0, 0, 0, 0.1); 
    border-radius: 25px; 
  }  */

.reminders .nav-link[aria-posinset="2"] {
  text-align: right;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  line-height: 1em;
  justify-content: flex-end;
}
.reminders .tabs,
.filter-content .tabs {
  width: 100%;
}

.reminders .col-6 {
  padding-left: 6%;
  padding-right: 6%;
}

.filter-results .custom-control.custom-checkbox .custom-control-label:before,
.reminders .custom-checkbox .custom-control-label::before {
  border-radius: 50% !important;
  border: 1px solid #ededed;
  box-shadow: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -o-box-shadow: none;
  background-image: url("/images/icons/right-sidebar/Task_Check.svg") !important;
  background-size: cover;
}

.reminders .custom-control-label::after,
.reminders .custom-control-label::before {
  width: 20px;
  height: 20px;
  top: 19px;
  left: 0.2rem;
  cursor: pointer;
}

.reminders input.list-input {
  font-size: 0.83vw;
  font-family: "Rubik", sans-serif;
  color: #808080;
  padding-left: 37px !important;
  width: 100%;
  text-overflow: ellipsis;
}

.reminders input.list-input:focus,
.nav-link:focus {
  outline: 0 !important;
  box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  -o-box-shadow: none !important;
  border: 0 !important;
}

.reminders .btn-primary {
  padding: 11px 14px 10px;
  line-height: 1em;
}
.reminders .terms-text textarea {
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #f7f7f7;
}

.reminders .terms-text textarea:focus {
   outline: 0 !important;
}
.reminders .terms-text textarea::placeholder {
  font-style: italic;
  font-weight: 300;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-image: url("/images/icons/right-sidebar/Task_Check.svg") !important;
  border-radius: 50% !important;
  background-size: cover;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  border-radius: 50% !important;
  background-color: #ff933a !important;
}

.reminders input.list-input:focus {
  border: 1px solid rgba(28, 35, 49, 0.5);
}
.grey-scroll::-webkit-scrollbar-thumb {
  background: #b3b3b3 !important;
  border-radius: 5px !important;
}

.orange {
  color: #ff933a;
}

.blue {
  color: #3fa9f5;
}

.tasks-date {
  font-size: 10px;
  font-family: "Rubik", sans-serif !important;
  color: #808080;
  margin-left: 35px;
}

.reminders-border-bottom {
  border-bottom: 1px solid #f7f7f7;
}

li.row.m-2.pl-0.align-items-center.reminders-border-bottom:first-child {
border-top: 1px solid #f7f7f7;
}

.nav-tabs .nav-item {
  width: 50%;
}

.btn-default.cancel-user {
  border-radius: 50rem !important;
  font-size: 10px;
  color: #989899;
  text-transform: uppercase;
  padding: 10px 20px;
  font-weight: 600;
}

.btn-primary.update-user,
.btn-primary.update-filter,
.btn-primary.save-filter {
  font-size: 10px;
  background: linear-gradient(
    to right,
    rgb(255, 128, 51, 1) 0%,
    rgba(255, 147, 58, 1) 100%
  ) !important;
  font-weight: 600;
  text-transform: uppercase;
  padding: 10px 20px;
}

.btn-primary.update-filter,
.btn-primary.save-filter {
  padding: 6px 12px !important;
}

.float-right {
  float: right;
}
.inactive-icon {
  padding: 6px;
  border-radius: 50rem;
  box-shadow: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -o-box-shadow: none;
  transition: box-shadow 0.5s ease;
}

/* .inactive-icon:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
} */

.filter-heading {
  font-size: 0.83vw;
  color: #171717 !important;
  font-family: "Rubik", sans-serif !important;
}

.filterborder {
  border: 1px solid #fed6d6;
}

.show {
  display: block !important;
}

.row.filter-content {
  margin-left: -27px;
  margin-right: -27px;
}

.row.filter-content .custom-control.custom-checkbox,
.saved-results {
  border-radius: 14px;
  box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  -o-box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  margin: 10px 0;
}

.row.filter-content .custom-control.custom-checkbox .custom-control-label {
  font-size: 14px;
  padding-left: 28px;
  font-family: "Rubik", sans-serif !important;
}

.row.filter-content
  .filter-results
  .custom-control.custom-checkbox
  .custom-control-label {
  font-size: 12px;
  padding-left: 20px;
}

.row.filter-content .filter-results .custom-control {
  padding-left: 10px !important;
}

.row.filter-content .search-criteria {
  border: 0;
  box-shadow: -2px 8px 7px 2px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: -2px 8px 7px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: -2px 8px 7px 2px rgba(0, 0, 0, 0.05);
  -o-box-shadow: -2px 8px 7px 2px rgba(0, 0, 0, 0.05);
  font-size: 12px;
  border-radius: 14px;
  padding: 10px;
  font-family: "Rubik", sans-serif !important;
}

.row.filter-content .search-text,
.save-text {
  border: 0;
  box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  -o-box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
  font-size: 12px;
  font-family: "Rubik", sans-serif;
  font-weight: 300;
  font-style: italic;
  border-radius: 15px;
  padding: 10px;
}

.row.filter-content
  .search-text::-webkit-input-placeholder
  .save-text::-webkit-input-placeholder {
  font-size: 12px !important;
  font-family: "Rubik", sans-serif !important;
  color: rgba(0, 0, 0, 0.65) !important;
}

.save-text::-webkit-input-placeholder {
  font-size: 10px !important;
  font-family: "Rubik", sans-serif !important;
  color: #b3b3b3 !important;
  font-style: italic;
}

.filter-results {
  max-height: 200px;
  overflow: auto;
  margin-top: 20px;
}

.saved-results {
  font-size: 12px !important;
  font-family: "Rubik", sans-serif;
}
.px-6 {
  padding: 0px 8%;
}
.px-6-hide {
  padding: 0px 8%;
}

.filter-container {
  overflow: auto;
}



@media screen and (max-width: 1368px) {
  .filter-container {
    max-height: 450px;
  }
  .px-6-hide {
  padding:0;
  }
  .small-margin {
    margin: 10px 10px 0px 9px;
  }
}

@media screen and (min-width: 1400px) {
  .filter-container {
    max-height: 650px;
  }
}

input.search-text:focus,
input.save-text:focus {
  outline: 0 !important;
  border: 0 !important;
}

.custom-filter-name-save {
  border-color: #cdcdcf;
}
/*End Right Component*/
</style> 
<template>
  <div>
    <aside class="main-sidebar sidebar-light-primary">
     
      <!-- Control sidebar content goes here -->
      <section class="sidebar px-0">
        <div class="sidebar-menu grey-scroll" data-widget="tree">
          <div class="px-6-hide">
          <nav
            class="navbar navbar-expand-md navbar-light bg-white p-0 w-100 row mx-0 justify-content-between align-items-center border-bottom"
          >
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav col-auto">
               <li class="nav-item">
                <a class="nav-link icon p-0 generalIcon" href="#" @click="showGeneralStats()">
                  <img
                    v-if="generalStats_on == false"
                    src="/images/icons/right-sidebar/General.svg"
                    alt="Settings Cog"
                    width="43"
                    class="inactive-icon"
                  />
                  <img
                    v-else
                    src="/images/icons/right-sidebar/General_Active.svg"
                    alt="Settings Cog"
                    width="43"
                  />
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link icon p-0 filterIcon" href="#" @click="showFiltersTab()">
                  <img
                    v-if="filters_on == false"
                    src="/images/icons/right-sidebar/Filter.svg"
                    alt="Settings Cog"
                    width="43"
                    class="inactive-icon"
                  />
                  <img
                    v-else
                    src="/images/icons/right-sidebar/Filter_Active.svg"
                    alt="Settings Cog"
                    width="43"
                  />
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon p-0 notificationsIcon" href="#" @click="showNotifications()">
                  <img
                    v-if="notifications_on == true"
                    src="/images/icons/right-sidebar/Notifications_Active.svg"
                    alt="Notification Bell"
                    width="43"
                  />
                  <img
                    v-else-if="notifications_on == false && unread_messages == 0 && call_backs.length == 0"
                    src="/images/icons/right-sidebar/Notification.svg"
                    alt="Notification Bell"
                    width="43"
                    class="inactive-icon"
                  />
                  <img
                    v-else-if="notifications_on == false && unread_messages >= 1 || call_backs.length > 0"
                    src="/images/icons/right-sidebar/Notifications_1.svg"
                    alt="Notification Bell"
                    width="43"
                    class="inactive-icon"
                  />
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link icon p-0 settingsIcon" href="#" @click="showSettings()">
                  <img
                    v-if="settings_on == false"
                    src="/images/icons/right-sidebar/Setting.svg"
                    alt="Settings Cog"
                    width="43"
                    class="inactive-icon"
                  />
                  <img
                    v-else
                    src="/images/icons/right-sidebar/Settings_Active.svg"
                    alt="Settings Cog"
                    width="43"
                  />
                </a>
              </li>
            </ul>
            <ul class="navbar-nav col-auto text-right pr-0">
              <div class="row mx-0 justify-content-end">
                <!-- <li
                  class="nav-item name-li col-auto px-0"
                  v-if="user.nickname != null && user.nickname != ''"
                >
                  <a class="nav-link name" href="#" @click="showSettings()">{{ user.nickname }}</a>
                </li>

                <li class="nav-item name-li col-auto px-0" v-else>
                  <a class="nav-link name" href="#" @click="showSettings()">{{ user.name }}</a>
                </li> -->
                <li class="nav-item col-auto pr-0">
                  <a class="nav-link icon pt-0 px-0 mr-2 small-avatar" href="#" @click="showSettings()">
                    <img
                      v-if="user.avatar != '' && user.avatar != null"
                      :src="avatarUrl + user.id + '/' + user.avatar"
                    />
                    <img v-else :src="noImageUrl" />
                  </a>
                </li>
              </div>
            </ul>
          </nav>
          </div>

          <div class="open-sidenav mt-3">
            <div v-if="settings_on == true" class="settings px-6-hide ml-2">
              <div class="row mx-0 pt-0 border-bottom">
                <div class="row mx-0 justify-content-between align-items-center w-100 p-0">
                  <div class>
                    <h3 class="d-block mb-0">Profile</h3>
                  </div>

                  <div class="col-auto">
                    <img
                      @click="expanded = true;profile_on = true;account_on = false;system_settings_on = false;language_settings_on = false;"
                      v-if="profile_on == false"
                      src="/images/icons/settings edit buttin@4x.png"
                      alt="Profile Edit Off"
                      width="30"
                    />
                    <img
                      @click="expanded = false;profile_on = false;account_on = false;system_settings_on = false;language_settings_on = false;"
                      v-else
                      src="/images/icons/right-sidebar/Close Edit Icon.svg"
                      alt="Profile Edit Off"
                      width="30"
                    />
                  </div>
                </div>

                <transition-expand>
                  <div v-if="expanded == true && profile_on == true" class="w-100 personal-info">
                    <p class="d-block w-100 title" title="Personal Information">Personal Information</p>
                    <div class="row mx-0 border-left mb-4 pb-0 pl-4">
                      <div
                        :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Address') }"
                      >
                        <label
                          class="row justify-space-between align-items-center control-label text-center p-0 w-100 mx-0"
                        >
                          <div class="col-lg-6 pl-0 text-left">Profile Picture</div>
                          <div class="col-lg-6 pr-0">
                            <img
                              v-if="user.avatar != '' && user.avatar != null"
                              :src="avatarUrl + user.id + '/' + user.avatar"
                            />
                            <img v-else :src="noImageUrl" />
                            <button
                              class="btn btn-info"
                              type="button"
                              @click="showUploader"
                            >Choose Image</button>
                          </div>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Name') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0 mb-2">
                          <span class="ml-12">Name</span>
                          <input
                            type="text"
                            id="email"
                            name="Name"
                            v-model="user.name"
                            v-validate="'required'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Name')"
                            class="help-block"
                          >{{ errors.first('Name') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Surname') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0 mb-2">
                          <span class="ml-12">Surname</span>
                          <input
                            type="text"
                            id="email"
                            name="Surname"
                            v-model="user.lastname"
                            v-validate="'required'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Surname')"
                            class="help-block"
                          >{{ errors.first('Surname') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Surname') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0 mb-2">
                          <span class="ml-12">Prefered Nickname</span>
                          <input
                            type="text"
                            id="nickname"
                            name="Nickname"
                            v-model="user.nickname"
                            v-validate="'required'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Nickname')"
                            class="help-block"
                          >{{ errors.first('Nickname') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Email') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0 mb-2">
                          <span class="ml-12">Email</span>
                          <input
                            type="text"
                            id="email"
                            name="Email"
                            v-model="user.email"
                            v-validate="'required|email'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Email')"
                            class="help-block"
                          >{{ errors.first('Email') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Work Tel') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0 mb-2">
                          <span class="ml-12">Work Telephone</span>
                          <input
                            type="text"
                            id="work_number"
                            name="Work Tel"
                            v-model="user.work_number"
                            v-validate="'required|numeric|min:10'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Work Telephone')"
                            class="help-block"
                          >{{ errors.first('Work Tel') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Cell Number') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0 mb-2">
                          <span class="ml-12">Cellphone number</span>
                          <input
                            type="text"
                            id="personal_number"
                            name="Cell Number"
                            v-model="user.personal_number"
                            v-validate="'required|numeric|min:10'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Cell Number')"
                            class="help-block"
                          >{{ errors.first('Cell Number') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100 mb-0' :true, 'has-error': errors.has('Address') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0 mb-0">
                          <span class="ml-12">Address</span>
                          <textarea
                            id="address"
                            name="Address"
                            v-model="user.address"
                            v-validate="'required'"
                            class="form-control border-0"
                          ></textarea>
                          <span
                            id="error"
                            v-show="errors.has('Address')"
                            class="help-block"
                          >{{ errors.first('Address') }}</span>
                        </label>
                      </div>
                    </div>

                    <div
                      :class="{'input': true, 'form-group' :true }"
                      class="row mx-0 pl-4 justify-content-end"
                    >
                      <div class="col-auto pl-0 pr-2">
                        <button
                          type="submit"
                          class="btn btn-default cancel-user w-100 m-0"
                          @click="updateUser('profile')"
                        >Cancel</button>
                      </div>

                      <div class="col-auto pr-0 pl-2">
                        <button
                          type="submit"
                          class="btn btn-primary update-user w-100 rounded-pill m-0"
                          @click="updateUser('profile')"
                        >Update</button>
                      </div>
                    </div>
                  </div>
                </transition-expand>
              </div>

              <div class="row mx-0 border-bottom account-info">
                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                  <div class>
                    <h3 class="mb-0">Account</h3>
                  </div>
                  <div class="col-auto">
                    <img
                      @click="expanded = true;account_on = true;profile_on = false;system_settings_on = false;language_settings_on = false;"
                      v-if="account_on == false"
                      src="/images/icons/settings edit buttin@4x.png"
                      alt="Account Edit Off"
                      width="30"
                    />
                    <img
                      @click="expanded = false;account_on = false;profile_on = false;system_settings_on = false;language_settings_on = false;"
                      v-else
                      src="/images/icons/right-sidebar/Close Edit Icon.svg"
                      alt="Account Edit Off"
                      width="30"
                    />
                  </div>
                </div>

                <transition-expand>
                  <div v-if="expanded == true && account_on == true" class="w-100 mt-3">
                    <p class="d-block w-100 title" title="Personal Information">Account Information</p>
                    <div class="row mx-0 border-left mb-4 pb-0 pl-4">
                      <div
                        class="notifications-checkbox"
                        :class="{'input': true, 'form-group w-100' :true }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0">
                          <b-form-checkbox
                            id="checkbox-1"
                            v-model="user.notifications"
                            name="checkbox-1"
                            value="1"
                            unchecked-value="0"
                            @change="updateNotifications"
                          >Notifications</b-form-checkbox>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Old Password') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0">
                          <span class="ml-12">Old Password</span>
                          <input
                            type="password"
                            id="email"
                            name="Old Password"
                            v-model="user.old_password"
                            v-validate="'required|min:6'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Old Password')"
                            class="help-block"
                          >{{ errors.first('Old Password') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('New Password') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0">
                          <span class="ml-12">New Password</span>
                          <input
                            type="password"
                            id="password"
                            ref="password"
                            name="New Password"
                            v-model="user.password"
                            v-validate="'required|min:6'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('New Password')"
                            class="help-block"
                          >{{ errors.first('New Password') }}</span>
                        </label>
                      </div>

                      <div
                        :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Password Confirm') }"
                      >
                        <label class="col-lg-12 control-label w-100 p-0">
                          <span class="ml-12">Confirm New Password</span>
                          <input
                            type="password"
                            id="password_confirm"
                            name="Password Confirm"
                            v-model="user.password_confirmation"
                            v-validate="'required|min:6|confirmed:password'"
                            class="form-control border-0 rounded-pill"
                          />
                          <span
                            id="error"
                            v-show="errors.has('Password Confirm')"
                            class="help-block"
                          >{{ errors.first('Password Confirm') }}</span>
                        </label>
                      </div>
                    </div>

                    <div
                      :class="{'input': true, 'form-group' :true }"
                      class="row mx-0 pl-4 justify-content-end"
                    >
                      <div class="col-auto pl-0 pr-2">
                        <button
                          type="submit"
                          class="btn btn-default cancel-user w-100 m-0"
                          @click="updateUser('account')"
                        >Cancel</button>
                      </div>

                      <div class="col-auto pr-0 pl-2">
                        <button
                          type="submit"
                          class="btn btn-primary update-user w-100 rounded-pill m-0"
                          @click="updateUser('account')"
                        >Update</button>
                      </div>
                    </div>
                  </div>
                </transition-expand>
              </div>

              <div class="row mx-0 preferences border-bottom" v-if="user.role_id == 1">
                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                  <div class>
                    <h3 class="d-block mb-0">Settings</h3>
                  </div>
                  <div class="col-auto">
                    <img
                      @click="expanded = true;system_settings_on = true; account_on = false;profile_on = false;language_settings_on = false;"
                      v-if="system_settings_on == false"
                      src="/images/icons/settings edit buttin@4x.png"
                      alt="Account Edit Off"
                      width="30"
                    />
                    <img
                      @click="expanded = false;system_settings_on = false;account_on = false;profile_on = false;language_settings_on = false;"
                      v-else
                      src="/images/icons/right-sidebar/Close Edit Icon.svg"
                      alt="Account Edit Off"
                      width="30"
                    />
                  </div>
                </div>

                <transition-expand>
                  <div
                    v-if="expanded == true && system_settings_on == true"
                    class="w-100 general-system-prefs"
                  >
                    <div class="row mx-0 mb-4 pb-0 pl-4">
                      <div class="row mx-0">
                        <div
                          :class="{'input': true, 'form-group' :true }"
                        >
                          <div>
                            <label class="col-lg-12 control-label w-100 p-0">
                              Max number of rows for tables
                              <select
                                id="auto_dialler"
                                v-model="user_settings.max_table_rows"
                                class="form-control border-0 rounded-pill"
                                v-on:change="applySetting()"
                              >
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="250">250</option>
                                <option value="300">300</option>
                                <option value="350">350</option>
                                <option value="400">400</option>
                                <option value="450">450</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                              </select>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </transition-expand>
              </div>

              <div class="row mx-0 preferences border-bottom" style="display:none;">
                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                  <div class>
                    <h3 class="d-block mb-0">Themes</h3>
                  </div>
                  <div class="col-auto">
                    <img
                      @click="expanded = true;system_settings_on = true; account_on = false;profile_on = false;language_settings_on = false;"
                      v-if="system_settings_on == false"
                      src="/images/icons/settings edit buttin@4x.png"
                      alt="Account Edit Off"
                      width="30"
                    />
                    <img
                      @click="expanded = false;system_settings_on = false;account_on = false;profile_on = false;language_settings_on = false;"
                      v-else
                      src="/images/icons/right-sidebar/Close Edit Icon.svg"
                      alt="Account Edit Off"
                      width="30"
                    />
                  </div>
                </div>

                <transition-expand>
                  <div
                    v-if="expanded == true && system_settings_on == true"
                    class="w-100 general-system-prefs"
                  >
                    <div class="row mx-0 mb-4 pb-0 pl-4">
                      <div class="row mx-0" v-if="preferences.length > 0">
                        <div
                          v-for="(setting, index) in preferences"
                          :key="index"
                          class="w-100 themes"
                        >
                          <div
                            v-if="setting.setting == 'theme' && setting.system_setting != 1"
                            class="row mx-0"
                          >
                            <label class="col-auto control-label p-0">
                              <button
                                v-on:click="applySetting({ type : 'theme', value : 'orange'})"
                                type="submit"
                                :class="{ 'btn orange-btn': true, 'btn-orange' : (setting.value == 'orange')? true : false , 'btn-default' : (setting.value != 'orange')? true : false  }"
                                class="m-0 rounded-pill"
                              >Orange</button>
                            </label>

                            <label class="col-auto control-label p-0">
                              <button
                                v-on:click="applySetting({type : 'theme', value  : 'blue'})"
                                type="submit"
                                :class="{ 'btn blue-btn': true, 'btn-blue' : (setting.value == 'blue')? true : false , 'btn-default' : (setting.value != 'blue')? true : false  }"
                                class="m-0 rounded-pill"
                              >Blue</button>
                            </label>

                            <label class="col-auto control-label p-0">
                              <button
                                v-on:click="applySetting({type : 'theme', value  : 'dark'})"
                                type="submit"
                                :class="{ 'btn dark-btn': true, 'btn-dark' : (setting.value == 'dark')? true : false , 'btn-default' : (setting.value != 'dark')? true : false  }"
                                class="m-0 rounded-pill"
                              >Dark</button>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="row mx-0" v-else>
                        <div class="w-100 themes">
                          <div class="row mx-0">
                            <label class="col-auto control-label py-0 pr-2 pl-0">
                              <button
                                v-on:click="applySetting({ type : 'theme', value : 'orange'})"
                                type="submit"
                                :class="{ 'btn orange-btn': true, 'btn-orange' :true  }"
                                class="m-0 rounded-pill"
                              >Orange</button>
                            </label>

                            <label class="col-auto control-label py-0 px-2">
                              <button
                                v-on:click="applySetting({type : 'theme', value  : 'blue'})"
                                type="submit"
                                :class="{ 'btn blue-btn': true, 'btn-default' : true }"
                                class="m-0 rounded-pill"
                              >Blue</button>
                            </label>

                            <label class="col-auto control-label py-0 pr-0 pl-2">
                              <button
                                v-on:click="applySetting({type : 'theme', value  : 'dark'})"
                                type="submit"
                                :class="{ 'btn dark-btn': true, 'btn-default' :  true }"
                                class="m-0 rounded-pill"
                              >Dark</button>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </transition-expand>
              </div>

              <div class="row mx-0 language border-bottom" style="display:none;">
                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                  <div class>
                    <h3 class="d-block mb-0">Language</h3>
                  </div>

                  <div class="col-auto">
                    <img
                      @click="expanded = true;language_settings_on = true; account_on = false;profile_on = false;system_settings_on = false;"
                      v-if="system_settings_on == false"
                      src="/images/icons/settings edit buttin@4x.png"
                      alt="Account Edit Off"
                      width="30"
                    />
                    <img
                      @click="expanded = false;language_settings_on = false;account_on = false;profile_on = false;system_settings_on = false;"
                      v-else
                      src="/images/icons/right-sidebar/Close Edit Icon.svg"
                      alt="Account Edit Off"
                      width="30"
                    />
                  </div>
                </div>

                <transition-expand>
                  <div
                    v-if="expanded == true && language_settings_on == true"
                    class="w-100 general-system-prefs"
                  >
                    <div v-if="preferences.length > 0">
                      <div
                        v-for="(setting, index) in preferences"
                        :key="index"
                        class="w-100 language"
                      >
                        <div
                          v-if="setting.setting == 'language' && setting.system_setting != 1"
                          class="row mx-0"
                        >
                          <label class="col-auto control-label p-0">
                            <button
                              v-on:click="applySetting({type : 'language', value : 'english'})"
                              type="submit"
                              :class="{ 'btn' : true, 'btn-active' :  (setting.value == 'english')? true : false, 'btn-default' : (setting.value != 'english')? true : false }"
                              class="m-0"
                            >English</button>
                          </label>

                          <label class="col-auto control-label p-0">
                            <button
                              v-on:click="applySetting({type : 'language', value :'spanish'})"
                              type="submit"
                              :class="{ 'btn' : true, 'btn-active' :  (setting.value == 'spanish')? true : false, 'btn-default' : (setting.value != 'spanish')? true : false }"
                              class="m-0"
                            >Spanish</button>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="row mx-0">
                      <label class="col-auto control-label py-0 pl-0 pr-2 language">
                        <button
                          v-on:click="applySetting({type : 'language', value : 'english'})"
                          type="submit"
                          :class="{ 'btn' : true, 'btn-active' :  true }"
                          class="m-0"
                        >English</button>
                      </label>

                      <label class="col-auto control-label py-0 pr-0 pl-2">
                        <button
                          v-on:click="applySetting({type : 'language', value :'spanish'})"
                          type="submit"
                          :class="{ 'btn' : true, 'btn-active' : false , 'btn-default' : true }"
                          class="m-0"
                        >Spanish</button>
                      </label>
                    </div>
                  </div>
                </transition-expand>
              </div>

              <div class="row mx-0 logout-wrapper" v-if="profile_on == false">
                <a href="/logout" id="logout" class="w-100 d-block"></a>
                <h3 class="d-block w-100 text-center">Logout</h3>
              </div>
            </div>

            <div v-if="notifications_on == true" class="notifications px-6-hide ml-2">
              <div class="row mx-0">
                <h3 class="w-100 mb-2 mt-0">
                  Notifications
                  <span class="notifications-close">
                    <img src="/images/icons/close-icon.svg" style="display:none;" />
                  </span>
                </h3>

                <div class="w-100 mt-0">
                  <label class="col-auto mt-0 control-label w-100 p-0">
                    <button
                      @click="showCallbacks"
                      type="submit"
                      :class="{'btn' : true, 'btn-orange-active' : callbacks_on, 'btn-default border-0' : !callbacks_on, 'btn-has-new' : call_backs.length > 0 }"
                      class="m-0 btn-white"
                    >Callbacks</button>
                    <div class="btn-has-new-dot"></div>
                  </label>

                  <label
                    @click="showMessages"
                    class="col-lg-3 mt-0 control-label w-100 p-0"
                    style="display:none;"
                  >
                    <button
                      type="submit"
                      :class="{'btn' : true, 'btn-orange-active' : messages_on, 'btn-default border-0' : !messages_on, 'btn-has-new' : unread_messages >= 1  }"
                      class="w-100 m-0 btn-white"
                    >Messages</button> 

                    <div class="btn-has-new-dot"></div> 
                  </label> 
                </div> 
              </div> 
              <hr> 
                <!-- Continue here --> 
              <div v-if="callbacks_on == true && messages_on == false" class="row mx-0"> 
                <div v-if="call_backs.length > 0"> 
                  <div class="card w-100 notification-popup" v-for="(call_back, i) in call_backs" :key="i"> 
                    <div class="card-body-notifications"> 
                      <h3 class="d-block d-block w-100"> 
                        <a :href="'/workstation/' + call_back.lead.id" class="d-block w-100">{{ call_back.lead.name + ' ' +call_back.lead.surname }}</a> 
                      </h3> 

                      <p class="call_back_time d-block w-100" title="Personal Information">{{ call_back.call_date }} @ {{ call_back.call_time }}</p> 
                    </div> 
                  </div> 
                </div> 

                <div v-else> 
                  <div class="notification-popup"> 
                    <div class="card-body-notifications"> 
                      <p class="call_back_time d-block mt-0 w-100" title="Personal Information">0 Callbacks at present</p> 
                    </div> 
                  </div> 
                </div> 
              </div> 

              <div v-if="callbacks_on == false && messages_on == true" class="row mx-0"> 
                <div class="col-12 notification-popup w-100"> 
                  <div class="row mx-0 card-body-notifications"> 
                    <div class="col-auto pl-1 btn-has-new-messages">   
                    </div> 

                    <div class="col-auto p-0"><img src="/images/icons/user_icon@4x.png" width="50"></div> 
                    <div class="col-auto p-0"> 
                      <p class="d-block mb-1"><span class="caller-name">Agnes Dean</span><span class="caller-time">15:46</span></p> 
                      <p title="Personal Information" class="call_back_time d-block w-100 mt-0">Lorem Ipsum dolor sit amet, c...</p> 
                    </div> 
                  </div> 
                </div> 

                <div class="col-12 notification-popup w-100"> 
                  <div class="row mx-0 card-body-notifications"> 
                    <div class="col-auto pl-1 btn-has-new-messages"> 
                    </div> 

                    <div class="col-auto p-0"><img src="/images/icons/user_icon@4x.png" width="50"></div> 
                    <div class="col-auto p-0"> 
                      <p class="d-block mb-1"><span class="caller-name">Justin Hill</span><span class="caller-time">12:37</span></p> 
                      <p title="Personal Information" class="call_back_time d-block w-100 mt-0">Lorem Ipsum dolor sit amet, c...</p> 
                    </div> 
                  </div> 
                </div> 
              </div> 
            </div> 

            <div v-if="notifications_on == false && settings_on == false && filters_on == false"> 
              <div class="row mx-0 py-0 px-2 stats-section"> 
                <div class="col-lg-12 px-0"> 
                  <div class="row mx-0 p-0"> 
                    <div class="col-lg-12 px-0"> 
                      <p class="monthly-target description">Monthly Target <span class="value float-right">65%</span></p> 
                      <div class="progress-bar w-100"> 
                        <span class="tank" :style="{width: + 65 + '%'}"></span> 
                      </div> 
                    </div> 
                  </div> 

                  <div class="row mx-0 commission"> 
                    <div class="col-lg-6 pl-0"> 
                      <p class="description">Commission</p> 
                      <p><span class="value">{{ call_log.commission }}</span></p> 
                    </div> 

                    <div class="col-lg-6 text-right pr-0"> 
                      <p class="description">Con. Ratio</p> 
                      <p><span class="value">{{ call_log.con_ratio }}%</span></p> 
                    </div> 
                  </div> 

                  <div class="row mx-0 calls"> 
                    <div class="col-lg-12 px-0"> 
                      <p class="description">Calls</p> 
                    </div> 

                    <div class="col-lg-6 pl-0"> 
                      <p class="description">Leads</p> 
                      <p><span class="value">125</span></p> 
                    </div> 

                    <div class="col-lg-6 text-right pr-0"> 
                      <p class="description">Called</p> 
                      <p><span class="value">25</span></p> 
                    </div> 
                  </div> 

                  <div class="row mx-0 sales"> 
                    <div class="col-lg-12 px-0"> 
                      <p class="description">Sales</p> 
                    </div> 
                    <div class="col-lg-6 pl-0"> 
                      <p class="description">Quantity</p> 
                      <p><span class="value">{{ call_log.total_sales }}</span></p> 
                    </div> 
                    <div class="col-lg-6 text-right pr-0"> 
                      <p class="description">Value</p> 
                      <p><span class="value">{{ call_log.sum_sales }}</span></p> 
                    </div> 
                  </div> 
                </div> 
              </div> 

              <div class="row mx-0 px-2 callback-cal"> 
                <div class="col-lg-12 border-0 px-0"> 
                  <p class="border-bottom">Calendar</p>
                  <vc-calendar class="border-0" :attributes='attrs' is-expanded :popover="true" />  
                </div> 
              </div> 

              <div class="row mx-0 px-2"> 
                <div class="col-lg-12 final-modal border-0"> 
                  <div class="row mx-0 mb-4 reminders"> 
                    <b-tabs class="outer-box-shadow"> 
                      <b-tab title="Callbacks" active class="p-2"> 
                        <ul class="pl-0" v-if="call_backs.length > 0"> 
                          <li 
                            v-for="(call_back, i) in call_backs" 
                            :key="i" 
                            class="row m-2 pl-0 align-items-center middle-box-shadow custom-control custom-checkbox"
                          > 
                            <div class="col-12 p-2"> 
                              <div class="row mx-0 align-items-center"> 
                                <div class="col8 pl-0 custom-control custom-checkbox"> 
                                  <input 
                                    class="custom-control-input" 
                                    :id="'callback' + i" 
                                    type="checkbox" 
                                    v-model="call_back.status" 
                                    @click="markCallBackDone(call_back)"
                                  />
                                  <label
                                    class="pl-34 custom-control-label"
                                    :for="'callback' + i"
                                  >{{ call_back.lead.name + ' ' +call_back.lead.surname }}</label>
                                  <br><span
                                    class="tasks-date"
                                  >{{ call_back.call_date }} {{ call_back.call_time }}</span>
                                </div>
                                <!-- <div class="col-auto pr-0">
                                  <span
                                    class="tasks-date"
                                  >{{ call_back.call_date }} {{ call_back.call_time }}</span>
                                </div> -->
                              </div>
                            </div>
                          </li>
                        </ul>

                        <div v-else>
                          <div class="">
                            <div class="card-body-notifications">
                              <p
                                class="call_back_time d-block mt-0 w-100"
                                title="Personal Information"
                              >0 Callbacks at present</p>
                            </div>
                          </div>
                        </div>
                      </b-tab>

                      <b-tab>
                        <template v-slot:title>
                          <span class="mr-1 border-0">Reminders</span>
                        </template>

                        <ul class="pl-0" v-if="tasks.length > 0 && !add_task">
                          <!--When adding a new task, the whole li tag should be added and change input ids -->
                          <li
                            v-for="(task, i) in tasks"
                            :key="i"
                            class="row m-2 pl-0 align-items-center reminders-border-bottom custom-control custom-checkbox"
                          >
                            <transition name="bounce">
                              <div class="col-12 p-2">
                                <div class="row mx-0 align-items-center">
                                  <div class="col pl-0 custom-control custom-checkbox">
                                    <input
                                      class="custom-control-input"
                                      v-model="task.status"
                                      :id="'task' + i"
                                      type="checkbox"
                                      @click="editTask(task,'status')"
                                    />
                                    <label
                                      class="terms-text custom-control-label"
                                      :for="'task' + i"
                                    >
                                      <input
                                        type="text"
                                        v-model="task.title"
                                        class="border-0 list-input"
                                        @focus="editTaskCollapes(task.id)"
                                      />
                                    </label>
                                    <br> <span
                                      class="tasks-date"
                                    >{{ moment(task.deadline).format( 'DD MMM') }}</span>
                                  </div>

                                  <!-- <div class="col-auto pr-0">
                                    <span
                                      class="tasks-date"
                                    >{{ moment(task.deadline).format( 'DD MMM') }}</span>
                                  </div> -->
                                </div>

                                <div
                                  class="row mx-0 justify-content-between"
                                  v-if="edit_task && active_task_id == task.id"
                                >
                                  <div class="col-12 px-0 custom-control custom-checkbox">
                                    <label class="w-100 terms-text" :for="'task' + i">
                                      <a-textarea
                                        v-model="task.description"
                                        placeholder="Description"
                                        autosize
                                        class=""
                                      />
                                    </label>
                                  </div>

                                  <div class="col-6 pl-0 custom-control">
                                    <label class="terms-text" :for="'task' + i">
                                      <a-date-picker
                                        v-model="task.deadline"
                                        :defaultValue="moment(task.deadline, 'YYYY-MM-DD')"
                                        class="w-100"
                                      />
                                    </label>
                                  </div>

                                  <div class="col-6 pr-0 custom-control">
                                    <button
                                      type="submit"
                                      class="btn btn-primary update-user w-100 rounded-pill m-0"
                                      @click="editTask(task)"
                                    >Update</button>
                                  </div>
                                </div>
                              </div>
                            </transition>
                          </li>
                        </ul>

                        <ul class="pl-0" v-if="tasks.length == 0 || add_task">
                          <!--When adding a new task, the whole li tag should be added and change input ids -->
                          <li
                            class="my-2 mx-3 p-2 align-items-center reminders-border-bottom custom-control"
                          >
                            <transition name="bounce">
                              <div class="col-12 px-0">
                                <div class="row mx-0">
                                  <div class="col-12 px-0 custom-control">
                                    <label class="w-100 terms-text" for="task1">
                                      <input
                                        v-model="new_task.title"
                                        placeholder="Title"
                                        type="text"
                                        class="border-0 pl-0 list-input"
                                      />
                                    </label>

                                    <label class="w-100 terms-text" for="task1">
                                      <a-textarea
                                        v-model="new_task.description"
                                        placeholder="Description"
                                        autosize
                                        class=""
                                      />
                                    </label>
                                  </div>
                                </div>

                                <div class="row mx-0 justify-content-between">
                                  <div class="col-6 pl-0 custom-control">
                                    <label class="w-100 terms-text" for="task1">
                                      <a-date-picker v-model="new_task.date" class="w-100" />
                                    </label>
                                  </div>

                                  <div class="col-6 pr-0 custom-control">
                                    <button
                                      type="submit"
                                      class="btn btn-primary update-user w-100 rounded-pill m-0"
                                      @click="submitTask"
                                    >Add</button>
                                  </div>
                                </div>
                              </div>
                            </transition>
                          </li> 
                        </ul> 
                      </b-tab>  
                    </b-tabs> 
                  </div> 
                </div> 
              </div> 
            </div> 
          </div> 

          <div v-if="filters_on == true">
            <h3 class="px-6-hide mt-2 mx-2">Filter</h3> 
            <div class="row mx-0 filter-content">   
              <b-tabs content-class="mt-3 px-2">  
                <b-tab title="New">  
                  <div class="px-2 filter-container grey-scroll"> 
                    <div v-for="(field, name, index) in filter" :key="index"> 
 
                      <div v-if="field.field_name == 'source'" class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
                          <a-select 
                            mode="multiple" 
                            style="width: 100%" 
                            v-model="field.filter_value"  
                            placeholder="Please select" 
                            @change="fireSearchEvent(field.filter_value)" 
                          > 
                            <a-select-option :value="item.name" v-for="(item, i) in sources" :key="item.name" 
                              >{{ item.name }}</a-select-option 
                            > 
                          </a-select>  
                        </div>  
                      </div> 
 
                      <div v-else-if="field.field_name == 'product'" class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
 
                          <a-select 
                            mode="multiple" 
                            style="width: 100%" 
                            v-model="field.filter_value"  
                            placeholder="Please select" 
                            @change="fireSearchEvent(field.filter_value)" 
                          > 
                            <a-select-option  :value="item.name" v-for="(item, i) in packages" :key="item.name" 
                              >{{ item.name }}</a-select-option 
                            > 
                          </a-select> 
                        </div>  
                      </div>  
 
                      <div v-else-if="field.field_name == 'assignee'" class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
 
                          <a-select 
                            mode="multiple" 
                            style="width: 100%" 
                            v-model="field.filter_value"  
                            placeholder="Please select" 
                            @change="fireSearchEvent(field.filter_value)" 
                          > 
                            <a-select-option :value="item.name + ' ' + item.lastname" v-for="(item, i) in active_users" :key="item.name" 
                              >{{ item.name + ' ' + item.lastname }}</a-select-option 
                            > 
                          </a-select> 
 
                        </div>  
                      </div>    
 
                      <div v-else-if="field.field_name == 'owner'" class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
                          <a-select 
                            mode="multiple" 
                            style="width: 100%" 
                            v-model="field.filter_value"  
                            placeholder="Please select" 
                            @change="fireSearchEvent(field.filter_value)" 
                          > 
                            <a-select-option :value="item.name + ' ' + item.lastname" v-for="(item, i) in active_users" :key="item.name" 
                              >{{ item.name + ' ' + item.lastname }}</a-select-option 
                            > 
                          </a-select> 
                        </div>  
                      </div>  
 
                      <div v-else-if="field.field_name == 'gender'" class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
                          <a-select 
                            mode="multiple" 
                            style="width: 100%" 
                            v-model="field.filter_value"  
                            placeholder="Please select" 
                            @change="fireSearchEvent(field.filter_value)" 
                          > 
                            <a-select-option :value="'Male'" :key="'Male'">Male</a-select-option> 
                            <a-select-option :value="'Female'" :key="'Female'">Femail</a-select-option> 
                          </a-select> 
                        </div>  
                      </div>  
 
                      <div v-else-if="field.field_name == 'title'" class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
                          <a-select 
                            mode="multiple" 
                            style="width: 100%" 
                            v-model="field.filter_value"  
                            placeholder="Please select" 
                            @change="fireSearchEvent(field.filter_value)" 
                          > 
                            <a-select-option :value="'Mr'" :key="'Mr'">Mr</a-select-option> 
                            <a-select-option :value="'Mrs'" :key="'Mrs'">Mrs</a-select-option> 
                            <a-select-option :value="'Ms'" :key="'Ms'">Ms</a-select-option> 
                          </a-select> 
                        </div>  
                      </div>  
 
                      <div v-else-if="field.field_name == 'status'" class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
                          <a-select 
                            mode="multiple" 
                            style="width: 100%" 
                            v-model="field.filter_value"  
                            placeholder="Please select" 
                            @change="fireSearchEvent(field.filter_value)" 
                          > 
                            <a-select-option :value="'Active'" :key="'Active'">Active</a-select-option> 
                            <a-select-option :value="'Inactive'" :key="'Inactive'">Inactive</a-select-option> 
                            <a-select-option :value="'Canceled'" :key="'Canceled'">Canceled</a-select-option> 
                            <a-select-option :value="'Disabled'" :key="'Disabled'">Disabled</a-select-option> 
                          </a-select> 
                        </div>  
                      </div>  
 
                      <div v-else class="filter-group">  
                        <div 
                          @click="filterProperties(field)"  
                          :class="{ filterborder: field.append_border }"  
                          class="p-2 custom-control custom-checkbox" 
                        >  
                          <input  
                            :disabled="field.filter_value === undefined" :checked="field.filter_value !== undefined"  
                            type="checkbox"  
                            class="custom-control-input mx-0"  
                            :id="'newFilter' + index" 
                          >  
                          <label class="custom-control-label mx-0 pt-0" :for="'newFilter' + index">{{ field.field_display_name }}</label>  
                        </div>  
 
                        <div class="mr-4 pt-2 pb-2 pl-34" style="display:none;" :class="{ show: field.show }">  
                          <select class="search-criteria w-100 mb-2"  v-model="field.constraint" style="display:none">  
                            <option selected>is equal to</option>  
                            <option value="1">contains</option>  
                            <option value="2">does not contain</option>  
                            <option value="3">begins with</option>  
                            <option value="3">ends with</option>  
                          </select>  
                          <input v-on:keyup="fireSearchEvent(field.filter_value)" class="search-text w-100 mt-2" type="text" placeholder="Text Here" v-model="field.filter_value" value="">  
                        </div>  
                      </div>  
                    </div> 
                    <div class="filter-results grey-scroll mr-4 pl-34" :class="{show:false }" style="display:none;">  
                      <div class="custom-control custom-checkbox">  
                        <input type="checkbox" class="custom-control-input mx-0" id="result1">  
                        <label class="custom-control-label mx-0 pt-0" for="result1">John Davies</label>  
                      </div>  
 
                      <div class="custom-control custom-checkbox">  
                        <input type="checkbox" class="custom-control-input mx-0" id="result2">  
                        <label class="custom-control-label mx-0 pt-0" for="result2">John Davies</label>  
                      </div>  
                    </div>  
                  </div>  
 
                  <div class="row mx-2 mt-3 border-top pt-3 custom-filter-name-save">  
                    <div class="col pl-0 pr-2">  
                      <input class="save-text w-100" type="text" placeholder="Custom Filter Name" value="">  
                    </div>  
 
                    <div class="col-auto pr-0 pl-2">  
                      <button type="submit" class="btn btn-primary save-filter mt-2 rounded-pill m-0" @click="saveFilter" >Save</button>  
                    </div>  
                  </div>  
                </b-tab>  
 
                <b-tab title="Saved" active>  
                  <div class="px-2 saved-group filter-container grey-scroll">  
                    <div @click="savedFilters()" :class="{ filterborder:appendBorder }" class="p-2 custom-control custom-checkbox">  
                      <input  
                        type="checkbox"  
                        :disabled="appendBorder === false"  
                        :checked="appendBorder !== false"  
                        class="custom-control-input mx-0"  
                        id="savedFilter1" 
                      /> 
                      <label class="custom-control-label mx-0 pt-0" for="savedFilter1">Saved</label> 
                    </div> 
 
                    <div class="pl-34" style="display:none;" :class="{ show:showSavedFilters }"> 
                      <div class="saved-results p-2"> 
                        <span class="orange pr-2">⬤</span>Name 
                      </div> 
                      <div class="col-auto pr-0 pl-2 float-right"> 
                        <button 
                          type="submit" 
                          class="btn btn-primary update-filter mt-2 rounded-pill mr-4" 
                        >Edit</button> 
                      </div> 
                    </div> 
                  </div> 
                </b-tab> 
              </b-tabs> 
            </div>
          </div>
        </div>
      </section>
    </aside>
  </div>
</template> 
 
<script> 
  import { 
    setupCalendar, Calendar 
  } 
  from 'v-calendar' 
  import TransitionHeight from '../Plugins/TransitionExpand.vue'; 
  import VueCircle from 'vue2-circle-progress' 
  import moment from 'moment' 
  export default { 
    props: ['auth_user', 'active'], 
    components: { 
      'transition-expand': TransitionHeight, 
      VueCircle 
    }, 
    data: function() { 
      return { 
        user: { 
          notifications: 1, 
        }, 
        status: 'active', 
        notifications_on: false, 
        settings_on: false, 
        language_settings_on: false, 
        system_settings_on: false, 
        profile_on: false, 
        account_on: false, 
        callbacks_on: true, 
        messages_on: false, 
        call_backs: [], 
        tasks: [], 
        messages: [], 
        unread_messages: 1, 
        expanded: false, 
        show_filter: false, 
        show_filter_save: false, 
        show: false, 
        generalStats_on: false,
        filters_on: false,
        lead_owners: [], 
        assignees: [], 
        sources: [], 
        packages: [], 
        filters: [], 
        preferences: [], 
        roles: [], 
        attrs: [{ 
          key: 'today', 
          highlight: true, 
          class: 'today_date', 
          dates: new Date(), 
        }],
        call_log : {
          commission: '',
          total_calls: '',
          total_sales: '',
          con_ratio: '',
          sum_sales: '',
          call_history: '',
          sum_call_back: '',
          avg_time: '',
        }, 
        filter: [], 
        user_settings: { 
          id: '', 
          theme: 'orange', 
          language: 'english', 
          max_table_rows: 50 
        }, 
        custom_fields: [],
        active_task_id: null, 
        edit_task: false, 
        add_task: false, 
        new_task: { 
          title: '', 
          description: '', 
          date: moment() 
        }, 
        avatarUrl: '/images/avatars/', 
        noImageUrl: '/images/icons/user_icon@4x.png', 
        fill: { 
          gradient: ["#a1ed1c", "#62d37e"] 
        }, 
        p: 65,
        appendBorder: false, 
        showSavedFilters: false, 
        showFilters: false, 
        filterValue: '',
        active_users : null,
        active_roles : null,
        sources : null,
      } 
    }, 

    mounted() { 
      var vm = this; 

      this.user = JSON.parse(this.auth_user); 

      vm.getUserCallBacks(); 

      vm.getUserTasks(); 

      vm.getDashboard(); 

      vm.getCustomFields(); 

      Fire.$on('AfterCallBackSet', function() { 
        vm.getUserCallBacks(); 
      }); 

      Fire.$on('AvatarUploadComplete', function() { 
        axios.get('/get-current-user').then(function(response) { 
          vm.user = response.data.user; 
        }); 
      }); 

      Fire.$on('ShowFilter', function() { 
        vm.show_filter = !vm.show_filter; 
      }); 

      Fire.$on('CustomFilterApplied', function(data) { 
        vm.filter = data.filter; 
        vm.show_filter = true; 
      }); 

      Fire.$on('OnEditTask', function(data) { 
        vm.task = data.task;
        vm.editTask(vm.task, data.mode);
      }); 

      Fire.$on('OnAddTask', function(data) { 
        vm.new_task = data.new_task;
        vm.submitTask();
        vm.add_task = false;
      }); 

      axios.get('/leads/get-select-options').then(function(response) { 
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
      moment, 
      showNotifications() { 
        this.notifications_on = !this.notifications_on; 
        this.settings_on = false; 
        this.profile_on = false; 
      }, 
      filterProperties(field) { 
        field.append_border = !field.append_border 
        field.show = !field.show ;
      }, 
      savedFilters() { 
        this.appendBorder = !this.appendBorder 
        this.showSavedFilters = !this.showSavedFilters 
      }, 
      showSettings() { 
        this.settings_on = !this.settings_on; 
        this.notifications_on = false; 
        this.profile_on = false; 
      }, 
      showGeneralStats() { 
      this.generalStats_on = !this.generalStats_on; 
      this.notifications_on = false; 
      this.profile_on = false; 
      this.settings_on = false; 
      this.filters_on = false; 
    }, 
    showFiltersTab() {
      console.log('Filters'); 
      this.filters_on = !this.filters_on; 
      this.settings_on = false; 
      this.notifications_on = false; 
      this.profile_on = false; 
      this.generalStats_on = false; 
    }, 
      showCallbacks() { 
        this.callbacks_on = true; 
        this.messages_on = false; 
      }, 

      showMessages() { 
        this.callbacks_on = false; 
        this.messages_on = true; 
        this.unread_messages = 0; 
      },
      getCustomFields(){

        var vm = this;

        var endpoint = '/modules/fields/' + vm.active;

        axios.get(endpoint).then(function (response) {

          vm.custom_fields = response.data.fields;
          vm.sources = response.data.sources;
          vm.products = response.data.products;
          vm.active_users = response.data.active_users;

          vm.custom_fields.map( (field, index ) => {
            vm.filter.push({
              module_id: field.module_id,
              field_id: field.id,
              field_name: field.name,
              field_display_name: field.display_name,
              // filter_value: '',
              append_border: false,
              show: false,
            });
          });
        });
      },
      getDashboard(month = ''){
        var vm = this;

        if(month == ''){
          var endpoint = '/calls/get-dashboard';
        }else{
          var endpoint = '/calls/get-dashboard/' + month;
        }

        vm.$Progress.start();

        axios.get(endpoint).then(function (response) {
            
          if(response.data.success == true){
            vm.call_log.commission = response.data.commission;
            vm.call_log.total_calls = response.data.total_calls;
            vm.call_log.total_sales = response.data.total_sales;
            vm.call_log.con_ratio = response.data.con_ratio;
            vm.call_log.sum_sales = response.data.sum_sales;
            vm.call_log.call_history = response.data.call_history;
            vm.call_log.sum_call_back = response.data.sum_call_back;
            vm.call_log.avg_time = response.data.avg_time;
            
            vm.$Progress.finish();
          }else{
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
          }
        });
      }, 
      getUserCallBacks() { 
        var vm = this; 

        axios.get('/leads/get-user-callbacks').then(function(response) { 
          vm.call_backs = response.data.call_backs; 

          vm.attrs = [{ 
            key: 'today', 
            highlight: true, 
            class: 'today_date', 
            dates: new Date(), 
          }]; 

          vm.call_backs.forEach(function(call_back) { 

            vm.attrs.push({ 
              key: 'call_back' + call_back.id, 
              highlight: 'red', 
              class: 'call_back_date', 
              dates: new Date(call_back.call_date), 
              popover: { 
                label: 'Call ' + call_back.lead.name + ' ' + call_back.lead.surname + ' @' + call_back.call_time, 
              }, 
            }); 
          }); 

          Fire.$emit('AfterCallBackRequest', { call_backs : vm.call_backs});
        });
    },
    markCallBackDone(call_back) {
      var vm = this;
      console.log(call_back);
      axios
        .get("/leads/mark-callback-complete/" + call_back.id)
        .then(function(response) {
          if (response.data.success) {
            vm.call_backs = response.data.call_backs;
          } else {
            vm.$swal(
              "Failed",
              "Opps, something went wrong while updating data, please try again",
              "warning"
            );
          }
        })
        .catch(error => {
          vm.$swal(
            "Failed",
            "Opps, something went wrong while updating data, please try again" +
              error,
            "warning"
          );
        });
    },
    onChange(date, dateString) {
      console.log(date, dateString);
    },
    getUserTasks() {
      var vm = this;
      axios.get("/tasks/get-user-tasks").then(function(response) {
        vm.tasks = response.data.tasks;
        Fire.$emit("AfterTaskkRequest", { tasks: vm.tasks });
      });
    },
    addTask() {
      this.new_task.title = "";
      this.new_task.description = "";
      this.new_task.date = moment();
      this.add_task = !this.add_task;
    },
    submitTask() {
      var vm = this;

      vm.$Progress.start();

      axios
        .post("/tasks/create", {
          title: vm.new_task.title,
          description: vm.new_task.description,
          date: vm.new_task.date.format("YYYY-MM-DD")
        })
        .then(function(response) {
          if (response.data.success == true) {
            vm.Toast.fire({
              type: "success",
              title: response.data.message
            });
            vm.getUserTasks();
            vm.add_task = !vm.add_task;
            vm.$Progress.finish();
          } else {
            vm.$Progress.fail();
            vm.$swal(
              "Failed",
              "Opps, something went wrong while update, please try again",
              "warning"
            );
          }
        });
    },
    editTask(task, mode) {
      var vm = this;

      vm.$Progress.start();

      var status = !task.status ? 1 : 0;

      console.log(mode);

      if (mode === undefined) {
        status = 0;
      }

      axios
        .post("/tasks/update", {
          id: task.id,
          title: task.title,
          status: status,
          description: task.description, 
          date: task.deadline 
        }).then(function(response) { 

          if (response.data.success == true) { 
            vm.Toast.fire({ 
                type: 'success', 
                title: response.data.message 
            }); 
            vm.getUserTasks(); 
            vm.edit_task = false; 
            vm.$Progress.finish(); 
          } else { 
            vm.$Progress.fail(); 
            vm.$swal('Failed', 'Opps, something went wrong while updating data, please try again', 'warning'); 
          } 
        }); 
        this.edit_task = false; 
      },
      editTaskCollapes(id){ 
        this.edit_task = true; 
        this.active_task_id = id; 
      }, 
      applySetting(settings = null) { 
        var vm = this; 

        if (settings != null && settings.type == 'language') { 
          vm.user_settings.language = settings.value; 
        } else if (settings != null && settings.type == 'theme') { 
          vm.user_settings.theme = settings.value; 
        } 

        vm.$Progress.start(); 

        axios.post('/update-preferences', { 
          system_settings: vm.system_settings, 
          user_settings: vm.user_settings 
        }).then(function(response) { 

          if (response.data.success == true) { 
            vm.Toast.fire({ 
              type: 'success', 
              title: response.data.message 
            }); 
            vm.getPreferences(); 
            vm.$Progress.finish(); 
          } else { 
            vm.$Progress.fail(); 
            vm.$swal('Failed', 'Opps, something went wrong while update, please try again', 'warning'); 
          } 
        }); 
      }, 
      getPreferences() { 
        var vm = this; 

        axios.get('/get-preferences').then(function(response) { 
          vm.preferences = response.data.preferences; 
          vm.preferences.forEach(function(preference) { 
            if (preference.setting == 'theme') { 
              vm.user_settings.theme = preference.value; 
            } else if (preference.setting == 'language') { 
              vm.user_settings.language = preference.value; 
            } 
          }); 
        }); 
      }, 
      updateNotifications() { 
        var vm = this; 
        axios.post('/update-user', this.user).then(function(response) { 

          if (response.data.success == true) { 
            vm.Toast.fire({ 
                type: 'success', 
                title: response.data.message 
            }); 
            vm.user = response.data.user; 
            vm.$Progress.finish(); 
          } else if (response.data.errors.email[0] != '') { 
            vm.$Progress.fail(); 
            vm.$swal('Failed', response.data.errors.email[0], 'warning'); 
          } else { 
            vm.$Progress.fail(); 
            vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
          } 
        }); 
      }, 
      updateUser(type) { 
        var vm = this; 
        vm.$Progress.start(); 
        this.$validator.validateAll().then((result) => { 
          if (!result) { 

          } else { 

            if (type == 'profile') { 
              axios.post('/update-user', this.user).then(function(response) { 

                if (response.data.success == true) { 
                  vm.Toast.fire({ 
                    type: 'success', 
                    title: response.data.message 
                  }); 
                  vm.user = response.data.user; 
                  vm.$Progress.finish(); 
                } else if (response.data.errors.email[0] != '') { 
                  vm.$Progress.fail(); 
                  vm.$swal('Failed', response.data.errors.email[0], 'warning'); 
                } else { 
                  vm.$Progress.fail(); 
                  vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
                } 
              }); 
            } else { 
              axios.post('/update-account', this.user).then(function(response) { 

                if (response.data.success === true) { 
                  vm.Toast.fire({ 
                    type: 'success', 
                    title: response.data.message 
                  }); 
                  vm.user = response.data.user; 
                  vm.$Progress.finish(); 
                } else if (typeof response.data.errors['old_password'] !== 'undefined' && response.data.errors.old_password.length > 0) { 
                  vm.$swal('Failed', 'You old password is incorrect', 'warning'); 
                } else if (typeof response.data.errors['password'] !== 'undefined' && response.data.errors.password.length > 0) { 
                  var this_error = ''; 
                  response.data.errors.password.forEach(function(error) { 
                    this_error = this_error + error + '\n'; 
                  }); 
                  vm.$swal('Failed', this_error, 'warning'); 
                } else { 
                  vm.$Progress.fail(); 
                  vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
                } 
              }); 
            } 
          } 
        }); 
      }, 
      showUploader() { 
        Fire.$emit('ShowAvatarUploader'); 
      }, 
      saveFilter() { 
        var vm = this; 
        vm.$validator.validateAll().then((result) => { 
          if (!result) {} else { 
            axios.post('/filters/create', { 
              filter: this.filter, 
              type: this.active 
            }).then(function(response) { 

              if (response.data.success === true) { 
                vm.Toast.fire({ 
                  type: 'success', 
                  title: response.data.message 
                }); 

                Fire.$emit('SaveFilter', { 
                  'filters': response.data.filters 
                }); 

                vm.$Progress.finish(); 
              } else { 
                vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
                vm.$Progress.fail(); 
              } 
            }); 
          } 
        }); 
      }, 
      fireTableEvent(event = '') { 
        Fire.$emit(event); 
      }, 
      fireSearchEvent(term) { 
        
        if( term instanceof Array){
          var concat_term = '';
          term.forEach(function(value){
             concat_term += ',' + value;
          });
          console.log(concat_term);
          Fire.$emit('Search', { 
            'search_term': concat_term
          });
        }else{
          Fire.$emit('Search', { 
            'search_term': term
          }); 
        }
      }, 
      progress(event, progress, stepValue) { 
        console.log(stepValue); 
        if (stepValue > 30) { 
          this.$refs.myprogress.updateFill("#a1ed1c", "#62d37e"); 
        } 
      }, 
      progress_end(event) { 
        console.log("Circle progress end"); 
      } 
    }, 

    computed: {} 
  } 
</script> 

