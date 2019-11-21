/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// const Device = require('twilio-client').Device;

//Progress Bar
import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
	color: 'rgb(143, 255, 199)',
	failedColor: 'red',
	height: '10px'
})

//Sweet alert
import VueSweetalert2 from 'vue-sweetalert2' ;
Vue.use(VueSweetalert2);

let Fire = new Vue();
window.Fire = Fire;

//BootstrapVue
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

import VCalendar from 'v-calendar';

Vue.use(VCalendar, {
  componentPrefix: 'vc',  // Use <vc-calendar /> instead of <v-calendar />
});

import VueCharts from 'vue-chartjs';
import { Bar, Line } from 'vue-chartjs';

import Bars from 'vuebars'
Vue.use(Bars)

import Raphael from 'raphael/raphael'
global.Raphael = Raphael

import Echarts from 'vue-echarts';
import 'echarts/lib/chart/bar';

Vue.component('chart', Echarts);

import VueCountdown from '@chenfengyuan/vue-countdown';
Vue.component(VueCountdown.name, VueCountdown);

import Antd from 'ant-design-vue'
import 'ant-design-vue/dist/antd.css';
Vue.config.productionTip = false;
Vue.use(Antd);
window.moment = require('moment');

import { SchedulePlugin } from '@syncfusion/ej2-vue-schedule';
Vue.use(SchedulePlugin);


import {store} from './store';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('landing-page', require('./components/Landing/Landing.vue').default);
Vue.component('workstation-index', require('./components/Workstation/Workstation.vue').default);
Vue.component('left-nav', require('./components/Navigation/LeftNav.vue').default);
Vue.component('right-sidebar', require('./components/Navigation/RightSidebar.vue').default);
Vue.component('top-navigation', require('./components/Navigation/TopNavigation.vue').default);
Vue.component('dashboard', require('./components/Dashboard/Dashboard.vue').default);
Vue.component('call-history', require('./components/CallHistory/CallHistory.vue').default);
Vue.component('social-board', require('./components/SocialBoard/SocialBoard.vue').default);
Vue.component('avatar-upload', require('./components/Plugins/AvatarUpload.vue').default);
Vue.component('users', require('./components/Users/UsersIndex.vue').default);
Vue.component('modules', require('./components/Modules/ModulesIndex.vue').default);
Vue.component('contacts', require('./components/Contacts/ContactsIndex.vue').default);
Vue.component('preferences', require('./components/Preferences/PreferencesIndex.vue').default);
Vue.component('transactions', require('./components/Transactions/TransactionsIndex.vue').default);
Vue.component('inventory', require('./components/Inventory/InventoryIndex.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    store: store
});
