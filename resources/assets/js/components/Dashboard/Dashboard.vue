<style scoped>
    .row{
       margin-bottom: 3%; 
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
        font-size: 49px;
        color: #333333;
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
        margin-left: -53px;
        margin-right: -66px;
        padding: 63px 68px;
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
</style>
<template>
    <div class="">
        <div id="top-section" class="row"  style="margin-top:3%;">
          <div class="col-lg-2">
            <div class="card client">
              <div class="card-body">

                <p class="card-text">
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
          <div class="col-lg-2">
            <div class="card client">
              <div class="card-body">

                <p class="card-text">
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
          <div class="col-lg-2">
            <div class="card client">
              <div class="card-body">

                <p class="card-text">
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
          <div class="col-lg-2">
            <div class="card client">
              <div class="card-body">

                <p class="card-text">
                  45% 
                </p>

                <p class="card-text-small">
                      Conversition Ratio
                </p>

                <p class="card-link down">
                    <!-- <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" /> -->
                    33%
                </p> 
              </div>
            </div>
          </div>

          <div class="col-lg-4"  style="text-align: center;padding-top: 26px;">
            <h1 class="card-text" style="color: #fff;font-size: 80px;">
                  11 / 10
            </h1>

            <p class="card-text-small" style="color: #fff;font-size: 22px;">
                  Missed Target
            </p>

          </div>
        </div>
        <div class="row stats">
            <div class="col-lg-6" >
                <div class="card left" style="text-align: left;">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: left;">
                            <img src="/images/icons/Feedback summary icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Feedback Summary</span>
                            <span class="right">23 Review(s)</span>
                        </h5>

                        <div class="notes-roll" style="height:345px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="row" style="margin-bottom: 5%;">
                    <div class="col-lg-12">
                        <div class="card right">
                            <div class="card-body">
                                <ul class="top-section">
                                    <li>
                                        <p class="top" style="font-size: 12px;color: #9fb3bb;">Active</p>
                                        <p class="bottom">22 hours</p>
                                    </li>
                                    <li>
                                        <p class="top" style="font-size: 12px;color: #9fb3bb;">Idle</p>
                                        <p class="bottom">2 Hours</p>
                                    </li>
                                    <li style="border-right:none;padding-right: 0;">
                                        <p class="top" style="font-size: 12px;color: #9fb3bb;">Offline</p>
                                        <p class="bottom">1 Hour</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5%;">
                    <div class="col-lg-12">
                        <div class="card right">
                            <div class="card-body">
                                <ul class="top-section">
                                    <li>
                                        <p class="top" style="font-size: 12px;color: #9fb3bb;">Leads</p>
                                        <p class="bottom">123</p>
                                    </li>
                                    <li>
                                        <p class="top" style="font-size: 12px;color: #9fb3bb;">Dialed</p>
                                        <p class="bottom">70</p>
                                    </li>
                                    <li style="border-right:none;padding-right: 0;">
                                        <p class="top" style="font-size: 12px;color: #9fb3bb;">Answered</p>
                                        <p class="bottom">67</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5%;">
                    <div class="col-lg-12">
                        <div class="card right">
                            <div class="card-body">

                                <div class="badge badge-1">
                                    <img src="/images/icons/Colonel@4x.png" alt="Badge">
                                </div>

                                <div class="badge badge-2">
                                    <img src="/images/icons/Corporal@4x.png" alt="Badge">
                                </div>

                                <div class="badge badge-2">
                                    <img src="/images/icons/Captain@4x.png" alt="Badge">
                                </div>

                                <div class="badge badge-2">
                                    <img src="/images/icons/Captain@4x.png" alt="Badge">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <b-modal id="modal-1" title="Please Choose Comment Type">
                <b-form-group label="Comment Types">
                <b-form-radio v-model="comment.comment_type" name="some-radios" value="A">Answered</b-form-radio>
                <b-form-radio v-model="comment.comment_type" name="some-radios" value="NA">No Answer</b-form-radio>
                <b-form-radio v-model="comment.comment_type" name="some-radios" value="LB">Language Barrier</b-form-radio>
                <b-form-radio v-model="comment.comment_type" name="some-radios" value="VM">Voice Mail</b-form-radio>
                <b-form-radio v-model="comment.comment_type" name="some-radios" value="NI">Not Interested</b-form-radio>
                </b-form-group>
            </b-modal>
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
            this.enqueueLead();
            
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
                lead : {},
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
            enqueueLead(){
                var vm = this;

                var payload = {
                    method : 'GET',
                    end_point : 'leads/enqueue'
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
