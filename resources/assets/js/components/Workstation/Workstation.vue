<style scoped>
    .row{
       margin-bottom: 3%; 
    }
    .top-section{
        list-style-type: none;
        padding-left: 15px;
    }
    .top-section li{    
        float: left;
        margin-right: 52px;
        padding: 0 5px;
        border-left: 1px solid #e3e3e3;
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
    .card-title {
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #fff;
    }
    .client{
        background: linear-gradient(to right, rgba(255,164,128,1) 0%, rgba(255,128,134,1) 100% ) ;
    }
    .product{
        background: linear-gradient(to right, rgba(159,204,226,1) 0%, rgba(4,149,240,1) 100% ) ;
    }
    .time{
        background: linear-gradient(to right, rgba(221,192,241,1) 0%, rgba(160,117, 209,1) 100% ) ;
    }
    .activity{
        background: linear-gradient(to right, rgba(101,215,207,1) 0%, rgba(111,148, 211,1) 100% ) ;
    }
    h5{
        color: #fff;
    }
    h5 .icon{
        width: 15px;
        margin: -5px 15px 0 0;
    }
    p.card-text{
        font-size: 30px;
        color: #fff;
        font-weight: bolder;
    }
    p.card-link{
        font-size: 22px;
        color: #fff;
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
</style>
<template>
    <div class="">
        <div class="row" style="margin-top:3%;" v-if="call_active == true">
            <ul class="top-section">
                <li>
                    <p class="top">Lead Source</p>
                    <p class="bottom">{{ lead_info.source }}</p>
                </li>
                <li>
                    <p class="top">Called</p>
                    <p class="bottom">{{ call_counts.call_count }}</p>
                </li>
                <li>
                    <p class="top">Answers</p>
                    <p class="bottom">{{ call_counts.call_count }}</p>
                </li>
                <li>
                    <p class="top">Sales</p>
                    <p class="bottom">{{ call_counts.call_count_sales }}</p>
                </li>
            </ul>
        </div>
        <div class="row" v-if="call_active == false">
          <div class="col-lg-3">
            <div class="card client">
              <div class="card-body">
                <h5 class="card-title">
                    <img src="/images/workstation/D_A@4x.png" alt="Icon" class="icon" />
                    Client
                </h5>

                <p class="card-text truncate" :title="lead.name + ' ' + lead.surname">
                  {{ this.lead_info.name + ' ' + lead_info.surname }}
                </p>

                <p class="card-link truncate">{{ lead_info.country }} | {{ lead_info.gender }} | {{ lead_info.age }}</p> 
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card product">
              <div class="card-body">
                <h5 class="card-title">
                    <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" />
                    Product
                </h5>

                <p class="card-text" :title="product.description + '. ' + product.price ">
                  {{ product.name }}
                </p>

                <p class="card-link truncate" :title="product.description + '. ' + product.price ">
                    {{ product.description }}
                </p> 
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card time">
              <div class="card-body">
                <h5 class="card-title">
                    <img src="/images/workstation/Time_Icon@4x.png" alt="Icon" class="icon" />
                    Time
                </h5>

                <p class="card-text">
                  11:20 AM
                </p>

                <p class="card-link truncate">{{ lead_info.city }} | {{ lead_info.country }}</p> 
              </div>
            </div>
          </div>
          <div class="col-lg-3" >
            <div class="card activity">
              <div class="card-body">
                <h5 class="card-title">
                    <img src="/images/workstation/S_A@4x.png" alt="Icon" class="icon" />
                    Activity
                </h5>

                <p class="card-text">
                  Off-line
                </p>

                <p class="card-link">Online 2 Days ago</p> 
              </div>
            </div>
          </div>
        </div>
        <div class="row stats">
            <div class="col-lg-6" >
                <div class="card left" style="">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Agent_Notes_Icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Agent Notes</span>
                            <span class="right">{{ comments.total_comments }} Comment(s)</span>
                        </h5>

                        <div class="notes-roll">
                            <ul class="list-group" style="height:345px; width:100%;overflow:hidden; overflow-y:scroll;">
                                <li v-for="comment in comments.comments" class="list-group-item">
                                    <p>
                                        <strong>{{ comment.comment_type }}</strong> 
                                        {{ comment.description }} 
                                        <span style="float:right;margin-top: 11px;">
                                            {{ getDaysAgo(comment.created_at) }} <br/>
                                            <small>Yongama Sobambela</small>
                                        </span>
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="notes-capture">
                            <b-button v-b-modal.modal-1 class="choose-comment-type">
                                <img src="/images/workstation/Asset 28@4x.png" alt="Icon" class="icon" style="width: 27px;"/>
                            </b-button>
                            <input class="comment-desc" type="text" v-model="comment.comment_description" placeholder="Write comment here" />

                            <button id="send-btn" type="submit" class="btn btn-primary" style="width:75px;" @click="addComment()">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="card right" style="height: 502px;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Feedback_Icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Feedback Summary</span>
                            <span class="right">{{ comments.total_comments }} Comment(s)</span>
                        </h5>

                        <div id="chartjs-size-monitor" class="notes-graph" style="display: block; heigh: 150px;">
                             <bars
                                :data="notes_data"
                                :gradient="['#6fa8dc', '#42b983']"
                                :barWidth="50"
                                :growDuration="1"
                                :rounding="0"
                                :height="415"
                                >
                              </bars>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:3%;" v-if="call_active == false">
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
    import NotesStats from './NotesStats.vue';
    export default {
        extends: Bar,
        components: { 
            BarChart,
            'notes-stats' : NotesStats 
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
                call_active: true,
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
                        vm.getComments();
                        vm.$swal('Success', response.data.message,'success');
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            },
            getComments(){
                var vm = this;

                if(vm.comment.comment_type == ''){
                    vm.$swal('Please note','Please choose your comment type to process','warning');
                    return false;
                }

                var payload = {
                    method : 'GET',
                    end_point : 'comments/get/lead/' + this.lead_info.id,
                }
                
                axios.post('/api-request', payload).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.comments.comments = response.data.comments
                        vm.comments.comments_graph = response.data.comments_graph;
                        vm.comment.comment_description = '';
                        vm.comment.comment_type = '';
                    }else{
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
