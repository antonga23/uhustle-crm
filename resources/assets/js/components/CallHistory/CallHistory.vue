<style scoped>

  .scroll-hidden{
    overflow-y: scroll;
    height: 70vh;
    /* padding-top: 6px; */
    padding-right: 6px;
    width: 100%;
  }
  .horizontal-scroll::-webkit-scrollbar {
    width: 5px !important;
    height: 3px;
  }
  
  .horizontal-scroll::-webkit-scrollbar-track {
    border-radius: 0 !important;
  }
  
  .horizontal-scroll::-webkit-scrollbar-thumb {
    background: #B3B3B3 !important;
    border-radius: 5px !important;
  }
  
  .horizontal-scroll::-webkit-scrollbar-thumb:hover {
    background: #B3B3B3 !important;
  }

  .dropdown-menu {
        border-radius: 15px;
        box-shadow: -4px -3px 5px 0px rgba(179, 179, 179, 0.24);
        border: 0;
        font-size: 0.63vw;
        font-family: 'Rubik', sans-serif;
        letter-spacing: 0.05em;
        color: #1e2331;
        top: 10px !important;
  }

  
  .is-hidden {
    display: none;
  }
  
  .is-active {
    display: block;
  }
  
  #top-section {
    padding: 10px 3%;
  }
    
  /* .row {
    margin-bottom: 3%;
  } */
    
  .top-section {
    list-style: none;
  }
    
  .top-section li {
    margin-right: 52px;
    padding: 6px 83px 3px 15px;
    border-right: 1px solid #e3e3e3;
  }
  
  li p.bottom {
    margin-bottom: 0;
    font-size: 19px;
    font-weight: 900;
  }
  
  .card {
    border-radius: 10px;
    border: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1) ;
    min-width: 150px;
  }

  .ca .card-title {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #fff;
  }
  
  .calls {
    background: linear-gradient(to right, rgba(255, 164, 128, 1) 0%, rgba(255, 128, 134, 1) 100%);
    color: #fff;
  }
  
  .sales {
    background: linear-gradient(to right, rgba(65, 197, 231, 1) 0%, rgba(4, 149, 240, 1) 100%);
    color: #fff;
  }
  
  .sales-amount {
    background: linear-gradient(to right, rgba(221, 192, 241, 1) 0%, rgba(160, 117, 209, 1) 100%);
    color: #fff;
  }
    
    .call-backs {
      background: linear-gradient(to right, rgba(101, 215, 207, 1) 0%, rgba(111, 148, 211, 1) 100%);
      color: #fff;
    }
    
  .ave-time {
    background: linear-gradient(to right, rgba(222, 137, 180, 1) 0%, rgba(239, 84, 128, 1) 100%);
    color: #fff;
  }
    
  .con-ratio {
    background: linear-gradient(to right, rgba(97, 167, 221, 1) 0%, rgba(99, 101, 202, 1) 100%);
    color: #fff;
  }
  
  .mon-target {
    background: linear-gradient(to right, rgba(75, 189, 149, 1) 0%, rgba(32, 190, 198, 1) 100%);
    color: #fff;
  }
  
  .add-new-top-section {
    float: right;
    border-radius: 50%;
  }
  
  h5 {
    color: #fff;
  }
  
  h5 .icon {
    width: 15px;
    margin: -5px 15px 0 0;
  }
  
  .card-body p {
    color: #fff;
    width: 100%;
    margin-right: 0;
    text-align: right;
    float: left;
    margin-bottom: -10px;
    word-break: keep-all;
    line-height: 14px;
  }
  
p.card-text {
  font-size: 16px;
  color: #fff;
  font-weight: bolder;
  margin: 0;
  width: 100%;
  float: right;
  font-family: 'Montserrat bold', sans-serif;
  letter-spacing: 1.2px;
}
  
  p.card-text span {
    font-size: 19px;
    color: #333333;
    font-weight: bolder;
  }
  
  p.card-link {
    font-size: 22px;
    color: #333333;
  }
  
  .stats .card {
    border-radius: 10px;
  }
  
  .stats .card h5 {
    color: #818284;
  }
  
  .stats .card h5 .icon {
    width: 25px;
    margin: -5px 15px 0 0;
  }
  
  .stats .card .card-title {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #bfccd2;
  }
    
  span.right {
    float: right;
  }
  
  .truncate {
    width: 250px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  
  .list-group-item p {
    margin: 0;
  }
  
  .list-group-item p strong {
    font-size: 25px;
    margin-right: 30px;
  }
  
  .choose-comment-type {
    float: left;
    display: block;
    height: 50px;
    width: 50px;
    padding: 11px;
    margin: 10px 10px 10px 0;
    background: #f6f8f9;
    border-radius: 9px;
    cursor: pointer;
  }
  
  .comment-desc {
    display: block;
    height: 50px;
    width: 75%;
    padding: 11px;
    margin: 10px 10px 10px 0;
    background: #f6f8f9;
    border-radius: 9px;
    border: none;
    cursor: pointer;
    float: left;
  }
    
  #send-btn {
    height: 50px;
    margin: 10px 0px 10px 0;
  }
  
  .btn-secondary {
    color: #fff;
    background-color: #f6f8f9;
    border-color: #f6f8f9;
  }
  
  .btn-secondary:not(:disabled):not(.disabled):active,
  .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #f6f8f9;
    border-color: #f6f8f9;
  }
  
  #chartjs-size-monitor #bar-chart {
    height: 318px !important;
  }
  
  .green {
    color: #00a25a !important;
  }
  
  .red {
    color: red !important;
  }
  
  .grey-bg-color {
    background-color: #EBEFF3;
    width: 110%;
  }
  
  .card-text-small {
    margin-top: -7px;
    color: #3b3b3b;
    font-family: 'Rubik', sans-serif !important;
    letter-spacing: 1.2px;
    font-size:0.73vw;
  }
    
  .badge {
    width: 12%;
  }
  
  .badge img {
    width: 100%;
  }
  
  .headings {
    list-style: none;
    padding-left: 70px;
  }
  
  .headings p {
    font-weight: 700;
    color: #9c9c9c;
    font-size: 14px;
    text-transform: capitalize;
    text-align: left;
  }
  
  ul.items {
    list-style: none;
    padding-left: 40px;
  }
  
  ul.items li {
    float: left;
    font-weight: 700;
    color: #003449;
    width: 14%;
    text-align: left;
  }
  
  ul.items li a:hover {
    text-decoration: none;
  }
    
  .form-control {
    width: 30px;
    margin-top: -8px;
  }
  
  .scroll-hidden {
    overflow-y: scroll;
    height: 70vh;
    /* padding-top: 6px; */
    padding-right: 6px;
    width: 100%;
  }
  
  table.listing {
    width: 100%;
  }
  
  table.listing tr th {
    float: left;
    font-weight: 700;
    color: #9fb3bb;
    padding: 0 69px 20px 70px;
  }
  
  .padding-bottom-12 {
    padding-bottom: 12px;
  }
  
  .padding-bottom-18 {
    padding-bottom: 18px;
  }
  
  .card .card-text {
    font-size: 1.65vw;
    line-height: 1em;
  }
  
  .horizontal-scroll {
    overflow: auto;
    flex-wrap: nowrap;
  }

  .col-lg-auto .btn.btn-secondary {
    width: 40px;
    height: 40px;
    padding: 2px 5px 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1)!important;
    background-color: #fff;
  }
  
  .headings .btn.btn-secondary {
    width: 30px;
    height: 30px;
    padding: 0 0 3px 0;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.1)!important;
    background-color: #fff;
  }

  .add-new-top-section .dropdown {
    top: -5px;
    right: 170px;
  }

  .table-section {
    padding: 0 0 0 4%;;
  }

  .pb-10 {
    padding-bottom: 10px;
  }


  /* Media Queries */
  @media screen and (max-width: 1500px) {
    .card {
      min-width: 150px !important;
    }

    .add-new-top-section img.icon {
      width: 36px !important; 
    }

    .add-new-top-section .dropdown {
      top: -5px;
      right: 100px;
    }
     .individual-cards {
    width: 95%;
  }
  
  }


</style>
<template>
  <div class="">
    <div id="top-section" class="row pb-0 mb-4 align-items-center grey-bg-color justify-content-between mx-0">
      <div class="col-11">
        <div class="row mb-0 individual-cards horizontal-scroll">
          <div class="col-auto pb-10 pl-0">
            <div class="card mb-0 calls">
              <div class="card-body row align-items-center justify-content-between mx-0 mb-0 py-2">
                <div class="col pl-0">
                  <p class="card-text-small text-left">Calls</p>
                </div>

                <div class="col pr-0">
                  <p class="card-text text-right">{{ call_log.total_calls }} </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto pb-10">
            <div class="card mb-0 sales">
              <div class="card-body row align-items-center justify-content-between mx-0 mb-0 py-2">
                <div class="col pl-0">
                  <p class="card-text-small text-left">Sales</p>
                </div>

                <div class="col pr-0">
                  <p class="card-text text-right">{{ call_log.total_sales }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto pb-10">
            <div class="card mb-0 sales-amount">
              <div class="card-body row align-items-center justify-content-between mx-0 mb-0 py-2">
                <div class="col pl-0">
                  <p class="card-text-small text-left">Amount</p>
                </div>

                <div class="col px-0">
                  <p class="card-text text-right">${{ call_log.sum_sales }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto pb-10">
            <div class="card mb-0 call-backs">
              <div class="card-body row align-items-center justify-content-between mx-0 mb-0 py-2">
                <div class="col pl-0">
                  <p class="card-text-small text-left">Callbacks</p>
                </div>

                <div class="col px-0">
                  <p class="card-text text-right">{{ call_log.sum_call_back }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto pb-10">
            <div class="card mb-0 ave-time">
              <div class="card-body row align-items-center justify-content-between mx-0 mb-0 py-2">
                <div class="col pl-0">
                  <p class="card-text-small text-left">Av. Time</p>
                </div>

                <div class="col px-0">
                  <p class="card-text text-right">{{ secondsToMinues(call_log.avg_time) }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto pb-10">
            <div class="card mb-0 con-ratio">
              <div class="card-body row align-items-center justify-content-between mx-0 mb-0 py-2">
                <div class="col pl-0">
                  <p class="card-text-small text-left">Con. Ratio</p>
                </div>

                <div class="col pr-0">
                  <p class="card-text text-right">{{ call_log.con_ratio }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-1">
        <div class="row">
          <div class="col-12 pr-0">
            <div class="mb-0 add-new-top-section">
              <div class="card-body row right align-items-center justify-content-between mx-0 p-0">
                <div class="col pl-0 dropdown">
                  <a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/images/icons/Call-History-Add-Icon.svg" alt="Icon" class="icon" style="width: 60px;" />
                  </a>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Calls</a>
                    <a class="dropdown-item" href="#">Sales</a>
                    <a class="dropdown-item" href="#">Calls</a>
                    <a class="dropdown-item" href="#">Sales</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="table-section">
      <div class="row stats mx-0 scroll-hidden horizontal-scroll" v-if="conferences.length > 0">
        <div class="col-lg-12 px-0">
          <div class="card-body px-0 padding-bottom-18">
            <data-table  id="datatable" :rows="conferences" :columns="columns"></data-table>
          </div>
        </div>
        <!-- <div class="col-lg-1 px-0">
          <div class="padding-bottom-18">
            <div class="col pl-0 dropdown">
              <a class="m-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="/images/icons/add_Button.svg" alt="Icon" class="icon" style="width: 15px;" />
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Calls</a>
                <a class="dropdown-item" href="#">Sales</a>
                <a class="dropdown-item" href="#">Calls</a>
                <a class="dropdown-item" href="#">Sales</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="row stats mt-4 mx-0" v-else>
        <div class="card left w-100">
          <div class="card-body padding-bottom-12">
            <ul class="items">
              <li colspan="7" class="text-center w-100">Your call history is empty</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import {
    Bar
  }
  from 'vue-chartjs';

  import {
    BarChart
  }
  from 'vue-morris';
  
  import DataTable from '../DataTables/CallLogsDataTable';

  export default {
    extends: Bar,
    components: {
      BarChart,
      DataTable
    },
    mounted() {
      console.log('Component mounted');

      this.getCallLog();

      this.getActiveCalls();

      var vm = this;

      Fire.$on('TopMonthFilterChange', function(data) {
        vm.getCallLog(data.month);
      });

      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function() {},
    props: [],
    data: function() {
      return {
        conferences: [],
        call_log: {
          total_calls: '',
          total_sales: '',
          con_ratio: '',
          sum_sales: '',
          call_history: '',
          sum_call_back: '',
          avg_time: '',
        },
        columns:[
          {
            label: 'CALLER',  // Column name
            field: 'lead_caller',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'TYPE',  // Column name
            field: 'lead_type',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'NAME',  // Column name
            field: 'lead_name',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'OWNER',  // Column name
            field: 'lead_owner',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'ASSIGNEE',  // Column name
            field: 'lead_assignee',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'MOBILE #',  // Column name
            field: 'lead_mobile',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'PACKAGE',  // Column name
            field: 'lead_product',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true,
            exportable: true
          },
          {
            label: 'CALL START',  // Column name
            field: 'dateCreated',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:true
          },
          {
            label: 'STATUS',  // Column name
            field: 'status',  // Field name from row
            numeric: true, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:false
          },
          {
            label: '',  // Column name
            field: 'actions',  // Field name from row
            numeric: false, // Affects sorting
            html: false,    // Escapes output if false.
            sortable:false,
          },
        ],
        Toast: null
      }
    },

    methods: {
      getActiveCalls(){
        var vm = this;
        vm.show_page_loader = true;
        axios.get('/calls/list').then(function (response) { 
            vm.conferences = response.data.conferences;
            vm.show_page_loader = false;
            console.log(vm.conferences);
        });
        // setInterval(function(){ 
        //     axios.get('/calls/list').then(function (response) { 
        //         vm.conferences = response.data.conferences;
        //         vm.show_page_loader = false;
        //     });
        // }, 5000);
      },

      secondsToMinues(time) {
        var minutes = Math.floor(time / 60);
        var seconds = time - minutes * 60;
        var finalTime = this.str_pad_left(minutes, '0', 2) + ':' + this.str_pad_left(seconds, '0', 2);
        return finalTime;
      },

      str_pad_left(string, pad, length) {
        return (new Array(length + 1).join(pad) + string).slice(-length);
      },

      getCallLog(month = '') {
        var vm = this;

        if (month == '') {
          var endpoint = '/calls/get-call-history';
        } else {
          var endpoint = '/calls/get-call-history/' + month;
        }

        vm.$Progress.start();

        axios.get(endpoint).then(function(response) {

          if (response.data.success == true) {
            vm.call_log.total_calls = response.data.total_calls;
            vm.call_log.total_sales = response.data.total_sales;
            vm.call_log.con_ratio = response.data.con_ratio;
            vm.call_log.sum_sales = response.data.sum_sales;
            vm.call_log.call_history = response.data.call_history;
            vm.call_log.sum_call_back = response.data.sum_call_back;
            vm.call_log.avg_time = response.data.avg_time;

            vm.$Progress.finish();
          } else {
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again', 'warning');
          }
        });
      }
    }
  }
</script>