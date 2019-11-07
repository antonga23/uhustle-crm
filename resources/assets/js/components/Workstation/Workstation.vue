<style scoped>
#workstation .general-section-stats,
#workstation .scripts {
  height: 100vh;
  overflow-y: scroll;
}
.general-section-stats .agent-stats-1 {
  padding-top: 69px;
  padding-left: 5%;
  padding-right: 5%;
}
.general-section-stats .agent-stats-2 {
  padding-left: 5%;
  padding-right: 5%;
  padding-bottom: 30px;
}
.scripts {
  padding-left: 3%;
  padding-right: 3%;
}
.top-section .col {
  padding: 0 10px;
  /* border-left: 1px solid rgba(0,52,73,1);  
  min-height: 71px; 
  margin-bottom: 57px; */
  min-width: 150px;
}
.top-section .bottom {
  font-size: 0.83vw;
  font-weight: 700;
  letter-spacing: 0.05em;
  color: #393a60;
}
.top-section .top {
  font-size: 0.63vw;
  color: #747577;
  letter-spacing: 0.05em;
  font-family: "Rubik", sans-serif;
  margin-bottom: 0;
}

.border-top-grey {
  border-top: 1px solid #ededee;
}
.border-right-grey {
  border-right: 1px solid #ededee;
}

div.col-6:last-child, div.col-6:nth-last-child(2)  {
  border-bottom: 1px solid #ededee;
}

.p12-25 {
  padding: 12px 25px;
}

.card {
  border-radius: 25px;
}
.client-details .card-title {
  margin-bottom: 0.75rem;
  padding-bottom: 0.5rem;
  border-bottom: 1px solid #fff;
  font-size: 14px;
  font-family: "Rubik", sans-serif;
  letter-spacing: 0.05em;
}
.client {
  background: linear-gradient(
    to right,
    rgba(255, 164, 128, 1) 0%,
    rgba(255, 128, 134, 1) 100%
  );
}
.product {
  background: linear-gradient(
    to right,
    rgba(159, 204, 226, 1) 0%,
    rgba(4, 149, 240, 1) 100%
  );
}
.activity {
  background: linear-gradient(
    to right,
    rgba(221, 192, 241, 1) 0%,
    rgba(160, 117, 209, 1) 100%
  );
}
.time {
  background: linear-gradient(
    to right,
    rgba(101, 215, 207, 1) 0%,
    rgba(111, 148, 211, 1) 100%
  );
}
h5 {
  color: #fff;
}
h5 .icon {
  width: 15px;
  margin: -5px 15px 0 0;
}
p.card-text {
  font-size: 32px;
  color: #fff;
  font-weight: bolder;
  line-height: 1em;
}
p.card-link {
  font-size: 16px;
  color: #fff;
}
.client-details {
  background-image: linear-gradient(180deg, #fff 30%, #f6f8f9 30%);
  padding-left: 3%;
  padding-right: 3%;
  padding-bottom: 30px;
}
.client-details .card {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
.client-details .card-body {
  padding: 1.25rem;
}
.stats.final-modal {
  background-color: #f6f8f9;
  padding-left: 3%;
  padding-right: 3%;
  padding-bottom: 3%;
}
.stats .card h5 {
  color: #818284;
}
.stats .card h5 .icon {
  width: 25px;
  margin: -5px 15px 0 0;
}
.stats .card .card-title {
  margin-bottom: 0.75rem;
  padding-bottom: 0.75rem;
  border-bottom: 1px solid #cdcdcf;
}
span.right {
  float: right;
}
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.comments-list {
  max-height: 290px;
  overflow-y: auto;
}
.agent-comments {
  border-color: #cdcdcf;
  padding: 10px 0;
}
.comment-abbr {
  font-size: 0.95vw;
  color: #003449;
  letter-spacing: 0.1em;
}
.comments-length {
  font-family: "Rubik", sans-serif;
  font-size: 0.7vw;
  color: #999999;
}
.comment-notes {
  font-size: 0.63vw;
  font-family: "Rubik", sans-serif;
  color: #7f99a4;
}
.author {
  font-size: 10px;
  color: #7f99a4;
}
.notes-capture,
.callback-capture {
  background: #f4f4f4;
  border-radius: 50rem;
  height: 50px;
}
.notes-capture {
  margin-top: 8.7%;
}
.choose-comment-type {
  height: 50px;
  width: 50px;
  padding: 11px;
  margin: 0 10px 0 0;
  background: #f4f4f4;
  border-radius: 50rem !important;
  cursor: pointer;
}

.comment-desc {
  height: 50px;
  padding: 11px;
  margin: 0;
  border-radius: 9px;
  background: #f4f4f4;
  cursor: pointer;
  float: left;
}
.comment-desc::placeholder {
  font-size: 0.63vw;
  font-family: "Rubik", sans-serif;
  color: #999;
  font-style: italic;
}
.keys {
  letter-spacing: 0.05em;
  font-family: "Rubik", sans-serif;
  font-size: 8px;
  color: #808080;
}
.callback-label {
  color: #666;
  letter-spacing: 0.05em;
  font-size: 12px;
  font-family: "Rubik", sans-serif;
}
#submit-btn img {
  margin-top: -15px;
  margin-right: -15px;
}
.btn-secondary {
  color: #fff;
  background-color: #f6f8f9;
  border-color: #f6f8f9;
}
.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #f6f8f9;
  border-color: #f6f8f9;
}
#chartjs-size-monitor #bar-chart {
  height: 318px !important;
}
.call-progress-div {
  margin-left: -54px;
  margin-right: -65px;
  padding: 3% 34px 0;
  background-image: url(/images/call/Call_Background.svg) !important;
  background-size: cover;
  background-repeat: no-repeat;
  max-height: 120vh;
  transition: all 500ms ease;
}
.call-progress-div .top-animation {
  padding: 7px;
  background-image: url(/images/call/Call_Logo.svg) !important;
  background-size: 75%;
  background-position: center;
  background-repeat: no-repeat;
  height: 186px;
}
.tip {
  margin-bottom: 40px;
  background-size: 20%;
  background-repeat: no-repeat;
  background-position: center 1px;
  margin-bottom: 40px;
  padding-top: 30px;
}
.tip p.step {
  border-bottom: 1px solid #fff;
  margin-bottom: 10px;
  color: #fff;
  margin: 0;
  letter-spacing: 3px;
}
.tip p.tip-text {
  margin-bottom: 20px;
}
.tip h1 {
  color: #fff;
  font-size: 1.6rem;
  letter-spacing: 6px;
  margin-top: 19px;
}
.tip p.tip-text {
  margin-bottom: 10px;
  color: #fff;
  margin: 0;
  letter-spacing: 3px;
}
.tip-a {
  background-image: url("/images/call/1@4x.png") !important;
  background-size: 12% !important;
}
.tip-b {
  background-image: url("/images/call/2@4x.png") !important;
}
.tip-c {
  background-image: url("/images/call/3@4x.png") !important;
}
.tip-d {
  background-image: url("/images/call/4@4x.png") !important;
}
.tip-e {
  background-image: url("/images/call/5@4x.png") !important;
}
.tip-f {
  background-image: url("/images/call/6@4x.png") !important;
}

.verticalChart {
  background-image: url("/images/graph_grid.png") !important;
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
  background: #89cff0;
  color: #003449;
}
.verticalChart .singleBar .bar .value span {
  position: absolute;
  font-size: 12px;
  bottom: 0;
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
  font-family: "Montserrat", sans-serif;
}
div.scripts-div {
  max-height: 880.84px;
  transition: all 500ms ease;
}
div.collapsed {
  max-height: 35px;
  overflow: hidden;
  padding: 0px;
  background-color: transparent;
}
p.minimize {
  position: relative;
  text-align: right;
  width: 100%;
  top: -38px;
  right: -62px;
  color: #fff;
}
div.collapsed p.minimize {
  position: relative;
  text-align: right;
  width: 100%;
  top: -1px;
  right: 14px;
  color: #fff;
}
p.minimize a,
p.maximize a {
  color: #fff;
  font-weight: 900;
}
.scripts p.heading {
  font-size: 17px;
  border-bottom: 1px solid #003449;
  margin-bottom: 18px;
  color: #003449;
  letter-spacing: 1.42px;
  padding-bottom: 9px;
}
.scripts .card {
  border: 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.scripts .card-body {
  flex: 1 1 auto;
  padding: 3.25rem;
  text-align: center;
}
.scripts .card-body p {
  color: #fff;
  border-bottom: 1px solid #fff;
  padding-bottom: 5px;
  font-size: 32px;
  letter-spacing: 4.42px;
}

.idle-div {
  margin-left: -54px;
  margin-right: -65px;
  padding: 3% 6%;
  /* background-image: url('/images/call/Call_Background.svg') !important; */
  background-size: 100%;
  background-repeat: no-repeat;
  transition: all 500ms ease;
}
.idle-div .top-animation {
  padding: 7px;
  background-image: url("/images/Idle_Pages_Assest/Asset 11900.svg") !important;
  background-size: 100%;
  background-position: center;
  background-repeat: no-repeat;
  height: 600px;
}
.top-animation-minimized {
  padding: 7px;
  background-image: url("/images/Idle_Pages_Assest/Asset 11900.svg") !important;
  background-size: 33%;
  background-position: center;
  background-repeat: no-repeat;
  height: 133px;
}
.idle-footer {
  margin: 0 auto;
  text-align: center;
}
.idle-footer p {
  margin: 0 auto;
  text-align: center;
  font-size: 12px;
  color: #9fb3bb;
}
a.down-scroll {
  transition: all 200ms ease;
}
a.down-scroll:hover {
  margin-top: 5px;
}
.btn-active:hover {
  background: #00344a;
  color: #ffffff;
  border: none !important;
  padding: 6px 25px 6px 18px;
  font-size: 12px;
  font-weight: 700;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}
.btn-active {
  background: #ffffff;
  color: #00344a;
  padding: 6px 25px 6px 18px;
  font-size: 12px;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
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
    -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
  }
  70% {
    -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
  }
  100% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 147, 58, 1);
  }
}
@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
    box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
  }
  70% {
    -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
    box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
  }
  100% {
    -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
    box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
  }
}
.stats.final-modal .card {
  border-radius: 0;
  background: transparent;
}
.stats.final-modal .tab-card-header {
  background: transparent;
}
.stats.final-modal .tab-content {
  padding-top: 12px;
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;
  background-color: #fff;
  box-shadow: 0 0 20px 10px #e6e6e6;
  -webkit-box-shadow: 0 0 20px 10px #e6e6e6;
  -moz-box-shadow: 0 0 20px 10px #e6e6e6;
  -o-box-shadow: 0 0 20px 10px #e6e6e6;
}
.stats.final-modal .tab-pane {
  padding: 2.5% 8.5% 5%;
}
.final-modal .row-a {
  border-bottom: 1px solid #e3e3e3;
}
.final-modal label button img {
  width: 20px;
  margin-right: 15px;
}
.final-modal .navbar-nav .nav-item {
  font-size: 55px;
  color: #ff933a;
}
.final-modal .card-header {
  border-top-left-radius: 19px;
  border-top-right-radius: 19px;
  padding: 0 11px 11px;
  border-color: transparent;
}
.final-modal .card-header a[aria-selected="true"] {
  border-bottom: none;
}
.final-modal .nav.nav-tabs.card-header-tabs .nav-link .icon {
  padding-top: 18px;
  padding-bottom: 18px;
}
.nav.nav-tabs.card-header-tabs li a {
  border: 0;
  color: #7f8080;
  letter-spacing: 0.05em;
  text-align: center;
  padding-top: 0;
  padding-bottom: 0;
}
.nav.nav-tabs.card-header-tabs .nav-link[aria-selected="true"] {
  box-shadow: -5px -10px 10px #e6e6e6, 5px -10px 10px #e6e6e6;
  -webkit-box-shadow: -5px -10px 10px #e6e6e6, 5px -10px 10px #e6e6e6;
  -moz-box-shadow: -5px -10px 10px #e6e6e6, 5px -10px 10px #e6e6e6;
  -o-box-shadow: -5px -10px 10px #e6e6e6, 5px -10px 10px #e6e6e6;
  background-color: #fff;
  border-top-left-radius: 25px;
  border-top-right-radius: 25px;
}
.activities .card-header,
.deals .card-header {
  background: #fff;
}
.activities .card-header-tabs,
.deals .card-header-tabs {
  box-shadow: inset 0 -10px 10px #f5f5f5;
}
.deals #eight p {
  font-size: 10px;
  letter-spacing: 0.05em;
  color: 808080;
}
.deals #eight label {
  font-size: 10px;
  letter-spacing: 0.05em;
  color: #999999;
  font-family: "Rubik", sans-serif;
}
.deals #eight input,
.deals #eight textarea,
.deals #eight select {
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  color: #003449;
  letter-spacing: 0.05em;
  font-family: "Rubik", sans-serif;
  font-size: 12px;
  padding: 10px 20px !important;
}
.deals #eight textarea {
  border-radius: 25px;
  height: 94px !important;
}
.deals #eight .custom-select {
  height: auto;
}
.deals #eight .cancel-deal {
  border-radius: 50rem !important;
  font-size: 10px;
  text-transform: uppercase;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.05);
  letter-spacing: 0.05em;
  color: #999999;
  padding: 9px;
}
.deals #eight .save-deal {
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  font-weight: 700;
  padding: 9px;
}
.nav-tabs .nav-link span {
  font-size: 0.73vw;
  padding-left: 10px;
}
#two .col-lg-4 {
  margin-top: 6.5%;
}
#two .callback-legend {
  margin-bottom: 18.5%;
}
#two .col-lg-4 .today,
#two .col-lg-4 .recommended-call {
  margin-bottom: 14px;
}
#two label {
  color: rgb(129, 130, 132);
  font-size: 0.68vw;
  font-weight: 200;
}
#two .col-lg-8 {
  padding-left: 7.8%;
}
.vc-reset,
.vc-reset * {
  border-style: none !important;
  border-color: transparent !important;
}
.vc-h-full .vc-rounded-full {
  border-radius: 5px !important;
}
.scroll-hidden {
  overflow-y: scroll;
  height: 70vh;
  padding-top: 6px;
  padding-right: 3%;
  padding-bottom: 6px;
  padding-left: 3%;
}
.summary p {
  font-family: "Rubik", sans-serif;
  font-size: 0.7vw;
  color: #999999;
}
.stat-perc {
  letter-spacing: 0.1em;
  font-size: 0.85vw;
  color: #808080;
}
.summary-abr {
  letter-spacing: 0.05em;
  color: #333333;
  font-family: "Rubik", sans-serif;
  font-size: 0.95vw;
}
.progress-bar {
  background: #e6e6e6;
  border-radius: 5px;
  height: 12px;
}
.tank {
  background: linear-gradient(to right, #00ffdd 0%, #5a6ff0 100%) !important;
  border-radius: 5px;
  background: rgb(114, 218, 126);
  height: 12px;
  transition: all 0.5s ease 0s;
}
.email-desc {
  letter-spacing: 0.05em;
  color: #999999;
  font-size: 0.63vw;
  font-family: "Rubik", sans-serif;
}
#four .text-uppercase.font-weight-bold {
  color: #808080;
  letter-spacing: 0.05em;
  font-size: 0.73vw;
}
#four .btn-default {
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  font-family: "Rubik", sans-serif;
  font-size: 0.63vw;
  letter-spacing: 0.05em;
  border-radius: 50rem !important;
}
#four textarea {
  background-color: #f9f9f9;
  border-radius: 10px;
  height: 163px !important;
  overflow-y: auto;
}
#four textarea::placeholder {
  color: #999999;
  font-size: 0.63vw;
  font-family: "Rubik", sans-serif;
  font-style: italic;
}

.scroll-hidden {
  overflow-y: scroll;
  height: 70vh;
  /* padding-top: 6px; */
  padding-right: 6px;
  width: 100%;
}
.dropdown-menu {
  width: 191px;
  padding: 17px;
  font-size: 13px;
}
.comment_review p {
  width: 100%;
}
.calendar-heading {
  font-size: 0.73vw;
  letter-spacing: 0.05em;
  color: #666666;
  border-color: #ccc;
}
.dropdown-menu.show {
  border-radius: 25px;
  border: 0;
  padding: 10px 20px 15px 15px;
  color: #818284;
  font-family: "Rubik", sans-serif;
  font-size: 16px;
}
</style>  
<template>
  <div id="workstation">
    <!-- Scripts Section Starts -->
    <div class="scripts" v-if="scripts == true">
      <scripts />
    </div>
    <!-- Scripts Section ends -->

    <!-- General Section Starts -->
    <div class="general-section-stats" v-if="general == true">
      <div class="row mx-0 pb-4 justify-content-between top-section agent-stats-1">
        <div class="col-6" v-for="(custom_field, index) in item_custom_fields" :key="index">
          <div class="2" v-for="(item, name, i) in module_item" :key="i">
            <div class="3" v-if="item.custom_field_id == custom_field.id">
              <div
                class="row mx-1 border-top-grey"
                v-if="name == 'source' && item.meta_value !== null"
              >
                <div class="col-4 border-right-grey p12-25 top">
                  <p class="top">{{ custom_field.display_name }}</p>
                </div>
                <div class="col-8 p12-25 bottom truncate">
                  <p class="bottom mb-0">{{ item.meta_value.name }}</p>
                </div>
              </div>
              <div
                class="row mx-1 border-top-grey"
                v-else-if="name == 'product' && item.meta_value !== null"
              >
                <div class="col-4 border-right-grey p12-25 top">
                  <p class="top">{{ custom_field.display_name }}</p>
                </div>
                <div class="col-8 p12-25 bottom truncate">
                  <p class="bottom mb-0">{{ item.meta_value.name }}</p>
                </div>
              </div>
              <div
                class="row mx-1 border-top-grey"
                v-else-if="(name == 'assignee' || name == 'owner') && item.meta_value !== null"
              >
                <div class="col-4 border-right-grey p12-25 top">
                  <p class="top">{{ custom_field.display_name }}</p>
                </div>
                <div class="col-8 p12-25 bottom truncate">
                  <p class="bottom mb-0">{{ item.meta_value.name + ' ' + item.meta_value.surname }}</p>
                </div>
              </div>
              <div
                class="row mx-1 border-top-grey truncate"
                v-else-if="name == 'email' && item.meta_value !== null"
              >
                <div class="col-4 border-right-grey p12-25 top">
                  <p class="top">{{ custom_field.display_name }}</p>
                </div>
                <div class="col-8 p12-25 bottom truncate">
                  <p class="bottom mb-0">{{ item.meta_value }}</p>
                </div>
              </div>
              <div class="row mx-1 border-top-grey" v-else-if="item.meta_value !== null">
                <div class="col-4 border-right-grey p12-25 top">
                  <p class="top">{{ custom_field.display_name }}</p>
                </div>
                <div class="col-8 p12-25 bottom truncate">
                  <p class="bottom mb-0">{{ item.meta_value }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck client-details mx-0">
        <div class="card border-0 mb-0 ml-0 client">
          <div class="card-body">
            <h5 class="card-title">
              <img src="/images/workstation/D_A@4x.png" alt="Icon" class="icon" />
              Client
            </h5>
            <p
              class="card-text truncate mb-2"
              :title="module_item.name.meta_value + ' ' + module_item.surname.meta_value"
            >{{ module_item.name.meta_value + ' ' + module_item.surname.meta_value }}</p>
            <div class="truncate w-100">
              <p
                v-if="module_item.age.meta_value"
                class="card-link d-inline border-right border-white pb-3 pr-3"
              >{{ module_item.age.meta_value }}</p>
              <p
                v-if="module_item.country.meta_value"
                class="card-link d-inline border-right border-white ml-0 pb-3 px-3"
              >{{ module_item.country.meta_value }}</p>
              <p
                v-if="module_item.city.meta_value"
                class="card-link d-inline ml-0 pb-3 pl-3"
              >{{ module_item.city.meta_value }}</p>
            </div>
          </div>
        </div>

        <div class="card border-0 product mb-0">
          <div class="card-body">
            <h5 class="card-title">
              <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" />
              Product
            </h5>
            <p
              class="card-text truncate mb-2"
              :title="module_item.product.meta_value.description + '. ' + module_item.product.meta_value.price "
            >{{ module_item.product.meta_value.name }}</p>
            <p
              class="card-link truncate w-100 mb-0"
              :title="module_item.product.meta_value.description + '. ' + module_item.product.meta_value.currency + module_item.product.meta_value.price"
            >{{ module_item.product.meta_value.description + '. ' + module_item.product.meta_value.currency + module_item.product.meta_value.price }}</p>
          </div>
        </div>

        <div class="card border-0 mb-0 activity">
          <div class="card-body">
            <h5 class="card-title">
              <img src="/images/workstation/S_A@4x.png" alt="Icon" class="icon" />
              Last Called by
            </h5>
            <p class="card-text mb-2">John Hill</p>
            <p class="card-link mb-0">21-05-2019</p>
          </div>
        </div>

        <div class="card border-0 mb-0 mr-0 time">
          <div class="card-body">
            <h5 class="card-title">
              <img src="/images/workstation/Time_Icon@4x.png" alt="Icon" class="icon" />
              Time
            </h5>
            <p class="card-text mb-2">11:20</p>
            <div class="truncate">
              <p
                v-if="module_item.city.meta_value"
                class="card-link d-inline border-right border-white pb-3 pr-3"
              >{{ module_item.city.meta_value }}</p>
              <p
                v-if="module_item.country.meta_value"
                class="card-link d-inline ml-0 pb-3 pl-3"
              >{{ module_item.country.meta_value }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="stats final-modal">
        <div class="card-deck mx-0 mb-0">
          <div class="card mt-3 border-0 shadow-none mr-4 ml-0 tab-card">
            <div class="card-header tab-card-header border-bottom-0">
              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item left w-50">
                  <a
                    class="nav-link active"
                    id="one-tab"
                    data-toggle="tab"
                    href="#one"
                    role="tab"
                    aria-controls="One"
                    aria-selected="true"
                  >
                    <img
                      src="/images/icons/workstation/Agent Notes.svg"
                      alt="Icon"
                      class="icon"
                      width="13%"
                    />
                    <span>Agent Notes</span>
                  </a>
                </li>

                <li class="nav-item right w-50">
                  <a
                    class="nav-link"
                    id="two-tab"
                    data-toggle="tab"
                    href="#two"
                    role="tab"
                    aria-controls="Two"
                    aria-selected="false"
                  >
                    <img
                      src="/images/icons/workstation/Schedule Callback.svg"
                      alt="Icon"
                      class="icon"
                      width="13%"
                    />
                    <span>Schedule Callback</span>
                  </a>
                </li>
              </ul>
            </div>

            <div class="tab-content h-100" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="one"
                role="tabpanel"
                aria-labelledby="one-tab"
              >
                <div class="notes-roll">
                  <p class="text-right comments-length">{{ comments.comments.length }} comments</p>
                  <div class="comments-list" v-if="!review_comment">
                    <div
                      class="row border-top mx-0 align-items-end agent-comments"
                      v-for="comment in comments.comments"
                      :key="comment.id"
                    >
                      <div class="col-2 pl-0">
                        <p class="font-weight-bold mb-0 comment-abbr">{{ comment.comment_type }}</p>
                      </div>

                      <div class="col">
                        <p class="mb-0 comment-notes">{{ comment.description }}</p>
                      </div>

                      <div class="col-auto">
                        <p class="mb-0 author">
                          {{ comment.created_at }}
                          <br />
                        </p>
                      </div>
                    </div>
                  </div>

                  <a-card class="w-100 border-0" v-else>
                    <template v-slot:title>
                      <p class="text-uppercase text-center mb-0">Comment Posted</p>
                    </template>

                    <div class="row mx-0 mb-0 comment_review">
                      <p class="review-desc">Tag:</p>
                      <p class="d-inline-content review-content">
                        {{ comment.comment_type.short }}
                        <span>( {{ comment.comment_type.long }} )</span>
                      </p>

                      <p class="review-desc">Comment:</p>
                      <p class="d-inline-content review-content">{{ comment.comment_description }}</p>
                    </div>
                    <div class="row mx-0 justify-content-end">
                      <a-button
                        type="default"
                        html-type="submit"
                        @click="review_comment = false"
                        class="rounded-pill text-uppercase"
                      >Cancel</a-button>
                      <a-button
                        type="primary"
                        html-type="submit"
                        @click="addComment"
                        class="rounded-pill text-uppercase font-weight-bold"
                      >Confirm</a-button>
                    </div>
                  </a-card>
                </div>

                <div class="d-flex notes-capture" v-if="!review_comment">
                  <div class="flex-shrink-1">
                    <div class="col pl-0 dropdown">
                      <b-button
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        :class="{ 'choose-comment-type d-block': true, 'pulse' : choose_comment_type }"
                      >
                        <img
                          src="/images/workstation/Asset 28@4x.png"
                          alt="Icon"
                          class="icon w-100"
                        />
                      </b-button>
                      <div class="dropdown-menu">
                        <div class="d-block">
                          <div class="row mx-0">
                            <div
                              class="col-lg-12"
                              v-for="(type, index) in comment_types"
                              :key="index"
                            >
                              <b-form-radio
                                v-model="comment.comment_type"
                                name="some-radios"
                                :value="type"
                              >{{ type.long }}</b-form-radio>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1 mr-2">
                    <input
                      class="comment-desc d-block w-100 border-0"
                      type="text"
                      v-model="comment.comment_description"
                      placeholder="Write comment here"
                    />
                  </div>
                  <div class="flex-shrink-1">
                    <button
                      id="submit-btn"
                      type="submit"
                      class="btn p-0 m-0"
                      @click="prepComment()"
                    >
                      <img
                        src="/images/icons/workstation/Submit.svg"
                        alt="Icon"
                        class="icon"
                        width="76"
                      />
                    </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                <div class="row mx-0 mb-0">
                  <div class="col-lg-4 px-0">
                    <div class="row mx-0 callback-legend">
                      <div class="col-7 px-0">
                        <div class="row mx-0 align-items-center today">
                          <div class="col-auto px-0">
                            <img src="/images/icons/circle.svg" alt="Icon" class="icon" width="17" />
                          </div>

                          <div class="col pr-0 pl-2">
                            <p class="keys mb-0">Today</p>
                          </div>
                        </div>

                        <div class="row mx-0 align-items-center">
                          <div class="col-auto px-0">
                            <img
                              src="/images/icons/grey dot.svg"
                              alt="Icon"
                              class="icon"
                              width="17"
                              style="vertical-align: baseline;"
                            />
                          </div>

                          <div class="col pr-0 pl-2">
                            <p class="keys mb-0">Recommended Callback</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-5 pr-0">
                        <div class="row mx-0 align-items-start recommended-call">
                          <div class="col-auto px-0">
                            <img
                              src="/images/icons/blue dot.svg"
                              alt="Icon"
                              class="icon"
                              width="8"
                              style="vertical-align: text-top;"
                            />
                          </div>

                          <div class="col pr-0 pl-2">
                            <p class="keys mb-0">Scheduled Callbacks</p>
                          </div>
                        </div>

                        <div class="row mx-0 align-items-start">
                          <div class="col-auto px-0">
                            <img
                              src="/images/icons/Orange Dot_Big.svg"
                              alt="Icon"
                              class="icon"
                              width="8"
                              style="vertical-align: text-top;"
                            />
                          </div>
                          <div class="col pr-0 pl-2">
                            <p class="keys mb-0">Tasks</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }"
                    >
                      <label class="control-label p-0 callback-label">
                        Date of Callbacks
                        <a-date-picker
                          v-model="selected_date"
                          format="DD-MM"
                          :allowEmpty="false"
                          @change="checkCBDate()"
                          class="rounded-pill"
                        />
                      </label>
                    </div>

                    <div
                      :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }"
                    >
                      <label class="control-label pl-0 callback-label">
                        Time of Callback
                        <a-time-picker
                          v-model="selected_time"
                          :allowEmpty="false"
                          use24Hours
                          format="hh:mm"
                        />
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-8 pr-0">
                    <p class="border-bottom calendar-heading mb-0 pb-2">Callback Calendar</p>
                    <vc-date-picker
                      v-model="dates"
                      mode="multiple"
                      is-inline
                      is-expanded
                      :min-date="new Date()"
                      :max-date="max_date"
                      color="orange"
                    />
                  </div>
                </div>

                <div class="d-flex callback-capture">
                  <div class="flex-grow-1">
                    <input
                      class="comment-desc d-block w-100 border-0 rounded-pill"
                      type="text"
                      v-model="call_back.note"
                      placeholder="Write notes here"
                    />
                  </div>
                  <div class="flex-shrink-1">
                    <button
                      id="submit-btn"
                      type="submit"
                      class="btn p-0 m-0"
                      @click="addCallback()"
                    >
                      <img
                        src="/images/icons/workstation/Submit.svg"
                        alt="Icon"
                        class="icon"
                        width="76"
                      />
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card shadow-none mt-3 mr-0 ml-4 border-0 tab-card">
            <div class="card-header tab-card-header border-bottom-0">
              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item left w-50">
                  <a
                    class="nav-link active"
                    id="three-tab"
                    data-toggle="tab"
                    href="#three"
                    role="tab"
                    aria-controls="Three"
                    aria-selected="true"
                  >
                    <img
                      src="/images/icons/workstation/Feeback Summary.svg"
                      alt="Icon"
                      class="icon"
                      width="13%"
                    />
                    <span class="left w-50">Feedback Summary</span>
                  </a>
                </li>
                <li class="nav-item right w-50">
                  <a
                    class="nav-link"
                    id="four-tab"
                    data-toggle="tab"
                    href="#four"
                    role="tab"
                    aria-controls="Four"
                    aria-selected="false"
                  >
                    <img
                      src="/images/icons/workstation/Email Client.svg"
                      alt="Icon"
                      class="icon"
                      width="13%"
                    />
                    <span class="left">Email Client</span>
                  </a>
                </li>
              </ul>
            </div>

            <div class="tab-content h-100" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="three"
                role="tabpanel"
                aria-labelledby="three-tab"
              >
                <div class>
                  <div class="row mx-0 justify-content-between align-items-center summary">
                    <div class="col-auto pl-0">
                      <p>{{ comments.total_comments }} review(s)</p>
                    </div>

                    <div class="col-auto px-0">
                      <div class="row mx-0 mb-0">
                        <div class="col-auto px-0">
                          <p>Called: {{ comments.total_calls }}</p>
                        </div>
                        <div class="col-auto pr-0">
                          <p>Answered: {{ comments.total_answered_calls }}</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    v-for="(stat, index) in comments.comments_graph"
                    :key="index"
                    class="row mx-0 mb-1 align-items-center"
                  >
                    <div class="col-12 px-0">
                      <div class="row mx-0 mb-0 align-items-center">
                        <div class="col-12 align-content-end px-0">
                          <p class="text-right mb-0 stat-perc">{{ stat.percentage }}%</p>
                        </div>

                        <div class="col px-0">
                          <p class="mb-0 summary-abr">{{ stat.type }}</p>
                        </div>

                        <div class="col-11 pr-0 pl-4">
                          <div class="progress-bar w-100">
                            <span class="tank" :style="{width: + stat.percentage + '%'}"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                <p
                  class="email-desc font-weight-light font-italic"
                >Choose a template or write your own email to Client</p>

                <div class="row mx-0 align-items-center">
                  <div class="col-auto pl-0">
                    <p class="text-uppercase font-weight-bold mb-2">Templates:</p>
                  </div>
                  <div class="col-auto pl-0 mb-2 pr-1">
                    <button
                      type="submit"
                      class="btn btn-default m-0 border-0 text-capitalize"
                      @click
                    >Introduce Stock</button>
                  </div>
                  <div class="col-auto mb-2 px-1">
                    <button
                      type="submit"
                      class="btn btn-default m-0 border-0 text-capitalize"
                      @click
                    >First time sell</button>
                  </div>
                  <div class="col-auto mb-2 px-1">
                    <button
                      type="submit"
                      class="btn btn-default m-0 border-0 text-capitalize"
                      @click
                    >Up sell</button>
                  </div>
                  <div class="col-auto mb-2 pr-0 pl-1">
                    <button
                      type="submit"
                      class="btn btn-default m-0 border-0 text-capitalize"
                      @click
                    >Extra Info</button>
                  </div>
                </div>

                <textarea
                  id="message-body"
                  name="message"
                  class="form-control border-0"
                  placeholder="Write comment here..."
                />

                <div class="flex-shrink-1 text-right">
                  <button
                    id="submit-btn"
                    type="submit"
                    class="btn p-0 mb-0 mx-0"
                    @click="sendEmail()"
                  >
                    <img
                      src="/images/icons/workstation/Submit.svg"
                      alt="Icon"
                      class="icon"
                      width="76"
                    />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Activities Starts -->
        <!-- Yong <div class="row mx-0 mb-0 activities">  
          <div class="col-lg-12 px-0">  
            <div class="card shadow-none mt-3 border-0 tab-card">  
              <div class="card-header tab-card-header border-bottom-0 pt-0 px-0">  
                <ul class="nav nav-tabs card-header-tabs mx-0" id="myTab" role="tablist">  
                  <li class="nav-item">  
                    <a  
                      class="nav-link active"  
                      id="one-tab"  
                      data-toggle="tab"  
                      href="#five"  
                      role="tab"  
                      aria-controls="Five"  
                      aria-selected="true" 
                    >  
                      <img  
                        src="/images/icons/workstation/Open Activities.svg"  
                        alt="Icon"  
                        class="icon"  
                        width="13%" 
                      />  
                      <span>Open Activities</span>  
                    </a>  
                  </li>  
 
                  <li class="nav-item">  
                    <a  
                      class="nav-link"  
                      id="two-tab"  
                      data-toggle="tab"  
                      href="#six"  
                      role="tab"  
                      aria-controls="Six"  
                      aria-selected="false" 
                    >  
                      <img  
                        src="/images/icons/workstation/Closed Activities.svg"  
                        alt="Icon"  
                        class="icon"  
                        width="13%" 
                      />  
                      <span>Closed Activities</span>  
                    </a>  
                  </li>  
                </ul>  
              </div>  
 
              <div class="tab-content" id="myTabContent">  
                <div  
                  class="tab-pane fade show active"  
                  id="five" role="tabpanel"  
                  aria-labelledby="one-tab" 
                >  
                  <b-table  
                    hover  
                    :items="activityItems"  
                    :per-page="perPage" 
                    :current-page="currentPage" 
                    sticky-header 
                  > 
                    <template v-for="item in activityItems" v-slot:cell(statusColor)="data"> 
                      <p>hi {{ data.item.statusColor }}</p> 
                    </template> 
                  </b-table> 
 
                  <b-pagination 
                    v-model="currentPage" 
                    :total-rows="rows" 
                    :per-page="perPage" 
                    aria-controls="my-table" 
                  ></b-pagination>              
                </div> 
 
                <div  
                  class="tab-pane fade"  
                  id="six"  
                  role="tabpanel"  
                  aria-labelledby="two-tab" 
                >   
                  <b-table hover :items="activityItems" per-page="5"> 
                    <template v-slot:cell(statusColor)="data"> 
                      <p :style="{color: statusColor}">hi</p> 
                    </template> 
                  </b-table> 
                </div>  
              </div>  
            </div>  
          </div>   
        </div>-->
        <!-- Activities Starts End -->

        <!-- Deals Starts -->
        <!-- Yong <div class="row mx-0 mb-0 deals">  
          <div class="col-lg-12 px-0">  
            <div class="card shadow-none mt-3 border-0 tab-card">  
              <div class="card-header tab-card-header border-bottom-0 pt-0 px-0">  
                <ul class="nav nav-tabs card-header-tabs mx-0" id="myTab" role="tablist">  
                  <li class="nav-item">  
                    <a  
                      class="nav-link active"  
                      id="one-tab"  
                      data-toggle="tab"  
                      href="#seven"  
                      role="tab"  
                      aria-controls="Seven"  
                      aria-selected="true" 
                    >  
                      <img  
                        src="/images/icons/workstation/Deals.svg"  
                        alt="Icon"  
                        class="icon"  
                        width="13%" 
                      />  
                      <span>Deals</span>  
                    </a>  
                  </li>  
 
                  <li class="nav-item">  
                    <a  
                      class="nav-link"  
                      id="two-tab"  
                      data-toggle="tab"  
                      href="#eight"  
                      role="tab"  
                      aria-controls="Eight"  
                      aria-selected="false" 
                    >  
                      <img  
                        src="/images/icons/workstation/Create_a_deal.svg"  
                        alt="Icon"  
                        class="icon"  
                        width="36" 
                        style="margin-top:11px; margin-bottom:11px;" 
                      />  
                      <span>Create a Deal</span>  
                    </a>  
                  </li>  
                </ul>  
              </div>  
 
              <div class="tab-content" id="myTabContent">  
                <div  
                  class="tab-pane fade show active"  
                  id="seven" role="tabpanel"  
                  aria-labelledby="one-tab" 
                >  
                  <b-table hover :items="dealItems"></b-table>         
                </div> 
 
                <div  
                  class="tab-pane fade"  
                  id="eight"  
                  role="tabpanel"  
                  aria-labelledby="two-tab" 
                >   
                  <p>Deal information</p> 
                  <div class="row mx-0"> 
                    <div class="col-7 pl-0"> 
                      <div class="row mx-0"> 
                        <div class="col-6 pl-0"> 
                          <label class="col-lg-12 control-label w-100 p-0 mb-2">Agent Name 
                            <input  
                              type="text"  
                              id="agent-name"   
                              name="AgentName" 
                              class="form-control border-0 rounded-pill"/> 
                          </label> 
                          <label class="col-lg-12 control-label w-100 p-0 mb-2">Deal Name 
                            <input  
                              type="text"  
                              id="deal-name"   
                              name="DealName" 
                              class="form-control border-0 rounded-pill"/> 
                          </label> 
                          <label class="col-lg-12 control-label w-100 p-0 mb-2">Closing Date 
                            <input  
                              type="date"  
                              id="closing-date"   
                              name="ClosingDate" 
                              class="form-control border-0 rounded-pill"/> 
                          </label> 
                        </div> 
                        <div class="col-6 pr-0"> 
                          <label class="col-lg-12 control-label w-100 p-0 mb-2">Type 
                            <select class="custom-select rounded-pill border-0"> 
                              <option selected>-None-</option> 
                              <option value="1">Existing Business</option> 
                              <option value="2">New Business</option> 
                            </select> 
                          </label> 
                          <label class="col-lg-12 control-label w-100 p-0 mb-2">Lead Source 
                            <select class="custom-select rounded-pill border-0"> 
                              <option selected>-None-</option> 
                              <option value="1">Advertising</option> 
                              <option value="2">Cold Call</option> 
                              <option value="3">Employee Referral</option> 
                              <option value="4">External Referral</option> 
                              <option value="5">Online Store</option> 
                            </select> 
                          </label> 
                          <label class="col-lg-12 control-label w-100 p-0 mb-2">Amount 
                            <input  
                              type="number"  
                              id="amount"   
                              name="Amount" 
                              class="form-control border-0 rounded-pill"/> 
                          </label> 
                        </div> 
 
                        <div class="col-12 px-0"> 
                          <label class="col-lg-12 control-label w-100 p-0 mb-2">Description Information 
                            <textarea  
                              id="info"   
                              name="Info" 
                              class="form-control border-0"/> 
                          </label> 
                        </div> 
                      </div> 
 
                    </div> 
 
                    <div class="col-3"> 
                      <label class="col-lg-12 control-label w-100 p-0 mb-2">Stage 
                        <select class="custom-select rounded-pill border-0"> 
                          <option selected>-None-</option> 
                          <option value="1">Qualification</option> 
                          <option value="2">Needs Analysis</option> 
                          <option value="3">Value Proposition</option> 
                          <option value="4">Proposal</option> 
                          <option value="5">Negotiation</option> 
                        </select> 
                      </label> 
                      <label class="col-lg-12 control-label w-100 p-0 mb-2">Probability (%) 
                        <input  
                          type="text"  
                          id="probability"   
                          name="Probability" 
                          class="form-control border-0 rounded-pill"/> 
                      </label> 
                      <label class="col-lg-12 control-label w-100 p-0 mb-2">Expected Revenue 
                        <input  
                          type="number"  
                          id="revenue"   
                          name="Revenue" 
                          class="form-control border-0 rounded-pill"/> 
                      </label> 
                      <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Name 
                        <input  
                          type="text"  
                          id="contact-name"   
                          name="ContactName" 
                          class="form-control border-0 rounded-pill"/> 
                      </label> 
                      <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Number 
                        <input  
                          type="tel"  
                          id="contact-number"   
                          name="ContactNumber" 
                          class="form-control border-0 rounded-pill"/> 
                      </label> 
                    </div> 
 
                    <div class="col-2 align-self-end pr-0"> 
                      <div class="row mx-0"> 
                        <div class="col-lg-6 pl-0 pr-2"> 
                          <button  
                            type="submit"  
                            class="btn btn-default cancel-deal w-100 m-0 border-0"  
                            @click="" 
                          >Cancel</button> 
                        </div> 
                        <div class="col-lg-6 pr-0 pl-2"> 
                          <button  
                            type="submit"  
                            class="btn btn-primary save-deal w-100 rounded-pill m-0"  
                            @click="" 
                          >Save</button> 
                        </div> 
                      </div> 
                    </div> 
                  </div> 
                </div>  
              </div>  
            </div>  
          </div>   
        </div>-->
        <!-- Deals Ends -->
      </div>
    </div>
    <!-- General Section Ends -->

    <!-- Dialer Section Starts -->
    <div class v-if="idle == true">
      <div
        :class="{ 'row idle-div mx-0 mt-0' : true }"
        data-aos="fade-up"
        data-aos-duration="700"
        data-aos-offset="700"
        style="margin-top: 1%"
      >
        <div
          :class="{ 'col-lg-12' : true, 'top-animation' : !show_edication_blocks, 'top-animation-minimized' : show_edication_blocks }"
        ></div>
      </div>

      <div class="row mx-0">
        <div class="col-lg-12 tip call-status" style="padding-top:10px;">
          <h1 class="text-center" style="font-size: 19px;color: #1c2331;">{{ call_status }}...</h1>
        </div>
      </div>
      <education v-if="has_education" />
    </div>
    <!-- Dialer Section Ends -->

    <!-- Active calls Section Starts -->
    <!-- Yong <div class="" v-if="active_calls == true">  
      <div class="row stats scroll-hidden horizontal-scroll w-100 mx-0" style="margin-top: 6%">  
        <div class="col-lg-12">  
          <vcl-table v-if="show_page_loader === true"></vcl-table>  
          <datatable v-if="show_page_loader === false" id="datatable" :rows="conferences" :columns="columns" :role="role_id"></datatable>  
        </div>  
      </div>  
    </div>-->
    <!-- Active calls Section Ends -->

    <!-- Modals Section Starts -->
    <div>
      <!-- Yong <b-modal id="modal-1" size="md" ref="my-modal" title="Lead Status" @ok="toggleModal">  
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
        hide-footer>  
        <div class="final-modal">  
          <div class="row row-a w-100 ml-0">  
            <div class="col-lg-6" style="padding-left: 6%;">  
              <ul class="navbar-nav left">  
                <li class="nav-item d-none d-sm-inline-block title">  
                  <countdown :time="set_time" @progress="handleCountdownProgress" @abort="handleAbort">  
                    <template  
                      slot-scope="props"  
                      style="font-size: 55px;" 
                    >{{ props.minutes }}:{{ props.seconds }}</template>  
                  </countdown>  
                </li>   
              </ul>  
            </div>  
 
            <div class="col-lg-6 pr-0" style="padding-top:2%;">  
              <div class="w-100">  
                <label class="col-lg-4 control-label" style="margin-right: 8px;float:left;">  
                  <button  
                    v-if="added_time"  
                    @click="addTime"   
                    type="submit"  
                    :class="{'btn' : true, 'btn-active border-0 font-weight-bold' : true}"  
                    class="w-100 m-0"  
                    disabled 
                  >  
                    <img src="/images/icons/Asset 135.svg" alt="Icon" class="icon" />More Time  
                  </button>  
                  <button  
                    v-else @click="addTime"   
                    type="submit"  
                    :class="{'btn' : true, 'btn-active border-0 font-weight-bold' : true}"  
                    class="w-100 m-0" 
                  >  
                    <img src="/images/icons/Asset 135.svg" alt="Icon" class="icon" />More Time  
                  </button>  
                </label>  
                <label class="col-lg-4 control-label pr-0 text-right" style="margin-right: 8px;float:left;">  
                  <button  
                    @click="completeCall"  
                    type="submit"  
                    :class="{'btn' : true, 'btn-active border-0 font-weight-bold' : true }"  
                    class="w-100 m-0" 
                  >  
                    <img src="/images/icons/Asset 136.svg" alt="Icon" class="icon" />Complete  
                  </button>  
                </label>  
                <label class="col-lg-3 control-label pr-0 text-right" style="margin-right: 8px;float:left;">  
                  <img  
                    src="/images/icons/Asset 56.svg"  
                    alt="Icon"  
                    class="icon"  
                    style="width: 60px;margin-top: -13px;" 
                  />  
                </label>  
              </div>                
            </div>  
          </div>  
 
          <div class="row mx-0 mb-0 justify-content-between">  
            <div class="col-lg-4 col-md-4 col-sm-4 pl-0">  
              <div class="card border-0 client">  
                <div class="card-body">  
                  <h5 class="card-title">  
                    <img src="/images/workstation/D_A@4x.png" alt="Icon" class="icon" />  
                    Client  
                  </h5>  
                  <p class="card-text truncate mb-2"  
                    :title="lead_info.name + ' ' + lead_info.surname" 
                  >{{ lead_info.name + ' ' + lead_info.surname }}</p>  
                  <div class="truncate w-100"> 
                    <p v-if="lead_info.country" class="card-link d-inline border-right border-white pb-3 pr-3">{{ lead_info.country }}</p> 
                    <p v-if="lead_info.gender" class="card-link d-inline border-right border-white ml-0 pb-3 px-3">{{ lead_info.gender }}</p> 
                    <p v-if="lead_info.age" class="card-link d-inline ml-0 pb-3 pl-3">{{ lead_info.age }}</p>  
                  </div> 
                </div>  
              </div>  
            </div>  
             
            <div class="col-lg-4 col-md-4 col-sm-4">  
              <div class="card border-0 product">  
                <div class="card-body">  
                  <h5 class="card-title">  
                    <img src="/images/workstation/Stock_Icon@4x.png" alt="Icon" class="icon" />  
                    Product  
                  </h5>  
                  <p  
                    class="card-text truncate mb-2"  
                    :title="lead_info.product.description + '. ' + lead_info.product.currency + lead_info.product.price " 
                  >{{ lead_info.product.name }}</p>  
                  <p  
                  class="card-link truncate w-100 mb-0"  
                  :title="lead_info.product.description + '. ' + lead_info.product.currency + lead_info.product.price " 
                  >{{ lead_info.product.description }}</p>   
                </div>  
              </div>  
            </div>  
         
            <div class="col-lg-4 col-md-4 col-sm-4">  
              <div class="card border-0 time">  
                <div class="card-body">  
                  <h5 class="card-title">  
                    <img src="/images/workstation/Time_Icon@4x.png" alt="Icon" class="icon" />  
                    Time  
                  </h5>  
                  <p class="card-text mb-2">11:20</p> 
                  <div class="truncate mb-2">  
                    <p v-if="lead_info.city" class="card-link d-inline border-right border-white pb-3 pr-3">{{ lead_info.city }}</p>  
                    <p v-if="lead_info.country" class="card-link d-inline ml-0 pb-3 pl-3">{{ lead_info.country }}</p>   
                  </div>   
                </div>  
              </div>  
            </div>  
          </div>      
 
          <div class="row stats final-modal">  
            <div class="col-lg-6 p-0" style="padding-right: 3%;">  
              <div class="card shadow-none mt-3 border-0 tab-card">  
                <div class="card-header tab-card-header">  
                  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">  
                    <li class="nav-item left">  
                      <a  
                        class="nav-link active"  
                        id="one-tab"  
                        data-toggle="tab"  
                        href="#one"  
                        role="tab"  
                        aria-controls="One"  
                        aria-selected="true" 
                      >  
                        <img src="/images/icons/workstation/Agent_Notes.svg" alt="Icon" class="icon" width="13%"/>  
                        <span>Agent Notes</span>   
                      </a>  
                    </li>  
                    <li class="nav-item right">  
                      <a  
                        class="nav-link"  
                        id="two-tab"  
                        data-toggle="tab"  
                        href="#two"  
                        role="tab"  
                        aria-controls="Two"  
                        aria-selected="false" 
                      >  
                        <img src="/images/icons/workstation/Schedule Callback.svg" alt="Icon" class="icon" width="13%"/>  
                        <span>Schedule Callback</span>  
                      </a>  
                    </li>  
                  </ul>  
                </div>  
 
                <div class="tab-content" id="myTabContent">  
                  <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">  
                    <div class="notes-roll">  
                      <ul class="list-group w-100" style="height:245px; overflow:hidden; overflow-y:scroll;">  
                        <li  
                          v-for="comment in comments.comments"  
                          class="list-group-item border-left-0 border-right-0 border-top-0 rounded-0 m-0"  
                          :key="comment.id" 
                        >  
                          <p class="m-0">  
                            <strong class="d-block font-weight-bold">{{ comment.comment_type }}</strong>   
                            <span class="comment-notes d-block" style="width: 54%;">  
                              {{ comment.description }}   
                              <a  
                                href="#"  
                                role="button" 
                                @click="editComment(comment)"  
                                :class="{ 'edit-comment': true, 'pulse-round': edit_comment }"  
                                v-if="comment.user_id == user_id && getDaysAgo(comment.created_at) == 'Today'" 
                              >  
                                <img src="/images/icons/settings edit buttin@4x.png" alt="Icon" class="icon" width="23"/>  
                              </a>  
                            </span>  
                            <span class="author d-block w-25">  
                              {{ comment.created_at }} <br/>  
                              <small>{{ comment.user_name }}</small>  
                            </span>  
                          </p>  
                        </li>  
                      </ul>  
                    </div>  
 
                    <div class="d-flex notes-capture">  
                      <div class="flex-shrink-1"> 
                        <b-button v-b-modal.modal-1 :class="{ 'choose-comment-type d-block': true, 'pulse' : choose_comment_type }">  
                          <img  
                            src="/images/workstation/Asset 28@4x.png"  
                            alt="Icon"  
                            class="icon w-100" 
                          >  
                        </b-button> 
                      </div> 
 
                      <div class="flex-grow-1 mr-2">  
                        <input  
                          class="comment-desc d-block w-100 border-0"  
                          type="text"  
                          v-model="comment.comment_description"  
                          placeholder="Write comment here" 
                        /> 
                      </div> 
 
                      <div class="flex-shrink-1">  
                        <button  
                          id="submit-btn"  
                          type="submit"  
                          class="btn "  
                          @click="prepComment()" 
                        > 
                          <img  
                            src="/images/icons/workstation/Submit.svg"  
                            alt="Icon"  
                            class="icon"  
                            width="76" 
                          /> 
                        </button> 
                      </div>  
                    </div>              
                  </div>  
 
                  <div  
                    class="tab-pane fade"  
                    id="two"  
                    role="tabpanel"  
                    aria-labelledby="two-tab" 
                  >   
                    <div class="row mb-0 mx-0">  
                      <div class="col-lg-4 pr-0">  
                        <div class="row">  
                          <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">  
                            <label class="col-lg-12 control-label p-0">Date of Callback  
                              <a-date-picker  
                                v-model='selected_date'  
                                format="YYYY-MM-DD"  
                                :allowEmpty="false" 
                                @change="checkCBDate()" 
                              />  
                            </label>  
                          </div>  
                        </div>  
                           
                        <div class="row">  
                          <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">  
                            <label class="col-lg-12 control-label pl-0">Time of Callback  
                              <a-time-picker v-model='selected_time' :allowEmpty="false" use24Hours format="hh:mm a"/>  
                            </label>  
                          </div>    
                        </div>      
 
                        <div class="row">  
                          <div :class="{'input': true, 'form-group' :true, 'has-error': errors.has('Name') }">  
                            <label class="col-lg-12 control-label pl-0"> 
                              <strong>{{ selected_date.format('DD-MM-YYYY') + ' @' +  selected_time.format('hh:mm a') }}</strong> 
                            </label>  
                          </div>    
                        </div>  
                      </div>  
                       
                      <div class="col-lg-8">  
                        <vc-date-picker  
                          v-model="dates"  
                          mode="multiple"  
                          is-inline  
                          is-expanded   
                          :min-date='new Date()'  
                          :max-date="max_date"  
                          color="orange"  
                        />  
                      </div>  
                    </div>  
  
                    <div class="d-flex callback-capture"> 
                      <div class="flex-grow-1"> 
                        <input  
                          class="comment-desc d-block border-0"  
                          type="text"  
                          v-model="call_back.note"  
                          placeholder="Write notes here" 
                        /> 
                      </div> 
                      <div class="flex-shrink-1">  
                        <button  
                          id="submit-btn"  
                          type="submit"  
                          class="btn"  
                          @click="addCallback()" 
                        > 
                          <img  
                            src="/images/icons/workstation/Submit.svg"  
                            alt="Icon"  
                            class="icon"  
                            width="76" 
                          /> 
                        </button>  
                      </div> 
                    </div> 
                  </div>  
                </div>  
              </div>  
            </div>  
 
            <div class="col-lg-6 p-0" style="padding-left: 3%;">  
              <div class="card shadow-none mt-3 border-0 tab-card">  
                <div class="card-header tab-card-header">  
                  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">  
                    <li class="nav-item left">  
                      <a  
                        class="nav-link active"  
                        id="three-tab"  
                        data-toggle="tab"  
                        href="#three"  
                        role="tab"  
                        aria-controls="Three"  
                        aria-selected="true" 
                      >  
                        <img  
                          src="/images/workstation/Feeback Summary.svg"  
                          alt="Icon"  
                          class="icon" 
                          width="23" 
                        />  
                        <span class="left">Feedback Summary</span>  
                        <span class="right">{{ comments.total_comments }}</span>  
                      </a>  
                    </li>  
                    <li class="nav-item right">  
                      <a  
                        class="nav-link"  
                        id="four-tab"  
                        data-toggle="tab"  
                        href="#four"  
                        role="tab"  
                        aria-controls="Four"  
                        aria-selected="false" 
                      >  
                        <img  
                          src="/images/workstation/Email Client.svg"  
                          alt="Icon"  
                          class="icon"  
                          width="23" 
                        />  
                        <span class="left">Email Client</span>  
                      </a>  
                    </li>  
                  </ul>  
                </div>  
 
                <div class="tab-content h-100" id="myTabContent">  
                  <div  
                    class="tab-pane fade show active"  
                    id="three"  
                    role="tabpanel"  
                    aria-labelledby="three-tab"  
                    style="height: 349px;" 
                  > 
                    <div class="row mx-0 justify-content-between align-items-center summary"> 
                      <div class="col-auto pl-0"> 
                        <p>220 reviews</p> 
                      </div> 
 
                      <div class="col-auto px-0"> 
                        <div class="row mx-0 mb-0"> 
                          <div class="col-auto px-0"> 
                            <p>Called: 600</p> 
                          </div> 
                          <div class="col-auto pr-0"> 
                            <p>Answered: 50</p> 
                          </div> 
                        </div> 
                      </div> 
                    </div> 
 
                    <div v-for="(stat, index) in callStats" :key="index" class="row mx-0 mb-1 align-items-center"> 
                      <div class="col-12 px-0"> 
                        <div class="row mx-0 mb-0 align-items-center"> 
                          <div class="col-12 align-content-end px-0"> 
                            <p class="text-right mb-0 stat-perc">{{ stat.percent }}%</p> 
                          </div> 
 
                          <div class="col px-0"> 
                            <p class="mb-0 summary-abr">{{ stat.abbreviation }}</p> 
                          </div> 
 
                          <div class="col-11 pr-0 pl-4"> 
                            <div class="progress-bar w-100"> 
                              <span class="tank" :style="{width: + stat.percent + '%'}"></span> 
                            </div> 
                          </div> 
                        </div> 
                      </div> 
                    </div> 
                  </div> 
 
                  <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">  
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
                        <vc-date-picker v-model="dates" mode="multiple" is-inline is-expanded  :min-date='new Date()' :max-date="max_date" color="orange" /> 
                      </div> 
                    </div> 
 
                    <div class="d-flex callback-capture"> 
                      <div class="flex-grow-1"> 
                        <input class="comment-desc" type="text" v-model="call_back.note" placeholder="Write notes here" /> 
                      </div> 
                      <div class="flex-shrink-1"> 
                        <button  
                          id="submit-btn"  
                          type="submit"  
                          class="btn p-0 m-0" 
                          @click="addCallback()" 
                        > 
                          <img  
                            src="/images/icons/workstation/Submit.svg"  
                            alt="Icon"  
                            class="icon"  
                            width="76" 
                          /> 
                        </button> 
                      </div> 
                    </div> 
                  </div> 
                </div> 
              </div> 
            </div> 
          </div> 
        </div> 
      </b-modal>-->
    </div>

    <input type="hidden" @click="startCall()" ref="callBtn" />
  </div>
</template> 
 
<script>
import { setupCalendar, Calendar } from "v-calendar";
import { DatePicker, TimePicker } from "ant-design-vue";
import { Bar } from "vue-chartjs";
import { BarChart } from "vue-morris";
import Scripts from "./Scripts.vue";
import Education from "./Education.vue";
import FlipCountdown from "vue2-flip-countdown";
import DataTable from "../DataTables/CallLogsDataTable";
import { VclFacebook, VclInstagram, VclTable } from "vue-content-loading";
const Device = require("twilio-client").Device;
export default {
  extends: Bar,
  components: {
    BarChart,
    FlipCountdown,
    VclFacebook,
    VclInstagram,
    VclTable,
    Scripts,
    Education,
    datatable: DataTable
  },
  mounted() {
    console.log("Workstation Mounted");
    var vm = this;

    vm.dialer_settings = JSON.parse(vm.auto_dialer_settings);

    vm.item_custom_fields = JSON.parse(vm.custom_fields);

    if (vm.item_id != "") {
      vm.enqueueLead(vm.item_id);
      vm.general = true;
      vm.active_calls = false;
      Fire.$emit("ShowGeneral");
    } else {
      if (this.role_id == 1 || this.role_id == 2) {
        vm.active_calls = true;
        vm.getActiveCalls();
        Fire.$emit("ShowActiveCalls");
      } else {
        vm.general = false;
        vm.scripts = true;
        vm.idle = false;
        vm.active_calls = false;
        Fire.$emit("ShowActiveCalls");
      }
    }

    vm.prepDates();

    Fire.$on("CallStarted", function() {
      vm.general = false;
      vm.idle = true;
      vm.scripts = false;
      vm.active_calls = false;
      vm.$refs.callBtn.click();
    });

    Fire.$on("CallEnded", function() {
      vm.endCall();
    });

    Fire.$on("ShowScripts", function() {
      vm.scripts = true;
      vm.general = false;
      vm.idle = false;
      vm.active_calls = false;
    });

    Fire.$on("ShowGeneral", function() {
      vm.general = true;
      vm.scripts = false;
      vm.idle = false;
      vm.active_calls = false;
    });

    Fire.$on("ShowActiveCalls", function() {
      vm.general = false;
      vm.scripts = false;
      vm.idle = false;
      vm.active_calls = true;
    });

    Fire.$on("ShowDialer", function() {
      vm.general = false;
      vm.scripts = false;
      vm.idle = true;
      vm.active_calls = false;
    });

    this.Toast = this.$swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000
    });
  },
  created: function() {
    this.getComments(this.item_id);
  },
  props: [
    "user_name",
    "user_id",
    "role_id",
    "item_id",
    "auto_dialer_settings",
    "custom_fields"
  ],
  data: function() {
    return {
      module_item: {},
      conferences: [],
      item_custom_fields: {},
      review_comment: false,
      comments: {},
      notes_data: [],
      minimized: false,
      scripts: false,
      general: false,
      active_calls: false,
      calling: false,
      has_education: false,
      idle: false,
      added_time: false,
      choose_comment_type: false,
      edit_comment: false,
      continues: false,
      show_page_loader: false,
      call_status: "",
      call_sid: "",
      handle: "",
      set_time: 2 * 60 * 1000,
      comment: {
        id: "",
        comment_description: "",
        comment_type: null
      },
      comment_types: [
        {
          short: "A",
          long: "Answered"
        },
        {
          short: "NA",
          long: "No Answer"
        },
        {
          short: "VM",
          long: "Voicemail"
        },
        {
          short: "LB",
          long: "Language Barrier"
        },
        {
          short: "NI",
          long: "Not Interested"
        },
        {
          short: "PTP",
          long: "Promise To Pay"
        },
        {
          short: "S",
          long: "Sale"
        }
      ],
      call_back: {
        id: "",
        note: "",
        date: "",
        time: "",
        user_id: this.user_id,
        lead_id: "",
        call_sid: this.call_sid
      },
      date_span: "",
      max_date: "",
      selected_date: moment(),
      selected_time: moment(),
      dates: [],
      dialer_settings: [],
      columns: [
        {
          label: "CALLER", // Column name
          field: "lead_caller", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true
        },
        {
          label: "TYPE", // Column name
          field: "lead_type", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true
        },
        {
          label: "NAME", // Column name
          field: "lead_name", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true
        },
        {
          label: "OWNER", // Column name
          field: "lead_owner", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true
        },
        {
          label: "ASSIGNEE", // Column name
          field: "lead_assignee", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true
        },
        {
          label: "MOBILE #", // Column name
          field: "lead_mobile", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true
        },
        {
          label: "PACKAGE", // Column name
          field: "lead_product", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true,
          exportable: true
        },
        {
          label: "CALL START", // Column name
          field: "dateCreated", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: true
        },
        {
          label: "STATUS", // Column name
          field: "status", // Field name from row
          numeric: true, // Affects sorting
          html: false, // Escapes output if false.
          sortable: false
        },
        {
          label: "ACTIONS", // Column name
          field: "actions", // Field name from row
          numeric: false, // Affects sorting
          html: false, // Escapes output if false.
          sortable: false
        }
      ],
      Toast: null,
      activityItems: [
        {
          statusColor: "#f42222",
          status: "Not Started",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#00d58e",
          status: "Finished",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#ff8c37",
          status: "In Progress",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#f42222",
          status: "Not Started",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#00d58e",
          status: "Finished",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#ff8c37",
          status: "In Progress",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#f42222",
          status: "Not Started",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#00d58e",
          status: "Finished",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#ff8c37",
          status: "In Progress",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#f42222",
          status: "Not Started",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#00d58e",
          status: "Finished",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#ff8c37",
          status: "In Progress",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#f42222",
          status: "Not Started",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#00d58e",
          status: "Finished",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#ff8c37",
          status: "In Progress",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#f42222",
          status: "Not Started",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#00d58e",
          status: "Finished",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        },
        {
          statusColor: "#ff8c37",
          status: "In Progress",
          subject: 40,
          dueDate: "Dickerson",
          activityOwner: "Macdonald",
          timeModified: ""
        }
      ],
      dealItems: [
        {
          dealName: "#f42222",
          amount: "0",
          probability: 40,
          closingDate: "Dickerson",
          type: "Macdonald",
          edit: ""
        },
        {
          dealName: "#00d58e",
          amount: "0",
          probability: 40,
          closingDate: "Dickerson",
          type: "Macdonald",
          edit: ""
        },
        {
          dealName: "#ff8c37",
          amount: "0",
          probability: 40,
          closingDate: "Dickerson",
          type: "Macdonald",
          edit: ""
        }
      ],
      perPage: 10,
      currentPage: 1
    };
  },
  computed: {
    rows() {
      return this.activityItems.length;
    }
  },
  methods: {
    getActiveCalls() {
      var vm = this;
      vm.show_page_loader = true;
      axios.get("/calls/list").then(function(response) {
        vm.conferences = response.data.conferences;
        vm.show_page_loader = false;
      });
      // setInterval(function(){
      //     axios.get('/calls/list').then(function (response) {
      //         vm.conferences = response.data.conferences;
      //         vm.show_page_loader = false;
      //     });
      // }, 5000);
    },
    checkCBDate() {
      var now = moment(new Date()); //todays date

      var end = this.selected_date; // another date

      var duration = moment.duration(end.diff(now));

      var days = Math.round(duration.asDays());

      if (days < 1 || days >= this.date_span) {
        this.$swal(
          "Oops",
          "Please select a date between the highlighted range.",
          "warning"
        );
      } else {
        return true;
      }
    },
    addCallback() {
      var vm = this;

      if (!this.checkCBDate() || this.call_back.note == "") {
        this.$swal(
          "Oops",
          "Please make sure to fill in the Date, Time and Note of the Callback properly.",
          "warning"
        );
      } else {
        vm.call_back.date = vm.selected_date.format("YYYY-MM-DD");
        vm.call_back.time = vm.selected_time.format("hh:mm");
        vm.call_back.user_id = vm.user_id;
        vm.call_back.lead_id = vm.lead_info.id;

        this.$validator.validateAll().then(result => {
          if (!result) {
          } else {
            axios
              .post("/leads/setcallback", vm.call_back)
              .then(function(response) {
                if (response.data.success == true) {
                  Fire.$emit("AfterCallBackSet");
                  vm.enqueueLead(response.data.lead.id);
                  vm.$swal(
                    "Success",
                    "Callback captured successfully",
                    "success"
                  );
                  vm.continues = true;
                } else {
                  vm.$Progress.fail();
                  vm.$swal(
                    "Failed",
                    "Opps, something went wrong while retrieving lead, please try again",
                    "warning"
                  );
                }
              });
          }
        });
      }
    },
    prepDates() {
      this.date_span = 7;
      this.dates = [{ start: new Date(), span: this.date_span }];
      var date = new Date();
      this.max_date = date.setDate(date.getDate() + (this.date_span - 1));
    },
    preventClosing(BvModalEvent) {
      var vm = this;
      if (BvModalEvent.trigger == "backdrop") BvModalEvent.preventDefault();
    },
    mouseLeave(event) {
      console.log(event.pageX);
      console.log(event.pagey);
    },
    addEvent(obj, evt, fn) {
      if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
      } else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
      }
    },
    toggleModal() {
      // We pass the ID of the button that we want to return focus to
      // when the modal has hidden
      this.$refs["my-modal"].toggle("#toggle-btn");
    },
    resetModal() {
      this.comment.comment_description = "";
      this.comment.comment_type = "";
    },
    completeCall() {
      var vm = this;
      axios
        .post("/comments/check-exist", {
          lead_id: vm.lead_info.id,
          source_type: "App\\Lead"
        })
        .then(function(response) {
          if (response.data.success) {
            vm.continues = true;
            vm.$refs["final-call-step"].hide();
          } else {
            vm.$swal(
              "Warning",
              "Please updated Notes or Callback information before continuing",
              "warning"
            );
          }
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    handleCountdownProgress(data) {
      this.set_time = data.totalMilliseconds;
    },
    handleAbort(data) {},
    addTime() {
      this.set_time = 2 * 60 * 1000;
      this.added_time = true;
    },
    enqueueLead(item_id = "") {
      var vm = this;

      var end_point_choice = "/modules/get-item/" + item_id;

      vm.show_page_loader = true;

      vm.$Progress.start();

      axios.get(end_point_choice).then(function(response) {
        if (response.data.success == true) {
          vm.module_item = response.data.item.item;

          Fire.$emit("AfterLeadEnqueue", {
            lead_id: vm.module_item.id,
            contact_number: vm.module_item.phone_number
          });

          vm.show_page_loader = false;

          vm.$Progress.finish();

          if (
            vm.role_id == vm.dialer_settings.role_id &&
            vm.dialer_settings.disabled == 1
          ) {
            vm.createDevice();
          }
        } else {
          vm.$Progress.fail();
          vm.$swal(
            "Failed",
            "Opps, something went wrong while retrieving lead, please try again",
            "warning"
          );
        }
      });
    },
    createDevice() {
      var vm = this;
      axios
        .get("/calls/token")
        .then(function(response) {
          console.log("Token", response.data.token);
          // Setup Twilio.Device
          Device.setup(response.data.token);

          Device.on("ready", function(device) {
            vm.call_status = "Device Ready";
            // vm.$refs.callBtn.click();
          });

          Device.on("error", function(error) {
            vm.call_status = "Device Error: " + error.message;
          });

          Device.on("connect", function(conn) {
            vm.call_status = "Successfully established call";
            vm.call_back.call_sid = conn.parameters.CallSid;
          });

          Device.on("incoming", function(conn) {
            console.log("Incoming connection from " + conn.parameters.From);
            var archEnemyPhoneNumber = "+12099517118";

            if (conn.parameters.From === archEnemyPhoneNumber) {
              conn.reject();
              console.log("It's your nemesis. Rejected call.");
            } else {
              // accept the incoming connection and start two-way audio
              conn.accept();
            }
          });

          Device.on("disconnect", function(conn) {
            vm.call_status = "Call Disconnected";
            vm.$refs["final-call-step"].show();
          });

          vm.$Progress.finish();
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    startCall() {
      var vm = this;
      this.idle = true;
      this.show_edication_blocks = true;
      this.general = false;
      var audioCtx = new AudioContext();

      audioCtx.resume();

      Fire.$emit("InitiateCall");

      var form_data = {
        lead_id: vm.lead_info.id,
        is_client: vm.lead_info.is_client,
        lead_owner: vm.lead_info.user_created_id,
        lead_assignee: vm.lead_info.user_assigned,
        user_id: vm.user_id,
        // phone_number : vm.lead_info.contact_number,
        phone_number: "+27782013556"
      };

      Device.connect(form_data);
    },
    startCall() {
      var vm = this;
      this.idle = true;
      this.show_edication_blocks = true;
      this.general = false;
      var audioCtx = new AudioContext();

      audioCtx.resume();

      Fire.$emit("InitiateCall");

      var form_data = {
        lead_id: vm.lead_info.id,
        is_client: vm.lead_info.is_client,
        lead_owner: vm.lead_info.user_created_id,
        lead_assignee: vm.lead_info.user_assigned,
        // phone_number : vm.lead_info.contact_number,
        phone_number: "+27738802485"
      };

      Device.connect(form_data);
    },
    endCall() {
      var vm = this;

      Device.disconnectAll(function(conn) {});

      vm.idle = true;
      vm.show_edication_blocks = true;
      vm.general = false;
      vm.minimized = false;
      this.$refs["final-call-step"].show();
    },
    getStatus(call_sid) {
      var vm = this;

      axios.post("/calls/get-call-status").then(function(response) {
        if (response.data.success == true) {
          vm.call_status = response.data.call_status;
        } else {
          vm.$swal(
            "Failed",
            "Opps, something went wrong while retrieving lead, please try again",
            "warning"
          );
        }
      });
    },
    prepComment() {
      var vm = this;

      if (vm.comment.comment_type === null) {
        vm.$swal(
          "Please note",
          "Please choose a lead status to proceed [+]",
          "warning"
        );
        vm.choose_comment_type = true;
        return false;
      }

      var form_data = {
        id: this.module_item.id,
        type: "customer",
        comment_id: this.comment.id,
        comment_type: this.comment.comment_type.short,
        description: this.comment.comment_description
      };
      vm.review_comment = true;
    },
    addComment() {
      var vm = this;

      if (vm.comment.comment_type === null) {
        vm.$swal(
          "Please note",
          "Please choose a lead status to proceed [+]",
          "warning"
        );
        vm.choose_comment_type = true;
        vm.review_comment = false;
        return false;
      }

      var form_data = {
        id: this.module_item.id,
        type: "customer",
        comment_type: this.comment.comment_type,
        description: this.comment.comment_description
      };

      if (vm.edit_comment == true) {
        var endpoint = "/comments/update";
      } else {
        var endpoint = "/comments/add";
      }

      vm.$Progress.start();

      axios.post(endpoint, form_data).then(function(response) {
        if (response.data.success == true) {
          vm.Toast.fire({ type: "success", title: response.data.message });
          vm.edit_comment = false;
          vm.review_comment = false;
          vm.continues = true;
          vm.getComments(vm.module_item.id);
          vm.$Progress.finish();
        } else {
          vm.$Progress.fail();
          if (response.data.message == "Please edit existing comment.") {
            vm.edit_comment = true;
          }
          vm.$swal("Failed", response.data.message, "warning");
        }
      });
    },
    getComments(item_id) {
      var vm = this;

      axios.get("/comments/get/customer/" + item_id).then(function(response) {
        if (response.data.success == true) {
          vm.comments.comments = response.data.comments;
          vm.comments.comments_graph = response.data.comments_graph;
          vm.comments.total_comments = response.data.total_comments;
          vm.comments.total_calls = response.data.total_calls;
          vm.comments.total_answered_calls = response.data.total_answered_calls;
          vm.comment.comment_description = "";
          vm.comment.comment_type = null;
        } else {
          vm.$swal(
            "Failed",
            "Opps, something went wrong while retrieving lead, please try again",
            "warning"
          );
        }
      });
    },
    minizeCallProgress() {
      this.minimized = true;
      $(".call-progress-div mb-0").toggleClass("collapsed");
    },
    getDaysAgo(second_date) {
      var date_string = "";
      var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
      var firstDate = new Date();
      var secondDate = new Date(second_date);

      var diffDays = Math.round(
        Math.abs((firstDate.getTime() - secondDate.getTime()) / oneDay)
      );

      if (diffDays <= 1) {
        date_string = "Today";
      } else if (diffDays > 1 && diffDays <= 7) {
        date_string = diffDays + " Days ago";
      } else if (diffDays == 7) {
        date_string = "1 Week ago";
      } else if (diffDays >= 7) {
        date_string = second_date;
      }
      return date_string;
    }
  }
};
</script> 
