<style scoped>
  #dashboard {
    height: 100vh;
    overflow: auto;
  }
  h1 {
    font-size: 20px;
    font-family: 'Rubik', sans-serif;
    padding-left: 5.2%;
    padding-right: 5.2%;
    margin-top:3.9%;
  }
  #dash-container {
    padding-left: 5.2%;
    padding-right: 5.2%;
    background-color: #F7F7F7;
    margin-top: 3.7%;
  }
  #top-section {
    padding-top:1%;
    margin-bottom: 5.5%;
  }
  select.rounded-pill{
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    font-size: 16px;
    font-family: 'Rubik', sans-serif;
    padding:9px 17px 7px;
    color: #333333;
  }
  .divider-line {
    height: 1px;
    background-color: #003449;
  }
  #top-section .agent-stats {
    margin-top:2.5%;
  }
  #top-section .agent-stats .card{    
    border-radius: 25px;
    padding: 1.3%;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-left: 0.9%;
    margin-right: 0.9%;
  }
  #top-section .agent-stats .card .card-numeral {
    font-size: 30px;
    line-height: 1em;
    letter-spacing: 0.1em;
    color: #333333;
  }
  #top-section .agent-stats .card .card-desc {
    font-size: 18px;
    font-family: 'Rubik', sans-serif;
    line-height: 1em;
    color: #333333;
    margin-top: 4px;
  }
  #top-section .agent-stats .card .card-stat {
    font-size: 21px;
    font-family: 'Rubik', sans-serif;
    line-height: 1em;
    letter-spacing: 0.1em;
    margin-top: 5px;
  }
  .agent-graphs {
    margin-top:3.4%;
  }
  .agent-graphs .card {
    border-radius: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-left: 1.7%;
    margin-right: 1.7%;
  }
  .agent-graphs .tab-content {
    padding-top:12px;
  }
  .agent-graphs .tab-pane {
    padding:5% 8.5%;
  }
  .nav.nav-tabs.card-header-tabs .nav-link {
    color: #808080;
    font-size: 14px;
  }
  .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="true"][aria-controls="One"], .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="true"][aria-controls="Three"]{ 
    box-shadow: 10px -10px 10px #f5f5f5; 
    border-top-left-radius: 25px; 
    border-top-right-radius: 25px; 
  } 
  .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="false"][aria-controls="One"], .nav.nav-tabs.card-header-tabs .nav-link[aria-selected="false"][aria-controls="Three"]{ 
    box-shadow: inset -7px -10px 10px #f5f5f5;
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
    border-top-right-radius: 25px; 
    border-top-left-radius:0; 
  }
  .card .card-header.tab-card-header {
    background-color: #fff;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
  }
  
  .agent-details {
    margin-top: 3.1%;
  }
  .agent-details .container-row .col, .agent-details .container-row .col-3{
    padding-left: 1.3%;
    padding-right: 1.3%;
  }
  .agent-details .top-row .col {
    padding-left: 1.7%;
    padding-right: 1.7%;
  }
  .agent-details .bottom-row{
    margin-top: 4.7%;
  }
  .agent-details .bottom-row .col {
    padding-left: 1.7%;
    padding-right: 1.7%;
  }
  .agent-details .card {
    padding: 5% 7%!important;
    border-radius: 15px!important;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .agent-details .card .heading {
    font-size: 20px;
    font-family: 'Rubik', sans-serif;
    color: #B3B3B3;
    margin-bottom: 8px;
  }
  .agent-details .card .detail {
    font-size: 30px;
    color: #1A1C43;
    line-height: 1em;
  }
  .legend {
    margin-bottom:3.1%;
  }
  .legend p {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    color:#999999;
  }
  .comparison-month {
    color: #1C2331;
    font-size: 13px;
  }
  .progress-bar{
    background: #F2F2F2;
    min-height:100px;
    max-width:24px;
    justify-content: flex-end;
  }
  .tank{
    border-top-left-radius: 50rem;
    border-top-right-radius: 50rem;
    transition: all 0.5s ease 0s;
  }
  .tank.answers {
    background:  linear-gradient(#02D3F4 0%, #0496F0 100%) !important;
    background: #0496F0;
  }
  .tank.dialing {
    background:  linear-gradient(#FFA380 0%, #FF8087 100%) !important;
    background: #0496F0;
  }
  .card.target .card-text{
    margin: auto;
  }
  .card.target.reached {
    background:  linear-gradient(to right, rgba(160,237,128,1) 0%, rgba(98,211,126,1) 100%) !important;
  }
  .card.target.not-reached {
    background:  linear-gradient(to right, rgba(255,163,128,1) 0%, rgba(255,63,61,1) 100%) !important;
  }
  .card.target .heading {
    font-size: 18px;
    color: #fff;
  }
  
  #dash-activities {
    margin-top:5.2%;
    padding-bottom: 65px;
  }
  #dash-activities .card {
    border-radius: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding:2.9% 3.7%;
  }
  #dash-activities .col {
    padding-left: 3.4%;
    padding-right: 3.4%;
  }
  #dash-activities .border-right {
    border-color: #003449;
  }
  #dash-activities h4 {
    font-size: 16px;
    font-family: 'Rubik', sans-serif;
  }
  .calendar .card {
    padding: 6% 5%!important;
  }
  .calendar p {
    font-size: 16px;
    font-family: 'Rubik', sans-serif;
  }
  .calendar .card-title {
    font-family: 'Rubik', sans-serif;
    font-weight: 600;
    font-size: 12px;
  }
  .calendar p {
    font-family: 'Rubik', sans-serif;
    font-size: 10px;
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
  a.Edit{
    background-image: url('/images/DataTables/Edit_Icon.svg');
    background-size: 20px;
    background-repeat: no-repeat;
    width:20px;
    height:20px;
  }
  a.Edit:hover,
  a.Edit:active{
      background-image: url('/images/DataTables/Edit_Icon_Active.svg');
      background-size: 20px;
      background-repeat: no-repeat;
  }
  .callbacks-to-dos {
    max-height: 414px;
    overflow-y: auto;
  }
  .callbacks-to-dos .border-top {
    border-color: #CDCDCF;
  }
  .callbacks-to-dos .task-time {
    font-size: 14px;
    color: #818284;
    padding-right:3.5%;
  }
  .callbacks-to-dos .task-description {
    height:22px;
    font-size: 11px;
    font-weight:500;
    font-family: 'Rubik', sans-serif;
    color: #6B6B6B;
    padding-left:3.5%;
  }
  .active-task {
    background-color:rgba(255,147,58,0.5);
  }
</style>
<template>
  <div id="dashboard">
    <h1><span class="font-weight-bold">Hi Peter</span>, your analytics are all set</h1>
    <div id="dash-container">
      <div id="top-section" class="row mx-0">
        <div class="col-12 px-0">
          <div class="row mx-0 align-items-center">
            <div class="col-auto pl-0">
              <select class="rounded-pill border-0"> 
                <option selected>Filter by date</option> 
              </select>
            </div>

            <div class="col pr-0">
              <div class="divider-line"></div>
            </div>
          </div>
        </div>

        <div class="col-12 px-0 agent-stats">
          <div class="card-deck w-100 mx-0 px-0">
            <div class="card border-0 mb-0 ml-0">
              <p class="card-numeral font-weight-bold text-center mb-0">11</p>
              <p class="card-desc text-center mb-0">Calls made</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                <!-- <img class="d-inline-block" src="/images/icons/dashboard/Down_icon.svg" width="10"> -->
                14%
              </p>
            </div>

            <div class="card border-0 mb-0">
              <p class="card-numeral font-weight-bold text-center mb-0">5</p>
              <p class="card-desc text-center mb-0">Sales Quantity</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                <!-- <img class="d-inline-block" src="/images/icons/dashboard/Down_icon.svg" width="10"> -->
                3%
              </p>
            </div>

            <div class="card border-0 mb-0">
              <p class="card-numeral font-weight-bold text-center mb-0">$365</p>
              <p class="card-desc text-center mb-0">Sales amount</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                <!-- <img class="d-inline-block" src="/images/icons/dashboard/Down_icon.svg" width="10"> -->
                11%
              </p>
            </div>

            <div class="card border-0 mb-0">
              <p class="card-numeral font-weight-bold text-center m-0">45%</p>
              <p class="card-desc text-center mb-0">Conversion Ratio</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                <!-- <img class="d-inline-block" src="/images/icons/dashboard/Down_icon.svg" width="10"> -->
                33%
              </p>
            </div>

            <div class="card border-0 mr-0 mb-0">
              <p class="card-numeral font-weight-bold text-center mb-0">$3000</p>
              <p class="card-desc text-center mb-0">Commission</p>
              <p class="card-stat text-center mb-0">
                <img class="d-inline-block" src="/images/icons/dashboard/Up_icon.svg" width="10">
                <!-- <img class="d-inline-block" src="/images/icons/dashboard/Down_icon.svg" width="10"> -->
                33%
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 px-0 agent-graphs">
          <div class="card-deck mx-0">
            <div class="card my-0 ml-0 border-0 tab-card"> 
              <div class="card-header tab-card-header border-bottom-0 p-0"> 
                <ul class="nav nav-tabs card-header-tabs text-center mx-0" id="myTab" role="tablist"> 
                  <li class="nav-item w-50"> 
                    <a 
                      class="nav-link active py-0" 
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
                      class="nav-link py-0" 
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
                  class="tab-pane fade show active" 
                  id="one" 
                  role="tabpanel" 
                  aria-labelledby="one-tab"
                > 
                  <div class="row mx-0 justify-content-end align-items-center legend"> 
                    <div class="col-auto pl-0">
                      <img class="d-inline-block mr-2" src="images/icons/dashboard/calls.svg" width="17">
                      <p class="d-inline-block mb-0">Calls</p>
                    </div>
                    <div class="col-auto pr-0">
                      <img class="d-inline-block mr-2" src="images/icons/dashboard/sales.svg" width="17">
                      <p class="d-inline-block mb-0">Sales</p>
                    </div>
                  </div>
                </div>  

                <div 
                  class="tab-pane fade" 
                  id="two" 
                  role="tabpanel" 
                  aria-labelledby="two-tab"
                > 
                  
                </div> 
              </div> 
            </div>

            <div class="card my-0 mr-0 border-0 tab-card"> 
              <div class="card-header tab-card-header border-bottom-0 p-0"> 
                <ul class="nav nav-tabs card-header-tabs text-center mx-0" id="myTab" role="tablist"> 
                  <li class="nav-item w-50"> 
                    <a 
                      class="nav-link active py-0" 
                      id="three-tab" 
                      data-toggle="tab" 
                      href="#three" 
                      role="tab" 
                      aria-controls="Three" 
                      aria-selected="true"
                    > 
                      <img src="/images/icons/dashboard/Answers_vs_dialing.svg" alt="Icon" class="icon" width="60"/> 
                      <span class="w-50">Answers vs Dialing</span>
                    </a> 
                  </li> 
                  <li class="nav-item w-50"> 
                    <a 
                      class="nav-link py-0" 
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
                  class="tab-pane fade show active" 
                  id="three" 
                  role="tabpanel" 
                  aria-labelledby="three-tab"
                > 
                  <div class="row mx-0 justify-content-end align-items-center legend"> 
                    <div class="col-auto pl-0">
                      <img class="d-inline-block mr-2" src="images/icons/dashboard/answers.svg" width="17">
                      <p class="d-inline-block mb-0">Answers</p>
                    </div>
                    <div class="col-auto pr-0">
                      <img class="d-inline-block mr-2" src="images/icons/dashboard/dialing.svg" width="17">
                      <p class="d-inline-block mb-0">Dialling</p>
                    </div>
                  </div>

                  <div class="row justify-content-between mx-0">
                    <div class="col-2 px-2" v-for="(comparison, index) in comparisons" :key="index">
                      <div class="row mx-0 justify-content-between">
                        <div class="col-6 px-1">
                          <div class="progress-bar h-100">
                            <span class="w-100 tank answers" :style="{height: + comparison.answers + '%'}"></span>
                          </div>
                        </div>

                        <div class="col-6 px-1">
                          <div class="progress-bar h-100">
                            <span class="w-100 tank dialing" :style="{height: + comparison.answers + '%'}"></span>
                          </div>
                        </div>
                      </div>

                      <p class="text-center mb-0 comparison-month">{{ comparison.month }}</p>
                    </div>
                  </div>
                </div>  

                <div 
                  class="tab-pane fade" 
                  id="four" 
                  role="tabpanel" 
                  aria-labelledby="four-tab"
                > 
                  <div class="row mx-0 justify-content-end align-items-center legend"> 
                    <div class="col-auto pl-0">
                      <img class="d-inline-block mr-2" src="images/icons/dashboard/year-1.svg" width="17">
                      <p class="d-inline-block mb-0">2018</p>
                    </div>
                    <div class="col-auto pr-0">
                      <img class="d-inline-block mr-2" src="images/icons/dashboard/year-2.svg" width="17">
                      <p class="d-inline-block mb-0">2019</p>
                    </div>
                  </div>
                </div> 
              </div> 
            </div>
          </div>
        </div>

        <div class="col-12 px-0 agent-details">
          <div class="row container-row mx-0">
            <div class="col-3 pl-0">
              <div class="card h-100 border-0 target reached">
                <div class="card-text">
                  <p class="w-100 font-weight-bold text-uppercase text-center heading">You've reached your monthly target</p>
                  <p class="w-100 mb-0 font-weight-bold text-center text-white detail">21/20 Sales</p>
                </div>
              </div>
            </div>

            <div class="col pr-0">
              <div class="row mx-0 top-row">
                <div class="col pl-0">
                  <div class="card border-0 mb-0">
                    <p class="w-100 mb-0 text-capitalize heading">Monthly Target</p>
                    <p class="w-100 mb-0 font-weight-bold detail">20 Sales</p>
                  </div>
                </div>

                <div class="col">
                  <div class="card border-0 mb-0">
                    <p class="w-100 mb-0 text-capitalize heading">Monthly connections</p>
                    <p class="w-100 mb-0 font-weight-bold detail">5 000, 000</p>
                  </div>
                </div>

                <div class="col pr-0">
                  <div class="card border-0 mb-0">
                    <p class="w-100 mb-0 text-capitalize heading">Unique users</p>
                    <p class="w-100 mb-0 font-weight-bold detail">243, 000 K</p>
                  </div>
                </div>
              </div>

              <div class="row mx-0 bottom-row">
                <div class="col pl-0">
                  <div class="card border-0 mb-0">
                    <p class="w-100 mb-0 text-capitalize heading">Calls</p>
                    <p class="w-100 mb-0 font-weight-bold detail">213</p>
                  </div>
                </div>
                
                <div class="col">
                  <div class="card border-0 mb-0">
                    <p class="w-100 mb-0 text-capitalize heading">Commission</p>
                    <p class="w-100 mb-0 font-weight-bold detail">$420.23</p>
                  </div>
                </div>

                <div class="col pr-0">
                  <div class="card border-0 mb-0">
                    <p class="w-100 mb-0 text-capitalize heading">Sales</p>
                    <p class="w-100 mb-0 font-weight-bold detail">$5, 654</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="divider-line w-100"></div>

      <div id="dash-activities">
        <div class="card border-0">
          <div class="row mx-0">
            <div class="col border-right pl-0 calendar">
              <h4 class="font-weight-regular">Filter</h4>
              <vc-calendar 
                class="border-0" 
                :attributes='attrs' 
                title-position="right" 
                is-expanded 
                :popover="true" />
              
              <div class="card border-0">
                <div class="card-title">
                  <p class="mb-0">This is a test</p>
                </div>

                <div class="row mx-0 justify-content-between align-items-center">
                  <div class="col-auto pl-0 mb-2">
                    <div class="row mx-0 align-items-center">
                      <p class="d-inline-block mr-2 mb-0">23 Jul</p> 
                      <a class="d-inline-block Edit" href="#" @click="showEdit()" title="Edit"></a>
                    </div>
                  </div>

                  <div class="col-auto pr-0">
                    <p>9:10 to 10:00</p>
                  </div>
                </div>

                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>

            <div class="col border-right to-dos">
              <h4 class="mb-2 font-weight-regular">Callbacks</h4>
              <h4 class="font-weight-regular">Thursday 11/06</h4>

              <div class="callbacks-to-dos">
                <table class="w-100">
                  <div v-for="(task, index) in tasks" :key="index">
                    <tr class="border-top">
                      <td rowspan="2" width="13.609%" class="task-time">{{ task.time }}</td>
                      <td class="task-description" :class="task.description != null ? 'active-task' : ''">{{ task.description }}</td>
                    </tr>

                    <tr class="w-100">
                      <td class="task-description" :class="task.description != null ? 'active-task' : ''">{{ task.description }}</td>
                    </tr>
                  </div>
                </table>
              </div>
            </div>

            <div class="col pr-0 reminders">
              <div class="row mx-0 justify-content-between align-items-center"> 
                <div class="col-auto pl-0"> 
                  <h4 class="text-uppercase font-weight-regular mb-0">Reminders</h4> 
                </div> 
                <div class="col-auto pr-0"> 
                  <b-button class="m-0 p-0 rounded-circle border-0">  
                    <img src="/images/icons/Add_icon.svg" alt="Icon" class="icon" width="26"/>  
                  </b-button> 
                </div> 
              </div> 
              <h4 class="font-weight-regular">Thursday 11/06</h4>

              <ul class="border-top pl-0"> 
                <li class="my-2 mx-3 p-2 align-items-center custom-control custom-checkbox"> 
                  <input type="checkbox" class="custom-control-input mx-0" id="customControlAutosizing"> 
                  <label class="custom-control-label mx-0" for="customControlAutosizing">Callback Justine</label> 
                </li> 
              </ul>
            </div>
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
        Toast: null,
        comparisons: [
          { month: "May", answers: 65, dialing: 65 },
          { month: "Jun", answers: 35, dialing: 65 },
          { month: "Jul", answers: 95, dialing: 65 },
          { month: "Aug", answers: 25, dialing: 65 },
          { month: "Sept", answers: 5, dialing: 65 },
          { month: "Oct", answers: 15, dialing: 65 },
        ],
        tasks: [
          { time: '00:00', task: null},
          { time: '01:00', task: null},
          { time: '02:00', task: null},
          { time: '03:00', task: null},
          { time: '04:00', task: null},
          { time: '05:00', task: null},
          { time: '06:00', task: null},
          { time: '07:00', task: null},
          { time: '08:00', task: 'This is a task'},
          { time: '09:00', task: null},
          { time: '10:00', task: null},
          { time: '11:00', task: null},
          { time: '12:00', task: null},
          { time: '13:00', task: null},
          { time: '14:00', task: null},
          { time: '15:00', task: null},
          { time: '16:00', task: null},
          { time: '17:00', task: null},
          { time: '18:00', task: null},
          { time: '19:00', task: null},
          { time: '20:00', task: null},
          { time: '21:00', task: null},
          { time: '22:00', task: null},
          { time: '23:00', task: null},
        ]
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
