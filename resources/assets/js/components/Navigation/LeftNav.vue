<style>
/*Nav starts*/
.sidebar-dark-primary {
    background-color: #fff;
}
[class*="sidebar-dark"] .brand-link {
    color: rgba(255, 255, 255, 0.8);
    border-bottom: none;
}
#sidebar {
     padding-left: 0; 
     padding-right: 0; 
}
a.workstation{
    
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation:hover {
    color: #ffffff;
    background-image: url('/images/icons/work station icon active.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation {
    color: #ffffff;
    background-color: #fff;
    background-image: url('/images/icons/work station icon.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard:hover {
    color: #ffffff;
    background-image: url('/images/icons/dashboard icon active.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard {
    color: #ffffff;
    background-color: #fff;
    background-image: url('/images/icons/dashboard icon .svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board:hover {
    color: #ffffff;
    background-image: url('/images/icons/social board icon active.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board {
    color: #ffffff;
    background-color: #fff;
    background-image: url('/images/icons/social board icon.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history:hover {
    color: #ffffff;
    background-image: url('/images/icons/call history icon active.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history {
    color: #ffffff;
    background-color: #fff;
    background-image: url('/images/icons/call history icon.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education:hover {
    color: #ffffff;
    background-image: url('/images/icons/education icon actove.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education {
    color: #ffffff;
    background-color: #fff;
    background-image: url('/images/icons/education icon.svg') !important;
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: -10px;
    min-height: 53px;
    width: 100%;
    padding: 0;
    border-radius: 0;
    margin: 0;
}
.main-sidebar, .main-sidebar:before {
    transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
    width: 53px !important;
}
.content-wrapper, .main-footer, .main-header {
    transition: margin-left 0.3s ease-in-out;
    margin-left: 53px !important;
    z-index: 3000;
}
.nav-sidebar > .nav-item {
    width: 53px;
    margin-bottom: 50%;
}
/*Nav Ends*/
</style>
<template>
  <div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/workstation" class="brand-link">
        <img class="logo" src="/images/SVG_Images/Logo.svg">
      </a>

      <!-- Sidebar -->
      <div class="" id="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2" v-if="settings.auto_dialer">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/workstation" id="workstation" :class="{ 'nav-link workstation' : true, 'active' : (active == 'workstation')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard" :class="{ 'nav-link dashboard' : true, 'active' : (active == 'dashboard')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/call-history" :class="{ 'nav-link call-history' : true, 'active' : (active == 'call-history')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/social-board" :class="{ 'nav-link social-board' : true, 'active' : (active == 'social-board')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/education" :class="{ 'nav-link education' : true, 'active' : (active == 'education')? true : false }"> </a>
            </li>
          </ul>
        </nav>
        <nav class="mt-2" v-else>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/workstation" title="Workstation" :class="{ 'nav-link workstation' : true, 'active' : (active == 'workstation')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/contacts" title="Contacts" :class="{ 'nav-link dashboard' : true, 'active' : (active == 'contacts')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/leads" title="Leads" :class="{ 'nav-link social-board' : true, 'active' : (active == 'leads')? true : false }"> </a>
            </li>
            <li class="nav-item"  v-if="current_user.role_id == 1 || current_user.role_id == 2">
              <a href="/users" title="Users" :class="{ 'nav-link dashboard' : true, 'active' : (active == 'users')? true : false }"> </a>
            </li>
            <li class="nav-item" style="display:none;">
              <a href="/call-history" :class="{ 'nav-link call-history' : true, 'active' : (active == 'call-history')? true : false }"> </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  </div>
</template>

<script>
  export default {
      mounted() {
        console.log('Component mounted.');

          this.current_user = JSON.parse(this.logged_user);

        this.Toast = this.$swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
      },
      props: ['active','logged_user'],
      data: function(){
        return {
          current_page : 'workstation',
          settings: {
            auto_dialer : false
          },
          current_user: []
        }
      }
    }
</script>