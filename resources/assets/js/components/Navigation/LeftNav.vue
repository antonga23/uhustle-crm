<style scoped>
/*Nav starts*/
.main-sidebar, .main-sidebar:before {
  transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
  width: 56px !important;
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
  width: 50px;
  margin-left:6px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link img {
  padding:8px;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link.active,
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link:hover {
  background-size: 50px;
  background-image: url('/images/icons/left-sidebar/no-shadows/Orange Icon Background 2.svg') !important;
}
.sidebar-dark-primary #sidebar .nav-sidebar > .nav-item > .nav-link {
  background-repeat: no-repeat;
  min-height:56px;
  transition: background-image .3s ease;
}
.main-sidebar {
  width: 56px!important;
  overflow:visible;
}
#sidebar, .nav.nav-pills.nav-sidebar.flex-column, .nav.nav-pills a.nav-link {
  overflow: visible!important;
}
.nav-link span{
  position: relative;
  left: -16px!important;
  top: 2px;
  background: #fff;
  color: #000;
  font-size: 0px;
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
  left: -20px!important;
  font-size: 0.63vw;
}
.sidebar-collapse .nav-link span {
  top: 2px;
}
.sidebar-collapse .nav-link:hover span {
  padding: 16px 35px 16px 40px;
}
/*Nav Ends*/
</style>
<template>
  <div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary">
      <!-- Brand Logo -->
      <a href="/workstation" class="brand-link">
        <img class="logo" src="/images/SVG_Images/Logo.svg" width="30">
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
                :class="{ 'nav-link dashboard' : true, 'active shadow-none' : (active == 'dashboard')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Dashboard.svg" width="52"/>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/workstation"  
                id="workstation" 
                :class="{ 'nav-link workstation' : true, 'active shadow-none' : (active == 'workstation')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Workstation.svg" width="52"/>
                <span>Workstation</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/modules/contacts"
                :class="{ 'nav-link contacts' : true, 'active shadow-none' : (active == 'contacts')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Contacts.svg" width="52"/>
                <span>Contacts</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/modules/leads" 
                :class="{ 'nav-link leads' : true, 'active shadow-none' : (active == 'leads')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Leads.svg" width="52"/>
                <span>Leads</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/call-history" 
                :class="{ 'nav-link call-history' : true, 'active shadow-none' : (active == 'call-history')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Call history.svg" width="52"/>
                <span>Call History</span>
              </a>
            </li>

            <li class="nav-item">
              <a 
                href="/inventory" 
                :class="{ 'nav-link inventory' : true, 'active shadow-none' : (active == 'inventory')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Inventory.svg" width="52"/>
                <span>Inventory</span>
              </a>
            </li>

            <li class="nav-item" v-if="current_user.role_id == 1">
              <a 
                href="/transactions"  
                :class="{ 'nav-link transactions' : true, 'active shadow-none' : (active == 'transactions')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Transactions.svg" width="52"/>
                <span>Transactions</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a 
                href="/social-board" 
                :class="{ 'nav-link social-board' : true, 'active shadow-none' : (active == 'social-board')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Social Board.svg" width="52"/>
                <span>Social Board</span>
              </a>
            </li> -->

            <li class="nav-item" style="display:none;">
              <a 
                href="/education" 
                :class="{ 'nav-link education' : true, 'active shadow-none' : (active == 'education')? true : false }" 
                class="w-100 m-0 p-0 rounded-0" 
                disabled>
                <img src="/images/icons/left-sidebar/no-shadows/Leads.svg" width="52"/>
                <span>Education</span>
              </a>
            </li>

            <li class="nav-item" v-if="current_user.role_id == 1">
              <a 
                href="/users" 
                :class="{ 'nav-link users' : true, 'active shadow-none' : (active == 'users')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/Users.svg" width="52"/>
                <span>Users</span>
              </a>
            </li>

            <li class="nav-item"  v-if="current_user.role_id == 1">
              <a 
                href="/preferences"  
                :class="{ 'nav-link preferences' : true, 'active shadow-none' : (active == 'preferences')? true : false }" 
                class="w-100 m-0 p-0 rounded-0">
                <img src="/images/icons/left-sidebar/no-shadows/System Pref.svg" width="52"/>
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