<template>
    <div>
        <div class="setting_management">
            <div class="navs">
                <ul>
                    <li>
                        <router-link :to="{ name: `AllQuiz` }" aria-current="page"
                            class="">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                All Quizes
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{name: `QuizTopicAll`}" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Quiz Topics
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `CourseFaqAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Quiz Options
                            </div>
                        </router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: `QuizQuestionAll` }" aria-current="page" class="router-link-active">
                            <i class="far fa-circle mr-1"></i>
                            <div>
                                Quiz question
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