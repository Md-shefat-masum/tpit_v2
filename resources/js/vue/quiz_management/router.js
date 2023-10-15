import Vue from 'vue'
import VueRouter from 'vue-router'

import QuizLayout from './views/pages/Layout.vue'
import AllQuiz from "./views/pages/AllQuiz.vue";

// course batch
import QuizTopicLayout from "./views/pages/quiz_topic/QuizTopicLayout.vue";
import QuizTopicAll from "./views/pages/quiz_topic/All.vue";
import QuizTopicCreate from "./views/pages/quiz_topic/Create.vue";
import QuizTopicEdit from "./views/pages/quiz_topic/Edit.vue";
import QuizTopicDetails from "./views/pages/quiz_topic/Details.vue";

import QuizQuestionLayout from "./views/pages/quiz_questions/QuizQuestionLayout.vue";
import QuizQuestionAll from "./views/pages/quiz_questions/All.vue";
import QuizQuestionCreate from "./views/pages/quiz_questions/Create.vue";
import QuizQuestionEdit from "./views/pages/quiz_questions/Edit.vue";
import QuizQuestionDetails from "./views/pages/quiz_questions/Details.vue";

Vue.use(VueRouter);
window.Fire = new Vue();

const routes = [
    {
        path: '',
        component: QuizLayout,
        children: [
            {
                path: '',
                component: AllQuiz,
            },
            {
                path: 'quiz',
                name: 'AllQuiz',
                component: AllQuiz,
            },

            {
                path: 'topic',
                component: QuizTopicLayout,
                children: [
                    {
                        path: '',
                        name: 'QuizTopicAll',
                        component: QuizTopicAll,
                    },
                    {
                        path: 'all',
                        name: 'QuizTopicAll',
                        component: QuizTopicAll,
                    },
                    {
                        path: 'create',
                        name: 'QuizTopicCreate',
                        component: QuizTopicCreate,
                    },
                    {
                        path: 'edit/:topic_id',
                        name: 'QuizTopicEdit',
                        component: QuizTopicEdit,
                    },
                    {
                        path: 'details/:topic_id',
                        name: 'QuizTopicDetails',
                        component: QuizTopicDetails,
                    },
                ]
            },

            {
                path: 'question',
                component: QuizQuestionLayout,
                children: [
                    {
                        path: '',
                        name: 'QuizQuestionAll',
                        component: QuizQuestionAll,
                    },
                    {
                        path: 'all',
                        name: 'QuizQuestionAll',
                        component: QuizQuestionAll,
                    },
                    {
                        path: 'create',
                        name: 'QuizQuestionCreate',
                        component: QuizQuestionCreate,
                    },
                    {
                        path: 'edit/:question_id',
                        name: 'QuizQuestionEdit',
                        component: QuizQuestionEdit,
                    },
                    {
                        path: 'details/:question_id',
                        name: 'QuizQuestionDetails',
                        component: QuizQuestionDetails,
                    },
                ]
            },
        ]
    },

];

const management_router = new VueRouter({
    routes,
    mode: 'hash',
    linkExactActiveClass: 'active',
    // scrollBehavior: function(to, from, savedPosition) {
    //     return { x: 0, y: 0 }
    // }
});


window.management_router = management_router;

management_router.beforeEach((to, from, next) => {
    // let isAuthenticated = window.localStorage?.token?.length ? true : false;
    // if (isAuthenticated) {
    //     window.axios.defaults.headers.common["Authorization"] = `Bearer ${window.localStorage?.token}`;
    //     next();
    // } else {
    //     delete window.axios.defaults.headers.common["Authorization"];
    //     window.location.href = '/login'
    //     return 0;
    // }

    next()
})

export default management_router
