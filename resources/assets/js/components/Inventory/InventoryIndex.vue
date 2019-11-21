<style scoped>
  .header, .top-nav, .row.stats {
    padding-left: 5.2%!important;
    padding-right: 5.2%!important;
  }
  .top-menu {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .navbar {
    padding: 0;
  }
	/*Right Component*/
	li.title h1 {
		color: #003549;
    font-size: 32px;
    letter-spacing: 0.1em;
  }
  div.top-nav{
    margin-top: 15px;
  }
  ul.top-menu{
    list-style: none;
    padding: 0;
  }
  ul.top-menu li.item{
    float: left;
    margin-left: 1.6%;
    margin-right: 1.6%;
    margin-bottom: 8px;
  }
  ul.top-menu li.item a{
    color: rgba(0, 0, 0, 0.5);
    border-radius: 20px;
    padding: 4px 22px;
    text-decoration: none;
    box-shadow: 0 0 7px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 7px rgba(0,0,0,0.1);
    -moz-box-shadow: 0 0 7px rgba(0,0,0,0.1);
    -o-box-shadow: 0 0 7px rgba(0,0,0,0.1);
    font-size:0.73vw;
  }
  ul.top-menu li.item a.active{
    background: linear-gradient(to right, rgba(255,128,51,1) 0%,  rgba(255,147, 58,1) 100%) !important;
    color: #fff !important;
    text-decoration: none;
    font-weight: 500;
  }
  .user-roles .tab-pane .row{
    margin-right: 0;
    margin-left: 0;
  }
  h5 {
    font-size: 0.83vw;
  }

  .btn-default{
    background: #fff;
    color: #999999;    
    border: none!important;
    padding: 11px 14px 10px;
    font-size: 10px;
    text-transform:uppercase;
    border-radius: 50rem!important;
    line-height:1em;
    margin-left: 0.9%;
    margin-right: 0.9%;
    -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
    -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
    -o-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
    box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  }
  .btn-primary {
    border-radius: 50rem!important;
    text-transform:uppercase;
    font-size: 10px;
    padding: 11px 14px 10px;
    line-height:1em;
    margin-left: 0.9%;
    margin-right: 0.9%;
  }
  .btn-block {
    display: block;
    width: 98%;
  }
  .nav-link.active img {
    margin-left:20px;
    display: inline-block!important;
    box-shadow: 0 0 2px rgba(0,0,0,0.15);
    -webkit-box-shadow: 0 0 2px rgba(0,0,0,0.15);
    -moz-box-shadow: 0 0 2px rgba(0,0,0,0.15);
    -o-box-shadow: 0 0 2px rgba(0,0,0,0.15);
    border-radius: 50rem;
  }
  .add-module-btn {
    box-shadow:none!important;
    -webkit-box-shadow:none!important;
    -moz-box-shadow:none!important;
    -o-box-shadow:none!important;
  }
  .tab-pane.card-body {
    padding:4.4% 5.6% 6.8%;
  }
  .card-body .form-group{
    margin-left: 0%;
  }
  .expand-toggle {
    background: #fff;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -o-box-shadow: none;
    text-align: left;
    border-radius: 0!important;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-color: #ccc;
    font-family: 'Rubik', sans-serif;
    font-size:0.73vw;
    color: #999999;
    margin-top: 4.6%;
    padding-left:25px;
  }
  .expand-toggle.btn-secondary:not(:disabled):not(.disabled):active, 
  .expand-toggle.btn-secondary:not(:disabled):not(.disabled).active, 
  .show > .expand-toggle.btn-secondary.dropdown-toggle {
    background: #fff;
    border-color: #fff;
    color: #999999;
  }
  .expand-toggle[aria-expanded="true"] {
    border-bottom: 0;
  }
  .custom-control-label {
    color: #999999;
    font-family: 'Rubik', sans-serif;
    font-size:14px;
  }
  .custom-checkbox .custom-control-label {
    font-weight: 0.73vw;
  }
  .collapse.show .card {
    border-radius: 25px;
    border: 1px solid #ccc!important;
  }
  .collapse.show .card-body{
    padding: 1.15% 2.5% 1.85%;
  }
  .edit-role {
    margin-bottom:1.7%;
  }
  .permissions-divider {
    margin-top:3.7%;
    margin-bottom:3.1%;
  }
  .permissions {
    margin-top: 0.5%;
  }
  
</style>
<template>
  <div id="preferences">
		<nav class="header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
      <ul class="navbar-nav left">
        <li class="nav-item d-none d-sm-inline-block title">
          <h1 class="font-weight-bold p-0">Inventory</h1>
        </li> 
      </ul>
		</nav>

    <div class="row mx-0 my-0 top-nav">
      <ul class="top-menu w-100">
        <li class="item ml-0">
          <a 
            href="#" 
            :class="{ 'active' : ( active_module_name ===  'roles')? true : false }"
            class="ml-0"
          >Branches</a>
        </li>

        <li class="item" style="display_none">
          <a 
            href="#" 
            :class="{ 'active' : ( active_module_name ===  'commission')? true : false }"
          >Products</a>
        </li>

        <li class="item">
          <a 
            href="#" 
            :class="{ 'active' : ( active_module_name ===  'api_integration')? true : false }"
          >Orders/Requesitions</a>
        </li>

      </ul>
    </div>

    <div class="row mx-0 stats scroll-hidden">
      <div class="col-lg-12 px-0">
        <vcl-table v-if="show_page_loader" > </vcl-table>
      </div>
    </div>
  </div>
</template>

<script>
  import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
  export default {
    components: { 
      VclFacebook,
      VclInstagram,
      VclTable,
    },
    mounted() {
      console.log('Inventory Component Mounted');

      this.current_user = JSON.parse(this.logged_user);
      
      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    computed: {
    },
    props: ['logged_user'],
    data: function(){
      return {
        show_page_loader: true,
        Toast:null
      }
    },
    methods: {
    },
    watch: {
    }
  }
</script>