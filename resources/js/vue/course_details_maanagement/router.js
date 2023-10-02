import Vue from 'vue'
import VueRouter from 'vue-router'
import PageLayout from "./views/pages/Layout.vue";
import Layout from "./views/Layout.vue";

import WhatIsThisCourse from "./views/pages/WhatIsThisCourse.vue";
import WhyIsThisCourse from "./views/pages/WhyIsThisCourse.vue";
import AllCourse from "./views/AllCourse.vue";


Vue.use(VueRouter);
window.Fire = new Vue();

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