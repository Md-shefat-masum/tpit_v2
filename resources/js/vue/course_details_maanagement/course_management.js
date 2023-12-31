// require('../backend/plugins/axios_setup');
require('../backend/plugins/csv_to_array');
import axios from "axios";
import Vue from 'vue'
import router from './router';
import CKEditor from '@ckeditor/ckeditor5-vue2';
import helper from './helper'
window.axios = axios;
Vue.component('course-management', require('./views/Layout.vue').default);
Vue.component('pagination', require('./views/pagination.vue').default);
Vue.use( CKEditor );
Vue.use( helper );

if (document.getElementById('course-management')) {
    new Vue({
        router,
        el: '#course-management',
        created: function () {
            console.log('dashboard started');
        },
    })
}