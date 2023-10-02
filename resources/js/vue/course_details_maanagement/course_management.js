// require('../backend/plugins/axios_setup');
import Vue from 'vue'
import router from './router';

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