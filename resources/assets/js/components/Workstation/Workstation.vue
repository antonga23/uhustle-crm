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
  
    .list-group-item{
        margin: 0;
        padding: 0 1.25rem !important;
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
    .call-progress-div{
        margin-top: 0;
        margin-left: -54px;
        margin-right: -65px;
        padding: 6%;
    	background-image: url('/images/call/Call_Background.svg') !important;
    	background-size: 100%;
    	background-repeat: no-repeat;
    }
    .call-progress-div .top-animation{
        padding: 10px;
    	background-image: url('/images/call/Call_Logo.svg') !important;
    	background-size: 100%;
    	background-repeat: no-repeat;
        height: 370px;
    }
    .tip{
        margin-bottom: 40px;
        background-size: 20%;
        background-repeat: no-repeat;
        background-position: center 1px;
        margin-bottom: 40px;
        padding-top: 30px;
    }
    .tip p.step{
        border-bottom: 1px solid #fff;
        margin-bottom: 10px;    
        color: #fff;
        margin: 0;
        letter-spacing: 3px;
    }
    .tip p.tip-text{
        margin-bottom: 20px;    
    }
    .tip h1{
        color: #fff;
        letter-spacing: 6px;
        margin-top: 19px;
    }
    .tip p.tip-text{
        margin-bottom: 10px;    
        color: #fff;
        margin: 0;
        letter-spacing: 3px;
    }
    .tip-a{
    	background-image: url('/images/call/1@4x.png') !important;
        background-size: 12% !important;
    }
    .tip-b{
    	background-image: url('/images/call/2@4x.png') !important;
    }
    .tip-c{
    	background-image: url('/images/call/3@4x.png') !important;
    }
    .tip-d{
    	background-image: url('/images/call/4@4x.png') !important;
    }
    .tip-e{
    	background-image: url('/images/call/5@4x.png') !important;
    }
    .tip-f{
    	background-image: url('/images/call/6@4x.png') !important;
    }

.verticalChart {
  width: 100%;
  background-image: url('/images/graph_grid.png') !important;
  background-repeat: repeat-x;
    padding-top: 36px;

}
.verticalChart .singleBar {
    width: 14%;
    float: left;
    margin-left: 6.5%;
    margin-right: 1.5%;

}
.verticalChart .singleBar .bar {
  position: relative;
  height: 220px;
  background: rgba(255, 255, 255, 0.2);
  overflow: hidden;
}
.verticalChart .singleBar .bar .value {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: #89cff0;
  color: #003449;
}
.verticalChart .singleBar .bar .value span {
  position: absolute;
  font-size: 12px;
  bottom: 0;
  width: 100%;
  height: 20px;
  color: #003449;
  display: none;
  text-align: center;
}
.verticalChart .singleBar .title {
  margin-top: 5px;
  text-align: center;
  color: #003449;

    font-size: 22px;
    font-weight: 900;
}
</style>
<template>
    <div class="">
        <div class="row" style="margin-top:3%;" v-if="call_active == false">
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
        <div class="row stats"  v-if="call_active == false">
            <div class="col-lg-6" >
                <div class="card left" style="">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Agent_Notes_Icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Agent Notes</span>
                            <span class="right">{{ comments.total_comments }} Comment(s)</span>
                        </h5>

                        <div class="notes-roll">
                            <ul class="list-group" style="height:245px; width:100%;overflow:hidden; overflow-y:scroll;">
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
                <div class="card right" style="height: 405px;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Feedback_Icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Feedback Summary</span>
                            <span class="right">{{ comments.total_comments }} Comment(s)</span>
                        </h5>

                        <div class="">
                            <div class="verticalChart">

                              <div class="singleBar" v-for="bar in comments_graph">

                                <div class="bar">

                                  <div class="value" :style="'height: ' + bar.percentage + '%;'">
                                    <span style="color: rgb(45, 137, 239); display: inline;">{{ bar.percentage +'%' }}</span>
                                  </div>

                                </div>

                                <div class="title">{{ bar.type }}</div>

                              </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row call-progress-div" v-if="this.call_active == true">
            <div class="col-lg-12 top-animation">

            </div>

            <div class="col-lg-4 tip tip-a">
                <p class="step">Step 1</p>
                <h1>Don't stutter</h1>
                <p class="tip-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-4 tip tip-b">
                <p class="step">Step 2</p>
                <h1>Don't stutter</h1>
                <p class="tip-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-4 tip tip-c">
                <p class="step">Step 3</p>
                <h1>Don't stutter</h1>
                <p class="tip-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-4 tip tip-d">
                <p class="step">Step 4</p>
                <h1>Don't stutter</h1>
                <p class="tip-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-4 tip tip-e">
                <p class="step">Step 5</p>
                <h1>Don't stutter</h1>
                <p class="tip-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-4 tip tip-f">
                <p class="step">Step 6</p>
                <h1>Don't stutter</h1>
                <p class="tip-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

        <div>
            <b-modal id="modal-1" size="md" ref="my-modal" title="Capture Callback" @ok="toggleModal">
                <div class="d-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <b-form-radio v-model="comment.comment_type" name="some-radios" value="A">Answered</b-form-radio>
                        </div>
                        <div class="col-lg-6">
                            <b-form-radio v-model="comment.comment_type" name="some-radios" value="NA">No Answer</b-form-radio>
                        </div>
                        <div class="col-lg-6">
                            <b-form-radio v-model="comment.comment_type" name="some-radios" value="VM">Voicemail</b-form-radio>
                        </div>
                        <div class="col-lg-6">
                            <b-form-radio v-model="comment.comment_type" name="some-radios" value="LB">Language Barrier</b-form-radio>
                        </div>
                        <div class="col-lg-6">
                            <b-form-radio v-model="comment.comment_type" name="some-radios" value="NI">Not Interested</b-form-radio>
                        </div>
                    </div>
                </div>
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

            Fire.$on('CallActive', function(){
                var vm = this;
                this.call_active = true;

                var payload = {
                    method : 'POST',
                    end_point : 'calls/call',
                    form_data : {
                        lead_id : '',
                        phone_number : '',
                    }
                }
                
                axios.post('/api-request', payload).then(function (response) {
                    
                    if(response.data.status == 'queued'){
                        vm.call_sid = response.data.call_sid;
                        vm.handle = setInterval(function(){

                            var inner_payload = {
                                method : 'POST',
                                end_point : 'calls/get-call-status'
                            }

                            axios.post('/api-request', payload).then(function (response) {
                                
                                    
                                if(response.data.status == 'queued'){

                                    vm.call_status = response.data.status;

                                }else{

                                    vm.$swal('Failed', 'Opps, something went wrong while retrieving calling status, please try again','warning');
                                }
                            });

                        }, 1000);
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }

                });

            });

            Fire.$on('CallEnded', function(state){
               
                var vm = this;

                var payload = {
                    method : 'POST',
                    end_point : 'calls/end',
                    form_data : {
                        call_sid : this.call_sid,
                    }
                }
                
                axios.post('/api-request', payload).then(function (response) {
                    
                    if(response.data.success == true){
                        clearInterval(vm.handle);
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }

                });

                vm.call_active = false;
            });

            Fire.$on('AfterCallBackSet', function(){
                console.log('AfterCallBackSet');
                this.getComments();
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
                lead : {},
                lead_info : {},
                call_counts : {},
                product : {},
                comments : {},
                comments_graph : {},
                notes_data: [],
                call_active: false,
                call_status: '',
                handle: '',
                chartOptionsBar: {
                    xAxis: {
                        data: ['Q1', 'Q2', 'Q3', 'Q4']
                    },
                    yAxis: {
                        type: 'value'
                    },
                    series: [
                        {
                          type: 'bar',
                          data: [63, 75, 24, 92]
                        }
                    ],
                    color: ['#89cff0']
                },
                comment:{
                    comment_description :'',
                    comment_type :''
                },
                Toast: null
            }
        },
        methods: {
            toggleModal() {
                // We pass the ID of the button that we want to return focus to
                // when the modal has hidden
                this.$refs['my-modal'].toggle('#toggle-btn')
            },
            resetModal() {
                this.comment.comment_description = '';
                this.comment.comment_type = '';
            },
            enqueueLead(lead_id = ''){
                var vm = this;
                var end_point_choice = '';
                if(lead_id != ''){
                    end_point_choice = 'leads/get/' + lead_id;
                }else{
                    end_point_choice = 'leads/enqueue';
                }
                var payload = {
                    method : 'GET',
                    // end_point : 'leads/enqueue'
                    end_point : end_point_choice
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
			getStatus(call_sid){
                var vm = this;
                var payload = {
                    method : 'POST',
                    end_point : 'calls/get-call-status'
                }

                axios.post('/api-request', payload).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.call_status = response.data.call_status;
                    }else{
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
                        vm.enqueueLead(vm.lead_info.id);
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
