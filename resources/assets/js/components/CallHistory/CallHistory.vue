<style scoped>
    .row{
       margin-bottom: 1%; 
    }
    .top-section{
        list-style: none;
    }
    .top-section li{    
        float: left;
        margin-right: 52px;
        padding: 6px 83px 3px 15px;
        border-right: 1px solid #e3e3e3;
    }
    li p.bottom{
        margin-bottom: 0;
        font-size: 19px;
        font-weight: 900;
    }
    .card{
        border-radius: 27px;
        border: none;
    }
    .card-body{
        text-align: center;
    }
    .ca
    .card-title {
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #fff;
    }
    .calls{
        background: linear-gradient(to right, rgba(255,164,128,1) 0%, rgba(255,128,134,1) 100% ) ;
        color: #fff;
    }
    .sales{
        background: linear-gradient(to right, rgba(159,204,226,1) 0%, rgba(4,149, 240,1) 100% ) ;
        color: #fff;
    }
    .sales-amount{
        background: linear-gradient(to right, rgba(221,192,241,1) 0%, rgba(160,117, 209,1) 100% ) ;
        color: #fff;
    }
    .call-backs{
        background: linear-gradient(to right, rgba(101,215,207,1) 0%, rgba(111,148, 211,1) 100% ) ;
        color: #fff;
    }
    .ave-time{
        background: linear-gradient(to right, rgba(226,111,145,1) 0%, rgba(239,84,128,1) 100% ) ;
        color: #fff;
    }
    .con-ratio{
        background: linear-gradient(to right, rgba(97,167,221,1) 0%, rgba(99,101,202 ,1) 100% ) ;
        color: #fff;
    }
    h5{
        color: #fff;
    }
    h5 .icon{
        width: 15px;
        margin: -5px 15px 0 0;
    }

    .card-body p{
        color: #fff;
        width: 100%;
        margin-right: 0;
        text-align: right;
        float: left;
        margin-bottom: 0;
    }
    p.card-text{
        font-size: 16px;
        color: #fff;
        font-weight: bolder;
        margin: 0;
        width: 100%;
        float: right;
    }
    p.card-text span{
        font-size: 19px;
        color: #333333;
        font-weight: bolder;
    }
    p.card-link{
        font-size: 22px;
        color: #333333;
    }
    .stats .card{
        border-radius: 10px;
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
        background: #fff;    
        margin-left: -53px;
        margin-right: -66px;
        padding: 0px 37px;

    }
    .green{
        color:#00a25a !important;
    }
    .red{
        color:red !important;
    }.card-text-small{
        margin-top: -7px;
        color: #3b3b3b;
    }
    .badge{
        width: 12%;
    }
    .badge img{
        width: 100%;
    }
    ul.headings{
        list-style: none;
        padding-left: 70px;
    }
    ul.headings li {
        float: left;
        font-weight: 700;
        color: #9fb3bb;
        /* padding: 0 104px 0 0; */
        width: 14%;
        text-align: left;
    }
    ul.items{
        list-style: none;
        padding-left: 40px;
    }
    ul.items li {
        float:left;
        font-weight: 700;
        color:#003449;    
        width: 14%;
        text-align: left;

    }
    ul.items li a:hover{
        text-decoration: none;
    }
    .form-control{
        width: 30px;
        margin-top: -8px;
    }
    .scroll-hidden{
        overflow-y: scroll;
        height: 70vh;
        padding-top: 6px;
        padding-right: 6px;
        width: 104%;
    }
    table.listing{
        width: 100%;
    }
    table.listing tr  th{ 
        float: left;
        font-weight: 700;
        color: #9fb3bb;
        padding: 0 69px 20px 70px;
    }
    
</style>
<template>
    <div class="">
        <div id="top-section" class="row" style="margin-top:2%;">
          <div class="col-lg-2">
            <div class="card calls">
              <div class="card-body">


                <p class="card-text-small" style="text-align:left">
                      Calls
                </p>

                <p class="card-text">
                  {{ call_log.total_calls }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card sales">
              <div class="card-body">


                <p class="card-text-small" style="text-align:left">
                      Sales
                </p>

                <p class="card-text">
                  {{ call_log.total_sales }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card sales-amount">
              <div class="card-body">


                <p class="card-text-small" style="text-align:left">
                      Sales Amount
                </p>

                <p class="card-text">
                  ${{ call_log.sum_sales }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card call-backs">
              <div class="card-body">


                <p class="card-text-small" style="text-align:left">
                      Callbacks
                </p>

                <p class="card-text">
                  {{ call_log.sum_call_back }}
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card ave-time">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                      Ave. Time
                </p>

                <p class="card-text">
                  {{ secondsToMinues(call_log.avg_time) }} 
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="card con-ratio">
              <div class="card-body">

                <p class="card-text-small" style="text-align:left">
                      Conversion Ratio
                </p>

                <p class="card-text">
                  {{ call_log.con_ratio }} 
                </p>

              </div>
            </div>
          </div>
        </div>
        <hr style="margin-bottom: 2%;">
        <div class="row stats">
            <div class="col-lg-12">
                <div class="left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="headings">
                            <li>NAME</li>
                            <li>COUNTRY</li>
                            <li>SOURCE</li>
                            <li>CALLED</li>
                            <li>TALKED</li>
                            <li>DATE</li>
                            <li>CALL BACK</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div :class="{ 'row stats': true, 'scroll-hidden' : call_log.call_history.length > 8 }" v-if="call_log.call_history.length > 0">
            <div class="col-lg-12" v-for="(item,index) in call_log.call_history" :key="index">
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 12px;">
                        <ul class="items">
                            <li><a href="#">{{ item.lead_name }}</a></li>
                            <li class="truncate" v-b-tooltip.hover :title="item.lead_country">{{ item.lead_country }}</li>
                            <li style="padding-left: 17px;" >{{ item.lead.source }}</li>
                            <li style="padding-left: 30px;" >1</li>
                            <li style="padding-left: 32px;" >{{ secondsToMinues(item.call_duration) }}</li>
                            <li style="padding-left: 11px;" >{{ item.call_date_created }}</li>
                            <li style="padding-left: 22px;">
                                <input v-if="item.has_call_back == 1" type="checkbox" class="form-control" checked disabled> 
                                <input v-else type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row stats"  v-else>
            <div class="card left" style="width: 100%;">
                <div class="card-body" style="padding-bottom: 12px;">
                    <ul class="items">
                        <li colspan="7" style="text-align:center;width: 100%;">Your call history is empty</li>
                    </ul>
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

            this.getCallLog();

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
            secondsToMinues(time){
                var minutes = Math.floor(time / 60);
                var seconds = time - minutes * 60;
                var finalTime = this.str_pad_left(minutes,'0',2) + ':' + this.str_pad_left(seconds,'0',2);
                return finalTime;
            },
            str_pad_left(string,pad,length) {
                    return (new Array(length+1).join(pad)+string).slice(-length);
            },
            getCallLog(month = ''){
                var vm = this;

                if(month == ''){
                    var endpoint = '/calls/get-call-history';
                }else{
                    var endpoint = '/calls/get-call-history/' + month;
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
