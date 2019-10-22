<style scoped>
  #dashboard {
    height: 100vh;
    overflow: auto;
  }
  #top-section {
    padding-left: 3%;
    padding-right: 3%;
    margin-top: 60px;
    background-image: linear-gradient(180deg,#fff 60%,#F7F7F7 60%);
  }
  #top-section h1 {
    font-size: 26px;
    font-family: 'Rubik', sans-serif;
    margin-bottom: 50px;
  }
  #top-section .card{    
    border-radius: 25px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
    transition: padding .5s ease;
  }
  #top-section .card .col-auto {
    width: 100%;
    padding-right: 0!important;
  }
  .sidebar-collapse #top-section .card .col-auto {
    width: auto;
    padding-right: 1rem!important;
  }
  .sidebar-collapse #top-section .card {
    padding: 30px;
  }
  .sidebar-collapse #top-section .card .card-numeral {
    font-size: 30px;
    transition: font-size .5s ease;
  }
  #top-section .card .card-numeral {
    font-size: 40px;
  }
  #top-section .card .card-desc {
    font-size: 18px;
    font-family: 'Rubik', sans-serif;
  }
  #top-section .card .card-stat {
    font-size: 21px;
    font-family: 'Rubik', sans-serif;
    transition: font-size .5s ease;
  }
  .sidebar-collapse #top-section .card .card-stat {
    font-size: 14px;
    font-family: 'Rubik', sans-serif;
  }
  #dash-activities {
    padding-left: 3%;
    padding-right: 3%;
    padding-bottom: 650px;
    background-color: #F7F7F7;
  }
  #dash-activities .card {
    border-radius: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  #dash-activities .card .card-header.tab-card-header {
    background-color: #fff;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
  }
  .sidebar-collapse .agent-details {
    display: block!important;
    transition: display .5s ease;
  }
  .agent-details .card {
    padding: 15px!important;
    border-radius: 15px!important;
    margin-bottom:40px;
  }
  .agent-details .card .heading {
    font-size: 20px;
    font-family: 'Rubik', sans-serif;
    color: #B3B3B3;
  }
  .agent-details .card .detail {
    font-size: 30px;
    color: #1A1C43;
    line-height: 1em;
  }
  .card.target {
    background:  linear-gradient(to right, rgba(160,237,128,1) 0%, rgba(98,211,126,1) 100%) !important;
    padding-bottom: 30px;
  }
  .card.target .heading {
    font-size: 18px;
    color: #fff;
  }
  .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="true"][aria-controls="One"], .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="true"][aria-controls="Three"]{ 
    box-shadow: 10px -10px 10px #f5f5f5; 
    border-top-left-radius: 25px; 
    border-top-right-radius: 25px; 
  } 
  .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="false"][aria-controls="One"], .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="false"][aria-controls="Three"]{ 
    box-shadow: inset -7px -10px 10px #f5f5f5; 
    border-bottom-right-radius: 25px; 
    border-top-left-radius: 25px; 
    border-top-right-radius:0; 
  } 
  .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="true"][aria-controls="Two"], .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="true"][aria-controls="Four"]{ 
    box-shadow: -10px -10px 10px #f5f5f5; 
    border-top-left-radius: 25px; 
    border-top-right-radius: 25px; 
  } 
  .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="false"][aria-controls="Two"], .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="false"][aria-controls="Four"]{ 
    box-shadow: inset 7px -10px 10px #f5f5f5; 
    border-bottom-left-radius: 25px; 
    border-top-right-radius: 25px; 
    border-top-left-radius:0; 
  }
  .tasks .card {
    border-radius: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .reminders p {
    font-size: 16px;
    font-family: 'Rubik', sans-serif;
    color: #333333;
  }
  .reminders .row {
    padding:20px;
  }
  .reminders ul {
    max-height:448px;
    overflow-y: auto;
    margin: 20px;
    border-top: 1px solid #CDCDCF;
  }
  .reminders ul li {
    box-shadow: 0 0 7px rgba(0,0,0,0.05);
    -webkit-box-shadow: 0 0 7px rgba(0,0,0,0.05);
    padding:10px 15px;
  }
  .reminders ul li label {
    font-size: 16px;
    font-family: 'Rubik', sans-serif;
    color: #808080;
  }
  .to-dos {
    padding-top: 40px;
    padding-bottom: 40px;
    padding-left:40px;
  }
  .calendar .card {
    padding: 30px 40px;
  }
  .calendar input {
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    padding: 15px 25px 20px;
  }
</style>
<template>
  <div id="dashboard">
    <div id="top-section" class="row mx-0">
      <h1><span class="font-weight-bold">Hi Peter</span>, your analytics are all set</h1>
      <div class="card-deck w-100 mx-0 px-0">
        <div class="card border-0 ml-0">
          <div class="row justify-content-center align-items-center mx-0">
            <div class="col-auto pl-0 pr-2">
              <p class="card-numeral font-weight-bold text-center mb-0">11</p>
            </div>
            
            <div class="col-auto px-0">
              <p class="card-desc w-100 mb-0">Calls made</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                14%
              </p>
            </div>
          </div>
        </div>

        <div class="card border-0">
          <div class="row justify-content-center align-items-center mx-0">
            <div class="col-auto pl-0 pr-2">
              <p class="card-numeral font-weight-bold text-center mb-0">5</p>
            </div>
            
            <div class="col-auto px-0">
              <p class="card-desc w-100 mb-0">Sales Quantity</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                3%
              </p>
            </div>
          </div>
        </div>

        <div class="card border-0">
          <div class="row justify-content-center align-items-center mx-0">
            <div class="col-auto pl-0 pr-2">
              <p class="card-numeral font-weight-bold text-center mb-0">$365</p>
            </div>
            
            <div class="col-auto px-0">
              <p class="card-desc w-100 mb-0">Sales amount</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                11%
              </p>
            </div>
          </div>
        </div>

        <div class="card border-0">
          <div class="row justify-content-center align-items-center mx-0">
            <div class="col-auto pl-0 pr-2">
              <p class="card-numeral font-weight-bold text-center m-0">45%</p>
            </div>
            
            <div class="col-auto px-0">
              <p class="card-desc w-100 mb-0">Conversion Ratio</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                33%
              </p>
            </div>
          </div>
        </div>

        <div class="card border-0 mr-0">
          <div class="row justify-content-center align-items-center mx-0">
            <div class="col-auto pl-0 pr-2">
              <p class="card-numeral font-weight-bold text-center mb-0">$3000</p>
            </div>
            
            <div class="col-auto px-0">
              <p class="card-desc w-100 mb-0">Commission</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                33%
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="dash-activities">
      <div class="row mx-0">
        <div class="col px-0">
          <div class="row mx-0 tasks">
            <div class="col-5 pl-0">
              <div class="card border-0 reminders">
                <div class="row mx-0 justify-content-between align-items-center">
                  <div class="col-auto pl-0">
                    <p class="text-uppercase">Reminders</p>
                  </div>
                  <div class="col-auto pr-0">
                    <b-button class="m-0 p-0 rounded-circle"> 
                      <img src="/images/icons/Add_icon.svg" alt="Icon" class="icon" width="26"/> 
                    </b-button>
                  </div>
                </div>

                <ul class="border-top pl-0">
                  <li class="my-2 mx-3 p-2 align-items-center custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input mx-0" id="customControlAutosizing">
                    <label class="custom-control-label mx-0" for="customControlAutosizing">Callback Justine</label>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-7 pr-0">
              <div class="card border-0">
                <div class="row mx-0">
                  <div class="col-6 to-dos">
                    <p class="mb-2">11 June 2019</p>
                    <p>Thursday</p>
                  </div>

                  <div class="col-6 px-0 calendar">
                    <div class="card border-0 mb-0">
                      <select>
                        <option selected>Today</option>
                      </select>
                      <vc-calendar 
                        class="border-0" 
                        :attributes='attrs' 
                        title-position="right" 
                        is-expanded 
                        :popover="true" />
                      <input
                        type="text"
                        placeholder="Event Name"
                        class="rounded-pill border-0 w-100"
                      />
                      <input
                        type="text"
                        placeholder="Location"
                        class="rounded-pill border-0 w-100"
                      />
                      <input
                        type="text"
                        placeholder="Time and Date"
                        class="rounded-pill border-0 w-100"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mx-0">
            <div class="col-6 pl-0">
              <div class="card mt-3 border-0 tab-card"> 
                <div class="card-header tab-card-header border-bottom-0 p-0"> 
                  <ul class="nav nav-tabs card-header-tabs text-center mx-0" id="myTab" role="tablist"> 
                    <li class="nav-item left w-50"> 
                      <a 
                        class="nav-link" 
                        id="one-tab" 
                        data-toggle="tab" 
                        href="#one" 
                        role="tab" 
                        aria-controls="One" 
                        aria-selected="true"
                      > 
                        <img src="/images/icons/dashboard/Cash_vs Sales.svg" alt="Icon" class="icon" width="60"/> 
                        <span class="w-50">Calls vs Sales</span>
                      </a> 
                    </li> 
                    <li class="nav-item w-50"> 
                      <a 
                        class="nav-link" 
                        id="two-tab" 
                        data-toggle="tab" 
                        href="#two" 
                        role="tab" 
                        aria-controls="Two" 
                        aria-selected="false"
                      > 
                        <img src="/images/icons/dashboard/Monthly_Sales.svg" alt="Icon" class="icon" width="60"/> 
                        <span>Monthly Sales</span> 
                      </a> 
                    </li> 
                  </ul> 
                </div> 

                <div class="tab-content" id="myTabContent"> 
                  <div 
                    class="tab-pane fade show active p-3" 
                    id="one" 
                    role="tabpanel" 
                    aria-labelledby="one-tab"
                  > 
                    <div class=""> 
                                  
                    </div>
                  </div>  

                  <div 
                    class="tab-pane fade p-3" 
                    id="two" 
                    role="tabpanel" 
                    aria-labelledby="two-tab"
                  > 
                     
                  </div> 
                </div> 
              </div>
            </div>

            <div class="col-6 pr-0">
              <div class="card mt-3 border-0 tab-card"> 
                <div class="card-header tab-card-header border-bottom-0 p-0"> 
                  <ul class="nav nav-tabs card-header-tabs text-center mx-0" id="myTab" role="tablist"> 
                    <li class="nav-item w-50"> 
                      <a 
                        class="nav-link" 
                        id="three-tab" 
                        data-toggle="tab" 
                        href="#three" 
                        role="tab" 
                        aria-controls="Three" 
                        aria-selected="true"
                      > 
                        <img src="/images/icons/dashboard/Answers_vs_dialing.svg" alt="Icon" class="icon" width="60"/> 
                        <span class="w-50">Answers vs dialing</span>
                      </a> 
                    </li> 
                    <li class="nav-item w-50"> 
                      <a 
                        class="nav-link" 
                        id="four-tab" 
                        data-toggle="tab" 
                        href="#four" 
                        role="tab" 
                        aria-controls="Four" 
                        aria-selected="false"
                      > 
                        <img src="/images/icons/dashboard/Commissions.svg" alt="Icon" class="icon" width="60"/> 
                        <span>Commissions</span> 
                      </a> 
                    </li> 
                  </ul> 
                </div> 

                <div class="tab-content" id="myTabContent"> 
                  <div 
                    class="tab-pane fade show active p-3" 
                    id="three" 
                    role="tabpanel" 
                    aria-labelledby="three-tab"
                  > 
                    <div class=""> 
                                  
                    </div>
                  </div>  

                  <div 
                    class="tab-pane fade p-3" 
                    id="four" 
                    role="tabpanel" 
                    aria-labelledby="four-tab"
                  > 
                     
                  </div> 
                </div> 
              </div>
            </div>
          </div>
        </div>

        <div class="col-2 d-none pr-0 pl-5 agent-details">
          <div class="card w-100 border-0 target">
            <p class="w-100 font-weight-bold text-uppercase text-center heading">You've reached your monthly target</p>
            <p class="w-100 mb-0 font-weight-bold text-center text-white detail">21/20 Sales</p>
          </div>

          <div class="card border-0 w-100">
            <p class="w-100 mb-0 text-capitalize heading">Monthly Target</p>
            <p class="w-100 mb-0 font-weight-bold detail">20 Sales</p>
          </div>

          <div class="card border-0 w-100">
            <p class="w-100 mb-0 text-capitalize heading">Monthly connections</p>
            <p class="w-100 mb-0 font-weight-bold detail">5 000, 000</p>
          </div>

          <div class="card border-0 w-100">
            <p class="w-100 mb-0 text-capitalize heading">Unique users</p>
            <p class="w-100 mb-0 font-weight-bold detail">243, 000 K</p>
          </div>

          <div class="card border-0 w-100">
            <p class="w-100 mb-0 text-capitalize heading">Average idle time</p>
            <p class="w-100 mb-0 font-weight-bold detail">20 Horus</p>
          </div>

          <div class="card border-0 w-100">
            <p class="w-100 mb-0 text-capitalize heading">Commission</p>
            <p class="w-100 mb-0 font-weight-bold detail">$420.23</p>
          </div>

          <div class="card border-0 w-100">
            <p class="w-100 mb-0 text-capitalize heading">Sales</p>
            <p class="w-100 mb-0 font-weight-bold detail">$5, 654</p>
          </div>

          <div class="card border-0 w-100">
            <p class="w-100 mb-0 text-capitalize heading">Calls</p>
            <p class="w-100 mb-0 font-weight-bold detail">213</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    import { Bar } from 'vue-chartjs';
    import { BarChart } from 'vue-morris';
    export default {
        extends: Bar,
        components: { 
            BarChart,
        },
        mounted() {
            console.log('Component mounted');

            this.getDashboard();

            var vm = this;

            Fire.$on('TopMonthFilterChange', function(data){
                vm.getCallLog(data.month);
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
        props: [],
        data: function(){
            return {
                call_log : {
                    total_calls: '',
                    total_sales: '',
                    con_ratio: '',
                    sum_sales: '',
                    call_history: '',
                    sum_call_back: '',
                    avg_time: '',
                },
                Toast: null
            }
        },
        methods: {
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
        }
    }
</script>
