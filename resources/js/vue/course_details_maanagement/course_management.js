// require('../backend/plugins/axios_setup');
import axios from "axios";
import Vue from 'vue'
import router from './router';
window.axios = axios;
Vue.component('course-management', require('./views/Layout.vue').default);

if (document.getElementById('course-management')) {
    new Vue({
        router,
        el: '#course-management',
        created: function () {
            console.log('dashboard started');
        },
    })
}