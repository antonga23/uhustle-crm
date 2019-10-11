<style scoped>
/*Nav starts*/
.main-sidebar, .main-sidebar:before {
  transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
  width: 53px !important;
}
.sidebar-dark-primary {
  background-color: #fff;
  box-shadow: 0 -4px 15px rgba(220, 220, 220, 0.7);
  -webkit-box-shadow: 0 -4px 15px rgba(220, 220, 220, 0.7);
  -moz-box-shadow: 0 -4px 15px rgba(220, 220, 220, 0.7);
}
[class*="sidebar-dark"] .brand-link {
  color: rgba(255, 255, 255, 0.8);
  border-bottom: none;
}
.nav-sidebar > .nav-item {
  width: 63px;
  margin-bottom: 50%;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation:hover {
  color: #ffffff;
  background-image: url('/images/icons/work station icon active.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/work station icon.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard:hover {
  color: #ffffff;
  background-image: url('/images/icons/dashboard icon active.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/dashboard icon .svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board:hover {
  color: #ffffff;
  background-image: url('/images/icons/social board icon active.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/social board icon.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history:hover {
  color: #ffffff;
  background-image: url('/images/icons/call history icon active.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/call history icon.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education:hover {
  color: #ffffff;
  background-image: url('/images/icons/education icon actove.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/education icon.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts:hover {
  color: #ffffff;
  background-image: url('/images/icons/Contacts_Active.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/Contacts.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads:hover {
  color: #ffffff;
  background-image: url('/images/icons/Leads Active.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/Leads.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users:hover {
  color: #ffffff;
  background-image: url('/images/icons/User active.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users {
  color: #ffffff;
  background-color: #fff;
  background-image: url('/images/icons/Users.svg') !important;
  background-size: 90px;
  background-repeat: no-repeat;
  background-position: -10px;
  min-height: 63px;
}
.main-sidebar {
  width: 63px!important;
}
/*Nav Ends*/
</style>
<template>
  <div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary">
      <!-- Brand Logo -->
      <a href="/workstation" class="brand-link">
        <img class="logo" src="/images/SVG_Images/Logo.svg">
      </a>

      <!-- Sidebar -->
      <div class="px-0" id="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a 
                href="/workstation" 
                title="Workstation" 
                id="workstation" 
                :class="{ 'nav-link workstation' : true, 'active shadow-none' : (active == 'workstation')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item">
              <a 
                href="/dashboard" 
                title="Dashboard" 
                :class="{ 'nav-link dashboard' : true, 'active shadow-none' : (active == 'dashboard')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item">
              <a 
                href="/call-history" 
                title="Call History" 
                :class="{ 'nav-link call-history' : true, 'active shadow-none' : (active == 'call-history')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item">
              <a 
                href="/contacts" 
                title="Contacts" 
                :class="{ 'nav-link contacts' : true, 'active shadow-none' : (active == 'contacts')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item">
              <a 
                href="/leads"
                title="Leads" 
                :class="{ 'nav-link leads' : true, 'active shadow-none' : (active == 'leads')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item" v-if="current_user.role_id == 1">
              <a 
                href="/transactions" 
                title="Transactions" 
                :class="{ 'nav-link leads' : true, 'active shadow-none' : (active == 'transactions')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item">
              <a 
                href="/social-board" 
                title="Social Board" 
                :class="{ 'nav-link social-board' : true, 'active shadow-none' : (active == 'social-board')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item" v-if="current_user.role_id == 1">
              <a 
                href="/users" 
                title="Users" 
                :class="{ 'nav-link users' : true, 'active shadow-none' : (active == 'users')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item"  v-if="current_user.role_id == 1">
              <a 
                href="/preferences" 
                title="System Preferences" 
                :class="{ 'nav-link users' : true, 'active shadow-none' : (active == 'preferences')? true : false }" 
                class="w-100 m-0 p-0 rounded-0"></a>
            </li>
            <li class="nav-item">
              <a 
                href="/education" 
                title="Education" 
                :class="{ 'nav-link education' : true, 'active shadow-none' : (active == 'education')? true : false }" 
                class="w-100 m-0 p-0 rounded-0" 
                disabled></a>
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
    props: ['active','logged_user'],
    data: function(){
      return {
        current_page : 'workstation',
        current_user: []
      }
    },
    
    mounted() {
        console.log('Component mounted.');

        this.current_user = JSON.parse(this.logged_user);

        this.Toast = this.$swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
      }
    }
</script>