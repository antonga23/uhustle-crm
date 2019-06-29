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
    background-color: #ff8e38;
    background-image: url('/images/icons/work station icon active@4x.png') !important;
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
    background-image: url('/images/icons/work station icon@4x.png') !important;
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
    background-color: #ff8e38;
    background-image: url('/images/icons/dashboard icon active@4x.png') !important;
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
    background-image: url('/images/icons/dashboard icon @4x.png') !important;
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
    background-color: #ff8e38;
    background-image: url('/images/icons/social board icon active@4x.png') !important;
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
    background-image: url('/images/icons/social board icon@4x.png') !important;
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
    background-color: #ff8e38;
    background-image: url('/images/icons/call history icon active@4x.png') !important;
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
    background-image: url('/images/icons/call history icon@4x.png') !important;
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
    background-color: #ff8e38;
    background-image: url('/images/icons/education icon actove@4x.png') !important;
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
    background-image: url('/images/icons/education icon@4x.png') !important;
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
    border-bottom: 1px solid #fff;
}
/*Nav Ends*/
</style>
<template>
  <div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img class="logo" src="/images/SVG_Images/Logo.svg">
      </a>

      <!-- Sidebar -->
      <div class="sidebar" id="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/workstation" :class="{ 'nav-link workstation' : true, 'active' : (current_page == 'workstation')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard" :class="{ 'nav-link dashboard' : true, 'active' : (current_page == 'dashboard')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="/social-board" :class="{ 'nav-link social-board' : true, 'active' : (current_page == 'social-board')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="call-history" :class="{ 'nav-link call-history' : true, 'active' : (current_page == 'call-history')? true : false }"> </a>
            </li>
            <li class="nav-item">
              <a href="education" :class="{ 'nav-link education' : true, 'active' : (current_page == 'education')? true : false }"> </a>
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

        this.Toast = this.$swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
      },
      data: function(){
        return {
          current_page : 'workstation'
        }
      }
    }
</script>