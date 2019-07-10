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
    .card-body p{
        color: #fff;
    }
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
    p.card-text{
        font-size: 49px;
        color: #fff;
        font-weight: bolder;
        margin: 0;
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
        float:left;
        font-weight: 700;
        color:#9fb3bb;
        padding: 0 141px 0 0;
    }
    ul.items{
        list-style: none;
        padding-left: 40px;
    }
    ul.items li {
        float:left;
        font-weight: 700;
        color:#003449;
        padding: 0 127px 0 0;
    }
    ul.items li a:hover{
        text-decoration: none;
    }
    .form-control{
        width: 30px;
        margin-top: -8px;
    }
</style>
<template>
    <div class="">
        <div id="top-section" class="row" style="margin-top:3%;">
          <div class="col-lg-2">
            <div class="card calls">
              <div class="card-body">


                <p class="card-text-small" style="text-align:left">
                      Calls
                </p>

                <p class="card-text">
                  210 
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
                  11 
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
                  $110
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
                  3
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
                  22m 
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
                  5
                </p>

              </div>
            </div>
          </div>
        </div>
        <hr style="margin-bottom: 3%;">

        <div class="row stats" >
            <div class="col-lg-12" >
                <ul class="headings">
                    <li>NAME</li>
                    <li>COUNTRY</li>
                    <li>SOURCE</li>
                    <li>CALLED</li>
                    <li>TALKED</li>
                    <li>DATE</li>
                    <li style="padding-right:0;">CALL BACK</li>
                </ul>
            </div>
        </div>

        <div class="row stats" >
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" checked disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" checked disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" checked disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body" style="padding-bottom: 18px;">
                        <ul class="items">
                            <li><a href=""> Piet Andrews</a></li>
                            <li>South Africa</li>
                            <li>Digital Payday</li>
                            <li>12</li>
                            <li>32m22s</li>
                            <li>2019-06-25</li>
                            <li style="padding-right:0;">
                                <input type="checkbox" class="form-control" disabled> 
                            </li>
                        </ul>
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
            this.getCallLog();
            
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
                call_log : {},
                lead_info : {},
                call_counts : {},
                product : {},
                comments : {},
                comments_graph : {},
                notes_data: [],
                chart_options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                },
                comment:{
                    comment_description :'',
                    comment_type :''
                },
                Toast: null
            }
        },
        methods: {
            getCallLog(){
                var vm = this;

                var payload = {
                    method : 'GET',
                    end_point : '/get-call-history/{agent_id}/{month}'
                }

                vm.$Progress.start();

                axios.post('/api-request', payload).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.lead = response.data;
                        vm.lead_info = response.data.lead;
                        vm.call_counts = response.data.call_counts;
                        vm.product = response.data.product;
                        vm.comments = response.data.comments;
                        vm.comments_graph = response.data.comments.comments_graph;
                        
                        if(vm.comments_graph.length > 0){ 
                            for (var i = 0; i < vm.comments_graph.type.length; i++) {
                                console.log(vm.comments_graph.type[i]);
                                vm.notes_data.push({ 'title' : vm.comments_graph.type[i], 'value': 84 });
                            }
                        }

                        vm.comment.comment_description = '';
                        vm.comment.comment_type = '';
                        vm.$Progress.finish();
                        Fire.$emit('AfterLeadEnqueue', {'lead_id' : vm.lead_info.id, 'contact_number' : vm.lead_info.phone_number });
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            },
            addComment(){
                var vm = this;

                if(vm.comment.comment_type == ''){
                    vm.$swal('Please note','Please choose your comment type to process','warning');
                    return false;
                }

                var payload = {
                    method : 'POST',
                    end_point : 'comments/add',
                    form_data : {
                        id : this.lead_info.id,
                        type: 'lead',
                        comment_type: this.comment.comment_type,
                        description: this.comment.comment_description
                    }
                }
                vm.$Progress.start();
                axios.post('/api-request', payload).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.enqueueLead();
                        vm.$swal('Success', response.data.message,'success');
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            },
            getDaysAgo(second_date){
                var date_string = '';
                var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
                var firstDate = new Date();
                var secondDate = new Date(second_date);

                var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));

                if(diffDays <= 1){
                    date_string = 'Today';
                }else if(diffDays < 7){
                    date_string = diffDays + ' Days ago';
                }else if(diffDays == 7){
                    date_string = '1 Week ago';
                }else if(diffDays >= 30){
                    date_string = second_date;
                }
                return date_string;
            }
        }
    }
</script>
