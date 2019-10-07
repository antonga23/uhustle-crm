<style scoped>
    .row{
       margin-bottom: 3.5vh; 
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
        font-size: 18px;
        font-weight: 900;
        color: #003449;
    }
    li p.top{
        font-size: 14px;
        color: #003449;
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
    .stats .col-lg-6{
        padding: 0;
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
        border-left: 1px solid rgba(0, 0, 0, 0.125);
        border-right: 1px solid rgba(0, 0, 0, 0.125);
        border-top: 1px solid rgba(0, 0, 0, 0.125);
        border-bottom:none;
    }
  
    .list-group-item:last-child{
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .list-group-item p{
        margin: 0;
    }
    .list-group-item p strong{
        font-size: 18px;
        margin-right: 30px;
        display: block;
        float: left;
        width: 12%;
        margin-top: 11px;
        color: #003449;    
        letter-spacing: 2.2px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
    }
    .comment-notes{    
        display: block;
        float: left;
        margin-top: 11px;
        width: 57%;
        font-size: 10px;
        color: #7f99a4;
    }
    .author{    
        float: right;
        margin-top: 11px;
        font-size: 10px;
        text-align: left;
        width: 22%;
        display: block;
        color: #7f99a4;
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
    font-size: 18px;
    font-weight: 900;
    letter-spacing: 2.2px;
    font-family: 'Montserrat', sans-serif;
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
    background-size: 33%;
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
.btn-active:hover{
	background: #00344a;
	color: #ffffff;    border: none !important;
    padding: 6px 25px 6px 18px;
    font-size: 12px;
    font-weight: 700;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.btn-active {
	background: #ffffff;
	color: #00344a;
    border: none !important;
    border: none !important;
    padding: 6px 25px 6px 18px;
    font-size: 12px;
    font-weight: 700;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.pulse-round {
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.pulse-round:hover {
    animation: none;
}

.pulse {
    animation: pulse 2s infinite;
}
.pulse:hover {
    animation: none;
}

@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
  }
  70% {
      -webkit-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
  }
  100% {
      -webkit-box-shadow: 0 0 0 0 rgba(255,147, 58,1);
  }
}
@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
    box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
  }
  70% {
      -moz-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
      box-shadow: 0 0 0 10px rgba(204,169,44, 0);
  }
  100% {
      -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
      box-shadow: 0 0 0 0 rgba(204,169,44, 0);
  }
}
.tab-content{
    padding: 1rem;
}
.final-modal{
    padding: 0 1rem 1rem;
}
.final-modal .row-a{
    width: 100%;
    border-bottom: 1px solid #e3e3e3;
    margin-left: 0;
}
.final-modal label button img{
    width: 20px;
    margin-right: 15px;
}
.final-modal .navbar-nav .nav-item{
    font-size: 55px;
    color: #FF933A;
}
.final-modal .card-header-tabs{
    border-bottom: 1px solid #dee2e6;
}
.final-modal .card-header{    
    border-top-left-radius: 19px;
    border-top-right-radius: 19px;
    padding: 0 11px 11px;
    border-color: transparent;
}
.final-modal .card-header a[aria-selected="true"]{
    border-bottom: none;
    background: #fff;
}
.final-modal .card ul li.left{
    border-top-left-radius: 19px;
    width: 50%;
    border-right: 1px solid #e3e3e3;
}
.final-modal .card ul li.left .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 19px;
    border-top-right-radius: 0px;
    padding: 16px;
    font-size: 16px;
    color: #818284;
}
.final-modal .card ul li.left .nav-link:hover {
    border: 1px solid transparent;
    border-top-left-radius: 20px;
    border-top-right-radius: 0px;
    background: #fff;
    padding: 16px;
    font-size: 16px;
}
.final-modal .card ul li.right{
    border-top-right-radius: 19px;
    border-top-left-radius: 0px;
    width: 50%;
}
.final-modal .card ul li.right .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 20px;
    padding: 16px;
    font-size: 16px;
    color: #818284;
}
.final-modal .card ul li.right .nav-link:hover {
    border: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 20px;
    background: #fff;
    padding: 16px;
    font-size: 16px;
}
.tab-pane{
     height: 348px;
}
.nav-tabs .nav-link span{
    font-size: 14px;
    padding-left: 10px;
}
#two .row{
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
}
#two label{
    color: rgb(129, 130, 132);
    font-size: 13px;
    padding: 0;
    font-weight: 200;
}
.vc-reset, .vc-reset * {
    border-style: none !important;
    border-color: transparent !important;
}
.vc-h-full .vc-rounded-full {
    border-radius: 5px !important;
}
.ant-time-picker{
    width: 100% !important;
}
.scroll-hidden{
    overflow-y: scroll;
    height: 70vh;
    padding-top: 6px;
    padding-right: 6px;
    width: 104%;
}
</style>
<template>
    <div class="">
        <!-- Scripts Section Starts -->
        <div class="scripts" v-if="scripts == true">
            <div :class="{ 'row' : true }" data-aos="fade-up" data-aos-duration="700" data-aos-offset="700" style="margin-top: 6%">

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
        <!-- Scripts Section ends -->

        <!-- General Section Starts -->
        <div class="" v-if="general == true">
            <div class="row" style="margin-top:5%;">
                <ul class="top-section">
                    <li>
                        <p class="top">Lead Source</p>
                        <p class="bottom">{{ lead_info.lead_source.name }}</p>
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
                <div class="col-lg-3 col-md-4 col-sm-4" style="padding-right: 35px;">
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
                <div class="col-lg-3" style="padding-right: 35px;padding-left: 35px;">
                    <div class="card product">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" />
                            Product
                        </h5>

                        <p class="card-text" :title="lead_info.product.description + '. ' + lead_info.product.price ">
                        {{ lead_info.product.name }}
                        </p>

                        <p class="card-link truncate" :title="lead_info.product.description + '. ' + lead_info.product.currency + lead_info.product.price ">
                            {{ lead_info.product.description + '. ' + lead_info.product.currency + lead_info.product.price  }}
                        </p> 
                    </div>
                    </div>
                </div>
                <div class="col-lg-3" style="padding-right: 35px;padding-left: 35px;">
                    <div class="card time">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/workstation/Time_Icon@4x.png" alt="Icon" class="icon" />
                            Time
                        </h5>

                        <p class="card-text">
                        11:20
                        </p>

                        <p class="card-link truncate">{{ lead_info.city }} | {{ lead_info.country }}</p> 
                    </div>
                    </div>
                </div>
                <div class="col-lg-3"  style="padding-left: 35px;">
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
            <div class="row stats final-modal">
                <div class="col-lg-6" style="padding-right: 3%;">
                    <div class="card left mt-3 tab-card">
                        <div class="card-header tab-card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item left">
                                    <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">
                                        <img src="/images/workstation/Agent_Notes_Icon@4x.png" alt="Icon" class="icon" width="23"/>
                                        <span class="left">Agent Notes</span>
                                        <span class="right">{{ comments.total_comments }}</span>
                                    </a>
                                </li>
                                <li class="nav-item right">
                                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">
                                        <img src="/images/workstation/Schedule_Callbacks.svg" alt="Icon" class="icon" width="23"/>
                                        <span class="left">Schedule Callback</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <div class="notes-roll">
                                    <ul class="list-group w-100" style="height:245px; overflow:hidden; overflow-y:scroll;">
                                        <li v-for="comment in comments.comments" class="list-group-item" :key="comment.id">
                                            <p>
                                                <strong>{{ comment.comment_type }}</strong> 
                                                <span class="comment-notes">
                                                    {{ comment.description }} 
                                                    <a href="#" role="button" @click="editComment(comment)" :class="{ 'edit-comment': true, 'pulse-round': edit_comment }" v-if="comment.user_id == user_id && getDaysAgo(comment.created_at) == 'Today'">
                                                        <img src="/images/icons/settings edit buttin@4x.png" alt="Icon" class="icon" width="23"/>
                                                    </a>
                                                </span>
                                                <span class="author">
                                                    {{ comment.created_at }} <br/>
                                                    <small>{{ comment.user_name }}</small>
                                                </span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="notes-capture">
                                    <b-button v-b-modal.modal-1 :class="{ 'choose-comment-type': true, 'pulse' : choose_comment_type }">
                                        <img src="/images/workstation/Asset 28@4x.png" alt="Icon" class="icon" style="width: 27px;"/>
                                    </b-button>
                                    <input class="comment-desc" type="text" v-model="comment.comment_description" placeholder="Write comment here" style="width: 69%" />

                                    <button id="send-btn" type="submit" class="btn btn-primary w-75" @click="addComment()">
                                        Send
                                    </button>
                                </div>            
                            </div>
                            <div class="tab-pane fade pt-0 px-3 pb-3" id="two" role="tabpanel" aria-labelledby="two-tab"> 
                                <div class="row mb-0">
                                    <div class="col-lg-4 pr-0">
                                        <div class="row">
                                            <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">
                                                <label class="col-lg-12 control-label">Date of Callback
                                                    <a-date-picker v-model='selected_date' format="YYYY-MM-DD" :allowEmpty="false" @change="checkCBDate()"/>
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">
                                                <label class="col-lg-12 control-label">Time of Callback
                                                    <a-time-picker v-model='selected_time' :allowEmpty="false" use24Hours format="hh:mm a"/>
                                                </label>
                                            </div>  
                                        </div>                                       
                                        <div class="row">
                                            <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">
                                                <label class="col-lg-12 control-label"><strong>{{ selected_date.format('DD-MM-YYYY') + ' @' +  selected_time.format('hh:mm a') }}</strong></label>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <vc-date-picker v-model="dates" mode="multiple" is-inline is-expanded  :min-date='new Date()' :max-date="max_date" color="pink" />
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-lg-12 pr-0">
                                        <input class="comment-desc" type="text" v-model="call_back.note" placeholder="Write notes here" style="width: 77.5%;" />

                                        <button id="send-btn" type="submit" class="btn btn-primary" style="width:100px;" @click="addCallback()">
                                            Schedule
                                        </button>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" style="padding-left: 3%;">
                    <div class="card left mt-3 tab-card">
                        <div class="card-header tab-card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item left">
                                    <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="true">
                                        <img src="/images/workstation/Feedback_Summary.svg" alt="Icon" class="icon" width="23"/>
                                        <span class="left">Feedback Summary</span>
                                        <span class="right">{{ comments.total_comments }}</span>
                                    </a>
                                </li>
                                <li class="nav-item right">
                                    <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false">
                                        <img src="/images/workstation/Email_Client.svg" alt="Icon" class="icon" width="23"/>
                                        <span class="left">Email Client</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="three" role="tabpanel" aria-labelledby="three-tab" style="height: 349px;">
                                
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
                            <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
                                <h5 class="card-title">TODO</h5>
                                <div class="w-100" style="height:245px; overflow:hidden; color: #818284;">
                                    <p class="card-text">
                                        Email client form
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- General Section Ends -->

        <!-- Dialer Section Starts -->
        <div class="" v-if="idle == true">
            <div :class="{ 'row idle-div' : true }" data-aos="fade-up" data-aos-duration="700" data-aos-offset="700" style="margin-top: 1%">
                <div :class="{ 'col-lg-12' : true, 'top-animation' : !show_edication_blocks, 'top-animation-minimized' : show_edication_blocks }"> </div>
            </div>
            <div class="row">

                <div class="col-lg-12 tip call-status" style="padding-top:10px;">
                    <h1 class="text-center" style="font-size: 19px;color: #1c2331;">{{ call_status }}...</h1>
                </div>

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
        <!-- Dialer Section Ends -->

        <!-- Active calls Section Starts -->
        <div class="" v-if="active_calls == true">
            <div class="row stats scroll-hidden"  style="margin-top: 6%">
                <div class="col-lg-12">
                    <vcl-table v-if="show_page_loader === true"></vcl-table>
                    <datatable v-if="show_page_loader === false" id="datatable" :rows="conferences" :columns="columns" :role="role_id"></datatable>
                </div>
            </div>
        </div>
        <!-- Active calls Section Ends -->

        <!-- Modals Section Starts -->
        <div>
            <b-modal id="modal-1" size="md" ref="my-modal" title="Lead Status" @ok="toggleModal">
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
                        <div class="col-lg-6">
                            <b-form-radio v-model="comment.comment_type" name="some-radios" value="PTP">Promise To Pay</b-form-radio>
                        </div>
                    </div>
                </div>
            </b-modal>

            <b-modal
                id="modal-prevent-closing"
                size="xl"
                ref="final-call-step"
                title=""
                v-on:mouseleave="mouseLeave"
                @hide="preventClosing"
                style="z-index: 999999;padding: 1rem 3rem;"
                hide-header
                hide-footer
                >
                <div class="final-modal">
                    <div class="row row-a">
                        <div class="col-lg-6" style="padding-left: 6%;">
                            <ul class="navbar-nav left">
                                <li class="nav-item d-none d-sm-inline-block title">
                                    <countdown :time="set_time" @progress="handleCountdownProgress" @abort="handleAbort">
                                        <template slot-scope="props" style="font-size: 55px;">{{ props.minutes }}:{{ props.seconds }}</template>
                                    </countdown>
                                </li> 
                            </ul>
                        </div>
                        <div class="col-lg-6 pr-0" style="padding-top:2%;">
                            <div class="w-100">
                                <label class="col-lg-4 control-label" style="margin-right: 8px;float:left;">
                                    <button v-if="added_time" @click="addTime"  type="submit" :class="{'btn' : true, 'btn-active' : true}" class="w-100 m-0" disabled>
                                        <img src="/images/icons/Asset 135.svg" alt="Icon" class="icon" />More Time
                                    </button>
                                    <button v-else @click="addTime"  type="submit" :class="{'btn' : true, 'btn-active' : true}" class="w-100 m-0">
                                        <img src="/images/icons/Asset 135.svg" alt="Icon" class="icon" />More Time
                                    </button>
                                </label>
                                <label class="col-lg-4 control-label pr-0 text-right" style="margin-right: 8px;float:left;">
                                    <button @click="completeCall" type="submit" :class="{'btn' : true, 'btn-active' : true }" class="w-100 m-0">
                                        <img src="/images/icons/Asset 136.svg" alt="Icon" class="icon" />Complete
                                    </button>
                                </label>
                                <label class="col-lg-3 control-label pr-0 text-right" style="margin-right: 8px;float:left;">
                                    <img src="/images/icons/Asset 56.svg" alt="Icon" class="icon" style="width: 60px;margin-top: -13px;"/>
                                </label>
                            </div>				
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card client">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="/images/workstation/D_A@4x.png" alt="Icon" class="icon" />
                                    Client
                                </h5>

                                <p class="card-text truncate" :title="lead_info.name + ' ' + lead_info.surname">
                                {{ lead_info.name + ' ' + lead_info.surname }}
                                </p>

                                <p class="card-link truncate">{{ lead_info.country }} | {{ lead_info.gender }} | {{ lead_info.age }}</p> 
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card product">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" />
                                    Product
                                </h5>

                                <p class="card-text" :title="lead_info.product.description + '. ' + lead_info.product.currency + lead_info.product.price ">
                                {{ lead_info.product.name }}
                                </p>

                                <p class="card-link truncate" :title="lead_info.product.description + '. ' + lead_info.product.currency + lead_info.product.price ">
                                    {{ lead_info.product.description }}
                                </p> 
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
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
                    </div>                   
                    <div class="row stats final-modal">
                        <div class="col-lg-6" style="padding-right: 3%;">
                            <div class="card left mt-3 tab-card">
                                <div class="card-header tab-card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item left">
                                            <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">
                                                <img src="/images/workstation/Agent_Notes_Icon@4x.png" alt="Icon" class="icon" width="23"/>
                                                <span class="left">Agent Notes</span>
                                                <span class="right">{{ comments.total_comments }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item right">
                                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">
                                                <img src="/images/workstation/Schedule_Callbacks.svg" alt="Icon" class="icon" width="23"/>
                                                <span class="left">Schedule Callback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                        <div class="notes-roll">
                                            <ul class="list-group w-100" style="height:245px; overflow:hidden; overflow-y:scroll;">
                                                <li v-for="comment in comments.comments" class="list-group-item" :key="comment.id">
                                                    <p>
                                                        <strong>{{ comment.comment_type }}</strong> 
                                                        <span class="comment-notes" style="width: 54%;">
                                                            {{ comment.description }} 
                                                            <a href="#" role="button" @click="editComment(comment)" :class="{ 'edit-comment': true, 'pulse-round': edit_comment }" v-if="comment.user_id == user_id && getDaysAgo(comment.created_at) == 'Today'">
                                                                <img src="/images/icons/settings edit buttin@4x.png" alt="Icon" class="icon" width="23"/>
                                                            </a>
                                                        </span>
                                                        <span class="author w-25">
                                                            {{ comment.created_at }} <br/>
                                                            <small>{{ comment.user_name }}</small>
                                                        </span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="notes-capture">
                                            <b-button v-b-modal.modal-1 :class="{ 'choose-comment-type': true, 'pulse' : choose_comment_type }">
                                                <img src="/images/workstation/Asset 28@4x.png" alt="Icon" class="icon" style="width: 27px;"/>
                                            </b-button>
                                            <input class="comment-desc" type="text" v-model="comment.comment_description" placeholder="Write comment here" style="width: 66%" />

                                            <button id="send-btn" type="submit" class="btn btn-primary w-75" @click="addComment()">
                                                Send
                                            </button>
                                        </div>            
                                    </div>
                                    <div class="tab-pane fade pt-0 px-3 pb-3" id="two" role="tabpanel" aria-labelledby="two-tab"> 
                                        <div class="row mb-0">
                                            <div class="col-lg-4 pr-0">
                                                <div class="row">
                                                    <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">
                                                        <label class="col-lg-12 control-label">Date of Callback
                                                            <a-date-picker v-model='selected_date' format="YYYY-MM-DD" :allowEmpty="false" @change="checkCBDate()"/>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">
                                                        <label class="col-lg-12 control-label">Time of Callback
                                                            <a-time-picker v-model='selected_time' :allowEmpty="false" use24Hours format="hh:mm a"/>
                                                        </label>
                                                    </div>  
                                                </div>                                       
                                                <div class="row">
                                                    <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">
                                                        <label class="col-lg-12 control-label"><strong>{{ selected_date.format('DD-MM-YYYY') + ' @' +  selected_time.format('hh:mm a') }}</strong></label>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <vc-date-picker v-model="dates" mode="multiple" is-inline is-expanded  :min-date='new Date()' :max-date="max_date" color="pink" />
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-lg-12 pr-0">
                                                <input class="comment-desc" type="text" v-model="call_back.note" placeholder="Write notes here" style="width: 72.5%;" />

                                                <button id="send-btn" type="submit" class="btn btn-primary" style="width:100px;" @click="addCallback()">
                                                    Schedule
                                                </button>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" style="padding-left: 3%;">
                            <div class="card left mt-3 tab-card">
                                <div class="card-header tab-card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item left">
                                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="true">
                                                <img src="/images/workstation/Feedback_Summary.svg" alt="Icon" class="icon" width="23"/>
                                                <span class="left">Feedback Summary</span>
                                                <span class="right">{{ comments.total_comments }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item right">
                                            <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false">
                                                <img src="/images/workstation/Email_Client.svg" alt="Icon" class="icon" width="23"/>
                                                <span class="left">Email Client</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active p-3" id="three" role="tabpanel" aria-labelledby="three-tab" style="height: 349px;">
                                        
                                        <div class="">
                                            <div class="verticalChart">

                                                <div class="singleBar" v-for="(bar,index) in comments_graph" :key="index">

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
                                    <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
                                        <h5 class="card-title">TODO</h5>
                                        <div class="w-100" style="height:245px; overflow:hidden; color: #818284;">
                                            <p class="card-text">
                                                Email client form
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </b-modal>
        </div>
        
         <input type="hidden"  @click="startCall()" ref="callBtn" />
    </div>
</template>

<script>
    import { setupCalendar, Calendar} from 'v-calendar'
    import { DatePicker,TimePicker  } from 'ant-design-vue';
    import { Bar } from 'vue-chartjs';
    import { BarChart } from 'vue-morris';
    import NotesStats from './NotesStats.vue';
    import FlipCountdown from 'vue2-flip-countdown';
    import DataTable from '../DataTables/CallLogsDataTable';
    import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
    const Device = require('twilio-client').Device;
    export default {
        extends: Bar,
        components: { 
            BarChart,
            FlipCountdown,
            VclFacebook,
            VclInstagram,
            VclTable,
            'datatable' : DataTable,
            'notes-stats' : NotesStats 
        },
        mounted() {

            var vm = this;
            
            if( vm.lead_id != ''){
                vm.enqueueLead(vm.lead_id);
                vm.general = true;
                vm.active_calls = false;

                // vm.addEvent(document, "mouseout", function(e) {
                //     e = e ? e : window.event;
                //     var from = e.relatedTarget || e.toElement;
                //     if (!from || from.nodeName == "HTML") {
                //         // stop your drag event here
                //         // for now we can just use an alert
                //         vm.completeCall();
                //     }
                // });
            }else if( ( this.role_id == 1 || this.role_id == 2 ) && vm.lead_id == '' ){
                vm.active_calls = true;
                Fire.$emit('ShowActiveCalls');
            }else{
                vm.general = false;
                vm.scripts = false;
                vm.idle = true;
                vm.active_calls = false;
            }
            
            vm.getActiveCalls();

            vm.prepDates();

            vm.dialer_settings = JSON.parse(vm.auto_dialer_settings);

            Fire.$on('CallStarted', function(){
                vm.general = false;
                vm.idle = true;
                vm.scripts = false;
                vm.active_calls = false;
                vm.startCall();
            });

            Fire.$on('CallEnded', function(){
                vm.endCall();
            });

            Fire.$on( 'ShowScripts', function(){
                vm.scripts = true;
                vm.general = false;
                vm.idle = false;
                vm.active_calls = false;
            });

            Fire.$on('ShowGeneral', function(){
                vm.general = true;
                vm.scripts = false;
                vm.idle = false;
                vm.active_calls = false;
            });

            Fire.$on('ShowActiveCalls', function(){
                vm.general = false;
                vm.scripts = false;
                vm.idle = false;
                vm.active_calls = true;
            });

            Fire.$on( 'ShowDialer', function(){
                vm.general = false;
                vm.scripts = false;
                vm.idle = true;
                vm.active_calls = false;
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
        props: ['user_name','user_id', 'role_id','lead_id','auto_dialer_settings'],
        data: function(){
            return {
                lead : {},
                conferences: [],
                lead_info : {
                    product: {},
                },
                call_counts : {},
                product : {},
                comments : {},
                comments_graph : {},
                notes_data: [],
                minimized: false,
                scripts: false,
                general: false,
                active_calls: false,
                calling: false,
                show_edication_blocks: false,
                idle: false,
                added_time: false,
                choose_comment_type: false,
                edit_comment: false,
                continues: false,
                show_page_loader: false,
                call_status: '',
                call_sid: '',
                handle: '',
                set_time: 2  * 60 * 1000,
                comment:{
                    id: '',
                    comment_description :'',
                    comment_type :''
                },
                call_back:{
                    id: '',
                    note :'',
                    date :'',
                    time :'',
                    user_id: this.user_id,
                    lead_id: '',
                    call_sid: this.call_sid
                },
                date_span: '',
                max_date: '',
                selected_date: moment(),
                selected_time:  moment(),
                dates: [],
                dialer_settings: [],
                columns:[
                    {
                        label: 'CALLER',  // Column name
                        field: 'lead_caller',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'TYPE',  // Column name
                        field: 'lead_type',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'NAME',  // Column name
                        field: 'lead_name',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'OWNER',  // Column name
                        field: 'lead_owner',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'ASSIGNEE',  // Column name
                        field: 'lead_assignee',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'MOBILE #',  // Column name
                        field: 'lead_mobile',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'PACKAGE',  // Column name
                        field: 'lead_product',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true,
                        exportable: true
                    },
                    {
                        label: 'CALL START',  // Column name
                        field: 'dateCreated',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:true
                    },
                    {
                        label: 'STATUS',  // Column name
                        field: 'status',  // Field name from row
                        numeric: true, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:false
                    },
                    {
                        label: 'ACTIONS',  // Column name
                        field: 'actions',  // Field name from row
                        numeric: false, // Affects sorting
                        html: false,    // Escapes output if false.
                        sortable:false
                    },
                ],
                Toast: null
            }
        },
        methods: {
            getActiveCalls(){
                var vm = this;
                vm.show_page_loader = true;
                setInterval(function(){ 
                    axios.get('/calls/list').then(function (response) { 
                        vm.conferences = response.data.conferences;
                        vm.show_page_loader = false;
                    });
                }, 2000);
            },
            checkCBDate(){
                var now = moment(new Date()); //todays date
                
                var end = this.selected_date; // another date

                var duration = moment.duration(end.diff(now));

                var days = Math.round( duration.asDays() );

                if(days < 1 || days >= this.date_span){
                    this.$swal('Oops', 'Please select a date between the highlighted range.','warning');
                }else{
                    return true;
                }
            },
            addCallback(){
                var vm = this;

                if(!this.checkCBDate() || this.call_back.note == ''){
                    this.$swal('Oops', 'Please make sure to fill in the Date, Time and Note of the Callback properly.','warning');
                }else{
                    vm.call_back.date = vm.selected_date.format('YYYY-MM-DD');
                    vm.call_back.time = vm.selected_time.format('hh:mm');
                    vm.call_back.user_id = vm.user_id;
                    vm.call_back.lead_id = vm.lead_info.id;

                    this.$validator.validateAll().then((result) => {
                        if(!result){
                        }else{
                            
                            axios.post('/leads/setcallback', vm.call_back).then(function (response) {
                                
                                if(response.data.success == true){
                                    Fire.$emit('AfterCallBackSet');
                                    vm.enqueueLead(response.data.lead.id);
                                    vm.$swal('Success', 'Callback captured successfully','success');
                                    vm.continues = true;

                                }else{
                                    vm.$Progress.fail();
                                    vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                                }

                            });
                        }
                    });
                }
                
            },
            prepDates(){
                this.date_span = 7;
                this.dates = [
                    { start: new Date(), span: this.date_span}
                ];
                var date = new Date();
                this.max_date = date.setDate(date.getDate() + (this.date_span - 1));
            },
            preventClosing(BvModalEvent){
                var vm = this;
                if(BvModalEvent.trigger == 'backdrop')
                    BvModalEvent.preventDefault();
            },
            mouseLeave(event){
                console.log(event.pageX); 
                console.log(event.pagey);
            },
            addEvent(obj, evt, fn) {
                if (obj.addEventListener) {
                    obj.addEventListener(evt, fn, false);
                }
                else if (obj.attachEvent) {
                    obj.attachEvent("on" + evt, fn);
                }
            },
            toggleModal() {
                // We pass the ID of the button that we want to return focus to
                // when the modal has hidden
                this.$refs['my-modal'].toggle('#toggle-btn')
            },
            resetModal() {
                this.comment.comment_description = '';
                this.comment.comment_type = '';
            },
            completeCall(){
                var vm = this;
                axios.post('/comments/check-exist', { 'lead_id' : vm.lead_info.id, 'source_type' : "App\\Lead" }).then(function (response) {
                    if(response.data.success){
                        vm.continues = true;
                        vm.$refs['final-call-step'].hide();
                    }else{
                        vm.$swal('Warning','Please updated Notes or Callback information before continuing','warning');
                    }
                }).catch(function (error) {                    
                    console.log(error);
                });
                
            },
            handleCountdownProgress(data) {
                this.set_time = data.totalMilliseconds;
            },
            handleAbort(data) {
            },
            addTime(){
                this.set_time = 2  * 60 * 1000;
                this.added_time = true;
            },
            enqueueLead(lead_id = ''){
                var vm = this;

                var end_point_choice = '/leads/get/' + lead_id;
              
                vm.show_page_loader = true;

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
                        vm.added_time = false;
                        vm.continues = false;
                        
                        Fire.$emit('AfterLeadEnqueue', {'lead_id' : vm.lead_info.id, 'contact_number' : vm.lead_info.phone_number });

                        vm.show_page_loader = false;
                        vm.$Progress.finish();

                        if(vm.role_id == vm.dialer_settings.applies_to_role && vm.dialer_settings.value == 'on'){ 
                            axios.get('/calls/token').then(function (response) {
                                console.log('Token',response.data.token);
                                // Setup Twilio.Device
                                Device.setup(response.data.token);
            
                                Device.on('ready',function (device) {
                                    vm.call_status = 'Device Ready';

                                    vm.$refs.callBtn.click();
                                });

                                Device.on('error',function (error) {
                                    vm.call_status = 'Device Error: ' + error.message;
                                });

                                Device.on('connect',function (conn) {
                                    vm.call_status = 'Successfully established call';
                                    vm.call_back.call_sid = conn.parameters.CallSid;
                                    axios.post('/calls/create-call-record', {'lead_id' : vm.lead_info.id, 'call_sid' : conn.parameters.CallSid}).then(function (response) {
                                        
                                    }).catch(function (error) {                    
                                        console.log(error);
                                    });
                                });

                                Device.on('incoming', function (conn) {
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

                                Device.on('disconnect',function (conn) {
                                    vm.call_status = 'Call Disconnected';
                                    vm.$refs['final-call-step'].show();
                                });

                                vm.$Progress.finish();
                                
                            }).catch(function (error) {                    
                                console.log(error);
                            });
                        }

                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            },
            startCall() {
                var vm = this;
                this.idle = true;
                this.show_edication_blocks = true;
                this.general = false;
                var audioCtx = new AudioContext();
                
                audioCtx.resume();

                Fire.$emit('InitiateCall');

                var form_data = {
                    lead_id : vm.lead_info.id,
                    is_client : vm.lead_info.is_client,
                    lead_owner : vm.lead_info.user_created_id,
                    lead_assignee : vm.lead_info.user_assigned,
                    // phone_number : vm.lead_info.contact_number,
                    phone_number : '+27738802485',
                }
                
                Device.connect(form_data);
            },
            endCall() {
                var vm = this;

                Device.disconnectAll(function (conn) {
                    vm.call_status = 'Call ended!';

                    axios.post('/calls/create-call-record', {'lead_id' : vm.lead_info.id, 'call_sid' : conn.parameters.CallSid}).then(function (response) {
                         
                    }).catch(function (error) {                    
                        console.log(error);
                    });
                });
                vm.idle = true;
                vm.show_edication_blocks = true;
                vm.general = false;
                vm.minimized = false;
                this.$refs['final-call-step'].show();
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
                    vm.$swal('Please note','Please choose a lead status to proceed [+]','warning');
                    vm.choose_comment_type = true;
                    return false;
                }

                var form_data = {
                        id : this.lead_info.id,
                        type: 'lead',
                        comment_id: this.comment.id,
                        comment_type: this.comment.comment_type,
                        description: this.comment.comment_description
                    }

                if(vm.edit_comment == true){
                    var endpoint = '/comments/update';
                }else{
                    var endpoint = '/comments/add';
                }

                vm.$Progress.start();

                axios.post(endpoint, form_data).then(function (response) {
                    
                    if(response.data.success == true){
                        vm.enqueueLead(vm.lead_info.id);
                        vm.Toast.fire({ type: 'success', title: response.data.message });
                        vm.edit_comment = false;
                        vm.continues = true;
                        vm.$Progress.finish();
                    }else{
                        vm.$Progress.fail();
                        if(response.data.message == 'Please edit existing comment.'){
                            vm.edit_comment = true;
                        }
                        vm.$swal('Failed', response.data.message,'warning');
                    }
                });
            },
            editComment(in_comment){
                this.edit_comment = true;
                this.comment.id = in_comment.id;
                this.comment.comment_description = in_comment.description;
                this.comment.comment_type = in_comment.comment_type;
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
                
                if(diffDays <= 1){
                    date_string = 'Today';
                }else if(diffDays > 1 && diffDays <= 7){
                    date_string = diffDays + ' Days ago';
                }else if(diffDays == 7){
                    date_string = '1 Week ago';
                }else if(diffDays >= 7 ){
                    date_string = second_date;
                }
                return date_string;
            }
        }
    }
</script>
