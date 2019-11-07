<style scoped>
    .main-sidebar {
        right: 0!important;
        left: auto;
        overflow: visible;
        position: absolute;
        top: 0;
        right: 0 !important;
        bottom: 0;
        z-index: 830;
        transition: right 0.3s ease-in-out;
        box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.1);
        -o-box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.1);
    }
    
    .main-sidebar,
    .main-sidebar:before {
        transition: margin-right 0.3s ease-in-out, width 0.3s ease-in-out!important;
        width: 417px!important;
    }
    
    .sidebar-collapse .main-sidebar,
    .sidebar-collapse .main-sidebar:before {
        margin-left: 0!important;
        margin-right: -208px!important;
    }
    
    @media (max-width: 991.98px) {
        .main-sidebar,
        .main-sidebar:before {
            margin-left: -0!important;
            margin-left: -208px!important;
        }
        .sidebar-open .main-sidebar,
        .sidebar-open .main-sidebar:before {
            margin-right: 0!important;
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
        font-size: 16px;
        letter-spacing: 0.05em;
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
    
    .open-sidenav .navbar {
        border-bottom: 1px solid #f4f4f5;
    }
    
    .navbar-light .navbar-nav .nav-link.icon {
        color: rgba(0, 0, 0, 0.5);
    }
    
    .navbar-light .navbar-nav .nav-link.name {
        font-size: 14px;
        color: #1e2331;
        font-family: 'Rubik', sans-serif;
        padding-top: 6px;
        letter-spacing: 0.05em;
        position: relative;
        top: 16%;
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
        padding: 0.8rem 2.0rem 1.4rem 1.7rem !important;
    }
    
    .p-34 {
        padding: 0px 34px;
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
        background: linear-gradient(to right, rgba(161, 237, 128, 1) 0%, rgba(98, 211, 126, 1) 100%) !important;
        border-radius: 5px;
        background: rgb(114, 218, 126);
        height: 8px;
        transition: all 0.5s ease 0s;
    }
    
    .value {
        font-weight: 900;
        font-size: 16px;
        color: #1a1c43;
        margin-top: -8px;
        letter-spacing: 0.1em;
        font-family: Montserrat !important;
    }
    
    .description {
        font-size: 12px;
        font-family: 'Rubik', sans-serif;
        letter-spacing: 0.05em;
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
    
    .settings .row.border-bottom,
    .notifications .row.border-bottom {
        border-color: #cdccce;
        padding: 21px 0px 16px 0;
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
        font-family: 'Rubik', sans-serif;
        font-size: 12px;
        letter-spacing: 0.05em;
        text-align: left;
    }
    
    .btn-default {
        padding: 6px 12px 6px 10px;
        font-size: 10px;
        border: transparent !important;
        border-radius: 5px !important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
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
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }
    
    .btn-active {
        background: #00344a;
        color: #ffffff;
        border: transparent !important;
        padding: 6px 12px 6px 10px;
        font-size: 10px;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }
    
    .themes .btn-default,
    .language .btn-default,
    .language .btn-active {
        border-radius: 50rem!important;
        padding: 8px 15px!important;
    }
    
    .btn-orange {
        background: linear-gradient(to right, rgb(246, 139, 31, 1) 0%, rgba(250, 168, 59, 1) 100%) !important;
        color: #ffffff;
        border: transparent !important;
        padding: 8px 15px;
        font-size: 10px;
        border-radius: 50rem!important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        letter-spacing: 0.05em;
    }
    
    .orange-btn:hover {
        background: linear-gradient(to right, rgb(246, 139, 31, 1) 0%, rgba(250, 168, 59, 1) 100%) !important;
        color: #ffffff;
        border: transparent !important;
          padding: 8px 15px;
        font-size: 10px;
        border-radius: 50rem!important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
         letter-spacing: 0.05em;
    }
    
    .btn-blue {
        background: linear-gradient(to right, rgb(60, 144, 206, 1) 0%, rgba(65, 197, 231, 1) 100%) !important;
        color: #ffffff;
        border: transparent !important;
        padding: 8px 15px;
        font-size: 10px;
        border-radius: 50rem!important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        letter-spacing: 0.05em;
    }
    
    .blue-btn:hover {
        background: linear-gradient(to right, rgb(60, 144, 206, 1) 0%, rgba(65, 197, 231, 1) 100%) !important;
        color: #ffffff;
        border: transparent !important;
        padding: 8px 15px;
        font-size: 10px;
        border-radius: 50rem!important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        letter-spacing: 0.05em;
    }
    
    .btn-dark {
        background: linear-gradient(to right, rgb(25, 25, 26, 1) 0%, rgba(23, 23, 66, 1) 100%) !important;
        color: #ffffff;
        border: transparent !important;
         padding: 8px 15px;
        font-size: 10px;
        border-radius: 50rem!important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
         letter-spacing: 0.05em;
    }
    
    .dark-btn:hover {
        background: linear-gradient(to right, rgb(25, 25, 26, 1) 0%, rgba(23, 23, 66, 1) 100%) !important;
        color: #ffffff;
        border: transparent !important;
        padding: 8px 15px;
        font-size: 10px;
        border-radius: 50rem!important;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
         letter-spacing: 0.05em;
    }
    
    .btn-has-new {
        background-image: url('/images/icons/Dot.png') !important;
        background-size: 12px 12px;
        background-repeat: no-repeat;
        background-position: right top;
    }
    
    .btn-has-new:hover {
        background-image: url('/images/icons/Dot.png') !important;
        background-size: 12px 12px;
        background-repeat: no-repeat;
        background-position: right top;
    }
    
    .logout-wrapper {
        margin-top: 14%;
    }
    
    #logout {
        background-image: url('/images/icons/Asset 67.svg') !important;
        background-size: contain;
        background-repeat: no-repeat;
        height: 100px;
        background-position: center;
        margin-bottom: 11%;
    }
    
    #logout:hover {
        background-image: url('/images/icons/Asset 66.svg') !important;
    }
    
    .notifications .btn-default {
        padding: 6px 25px 6px 18px;
        font-size: 9px;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }
    
    .notifications .top-section {
        list-style: none;
    }
    
    .notifications .card h3,
    .notifications .card h3 a {
        color: #00344a;
        font-size: 16px;
        letter-spacing: 2.2px;
        font-weight: 600;
    }
    
    .notifications .card p.call_back_time {
        color: #00344a;
        font-size: 14px;
        letter-spacing: 2.2px;
    }
    
    .personal-info .row.mx-0.border-left,
    .account-info .row.mx-0.border-left {
        border-color: #cdccce
    }
    
    .settings .title {
        color: #7f8080;
        padding-bottom: 16px;
        font-size: 12px;
        letter-spacing: 0.05em;
    }
    
    .small-avatar img {
        width: 46px;
        border-radius: 50%;
    }
    
    .update-user {
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
        color: #FF933A;
    }
    
    .card-header {
        color: rgba(28, 35, 49, 0.5);
        border-bottom: 0.5px solid #f4f4f5 !important;
        background-color: #fff !important;
        font-size: 10px;
        font-weight: 600;
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
    }
    
    .final-modal .card-header-tabs .left a[aria-selected="false"] {
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
        box-shadow: -4px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
        -webkit-box-shadow: -4px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
        -moz-box-shadow: -4px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
    }
    
    .final-modal .card-header-tabs .right a.active[aria-selected="true"] {
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
        box-shadow: -8px -7px 14px -9px rgba(138, 134, 134, 0.75);
        -webkit-box-shadow: -8px -7px 14px -9px rgba(138, 134, 134, 0.75);
        -moz-box-shadow: -8px -7px 14px -9px rgba(138, 134, 134, 0.75);
    }
    
    .final-modal .card-header-tabs .right a[aria-selected="false"] {
        border-bottom: none;
        background: #fff;
        padding: 6px 12px;
        box-shadow: 5px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
        -webkit-box-shadow: 5px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
        -moz-box-shadow: 5px -7px 16px -11px rgba(138, 134, 134, 0.75) inset;
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
    
    .final-modal input {
        font-size: 9px;
    }
    
    .form-control {
           padding: 10px 12px!important;
          font-size: 12px;
          box-shadow: 0px 0 5px rgba(0, 0, 0, 0.1)!important;
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
    
    .menu-toggle {
        position: absolute;
        right: 417px;
        overflow: visible;
        background-image: url('/images/icons/right-sidebar/Filter_Icon_b.svg') !important;
        background-size: 140px;
        background-repeat: no-repeat;
        background-position: -15px;
        height: 120px;
        width: 80px;
    }
    
    .sidebar-collapse .menu-toggle {
        background-image: url('/images/icons/right-sidebar/General_Icon_B.svg') !important;
    }
    
    .reminders {
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
        border-radius: 25px;
    }
    
    .reminders .tabs,
    .filter-content .tabs {
        width: 100%;
    }
    
    .reminders li.custom-control.custom-checkbox {
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
    }
    
    .reminders .custom-checkbox .custom-control-label::before {
        border-radius: 50%!important;
        border: 1px solid #ededed;
        box-shadow: none;
    }
    
    .reminders .custom-control-label::after,
    .reminders .custom-control-label::before {
        width: 20px;
        height: 20px;
        top: 6px;
        left: 0.2rem;
    }
    
    .reminders input.list-input {
        font-size: 14px;
        font-family: 'Rubik', sans-serif;
        color: #7f8080;
        padding-left: 37px!important;
        width: 90%;
    }
    
    .reminders input.list-input:focus, .nav-link:focus {
        outline: 0 !important;
        box-shadow: none !important;
        border: 0 !important;
    }
    
    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url('/images/icons/right-sidebar/Task_Check.svg') !important;
        border-radius: 50%!important;
        background-size: cover;
    }
    
    .reminders input.list-input:focus {
        border: 1px solid rgba(28, 35, 49, 0.5);
    }
    
    .tasks-circle {
        font-size: 16px;
        margin-right: 12px;
    }

    .orange {
      color: #ff933a;
    }
    
    .blue {
      color: #3fa9f5;
    }
    .tasks-date {
        font-size: 10px;
    }
    
    .task-date-div {
        border: 1px solid #efefef;
        border-radius: 20px;
        padding-left: 6px;
    }
    .inner-box-shadow {
      box-shadow: 0px 0px 14px 1px rgba(227,223,227,1);
    }
    .middle-box-shadow {
      box-shadow: 0px 0px 14px 2px rgba(235,235,235,1);
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
        letter-spacing: 0.05em;
        font-weight: 600;
    }
    
    .btn-primary.update-user {
        font-size: 10px;
        background: linear-gradient(to right, rgb(246, 139, 31, 1) 0%, rgba(250, 168, 59, 1) 100%) !important;
        font-weight: 600;
        text-transform: uppercase;
        padding: 10px 20px;
        letter-spacing: 0.05em;
    }
    
    .inactive-icon {
        padding: 11px;
        border-radius: 50rem;
        box-shadow: none;
        transition: box-shadow .5s ease;
    }
    
    .inactive-icon:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .filter-heading {
        font-size: 19px;
    }
    
    .row.filter-content {
        margin-left: -27px;
        margin-right: -27px;
    }
    
    .row.filter-content .custom-control.custom-checkbox {
        border-radius: 14px;
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
    }
    
    .row.filter-content .custom-control.custom-checkbox .custom-control-label {
        font-size: 16px;
        padding-left: 28px;
    }
    
    .row.filter-content .search-criteria {
        border: 0;
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
        font-size: 13px;
        border-radius: 14px;
        padding: 10px;
    }
    
    .row.filter-content .search-text {
        border: 0;
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.05);
        font-size: 13px;
        font-family: 'Rubik', sans-serif;
        font-weight: 300;
        font-style: italic;
        border-radius: 14px;
        padding: 10px;
    }
    /*End Right Component*/
</style>
<template>
    <div>
        <aside class="main-sidebar sidebar-light-primary">
            <!-- Control sidebar content goes here -->
            <section class="sidebar p-3">
                <a href="#" data-toggle="push-menu" class="menu-toggle">
                </a>
                <div class="sidebar-menu" data-widget="tree">
                    <div class="open-sidenav">
                        <nav class="navbar navbar-expand-md navbar-light bg-white m-0 p-0 w-100 row justify-content-between">
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav col-auto">
                                <li class="nav-item">
                                    <a class="nav-link icon p-0 mr-2" href="#" @click="showNotifications()">
                                        <img v-if="notifications_on == true" src="/images/icons/right-sidebar/Notifications_Active.svg" alt="Notification Bell" width="50">
                                        <img v-else-if="notifications_on == false && unread_messages == 0 && call_backs.length == 0" src="/images/icons/right-sidebar/Notification.svg" alt="Notification Bell" width="50" class="inactive-icon">
                                        <img v-else-if="notifications_on == false && unread_messages >= 1 || call_backs.length > 0" src="/images/icons/right-sidebar/Notifications_red.svg" alt="Notification Bell" width="50" class="inactive-icon">
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link icon p-0" href="#" @click="showSettings()">
                                        <img v-if="settings_on == false" src="/images/icons/right-sidebar/Setting.svg" alt="Settings Cog" width="50" class="inactive-icon">
                                        <img v-else src="/images/icons/right-sidebar/Settings_Active.svg" alt="Settings Cog" width="50">
                                    </a>
                                </li>
                            </ul>

                            <ul class="navbar-nav col-auto text-right pr-0">
                                <div class="row mx-0 justify-content-end">
                                    <li class="nav-item name-li col-auto px-0" v-if="user.nickname != null && user.nickname != ''">
                                        <a class="nav-link name" href="#" @click="showSettings()">{{ user.nickname }}</a>
                                    </li>

                                    <li class="nav-item name-li col-auto px-0" v-else>
                                        <a class="nav-link name" href="#" @click="showSettings()">{{ user.name }}</a>
                                    </li>
                                    <li class="nav-item col-auto pr-0">
                                        <a class="nav-link icon pt-0 px-0 small-avatar" href="#" @click="showSettings()">
                                            <img v-if="user.avatar != '' && user.avatar != null" :src="avatarUrl + user.id + '/' + user.avatar">
                                            <img v-else :src="noImageUrl">
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </nav>

                        <div v-if="settings_on == true" class="settings p-34">
                            <div class="row mx-0 border-bottom">
                                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                                    <div class="">
                                        <h3 class="d-block mb-0">Profile </h3>
                                    </div>
                                    <div class="col-auto">
                                        <img @click="expanded = true;profile_on = true;account_on = false;system_settings_on = false;language_settings_on = false;" v-if="profile_on == false" src="/images/icons/settings edit buttin@4x.png" alt="Profile Edit Off" width="30">
                                        <img @click="expanded = false;profile_on = false;account_on = false;system_settings_on = false;language_settings_on = false;" v-else src="/images/icons/right-sidebar/Close Edit Icon.svg" alt="Profile Edit Off" width="30">
                                    </div>
                                </div>
                                <transition-expand>
                                    <div v-if="expanded == true && profile_on == true" class="w-100 personal-info">
                                        <p class="d-block w-100 title" title="Personal Information">Personal Information</p>
                                        <div class="row mx-0 border-left mb-4 pb-0 pl-4">
                                            <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Address') }">
                                                <label class="row justify-space-between align-items-center control-label text-center p-0 w-100 mx-0">
                                                    <div class="col-lg-6 pl-0 text-left">Profile Picture</div>
                                                    <div class="col-lg-6 pr-0">
                                                        <img v-if="user.avatar != '' && user.avatar != null" :src="avatarUrl + user.id + '/' + user.avatar">
                                                        <img v-else :src="noImageUrl">
                                                        <button class="btn btn-info" type="button" @click="showUploader">Choose Image</button>
                                                    </div>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Name') }">
                                                <label class="col-lg-12 control-label w-100 p-0 mb-2"><span class="ml-12">Name</span>
                                                    <input type="text" id="email" name="Name" v-model="user.name" v-validate="'required'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Surname') }">
                                                <label class="col-lg-12 control-label w-100 p-0 mb-2"><span class="ml-12">Surname</span>
                                                    <input type="text" id="email" name="Surname" v-model="user.lastname" v-validate="'required'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Surname')" class="help-block">{{ errors.first('Surname') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Surname') }">
                                                <label class="col-lg-12 control-label w-100 p-0 mb-2"><span class="ml-12">Prefered Nickname</span>
                                                    <input type="text" id="nickname" name="Nickname" v-model="user.nickname" v-validate="'required'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Nickname')" class="help-block">{{ errors.first('Nickname') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Email') }">
                                                <label class="col-lg-12 control-label w-100 p-0 mb-2"><span class="ml-12">Email</span>
                                                    <input type="text" id="email" name="Email" v-model="user.email" v-validate="'required|email'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Email')" class="help-block">{{ errors.first('Email') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Work Tel') }">
                                                <label class="col-lg-12 control-label w-100 p-0 mb-2"><span class="ml-12">Work Telephone</span>
                                                    <input type="text" id="work_number" name="Work Tel" v-model="user.work_number" v-validate="'required|numeric|min:10'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Work Telephone')" class="help-block">{{ errors.first('Work Tel') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Cell Number') }">
                                                <label class="col-lg-12 control-label w-100 p-0 mb-2"><span class="ml-12">Cellphone number</span>
                                                    <input type="text" id="personal_number" name="Cell Number" v-model="user.personal_number" v-validate="'required|numeric|min:10'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Cell Number')" class="help-block">{{ errors.first('Cell Number') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100 mb-0' :true, 'has-error': errors.has('Address') }">
                                                <label class="col-lg-12 control-label w-100 p-0 mb-0"><span class="ml-12">Address</span>
                                                    <textarea id="address" name="Address" v-model="user.address" v-validate="'required'" class="form-control border-0"></textarea>
                                                    <span id="error" v-show="errors.has('Address')" class="help-block">{{ errors.first('Address') }}</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div :class="{'input': true, 'form-group' :true }" class="row mx-0 pl-4 justify-content-end">
                                            <div class="col-auto pl-0 pr-2">
                                                <button type="submit" class="btn btn-default cancel-user w-100 m-0" @click="updateUser('profile')">Cancel</button>
                                            </div>
                                            <div class="col-auto pr-0 pl-2">
                                                <button type="submit" class="btn btn-primary update-user w-100 rounded-pill m-0" @click="updateUser('profile')">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </transition-expand>
                            </div>

                            <div class="row mx-0 border-bottom account-info">
                                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                                    <div class="">
                                        <h3 class="mb-0">Account</h3>
                                    </div>
                                    <div class="col-auto">
                                        <img @click="expanded = true;account_on = true;profile_on = false;system_settings_on = false;language_settings_on = false;" v-if="account_on == false" src="/images/icons/settings edit buttin@4x.png" alt="Account Edit Off" width="30">
                                        <img @click="expanded = false;account_on = false;profile_on = false;system_settings_on = false;language_settings_on = false;" v-else src="/images/icons/right-sidebar/Close Edit Icon.svg" alt="Account Edit Off" width="30">
                                    </div>
                                </div>
                                <transition-expand>
                                    <div v-if="expanded == true && account_on == true" class="w-100 mt-3">
                                        <p class="d-block w-100 title" title="Personal Information">Account Information</p>
                                        <div class="row mx-0 border-left mb-4 pb-0 pl-4">
                                            <div :class="{'input': true, 'form-group w-100' :true }">
                                                <label class="col-lg-12 control-label w-100 p-0">
                                                    <b-form-checkbox id="checkbox-1" v-model="user.notifications" name="checkbox-1" value="1" unchecked-value="0" @change="updateNotifications">Notifications</b-form-checkbox>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Old Password') }">
                                                <label class="col-lg-12 control-label w-100 p-0"><span class="ml-12">Old Password</span>
                                                    <input type="password" id="email" name="Old Password" v-model="user.old_password" v-validate="'required|min:6'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Old Password')" class="help-block">{{ errors.first('Old Password') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('New Password') }">
                                                <label class="col-lg-12 control-label w-100 p-0"><span class="ml-12">New Password</span>
                                                    <input type="password" id="password" ref="password" name="New Password" v-model="user.password" v-validate="'required|min:6'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('New Password')" class="help-block">{{ errors.first('New Password') }}</span>
                                                </label>
                                            </div>

                                            <div :class="{'input': true, 'form-group w-100' :true, 'has-error': errors.has('Password Confirm') }">
                                                <label class="col-lg-12 control-label w-100 p-0"><span class="ml-12">Confirm New Password</span>
                                                    <input type="password" id="password_confirm" name="Password Confirm" v-model="user.password_confirmation" v-validate="'required|min:6|confirmed:password'" class="form-control border-0 rounded-pill">
                                                    <span id="error" v-show="errors.has('Password Confirm')" class="help-block">{{ errors.first('Password Confirm') }}</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div :class="{'input': true, 'form-group' :true }" class="row mx-0 pl-4 justify-content-end">
                                            <div class="col-auto pl-0 pr-2">
                                                <button type="submit" class="btn btn-default cancel-user w-100 m-0" @click="updateUser('account')">Cancel</button>
                                            </div>
                                            <div class="col-auto pr-0 pl-2">
                                                <button type="submit" class="btn btn-primary update-user w-100 rounded-pill m-0" @click="updateUser('account')">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </transition-expand>
                            </div>

                            <div class="row mx-0 preferences border-bottom" v-if="user.role_id == 1">
                                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                                    <div class="">
                                        <h3 class="d-block mb-0">Settings</h3>
                                    </div>
                                    <div class="col-auto">
                                        <img @click="expanded = true;system_settings_on = true; account_on = false;profile_on = false;language_settings_on = false;" v-if="system_settings_on == false" src="/images/icons/settings edit buttin@4x.png" alt="Account Edit Off" width="30">
                                        <img @click="expanded = false;system_settings_on = false;account_on = false;profile_on = false;language_settings_on = false;" v-else src="/images/icons/right-sidebar/Close Edit Icon.svg" alt="Account Edit Off" width="30">
                                    </div>
                                </div>
                                <transition-expand>
                                    <div v-if="expanded == true && system_settings_on == true" class="w-100 general-system-prefs">
                                        <div class="row mx-0 mb-4 pb-0 pl-4">
                                            <div class="row mx-0">
                                                <div :class="{'input': true, 'form-group' :true }" v-for="(setting, index) in system_preferences" :key="index">
                                                    <div v-if="setting.setting == 'auto_dialer'">
                                                        <label class="col-lg-5 control-label w-100 p-0">
                                                            Auto Dialing
                                                            <select id="auto_dialler" v-model="system_settings.auto_dialer.value" class="form-control border-0 rounded-pill" v-on:change="applySetting()">
                                                                <option value="on">On</option>
                                                                <option value="off">Off</option>
                                                            </select>
                                                        </label>
                                                        <label class="col-lg-6 control-label w-100 p-0">
                                                            Apply To
                                                            <select id="auto_dialler" v-model="system_settings.auto_dialer.applies_to" class="form-control border-0 rounded-pill" v-on:change="applySetting()">
                                                                <option :value="role.id" v-for="(role, index) in roles" :key="index">{{ role.display_name }}</option>
                                                                <option value="-1">Everyone</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </transition-expand>
                            </div>

                            <div class="row mx-0 preferences border-bottom">
                                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                                    <div class="">
                                        <h3 class="d-block mb-0">Themes</h3>
                                    </div>
                                    <div class="col-auto">
                                        <img @click="expanded = true;system_settings_on = true; account_on = false;profile_on = false;language_settings_on = false;" v-if="system_settings_on == false" src="/images/icons/settings edit buttin@4x.png" alt="Account Edit Off" width="30">
                                        <img @click="expanded = false;system_settings_on = false;account_on = false;profile_on = false;language_settings_on = false;" v-else src="/images/icons/right-sidebar/Close Edit Icon.svg" alt="Account Edit Off" width="30">
                                    </div>
                                </div>
                                <transition-expand>
                                    <div v-if="expanded == true && system_settings_on == true" class="w-100 general-system-prefs">
                                        <div class="row mx-0 mb-4 pb-0 pl-4">
                                            <div class="row mx-0" v-if="preferences.length > 0">
                                                <div v-for="(setting, index) in preferences" :key="index" class="w-100 themes">
                                                    <div v-if="setting.setting == 'theme' && setting.system_setting != 1" class="row mx-0">
                                                        <label class="col-auto control-label p-0">
                                                            <button v-on:click="applySetting({ type : 'theme', value : 'orange'})" type="submit" :class="{ 'btn orange-btn': true, 'btn-orange' : (setting.value == 'orange')? true : false , 'btn-default' : (setting.value != 'orange')? true : false  }" class="m-0 rounded-pill">
                                                                Orange
                                                            </button>
                                                        </label>
                                                        <label class="col-auto control-label p-0">
                                                            <button v-on:click="applySetting({type : 'theme', value  : 'blue'})" type="submit" :class="{ 'btn blue-btn': true, 'btn-blue' : (setting.value == 'blue')? true : false , 'btn-default' : (setting.value != 'blue')? true : false  }" class="m-0 rounded-pill">
                                                                Blue
                                                            </button>
                                                        </label>
                                                        <label class="col-auto control-label p-0">
                                                            <button v-on:click="applySetting({type : 'theme', value  : 'dark'})" type="submit" :class="{ 'btn dark-btn': true, 'btn-dark' : (setting.value == 'dark')? true : false , 'btn-default' : (setting.value != 'dark')? true : false  }" class="m-0 rounded-pill">
                                                                Dark
                                                            </button>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mx-0" v-else>
                                                <div class="w-100 themes">
                                                    <div class="row mx-0">
                                                        <label class="col-auto control-label py-0 pr-2 pl-0">
                                                            <button v-on:click="applySetting({ type : 'theme', value : 'orange'})" type="submit" :class="{ 'btn orange-btn': true, 'btn-orange' :true  }" class="m-0 rounded-pill">
                                                                Orange
                                                            </button>
                                                        </label>
                                                        <label class="col-auto control-label py-0 px-2">
                                                            <button v-on:click="applySetting({type : 'theme', value  : 'blue'})" type="submit" :class="{ 'btn blue-btn': true, 'btn-default' : true }" class="m-0 rounded-pill">
                                                                Blue
                                                            </button>
                                                        </label>
                                                        <label class="col-auto control-label py-0 pr-0 pl-2">
                                                            <button v-on:click="applySetting({type : 'theme', value  : 'dark'})" type="submit" :class="{ 'btn dark-btn': true, 'btn-default' :  true }" class="m-0 rounded-pill">
                                                                Dark
                                                            </button>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </transition-expand>
                            </div>

                            <div class="row mx-0 language border-bottom">
                                <div class="row mx-0 justify-content-between align-items-center w-100 mx-0 p-0">
                                    <div class="">
                                        <h3 class="d-block mb-0">Language</h3>
                                    </div>
                                    <div class="col-auto">
                                        <img @click="expanded = true;language_settings_on = true; account_on = false;profile_on = false;system_settings_on = false;" v-if="system_settings_on == false" src="/images/icons/settings edit buttin@4x.png" alt="Account Edit Off" width="30">
                                        <img @click="expanded = false;language_settings_on = false;account_on = false;profile_on = false;system_settings_on = false;" v-else src="/images/icons/right-sidebar/Close Edit Icon.svg" alt="Account Edit Off" width="30">
                                    </div>
                                </div>
                                <transition-expand>
                                    <div v-if="expanded == true && language_settings_on == true" class="w-100 general-system-prefs">
                                        <div v-if="preferences.length > 0">
                                            <div v-for="(setting, index) in preferences" :key="index" class="w-100 language">
                                                <div v-if="setting.setting == 'language' && setting.system_setting != 1" class="row mx-0">
                                                    <label class="col-auto control-label p-0">
                                                        <button v-on:click="applySetting({type : 'language', value : 'english'})" type="submit" :class="{ 'btn' : true, 'btn-active' :  (setting.value == 'english')? true : false, 'btn-default' : (setting.value != 'english')? true : false }" class="m-0">English</button>
                                                    </label>
                                                    <label class="col-auto control-label p-0">
                                                        <button v-on:click="applySetting({type : 'language', value :'spanish'})" type="submit" :class="{ 'btn' : true, 'btn-active' :  (setting.value == 'spanish')? true : false, 'btn-default' : (setting.value != 'spanish')? true : false }" class="m-0">Spanish</button>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mx-0" v-else>
                                            <label class="col-auto control-label py-0 pl-0 pr-2 language">
                                                <button v-on:click="applySetting({type : 'language', value : 'english'})" type="submit" :class="{ 'btn' : true, 'btn-active' :  true }" class="m-0">English</button>
                                            </label>
                                            <label class="col-auto control-label py-0 pr-0 pl-2">
                                                <button v-on:click="applySetting({type : 'language', value :'spanish'})" type="submit" :class="{ 'btn' : true, 'btn-active' : false , 'btn-default' : true }" class="m-0">
                                                    Spanish
                                                </button>
                                            </label>
                                        </div>
                                    </div>
                                </transition-expand>
                            </div>

                            <div class="row logout-wrapper" v-if="profile_on == false">
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
                                        <button @click="showCallbacks" type="submit" :class="{'btn' : true, 'btn-active' : callbacks_on, 'btn-default border-0' : !callbacks_on, 'btn-has-new' : call_backs.length > 0 }" class="w-100 m-0">Callbacks</button>
                                    </label>
                                    <label @click="showMessages" class="col-lg-3 control-label w-100 p-0">
                                        <button type="submit" :class="{'btn' : true, 'btn-active' : messages_on, 'btn-default border-0' : !messages_on, 'btn-has-new' : unread_messages >= 1  }" class="w-100 m-0">Messages</button>
                                    </label>
                                </div>
                            </div>

                            <div v-if="callbacks_on == true && messages_on == false" class="row mx-0">
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

                            <div v-if="callbacks_on == false && messages_on == true" class="row mx-0">
                                <div class="card w-100">
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
                                <div class="col-lg-12 p-34">
                                    <div class="row p-0">
                                        <div class="col-lg-12">
                                            <p class="monthly-target description">Monthly Target <span class="value float-right">65%</span></p>
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

                                    <div class="row calls">
                                        <div class="col-lg-12">
                                            <p class="description">Calls</p>
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

                                    <div class="row sales">
                                        <div class="col-lg-12">
                                            <p class="description">Sales</p>
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
                                    <div class="card left mt-3 p-34 tab-card border-0 shadow-none">
                                        <div class="card-header tab-card-header p-0">
                                            <span class="nav-link active border-0 pl-0" id="calendar-tab" data-toggle="tab" href="#calendar" role="tab" aria-controls="Calendar" aria-selected="true">
                            <span class="left">Calendar</span>
                                            </span>
                                            <!-- <ul class="nav nav-tabs card-header-tabs mb-0" id="myTab" role="tablist">
                        <li class="nav-item left w-50">
                          <a 
                            class="nav-link active border-0" 
                            id="calendar-tab" 
                            data-toggle="tab" 
                            href="#calendar" 
                            role="tab" 
                            aria-controls="Calendar" 
                            aria-selected="true"
                          >
                            <span class="left description">Calendar</span>
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
                      </ul> -->
                                        </div>

                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="calendar" role="tabpanel" aria-labelledby="calendar-tab">
                                                <vc-calendar class="border-0" :attributes='attrs' title-position="right" is-expanded :popover="true" />
                                            </div>

                                            <div class="tab-pane fade p-3 search" id="search-panel" role="tabpanel" aria-labelledby="search-panel-tab">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row search-input">
                                                            <div class="col-lg-12">
                                                                <div :class="{'input search': true, 'form-group' :true }">
                                                                    <input v-on:keyup="fireSearchEvent('Search')" placeholder="Search:" type="search" id="search" ref="search" name="Search" v-model="filter.search" class="form-control border-0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row filter-search">
                                                            <div class="col-lg-12">
                                                                <p class="heading">Filter Search</p>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div :class="{'input': true, 'form-group' :true }">
                                                                    <button v-on:click="fireTableEvent('Print')" type="submit" class="btn btn-default m-0 print-btn">Print</button>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div :class="{'input': true, 'form-group' :true }">
                                                                    <button v-on:click="fireTableEvent('Export')" type="submit" class="btn btn-default m-0 export-btn">Export</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row filter-by">
                                                            <div class="col-lg-12">
                                                                <table class="tg">
                                                                    <tr>
                                                                        <td class="tg-0las">
                                                                            <p class="heading">Filter By</p>
                                                                        </td>
                                                                        <td class="tg-1lax">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="tg-0lax">
                                                                            <p class="heading">Owner</p>
                                                                        </td>
                                                                        <td class="tg-1lax">
                                                                            <select v-on:change="filterData()" type="text" id="role" name="Owner" v-model="filter.user_created_id" class="form-control border-0">
                                                                                <option value="">All </option>
                                                                                <option :value="item.id" v-for="(item,index) in lead_owners" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="tg-0lax">
                                                                            <p class="heading">Assigned To</p>
                                                                        </td>
                                                                        <td class="tg-1lax">
                                                                            <select v-on:change="filterData()" type="text" id="Assignee" name="Assignee" v-model="filter.user_assigned" class="form-control border-0">
                                                                                <option value="">All</option>
                                                                                <option :value="item.id" v-for="(item,index) in assignees" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="tg-0lax">
                                                                            <p class="heading">Lead Source</p>
                                                                        </td>
                                                                        <td class="tg-1lax">
                                                                            <select type="text" v-on:change="filterData()" id="Source" name="Source" v-model="filter.source" class="form-control border-0">
                                                                                <option value="">All</option>
                                                                                <option :value="item.id" v-for="(item,index) in sources" :key="index">{{ item.name}}</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="tg-0lax">
                                                                            <p class="heading">Package</p>
                                                                        </td>
                                                                        <td class="tg-1lax">
                                                                            <select type="text" v-on:change="filterData()" id="package" name="Package" v-model="filter.product_id" class="form-control border-0">
                                                                                <option value="">All</option>
                                                                                <option :value="item.id" v-for="(item,index) in packages" :key="index">{{ item.name }}</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="tg-0lax">
                                                                            <p class="heading">Status</p>
                                                                        </td>
                                                                        <td class="tg-1lax">
                                                                            <select type="text" v-on:change="filterData()" id="role" name="Status" v-model="filter.status" class="form-control border-0">
                                                                                <option value="">All</option>
                                                                                <option value="1">Active</option>
                                                                                <option value="2">Inactive</option>
                                                                                <option value="0">Canceled</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>

                                                            <div class="col-lg-12 action-btns">
                                                                <div :class="{'input': true, 'form-group' :true }">
                                                                    <label class="col-lg-3 control-label">
                                                                        <button v-on:click="filterData()" type="submit" class="btn btn-default w-100 m-0">Apply</button>
                                                                    </label>
                                                                    <label class="col-lg-3 control-label">
                                                                        <button v-on:click="clearFilter();" type="submit" class="btn btn-default w-100 m-0">Clear</button>
                                                                    </label>
                                                                    <div>
                                                                        <table class="tg">
                                                                            <tr>
                                                                                <td class="tg-0lax">
                                                                                    <p class="heading">Save Search:</p>
                                                                                </td>
                                                                                <td class="tg-1lax">
                                                                                    <input type="title" id="title" placeholder="Filter Title" ref="title" name="Filter Title" v-model="filter.title" v-validate="'required'" class="form-control border-0">
                                                                                    <span id="error" v-show="errors.has('Filter Title')" class="help-block">{{ errors.first('Filter Title') }}</span>
                                                                                </td>
                                                                                <td>
                                                                                    <button v-on:click="saveFilter" type="submit" :class="{ 'btn btn-default' : true, 'btn-active': show_filter_save }" class="w-100 m-0">Save</button>
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
                            <div class="row p-34">
                                <div class="col-lg-12 final-modal border-0">
                                    <div class="row mx-0 mb-4 reminders">
                                        <b-tabs content-class="mt-3" class="outer-box-shadow">
                                            <b-tab title="Callbacks" active>
                                                <ul class="pl-0">
                                                    <li class="my-2 mx-3 p-2 align-items-center middle-box-shadow custom-control custom-checkbox">
                                                        <div class="col-12">
                                                            <div class="row">
                                                              <div class="col-8 pl-0 custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="callback1" type="checkbox">
                                                                  <label class="pl-34 custom-control-label" for="callback1" >
                                                                    Callback Steven
                                                                  </label>
                                                                </div>
                                                                <div class="col-4 task-date-div inner-box-shadow"><span class="tasks-circle blue">&#11044;</span><span class="tasks-date">18 Jul</span></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="my-2 mx-3 p-2 align-items-center middle-box-shadow custom-control custom-checkbox">
                                                        <div class="col-12">
                                                            <div class="row">
                                                              <div class="col-8 pl-0 custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="callback2" type="checkbox">
                                                                  <label class="pl-34 custom-control-label" for="callback2" >
                                                                    Callback Justine
                                                                  </label>
                                                                </div>
                                                                <div class="col-4 task-date-div inner-box-shadow"><span class="tasks-circle blue">&#11044;</span><span class="tasks-date">3 Aug</span></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </b-tab>
                                            <b-tab title="Reminders">
                                                <ul class="pl-0">
                                                  <!--When adding a new task, the whole li tag should be added and change input ids -->
                                                    <li class="my-2 mx-3 p-2 align-items-center middle-box-shadow custom-control custom-checkbox">
                                                        <div class="col-12">
                                                            <div class="row">
                                                              <div class="col-8 pl-0 custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="task1" type="checkbox">
                                                                  <label class="terms-text custom-control-label" for="task1" >
                                                                    <input type="text" value="1. To Do List" class="border-0 list-input">
                                                                  </label>
                                                                </div>
                                                                <div class="col-4 task-date-div inner-box-shadow"><span class="tasks-circle orange">&#11044;</span><span class="tasks-date">18 Jul</span></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="my-2 mx-3 p-2 align-items-center middle-box-shadow custom-control custom-checkbox">
                                                        <div class="col-12">
                                                            <div class="row">
                                                              <div class="col-8 pl-0 custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="task2" type="checkbox">
                                                                  <label class="terms-text custom-control-label" for="task2" >
                                                                    <input type="text" value="2. To Do List" class="border-0 list-input">
                                                                  </label>
                                                                </div>
                                                                <div class="col-4 task-date-div inner-box-shadow"><span class="tasks-circle orange">&#11044;</span><span class="tasks-date">23 Jul</span></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </b-tab>
                                            <img src="/images/icons/right-sidebar/Add_Task.svg" class="add-task">
                                        </b-tabs>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="closed-sidenav pr-3 d-none">
                        <div class="row mx-0 align-items-center border-bottom justify-content-between pb-2">
                            <div class="col pl-0">
                                <div class="row">
                                    <div class="nav-item col-auto px-0">
                                        <a class="nav-link icon p-0" href="#" data-toggle="push-menu" @click="showNotifications()">
                                            <img v-if="notifications_on == true" src="/images/icons/right-sidebar/Notifications_Active.svg" alt="Notification Bell" width="50">
                                            <img v-else-if="notifications_on == false && unread_messages == 0 && call_backs.length == 0" src="/images/icons/right-sidebar/Notification.svg" alt="Notification Bell" width="50" class="inactive-icon">
                                            <img v-else-if="notifications_on == false && unread_messages >= 1 || call_backs.length > 0" src="/images/icons/right-sidebar/Notifications_red.svg" alt="Notification Bell" width="50" class="inactive-icon">
                                        </a>
                                    </div>

                                    <div class="nav-item col-auto px-0">
                                        <a class="nav-link icon p-0" href="#" data-toggle="push-menu" @click="showSettings()">
                                            <img src="/images/icons/right-sidebar/Setting.svg" alt="Settings Cog" width="50" class="inactive-icon">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-item col-auto pr-0">
                                <a class="nav-link icon p-0 small-avatar" href="#" @click="showSettings()">
                                    <img v-if="user.avatar != '' && user.avatar != null" :src="avatarUrl + user.id + '/' + user.avatar">
                                    <img v-else :src="noImageUrl">
                                </a>
                            </div>
                        </div>

                        <p class="filter-heading mt-2 mb-3">Filter</p>
                        <div class="row filter-content">
                            <b-tabs content-class="mt-3">
                                <b-tab title="New">
                                    <div class="filter-group">
                                        <div class="my-2 p-2 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input mx-0" id="customControlAutosizing">
                                            <label class="custom-control-label mx-0 pt-0" for="customControlAutosizing">Name</label>
                                        </div>
                                        <div class="ml-3 pt-2">
                                            <select class="search-criteria w-100 mb-2">
                                                <option selected>is equal to</option>
                                                <option value="1">contains</option>
                                                <option value="2">does not contain</option>
                                                <option value="3">begins with</option>
                                                <option value="3">ends with</option>
                                            </select>
                                            <input class="search-text w-100 mt-2" type="text" placeholder="Search...">
                                        </div>
                                    </div>
                                </b-tab>

                                <b-tab title="Saved" active>
                                    <div class="saved-group">
                                        <div class="my-2 p-2 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input mx-0" id="customControlAutosizing">
                                            <label class="custom-control-label mx-0 pt-0" for="customControlAutosizing">Name</label>
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
                messages: [],
                unread_messages: 1,
                expanded: false,
                show_filter: false,
                show_filter_save: false,
                show: false,
                lead_owners: [],
                assignees: [],
                sources: [],
                packages: [],
                filters: [],
                preferences: [],
                system_preferences: [],
                roles: [],
                attrs: [{
                    key: 'today',
                    highlight: true,
                    class: 'today_date',
                    dates: new Date(),
                }],
                filter: {
                    title: '',
                    search: '',
                    user_created_id: '',
                    user_assigned: '',
                    source: '',
                    product_id: '',
                    status: '',
                },
                system_settings: {
                    id: '',
                    auto_dialer: {
                        value: '',
                        applies_to: ''
                    }
                },
                user_settings: {
                    id: '',
                    theme: 'orange',
                    language: 'english'
                },
                avatarUrl: '/images/avatars/',
                noImageUrl: '/images/icons/user_icon@4x.png',
                fill: {
                    gradient: ["#a1ed1c", "#62d37e"]
                },
                p: 65
            }
        },

        mounted() {
            var vm = this;

            this.user = JSON.parse(this.auth_user);

            vm.getUserCallBacks();

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
            showNotifications() {
                    this.notifications_on = !this.notifications_on;
                    this.settings_on = false;
                    this.profile_on = false;
                },

                showSettings() {
                    this.settings_on = !this.settings_on;
                    this.notifications_on = false;
                    this.profile_on = false;
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
                    });
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
                        vm.system_preferences = response.data.system_preferences;
                        vm.system_preferences.forEach(function(preference) {
                            if (preference.setting == 'auto_dialer') {
                                vm.system_settings.auto_dialer.value = preference.value;
                                vm.system_settings.auto_dialer.applies_to = preference.applies_to_role;
                            }
                        });
                        vm.preferences.forEach(function(preference) {
                            vm.system_settings.id = preference.id;
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

                clearFilter() {
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

                filterData() {
                    var vm = this;
                    Fire.$emit('FilterData', {
                        'filter': vm.filter
                    });
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

                fireSearchEvent() {
                    Fire.$emit('Search', {
                        'search_term': this.filter.search
                    });
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