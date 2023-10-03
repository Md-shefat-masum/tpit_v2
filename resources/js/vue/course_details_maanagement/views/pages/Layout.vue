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
                        <router-link :to="{ name: `WhatIsThisCourse`, params: { id: 1 } }" aria-current="page"
                            class="">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                what
                            </div>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: `WhyIsThisCourse`, params: { id: 1 } }" aria-current="page"
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
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course what will learn
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course for whoom
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course why learn from us
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course what you will get
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course outlines
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course class modules
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course trainer
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course routine
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Course FAQ
                            </div>
                        </a>
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

}
</script>

<style></style>