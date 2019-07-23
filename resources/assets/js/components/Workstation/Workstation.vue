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
        font-size: 23px;
        color: #fff;
        font-weight: bolder;
    }
    p.card-link{
        font-size: 16px;
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
        margin-left: -54px;
        margin-right: -65px;
        padding: 3% 34px 0;
        background-image: url(/images/call/Call_Background.svg) !important;
        background-size: cover;
        background-repeat: no-repeat;
        margin-bottom: 0;
        max-height:120vh;
        transition:all 500ms ease;
    }
    .call-progress-div .top-animation{
        padding: 7px;
        background-image: url(/images/call/Call_Logo.svg) !important;
        background-size: 75%;
        background-position: center;
        background-repeat: no-repeat;
        height: 186px;
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
        font-size: 1.6rem;
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
div.scripts-div{
  max-height:880.84px;
  transition:all 500ms ease;
}
div.collapsed {
  max-height:35px;
  overflow:hidden;
  padding:0px;
  background-color:transparent;
}
p.minimize{    
    position: relative;
    text-align: right;
    width: 100%;
    top: -38px;
    right: -62px;
    color: #fff;

}
div.collapsed p.minimize{
    position: relative;
    text-align: right;
    width: 100%;
    top: -1px;
    right: 14px;
    color: #fff;
}
p.minimize a,
p.maximize a{
   color: #fff; 
   font-weight: 900;
}
.scripts p.heading{
    font-size: 17px;
    border-bottom: 1px solid #003449;
    margin-bottom: 18px;
    color: #003449;
    letter-spacing: 1.42px;
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 9px;
}
.scripts .row{
    margin-right: 0;
    margin-left: 0;
}
.scripts .col-lg-12{
    padding-right: 0;
    padding-left: 0;
}
.scripts .card {
    margin-right: 23px;
}
.scripts .card-body {
    flex: 1 1 auto;
    padding: 3.25rem;
    text-align: center;
}
.scripts .card-body p {
    color: #fff;
    font-weight: bolder;
    border-bottom: 1px solid #fff;
    padding-bottom: 5px;
    font-size: 32px;
    letter-spacing: 4.42px;
}

.idle-div{
    margin-top: 0;
    margin-left: -54px;
    margin-right: -65px;
    padding: 3% 6%;
    /* background-image: url('/images/call/Call_Background.svg') !important; */
    background-size: 100%;
    background-repeat: no-repeat;
    transition:all 500ms ease;
}
.idle-div .top-animation{    
    padding: 7px;
    background-image: url('/images/Idle_Pages_Assest/Asset 11900.svg') !important;
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 600px;
}
.top-animation-minimized{
    padding: 7px;
    background-image: url('/images/Idle_Pages_Assest/Asset 11900.svg') !important;
    background-size: 47%;
    background-position: center;
    background-repeat: no-repeat;
    height: 133px;
}
.idle-footer{
    margin: 0 auto;
    text-align: center;
}
.idle-footer p{
    margin: 0 auto;
    text-align: center;
    font-size: 12px;
    color: #9fb3bb;
}
a.down-scroll{
    display: block;
    transition: all 200ms ease; 
}
a.down-scroll:hover{
    margin-top: 5px; 
}
.idle-education .col-lg-10{
    max-width: 80.333333%;
}
.idle-education .col-lg-4 p{
    color: #1c2331; 
}
.idle-education .col-lg-4{
    float: left;
    display: block;
    border-radius: 25px;
    box-shadow: 0px 1px 6px 0px #4a4a4a;
    margin: 0 10px 19px 10px;
    max-width: 30.333333%;
    padding: 25px;
    text-align: center;
}
</style>
<template>
    <div class="">

        <div class="scripts" v-if="scripts == true">
            <div :class="{ 'row' : true }" data-aos="fade-up" data-aos-duration="700" data-aos-offset="700" style="margin-top: 1%">

                <div class="col-lg-12">
                    <p class="heading">Calls</p>
                </div>
              <div>
                <div class="card client">
                  <div class="card-body">

                    <p class="card-text" :title="lead.name + ' ' + lead.surname">
                      Cashed Out
                    </p>
 
                  </div>
                </div>
              </div>
              <div>
                <div class="card product">
                  <div class="card-body">

                    <p class="card-text" :title="lead.name + ' ' + lead.surname">
                      Upsell
                    </p>
 
                  </div>
                </div>
              </div>
              <div>
                <div class="card time">
                  <div class="card-body">

                    <p class="card-text" :title="lead.name + ' ' + lead.surname">
                      Not Interested
                    </p>
 
                  </div>
                </div>
              </div>

              <div>
                <div class="card activity">
                  <div class="card-body">

                    <p class="card-text" :title="lead.name + ' ' + lead.surname">
                      More Info
                    </p>
 
                  </div>
                </div>
              </div>
            </div>
        </div>  

        <div class="" v-if="general == true">
            <div class="row" style="margin-top:1%;">
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
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-4">
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
        </div>
        <div class="" v-if="idle == true">
            <div :class="{ 'row idle-div' : true }" data-aos="fade-up" data-aos-duration="700" data-aos-offset="700" style="margin-top: 1%">
                <div :class="{ 'col-lg-12' : true, 'top-animation' : !show_edication_blocks, 'top-animation-minimized' : show_edication_blocks }"> </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 idle-footer" v-if="!show_edication_blocks">
                    <p>Show Education</p>
                    <a href="#" class="down-scroll" @click="show_edication_blocks = true;">
                        <img src="/images/Idle_Pages_Assest/Asset 120.png" alt="Scroll Down" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 idle-footer"  v-if="show_edication_blocks">
                    <p>Hide Education</p>
                    <a href="#" class="down-scroll" @click="show_edication_blocks = false;">
                        <img src="/images/Idle_Pages_Assest/Asset 119.png" alt="Scroll Down" />
                    </a>
                </div>
            </div>
            <div class="row idle-education justify-content-center" v-if="show_edication_blocks">
                <div class="col-lg-10">
                    <div class="col-lg-4">
                        <img src="/images/Idle_Pages_Assest/Asset 106.svg" width="71" height="60" />
                        <p>Education</p>
                        <a href="#" class="down-scroll">
                            <img src="/images/Idle_Pages_Assest/Asset 119.png" />
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <img src="/images/Idle_Pages_Assest/Asset 107.svg" width="71" height="60" />
                        <p>Clients</p>
                        <a href="#" class="down-scroll">
                            <img src="/images/Idle_Pages_Assest/Asset 119.png" />
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <img src="/images/Idle_Pages_Assest/Asset 108.svg" width="71" height="60" />
                        <p>Commission</p>
                        <a href="#" class="down-scroll">
                            <img src="/images/Idle_Pages_Assest/Asset 119.png" />
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <img src="/images/Idle_Pages_Assest/Asset 108.svg" width="71" height="60" />
                        <p>Upselling</p>
                        <a href="#" class="down-scroll">
                            <img src="/images/Idle_Pages_Assest/Asset 119.png" />
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <img src="/images/Idle_Pages_Assest/Asset 107.svg" width="71" height="60" />
                        <p>Breaking the Ice</p>
                        <a href="#" class="down-scroll">
                            <img src="/images/Idle_Pages_Assest/Asset 119.png" />
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <img src="/images/Idle_Pages_Assest/Asset 106.svg" width="71" height="60" />
                        <p>Callbacks</p>
                        <a href="#" class="down-scroll">
                            <img src="/images/Idle_Pages_Assest/Asset 119.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="" v-if="calling == true">
            <div :class="{ 'row call-progress-div' : true }" data-aos="fade-up" data-aos-duration="700" data-aos-offset="700" style="margin-top: 1%">
                <div class="col-lg-12 top-animation">
                </div>
                <div class="col-lg-12 tip call-status" style="padding-top:10px;">
                    <h1 style="text-align: center;font-size: 19px;">{{ call_status }}...</h1>
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
    const Device = require('twilio-client').Device;
    export default {
        extends: Bar,
        components: { 
            BarChart,
            'notes-stats' : NotesStats 
        },
        mounted() {
            console.log('Component mounted');

            var vm = this;

            this.enqueueLead('');

            Fire.$on( 'CallEnded', function(){
                vm.endCall();
            });

            Fire.$on( 'ShowScripts', function(){
                console.log('ShowScripts');
                vm.scripts = true;
                vm.general = false;
                vm.calling = false;
                vm.idle = false;
            });

            Fire.$on( 'ShowGeneral', function(){
                console.log('ShowGeneral');
                vm.general = true;
                vm.scripts = false;
                vm.calling = false;
                vm.idle = false;
            });

            Fire.$on('CallStarted', function(){
                vm.general = true;
                vm.calling = false;
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
                minimized: false,
                scripts: false,
                general: false,
                calling: false,
                show_edication_blocks: false,
                idle: true,
                call_status: '',
                call_sid: '',
                handle: '',
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
                    end_point_choice = '/leads/get/' + lead_id;
                }else{
                    end_point_choice = '/leads/enqueue';
                }
              
                vm.$Progress.start();

                axios.get(end_point_choice).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.lead = response.data;
                        vm.lead_info = response.data.lead;
                        vm.call_counts = response.data.call_counts;
                        vm.product = response.data.product;
                        vm.comments = response.data.comments;
                        vm.comments_graph = response.data.comments.comments_graph;
                        vm.comment.comment_description = '';
                        vm.comment.comment_type = '';

                        Fire.$emit('AfterLeadEnqueue', {'lead_id' : vm.lead_info.id, 'contact_number' : vm.lead_info.phone_number });
                        
                        setTimeout( function(){
                            vm.$Progress.finish();
                            vm.startCall();
                        }, 2000 );

                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            },
            startCall() {
                var vm = this;
                this.call_active = true;
                this.calling = true;
                this.idle = false;

                axios.get('/calls/token').then(function (response) {
                    
                    console.log('Got a token.');
                    console.log('Token: ' + response.data.token);
  
                    // Setup Twilio.Device
                    Device.setup(response.data.token);
  
                    Device.on('ready',function (device) {
                        console.log('Twilio.Device Ready!');
                        vm.call_status = 'Device Ready';
                    });

                    Device.on('error',function (error) {
                        console.log('Twilio.Device Error: ' + error.message);
                        vm.call_status = 'Device Error: ' + error.message;
                    });

                    var form_data = {
                        lead_id : vm.lead_info.id,
                        phone_number : vm.lead_info.phone_number,
                    }
                
                    console.log('Calling ' + form_data.phone_number + '...');
                    Device.connect(form_data);

                    Device.on('connect',function (conn) {
                        console.log('Successfully established call!');
                        console.log(conn.parameters);
                        vm.call_status = 'Successfully established call!';
                    });

                      
                    Device.on('disconnect', function (conn) {
                        console.log('Call ended.');
                        vm.call_status = 'Call ended.';
                    });

                      
                    Device.on('incoming',function (conn) {
                        console.log('Incoming connection from ' + conn.parameters.From);
                        var archEnemyPhoneNumber = '+12099517118';

                        if (conn.parameters.From === archEnemyPhoneNumber) {
                            conn.reject();
                            console.log('It\'s your nemesis. Rejected call.');
                        } else {
                            // accept the incoming connection and start two-way audio
                            conn.accept();
                        }
                    });
  
                    
                    // if(response.data.status == 'queued'){
                    //     vm.call_sid = response.data.call_sid;

                    //     vm.handle = setInterval(function(){
                            
                    //         var form_data = {
                    //                 call_sid : vm.call_sid,
                    //             }

                    //         axios.post('/calls/get-call-status', form_data).then(function (response) {
                                
                    //             if(response.data.call_status == 'queued' || response.data.call_status == 'ringing'){
                    //                 vm.call_status = response.data.call_status;
                    //             }else if(response.data.call_status == 'in-progress'){
                    //                 vm.call_status = response.data.call_status;
                    //                 Fire.$emit('CallStarted');
                    //             }else if(response.data.call_status == 'completed'){
                    //                 vm.call_status = response.data.call_status;
                    //                 vm.endCall();
                    //                 clearInterval(vm.handle);
                    //             }
                    //         });

                    //     }, 1000);

                    // }else{
                    //     vm.$Progress.fail();
                    //     vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    // }

                }).catch(function (error) {                    
                    console.log('Could not get a token from server!');
                    console.log(error);
                });
            },
            endCall() {
                var vm = this;

                Twilio.Device.disconnectAll(function (conn) {
                    console.log(conn.parameters);
                    var archEnemyPhoneNumber = '+12099517118';
                });

                vm.call_active = true;
                vm.calling = true;
                vm.general = false;
                vm.minimized = false;
            },
			getStatus(call_sid){
                var vm = this;

                axios.post('/calls/get-call-status').then(function (response) {
                    
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

                var form_data = {
                        id : this.lead_info.id,
                        type: 'lead',
                        comment_type: this.comment.comment_type,
                        description: this.comment.comment_description
                    }

                vm.$Progress.start();

                axios.post('/comments/add', form_data).then(function (response) {
                    
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

                axios.post('/comments/get/lead/' + this.lead_info.id).then(function (response) {
                    
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
            minizeCallProgress(){
                this.minimized = true;
                $('.call-progress-div').toggleClass('collapsed');
            },
            getDaysAgo(second_date){
                var date_string = '';
                var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
                var firstDate = new Date();
                var secondDate = new Date(second_date);

                var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));
                console.log(diffDays);
                if(diffDays <= 1){
                    date_string = 'Today';
                }else if(diffDays > 1 && diffDays <= 7){
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
