// require('../backend/plugins/axios_setup');
import axios from "axios";
import Vue from 'vue'
import router from './router';
import helper from './helper'
window.axios = axios;
Vue.component('quiz-management', require('./views/Layout.vue').default);
Vue.use( helper );

if (document.getElementById('quiz-management')) {
    new Vue({
        router,
        el: '#quiz-management',
        created: function () {
            console.log('dashboard started');
        },
    })
}