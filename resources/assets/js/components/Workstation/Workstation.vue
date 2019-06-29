<style scoped>
    .row{
       margin-bottom: 5%; 
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
        width: 77%;
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
</style>
<template>
    <div class="">
        <div class="row" style="margin-top:5%;">
            <ul class="top-section">
                <li>
                    <p class="top">Lead Source</p>
                    <p class="bottom">Digital Payday</p>
                </li>
                <li>
                    <p class="top">Called</p>
                    <p class="bottom">22</p>
                </li>
                <li>
                    <p class="top">Called</p>
                    <p class="bottom">7</p>
                </li>
                <li>
                    <p class="top">Answers</p>
                    <p class="bottom">4</p>
                </li>
                <li>
                    <p class="top">Sales</p>
                    <p class="bottom">0</p>
                </li>
            </ul>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="card client">
              <div class="card-body">
                <h5 class="card-title">
                    <img src="/images/workstation/D_A@4x.png" alt="Icon" class="icon" />
                    Client
                </h5>

                <p class="card-text truncate" :title="lead.name + ' ' + lead.surname">
                  {{ lead.name + ' ' + lead.surname }}
                </p>

                <p class="card-link">{{ lead.country }} | {{ lead.gender }} | {{ lead.age }}</p> 
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

                <p class="card-text">
                  AdsBanc
                </p>

                <p class="card-link">Advertising</p> 
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

                <p class="card-link">{{ lead.city }} | {{ lead.country }}</p> 
              </div>
            </div>
          </div>
          <div class="col-lg-3" >
            <div class="card activity">
              <div class="card-body">
                <h5 class="card-title">
                    <img src="/images/workstation/Active_button@4x.png" alt="Icon" class="icon" />
                    Time
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
                <div class="card left">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Agent_Notes_Icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Agent Notes</span>
                            <span class="right">23 Comments</span>
                        </h5>

                        <div class="notes-roll">
                            <ul class="list-group" style="height:250px; width:100%;overflow:hidden; overflow-y:scroll;">
                                <li v-for="comment in notes_data.comments" class="list-group-item">
                                    <p><strong>{{ comment.comment_type }}</strong> {{ comment.description }} <span style="float:right;margin-top: 11px;">{{ comment.created_at }}</span></p>
                                </li>
                            </ul>
                        </div>

                        <div class="notes-capture">
                            <a role="button" class="choose-comment-type">
                                <img src="/images/workstation/Asset 28@4x.png" alt="Icon" class="icon" style="width: 27px;"/>
                            </a>
                            <input class="comment-desc" type="text" v-model="comment_description" placeholder="Write comment here" />

                            <button id="send-btn" type="submit" class="btn btn-primary" style="width:75px;">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="card right">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Feedback_Icon@4x.png" alt="Icon" class="icon" />
                            <span class="left">Feedback Summary</span>
                            <span class="right">23 Comments</span>
                        </h5>

                        <div class="notes-graph">
                            Graph
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            this.enqueueLead();

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        props: [],
        data: function(){
            return {
                lead : {},
                notes_data: {},
                Toast: null
            }
        },
        methods: {
            enqueueLead(){
                var vm = this;

                var payload = {
                    method : 'GET',
                    end_point : 'leads/get/85'
                }

                vm.$Progress.start();

                axios.post('/api-request', payload).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.lead = response.data.lead;
                        vm.getNotesStats(vm.lead.id);
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            },
            getNotesStats(lead_id){
                var vm = this;

                var payload = {
                    method : 'GET',
                    end_point : 'comments/get/lead/' + lead_id
                }

                vm.$Progress.start();
                axios.post('/api-request', payload).then(function (response) {
                    console.log(response.data);
                    if(response.data.success == true){
                        vm.notes_data = response.data;

                        console.log(vm.notes_data);

                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            }
        },
        showCallModal(){

        }
    }
</script>
