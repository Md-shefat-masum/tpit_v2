<template>
    <div>
        <div class="setting_management">
            <div class="navs">
                <ul>
                    <li>
                        <router-link :to="{ name: `AllCourse` }" aria-current="page"
                            class="">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                All Courses
                            </div>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: `WhatIsThisCourse`, params: { id: course_id } }" aria-current="page"
                            class="">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                what
                            </div>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: `WhyIsThisCourse`, params: { id: course_id } }" aria-current="page"
                            class="">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                why
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{name:'batch'}" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course Batch
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseWhatLearnALL` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course what will learn
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseJobPositionAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course Job positions
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseJobWorkAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course Job works
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseForWhomAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course for whom
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseWhyLearnAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course why learn from us
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseWhatWillGetAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course what you will get
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{name: `CourseAtaGlance`}" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course at a glance
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{name: `CourseModule`}" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course class modules
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{name: `CourseClassQuiz`}" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course class quiz
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseTrainerCreate` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course trainer
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{name: `CourseRoutines`}" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course routine
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseFaqAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course FAQ
                            </div>
                        </router-link>
                    </li>


                </ul>
            </div>
            <div class="setting_body custom_scroll">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
export default {
data() {
        return {
            course_id: null,
        }
    },
    created: async function () {
        this.course_id = this.$route.params.id;
    },
}
</script>

<style></style>