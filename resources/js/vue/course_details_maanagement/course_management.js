// require('../backend/plugins/axios_setup');
import axios from "axios";
import Vue from 'vue'
import router from './router';
import CKEditor from '@ckeditor/ckeditor5-vue2';
window.axios = axios;
Vue.component('course-management', require('./views/Layout.vue').default);
Vue.use( CKEditor );

if (document.getElementById('course-management')) {
    new Vue({
        router,
        el: '#course-management',
        created: function () {
            console.log('dashboard started');
        },
    })
}