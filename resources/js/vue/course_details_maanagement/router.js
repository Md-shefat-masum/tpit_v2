import Vue from 'vue'
import VueRouter from 'vue-router'
import PageLayout from "./views/pages/Layout.vue";
import Layout from "./views/Layout.vue";

import WhatIsThisCourse from "./views/pages/WhatIsThisCourse.vue";
import WhyIsThisCourse from "./views/pages/WhyIsThisCourse.vue";
import AllCourse from "./views/AllCourse.vue";

import CourseBatchLayout from "./views/pages/course_batch/CourseBatchLayout.vue";
import CourseBatchALL from "./views/pages/course_batch/All.vue";
import CourseBatchCreate from "./views/pages/course_batch/Create.vue";
import CourseBatchEdit from "./views/pages/course_batch/Edit.vue";
import CourseBatchDetails from "./views/pages/course_batch/Details.vue";


Vue.use(VueRouter);
window.Fire = new Vue();

const routes = [
    {
        path: '',
        component: Layout,
        children: [
            {
                path: '',
                name: 'AllCourse',
                component: AllCourse,
            },
            {
                path: '/courses/:id',
                name: "CourseDetails",
                component: PageLayout,
                children: [
                    {
                        path: '',
                        component: WhatIsThisCourse,
                    },
                    {
                        path: 'what-is-this-course',
                        name: 'WhatIsThisCourse',
                        component: WhatIsThisCourse,
                    },
                    {
                        path: 'why-is-this-course',
                        name: 'WhyIsThisCourse',
                        component: WhyIsThisCourse,
                    },
                    {
                        path: 'batch',
                        component: CourseBatchLayout,
                        children: [
                            {
                                path: '',
                                name: 'batch',
                                component: CourseBatchALL,
                            },
                            {
                                path: 'batch-all',
                                name: 'CourseBatchALL',
                                component: CourseBatchALL,
                            },
                            {
                                path: 'batch-create',
                                name: 'CourseBatchCreate',
                                component: CourseBatchCreate,
                            },
                            {
                                path: 'batch-edit/:id',
                                name: 'CourseBatchEdit',
                                component: CourseBatchEdit,
                            },
                            {
                                path: 'batch-details/:id',
                                name: 'CourseBatchDetails',
                                component: CourseBatchDetails,
                            },
                        ]
                    },
                ],
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