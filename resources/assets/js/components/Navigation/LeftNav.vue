<style scoped>
/*Nav starts*/
.main-sidebar, .main-sidebar:before {
  transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
  width: 53px !important;
}
.sidebar-dark-primary {
  background-color: #fff;
  box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
}
[class*="sidebar-dark"] .brand-link {
  color: rgba(255, 255, 255, 0.8);
  border-bottom: none;
}
.nav-sidebar > .nav-item {
  width: 63px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.transactions.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.transactions:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users:hover,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.preferences.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.preferences:hover {
  background-size: 90px;
  background-position: -10px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.transactions,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.preferences {
  background-size: 64px;
  background-repeat: no-repeat;
  background-position: 3px;
  min-height: 75px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation:hover {
  background-image: url('/images/icons/SVG/Active work station icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.workstation {
  background-image: url('/images/icons/SVG/Work Station Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard:hover {
  background-image: url('/images/icons/SVG/Active Dashboard Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.dashboard {
  background-image: url('/images/icons/SVG/Dashboard Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board:hover {
  background-image: url('/images/icons/SVG/Active Social Board Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.social-board {
  background-image: url('/images/icons/SVG/Social Board Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history:hover {
  background-image: url('/images/icons/SVG/Active Call History Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.call-history {
  background-image: url('/images/icons/SVG/Call History Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.transactions.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.transactions:hover {
  background-image: url('/images/icons/SVG/Active Transactions Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.transactions {
  background-image: url('/images/icons/SVG/Transactions Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education:hover {
  background-image: url('/images/icons/SVG/Active Training Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.education {
  background-image: url('/images/icons/SVG/Training Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts:hover {
  background-image: url('/images/icons/SVG/Active Contacts Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.contacts {
  background-image: url('/images/icons/SVG/Contacts icon.svg') !important
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads:hover {
  background-image: url('/images/icons/SVG/Active Leads Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.leads {
  background-image: url('/images/icons/SVG/Leads Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users:hover {
  background-image: url('/images/icons/SVG/Active Users Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.users {
  background-image: url('/images/icons/SVG/Users Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.preferences.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.preferences:hover {
  background-image: url('/images/icons/SVG/Active System Preferences Icon.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.preferences {
  background-image: url('/images/icons/SVG/System Preferences Icon.svg') !important;
}
.main-sidebar {
  width: 63px!important;
  overflow:visible;
}
#sidebar, .nav.nav-pills.nav-sidebar.flex-column, .nav.nav-pills a.nav-link {
  overflow: visible!important;
}
.nav-link span{
  position: relative;
  left: -200px!important;
  top: 26px;
  background: #fff;
  color: #000;
  font-size: 18px;
  letter-spacing:0.05em;
  color: #003549;
  border-radius: 0 50rem 50rem 0;
  box-shadow: 0 0 6px rgba(0,0,0,0.1);
  padding: 18px 0;
  width: 0;
  overflow:hidden;
  z-index:-1;
  transition-delay: 2s;
  transition: width .5s ease, padding .5s ease, overflow .5s ease, left .5s ease;
}
.nav-link:hover span{
  width: auto; 
  overflow:visible;
  padding: 18px 35px 18px 40px;
  left: 44px!important;
}
/*Nav Ends*/
</style>
<template>
  <div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary">
      <!-- Brand Logo -->
      <a href="/workstation" class="brand-link mt-3">
        <img class="logo" src="/images/SVG_Images/Logo.svg">
      </a>

      <!-- Sidebar -->
      <div class="px-0" id="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a 
                href="/dashboard" 
                title="Dashboard" 
                :class="{ 'nav-link dashboard' : true, 'active shadow-none' : (active == 'dashboard')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/workstation" 
                title="Workstation" 
                id="workstation" 
                :class="{ 'nav-link workstation' : true, 'active shadow-none' : (active == 'workstation')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Workstation</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/modules/contacts" 
                title="Contacts" 
                :class="{ 'nav-link contacts' : true, 'active shadow-none' : (active == 'contacts')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Contacts</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/modules/leads" 
                title="Leads" 
                :class="{ 'nav-link leads' : true, 'active shadow-none' : (active == 'leads')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Leads</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/call-history" 
                title="Call History" 
                :class="{ 'nav-link call-history' : true, 'active shadow-none' : (active == 'call-history')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Call History</span>
              </a>
            </li>

            <li class="nav-item" v-if="current_user.role_id == 1">
              <a 
                href="/transactions" 
                title="Transactions" 
                :class="{ 'nav-link transactions' : true, 'active shadow-none' : (active == 'transactions')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Transactions</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a 
                href="/social-board" 
                title="Social Board" 
                :class="{ 'nav-link social-board' : true, 'active shadow-none' : (active == 'social-board')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Social Board</span>
              </a>
            </li> -->

            <li class="nav-item" style="display:none;">
              <a 
                href="/education" 
                title="Education" 
                :class="{ 'nav-link education' : true, 'active shadow-none' : (active == 'education')? true : false }" 
                class="w-100 m-0 p-0 rounded-0" 
                disabled>
                <span>Education</span>
              </a>
            </li>

            <li class="nav-item" v-if="current_user.role_id == 1">
              <a 
                href="/users" 
                title="Users" 
                :class="{ 'nav-link users' : true, 'active shadow-none' : (active == 'users')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>Users</span>
              </a>
            </li>

            <li class="nav-item"  v-if="current_user.role_id == 1">
              <a 
                href="/preferences" 
                title="System Preferences" 
                :class="{ 'nav-link preferences' : true, 'active shadow-none' : (active == 'preferences')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <span>System Preferences</span>
              </a>
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