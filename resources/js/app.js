 require('./bootstrap');
 import router from './router';
 import Vue from 'vue'
 import Vuesax from 'vuesax'
import 'material-icons/iconfont/material-icons.css';
import 'vuesax/dist/vuesax.css' //Vuesax styles
import { vsButton, vsSelect, vsPopup } from 'vuesax'
Vue.use(vsButton)
Vue.use(vsSelect)
Vue.use(vsPopup)
require('vue-flash-message/dist/vue-flash-message.min.css');
import VueFlashMessage from 'vue-flash-message';
Vue.use(VueFlashMessage);
Vue.component('pagination', require('laravel-vue-pagination'));

window.Vue = require('vue');
Vue.component('main-app', require('./components/mainApp.vue').default);
Vue.component('admin-app', require('./components/admin/admin.vue').default);
const app = new Vue({
    el: '#app', 
    router
});
