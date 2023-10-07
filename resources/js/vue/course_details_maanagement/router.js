import Vue from 'vue'
import VueRouter from 'vue-router'
import PageLayout from "./views/pages/Layout.vue";
import Layout from "./views/Layout.vue";

import WhatIsThisCourse from "./views/pages/WhatIsThisCourse.vue";
import WhyIsThisCourse from "./views/pages/WhyIsThisCourse.vue";
import AllCourse from "./views/AllCourse.vue";

// course batch
import CourseBatchLayout from "./views/pages/course_batch/CourseBatchLayout.vue";
import CourseBatchALL from "./views/pages/course_batch/All.vue";
import CourseBatchCreate from "./views/pages/course_batch/Create.vue";
import CourseBatchEdit from "./views/pages/course_batch/Edit.vue";
import CourseBatchDetails from "./views/pages/course_batch/Details.vue";

// course what will you learn
import CourseWhatLearnLayout from "./views/pages/course_what_will_learn/CourseWhatLearnLayout.vue";
import CourseWhatLearnALL from "./views/pages/course_what_will_learn/All.vue";
import CourseWhatLearnCreate from "./views/pages/course_what_will_learn/Create.vue";
import CourseWhatLearnEdit from "./views/pages/course_what_will_learn/Edit.vue";
import CourseWhatLearnDetails from "./views/pages/course_what_will_learn/Details.vue";


// course job positions
import CourseJobPositionLayout from "./views/pages/course_job_position/CourseJobPositionLayout.vue";
import CourseJobPositionAll from "./views/pages/course_job_position/All.vue";
import CourseJobPositionCreate from "./views/pages/course_job_position/Create.vue";
import CourseJobPositionEdit from "./views/pages/course_job_position/Edit.vue";
import CourseJobPositionDetails from "./views/pages/course_job_position/Details.vue";


// course job works
import CourseJobWorkLayout from "./views/pages/course_job_works/CourseJobWorkLayout.vue";
import CourseJobWorkAll from "./views/pages/course_job_works/All.vue";
import CourseJobWorkCreate from "./views/pages/course_job_works/Create.vue";
import CourseJobWorkEdit from "./views/pages/course_job_works/Edit.vue";
import CourseJobWorkDetails from "./views/pages/course_job_works/Details.vue";


// course for whom
import CourseForWhomLayout from "./views/pages/course_for_whom/CourseForWhomLayout.vue";
import CourseForWhomAll from "./views/pages/course_for_whom/All.vue";
import CourseForWhomCreate from "./views/pages/course_for_whom/Create.vue";
import CourseForWhomEdit from "./views/pages/course_for_whom/Edit.vue";
import CourseForWhomDetails from "./views/pages/course_for_whom/Details.vue";


// course why learn from us
import CourseWhyLearnLayout from "./views/pages/course_why_learn/CourseWhyLearnLayout.vue";
import CourseWhyLearnAll from "./views/pages/course_why_learn/All.vue";
import CourseWhyLearnCreate from "./views/pages/course_why_learn/Create.vue";
import CourseWhyLearnEdit from "./views/pages/course_why_learn/Edit.vue";
import CourseWhyLearnDetails from "./views/pages/course_why_learn/Details.vue";


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

                    // course batch
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


                    // course learnings
                    {
                        path: 'what-will-learn',
                        component: CourseWhatLearnLayout,
                        children: [
                            {
                                path: '',
                                name: 'what_will_learn',
                                component: CourseWhatLearnALL,
                            },
                            {
                                path: 'all',
                                name: 'CourseWhatLearnALL',
                                component: CourseWhatLearnALL,
                            },
                            {
                                path: 'create',
                                name: 'CourseWhatLearnCreate',
                                component: CourseWhatLearnCreate,
                            },
                            {
                                path: 'edit/:id',
                                name: 'CourseWhatLearnEdit',
                                component: CourseWhatLearnEdit,
                            },
                            {
                                path: 'details/:id',
                                name: 'CourseWhatLearnDetails',
                                component: CourseWhatLearnDetails,
                            },
                        ]
                    },

                    // course job positions
                    {
                        path: 'job-positions',
                        component: CourseJobPositionLayout,
                        children: [
                            {
                                path: '',
                                name: 'CourseJobPosition',
                                component: CourseJobPositionAll,
                            },
                            {
                                path: 'all',
                                name: 'CourseJobPositionAll',
                                component: CourseJobPositionAll,
                            },
                            {
                                path: 'create',
                                name: 'CourseJobPositionCreate',
                                component: CourseJobPositionCreate,
                            },
                            {
                                path: 'edit/:id',
                                name: 'CourseJobPositionEdit',
                                component: CourseJobPositionEdit,
                            },
                            {
                                path: 'details/:id',
                                name: 'CourseJobPositionDetails',
                                component: CourseJobPositionDetails,
                            },
                        ]
                    },

                    // course job works
                    {
                        path: 'job-works',
                        component: CourseJobWorkLayout,
                        children: [
                            {
                                path: '',
                                name: 'CourseJobWork',
                                component: CourseJobWorkAll,
                            },
                            {
                                path: 'all',
                                name: 'CourseJobWorkAll',
                                component: CourseJobWorkAll,
                            },
                            {
                                path: 'create',
                                name: 'CourseJobWorkCreate',
                                component: CourseJobWorkCreate,
                            },
                            {
                                path: 'edit/:id',
                                name: 'CourseJobWorkEdit',
                                component: CourseJobWorkEdit,
                            },
                            {
                                path: 'details/:id',
                                name: 'CourseJobWorkDetails',
                                component: CourseJobWorkDetails,
                            },
                        ]
                    },


                    // course for whooms
                    {
                        path: 'course-for-whom',
                        component: CourseForWhomLayout,
                        children: [
                            {
                                path: '',
                                name: 'CourseForWhom',
                                component: CourseForWhomAll,
                            },
                            {
                                path: 'all',
                                name: 'CourseForWhomAll',
                                component: CourseForWhomAll,
                            },
                            {
                                path: 'create',
                                name: 'CourseForWhomCreate',
                                component: CourseForWhomCreate,
                            },
                            {
                                path: 'edit/:id',
                                name: 'CourseForWhomEdit',
                                component: CourseForWhomEdit,
                            },
                            {
                                path: 'details/:id',
                                name: 'CourseForWhomDetails',
                                component: CourseForWhomDetails,
                            },
                        ]
                    },

                    // couese why learn from us
                    {
                        path: 'course-why-learn',
                        component: CourseWhyLearnLayout,
                        children: [
                            {
                                path: '',
                                name: 'CourseWhyLearn',
                                component: CourseWhyLearnAll,
                            },
                            {
                                path: 'all',
                                name: 'CourseWhyLearnAll',
                                component: CourseWhyLearnAll,
                            },
                            {
                                path: 'create',
                                name: 'CourseWhyLearnCreate',
                                component: CourseWhyLearnCreate,
                            },
                            {
                                path: 'edit/:id',
                                name: 'CourseWhyLearnEdit',
                                component: CourseWhyLearnEdit,
                            },
                            {
                                path: 'details/:id',
                                name: 'CourseWhyLearnDetails',
                                component: CourseWhyLearnDetails,
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