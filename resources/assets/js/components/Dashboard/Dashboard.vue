<style scoped>
    .row{
       margin-bottom: 3%; 
    }
    .top-section{
        list-style: none;
    }
    .top-section .col-4{    
        font-family: 'Rubik', sans-serif;
        float: left;
        border-right: 1px solid #e3e3e3;
    }
    .col-4 p.bottom{
        font-size: 19px;
        font-weight: 900;
        font-family: 'Montserrat', sans-serif;
    }
    .card{
        border-radius: 27px;
    }
    .card-title {
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #fff;
    }
    .client{
    }
    .product{
    }
    .time{
    }
    .activity{
    }
    h5{
        color: #fff;
    }
    h5 .icon{
        width: 15px;
        margin: -5px 15px 0 0;
    }
    p.card-text{
        font-size: 40px;
        color: #333333;
        font-weight: bolder;
        line-height: 1em;
        margin-bottom: 10px!important;
    }
    @media screen and (min-width: 1389px) and (max-width:1596px) {
        p.card-text {
            font-size: 30px;
        }
    }
    @media screen and (max-width: 1388px) {
        p.card-text {
            font-size: 20px;
        }
    }
    p.card-text span{
        font-size: 19px;
        color: #333333;
        font-weight: bolder;
    }
    p.card-link{
        font-size: 12px;
        color: #333333;
        font-family: 'Rubik', sans-serif;
    }
    .stats .card{
        border-radius: 20px;
    }

    .stats .card h5{
        color: #818284;
    }
    .stats .card h5 .icon{
        width: 25px;
        margin: -5px 15px 0 0;
    }
    .stats .card .card-title {
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #bfccd2;
    }
    span.right{
        float: right;
    }
    .truncate {
        width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
 
    .list-group-item p{
        margin: 0;
    }
    .list-group-item p strong{
        font-size: 25px;
        margin-right: 30px;
    }
    .choose-comment-type{
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

    .comment-desc{
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
    #send-btn{
        height: 50px;
        margin: 10px 0px 10px 0;
    }
    .btn-secondary {
        color: #fff;
        background-color: #f6f8f9;
        border-color: #f6f8f9;
    }
    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #f6f8f9;
        border-color: #f6f8f9;
    }
    #chartjs-size-monitor #bar-chart{
        height: 318px !important;
    }

    #top-section{
        background: #7fd0ac; 
        margin-top:2%;   
        margin-left: -53px;
        margin-right: -66px;
        padding: 55px 3% 45px;
    }
    
    .green{
        color:#00a25a !important;
    }
    .red{
        color:red !important;
    }
    .card-text-small{
        color: #8d999f;
        font-size: 13px;
        font-family: 'Rubik', sans-serif;
        margin-bottom: 25px;
        word-break: keep-all;
    }
    .call-stats h1 {
        padding-top: 35px;
        color: #fff;
        font-size: 65px;
        font-weight: 900;
    }
    @media screen and (min-width: 1496px) and (max-width:1675px) {
        .call-stats h1 {
            font-size: 55px;
        }
    }
    @media screen and (min-width: 1317px) and (max-width:1495px) {
        .call-stats h1 {
            font-size: 45px;
        }
        .call-stats p {
            font-size: 15px;
        }
    }
    @media screen and (max-width:1316px) {
        .call-stats h1 {
            font-size: 35px;
        }
    }
    .call-stats p{
        color: #fff;
        font-size: 20px;
        font-family: 'Rubik', sans-serif;
        letter-spacing: 1px;
        word-break: keep-all;
    }
    .badges .col-sm-3{
        border-right: 1px solid #e6e6e7;
    }
    .badges .col-sm-3:last-child {
        border-right: 0;
    }
    .description{
        font-size: 10px;
        font-family: 'Rubik', sans-serif;
        letter-spacing: 1px;
        color: #7f99a4;
    }
    .row.stats {
        padding-left: 3%;
        padding-right: 3%;
    }
    .notes-roll {
        height:345px;
    }
    .stats .margin-4 {
        margin-bottom: 4%;
    }
    .card .card-body .row .col-4 .top {
        font-size: 12px;
        color: #9fb3bb;
    }
    .margin-5 {
        margin-bottom: 5%;
    }
</style>
<template>
    <div class="">
        <div id="top-section" class="row mx-0">
          <div class="col-lg-2 px-2">
            <div class="card border-0 client">
              <div class="card-body text-center">

                <p class="card-text m-0">
                  11 
                </p>

                <p class="card-text-small">
                      Calls made
                </p>

                <p class="card-link green">
                    <!-- <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" /> -->
                    14%
                </p> 
              </div>
            </div>
          </div>
          <div class="col-lg-2 px-2">
            <div class="card border-0 client">
              <div class="card-body text-center">

                <p class="card-text m-0">
                  5 
                </p>

                <p class="card-text-small">
                      Sales Quantity
                </p>

                <p class="card-link green">
                    <!-- <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" /> -->
                    3%
                </p> 
              </div>
            </div>
          </div>
          <div class="col-lg-2 px-2">
            <div class="card border-0 client">
              <div class="card-body text-center">

                <p class="card-text m-0">
                  $365 
                </p>

                <p class="card-text-small">
                      Sales amount
                </p>

                <p class="card-link green">
                    <!-- <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" /> -->
                    11%
                </p> 
              </div>
            </div>
          </div>
          <div class="col-lg-2 px-2">
            <div class="card border-0 client">
              <div class="card-body text-center">

                <p class="card-text m-0">
                  45% 
                </p>

                <p class="card-text-small">
                      Conversion Ratio
                </p>

                <p class="card-link down">
                    <!-- <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" /> -->
                    33%
                </p> 
              </div>
            </div>
          </div>

          <div class="col-lg-2 px-2">
            <div class="card border-0 client">
              <div class="card-body text-center">

                <p class="card-text m-0">
                  $3000 
                </p>

                <p class="card-text-small">
                    Commission
                </p>

                <p class="card-link down">
                    <!-- <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" /> -->
                    33%
                </p> 
              </div>
            </div>
          </div>
          <div class="col-lg-2 text-center px-2 call-stats">
            <h1 class="card-text mb-0">
                  11 / 10
            </h1>

            <p class="card-text-small">
                  Missed Target
            </p>

          </div>
        </div>
        <div class="row stats mx-0">
            <div class="col-lg-6" >
                <div class="card left text-left border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title text-left">
                            <img src="/images/icons/Feedback summary icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Feedback Summary</span>
                            <span class="right">23 Review(s)</span>
                        </h5>

                        <div class="notes-roll">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="row margin-4">
                    <div class="col-lg-12">
                        <div class="card right border-0">
                            <div class="card-body text-center">
                                <div class="row justfy-content-between align-items-center top-section">
                                    <div class="col-4">
                                        <p class="top">Active</p>
                                        <p class="bottom mb-0">22 hours</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="top">Idle</p>
                                        <p class="bottom mb-0">2 Hours</p>
                                    </div>
                                    <div class="col-4 border-right-0 pr-0">
                                        <p class="top">Offline</p>
                                        <p class="bottom mb-0">1 Hour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-4">
                    <div class="col-lg-12">
                        <div class="card right border-0">
                            <div class="card-body text-center">
                                <div class="row justfy-content-between align-items-center top-section">
                                    <div class="col-4">
                                        <p class="top">Leads</p>
                                        <p class="bottom mb-0">123</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="top">Dialed</p>
                                        <p class="bottom mb-0">70</p>
                                   </div>
                                    <div class="col-4 border-right-0 pr-0">
                                        <p class="top">Answered</p>
                                        <p class="bottom mb-0">67</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-5">
                    <div class="col-lg-12">
                        <div class="card right border-0">
                            <div class="card-body text-center row justify-content-between align-items-end badges">

                                <div class="col-sm-3 badge-1 px-4">
                                    <img src="/images/icons/Colonel@4x.png" alt="Badge" class="w-100">
                                    <p class="description text-center">Colonel</p>
                                </div>

                                <div class="col-sm-3 badge-2 px-4">
                                    <img src="/images/icons/Corporal@4x.png" alt="Badge" class="w-100">
                                    <p class="description text-center">Corporal</p>
                                </div>

                                <div class="col-sm-3 badge-2 px-4">
                                    <img src="/images/icons/Captain@4x.png" alt="Badge" class="w-100">
                                    <p class="description text-center">Corporal</p>
                                </div>

                                <div class="col-sm-3 badge-2 px-4">
                                    <img src="/images/icons/Captain@4x.png" alt="Badge" class="w-100">
                                    <p class="description text-center">Corporal</p>
                                </div>
                            </div>
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
