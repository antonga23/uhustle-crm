<style scoped>
.main-header.navbar.navbar-expand {
  padding: 0 4%;
}
.navbar .title h1{
  color: #003549;
  font-size: 1.67vw;
  letter-spacing: 0.1em;
}
.callIcons li a{
  background-repeat: no-repeat;
  color: black;
  background-size: 59px !important;
  background-repeat: no-repeat !important;
  background-position: center center !important;
}
.callIcons .search .col-auto {
  padding-right:41%;
}
.callIcons .search a{
  background-color: #fff;
  background-image: url('/images/icons/top-nav/Search.svg') !important;
  background-size: 15px!important;
  background-repeat: no-repeat;
  border-radius: 50rem;
	box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
	width: 48px;
	height: 48px;
}
.callIcons .search a:hover{
  background-image: url('/images/icons/Asset 61.svg') !important;
  background-size: 170%!important;
  background-repeat: no-repeat;
}
.callIcons .search input {
  box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  padding:14px 0 14px;
  right: -40px;
  position: absolute;
  top: -24px;
  width:0;
  transition: width 2s;
}
.callIcons .search:hover input {
  width:auto;
  padding:14px 40px 14px 15px;
}
.callIcons .search input::placeholder {
  font-size: 12px;
  font-weight: 300;
  font-family: 'Rubik', sans-serif;
  font-style: italic;
}
.trans-tabs {
  padding-left:5.2%;
  padding-right:5.2%;
}
.tab-pane.card-body {
  padding:4.4% 5.6% 6.8%;
}
.nav-link.active img {
  display:inline-block!important;
  margin-left: 20px;
}
.deal-name {
  font-size: 0.83vw;
  margin-bottom:3.9%;
}
</style>
<template>
  <div id="transactions">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light row mx-0 align-items-center justify-content-between">
    <!-- Left navbar links -->
      <div class="nav-item d-none d-sm-inline-block title col px-0">
        <h1 class="nav-link font-weight-bold">Transactions</h1>
      </div>

      <div class="col-auto nav-item pr-0">
        <ul class="navbar-nav callIcons">
          <li class="nav-item d-sm-inline-block search">
            <div class="row mx-0 align-items-center">
              <div class="col px-0">
                <input placeholder="Search" class="border-0 rounded-pill"/>
              </div>

              <div class="col-auto pl-0">
                <a href="#" class="nav-link p-0"></a>
              </div>
            </div>
          </li>
        </ul>				
      </div>
		</nav>

    <div>
      <div class="row mx-0 trans-tabs">
        <div class="col-lg-12 px-0">
          <b-card no-body>
            <b-tabs card>
              <b-tab active>
                <template v-slot:title>
                  <h5 class="d-inline-block">Paid</h5>
                  <img src="images/icons/transactions/Paid.svg" width="16" class="d-none"/>
                </template>

                <transition name="fade">
                  <p>this is content</p>
                </transition>
              </b-tab>

              <b-tab>
                <template v-slot:title>
                  <h5 class="d-inline-block">Pending</h5>
                  <img src="images/icons/transactions/Pending.svg" width="16" class="d-none"/>
                </template>

                <transition name="fade">
                  <p>this is content</p>
                </transition>
              </b-tab>

              <b-tab>
                <template v-slot:title>
                  <h5 class="d-inline-block">Due</h5>
                  <img src="images/icons/transactions/Pending.svg" width="16" class="d-none"/>
                </template>

                <transition name="fade">
                  <p>this is content</p>
                </transition>
              </b-tab>

              <b-tab>
                <template v-slot:title>
                  <h5 class="d-inline-block">Rejected</h5>
                  <img src="images/icons/transactions/Rejected.svg" width="16" class="d-none"/>
                </template>

                <transition name="fade">
                  <p>this is content</p>
                </transition>
              </b-tab>

              <b-tab>
                <template v-slot:title>
                  <h5 class="d-inline-block">Create a deal</h5>
                  <img src="images/icons/Field_Add.svg" width="16"/>
                </template>

                <transition name="fade">
                  <div>
                    <h5 class="deal-name">Peter Andrews</h5>
                    <create-deal/>
                  </div>
                </transition>
              </b-tab>
            </b-tabs>
          </b-card>
          <!-- <vcl-table v-if="show_page_loader" ></vcl-table>
          <datatable v-if="!show_page_loader" id="datatable" :rows="transactions" :columns="columns" :role="current_user.role_id" title=""></datatable> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { Bar } from 'vue-chartjs';
  import { BarChart } from 'vue-morris';
  import DataTable from '../DataTables/TransactionsDataTable';
  import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
  import CreateDeal from './createDeal';
  export default {
    extends: Bar,
    components: { 
      BarChart,
      VclFacebook,
      VclInstagram,
      VclTable,
      'datatable' : DataTable,
      CreateDeal
    },
    mounted() {
      console.log('Component mounted');
      this.current_user = JSON.parse(this.logged_user);
      this.getTransactions();

      var vm = this;

      Fire.$on('FilterData', function(data){
        vm.applyFilter(data);
      });

      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
    },
    props: ['logged_user'],
    data: function(){
      return {
        transactions: null,
        roles: null,
        modules: null,
        permissions:[],
        selected_permissions: [],
        user: {
          leads: [],
          clients: [],
        },
        current_user: {},
        add_user: false,
        user_roles_active: true,
        leads_active: false,
        contacts_active: false,
        add_new_section_active: false,
        show_page_loader: false,
        avatarUrl: '/images/avatars/',
        noImageUrl: '/images/icons/user_icon@4x.png',
        bulk_actions: "",
        Toast: null,
        columns:[
          {
            label: 'FULL NAME',  // Column name
            field: 'full_name',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'EMAIL',  // Column name
            field: 'email',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'OWNER',  // Column name
            field: 'creator',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'ASSIGNEE',  // Column name
            field: 'assignee',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'MOBILE #',  // Column name
            field: 'phone_number',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'PACKAGE',  // Column name
            field: 'product',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true,
            exportable: true
          },
          {
            label: 'TRIAL STARTS',  // Column name
            field: 'start_date',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'TRIAL ENDS',  // Column name
            field: 'expires_at',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'DAYS REMAINING',  // Column name
            field: 'days_remaining',  // Field name from row
            numeric: true, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'TRANSACTION NUMBER',  // Column name
            field: 'transaction_mumber',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'AMOUNT',  // Column name
            field: 'amount',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'STATUS',  // Column name
            field: 'status',  // Field name from row
            numeric: true, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'ACTIONS',  // Column name
            field: 'actions',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          }
        ]
      }
    },
    methods: {
      secondsToMinues(time){
        var minutes = Math.floor(time / 60);
        var seconds = time - minutes * 60;
        var finalTime = this.str_pad_left(minutes,'0',2) + ':' + this.str_pad_left(seconds,'0',2);
        return finalTime;
      },
      str_pad_left(string,pad,length) {
        return (new Array(length+1).join(pad)+string).slice(-length);
      },
      getTransactions(){
        var vm = this;
        var endpoint = '/clients/transactions';

        vm.show_page_loader = true;
        vm.$Progress.start();

        axios.get(endpoint).then(function (response) {
            
          if(response.data.success == true){
            vm.transactions = response.data.transactions;
            vm.show_page_loader = false;
            vm.$Progress.finish();
          }else{
            vm.show_page_loader = false;
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
          }
        });
      }
    }
  }
</script>
