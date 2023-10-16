<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Quiz Quesions: </h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'QuizQuestionCreate'}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Topic Title</td>
                                <td>Title</td>
                                <td>Mark</td>
                                <td>Right Answer</td>
                                <td>Question Type</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="quiz_question.data && quiz_question.data.length > 0">
                            <tr v-for="(question, index) in quiz_question.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td><span class="text-info cursor_pointer">{{ question.topic_title }}</span></td>
                                <td><span class="text-warning cursor_pointer">{{ question.title }}</span></td>
                                <td><span class="badge">{{ question.mark }}</span></td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <template v-for="(option, index) in question.options">
                                            <li v-if="option.is_correct == 1" :key="index">
                                                <span>{{ option.title }}</span>
                                            </li>
                                        </template>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge" v-if="question.is_multiple == 1">Multiple</span>
                                    <span class="badge" v-else>Single</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- <router-link :to="{ name: 'CourseWhatquestionCreate', params: { id: question.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link> -->
                                            <router-link :to="{ name: 'QuizQuestionEdit', params: { question_id: question.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteCourseForWhom(question.id)" class="dropdown-item">
                                                <i class="fa text-danger fa-trash mr-2"></i> <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <table>
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>title</th>
                    <th>
                        <router-link :to="{name:'CourseBatchEdit'}"> edit </router-link>
                        <router-link :to="{name:'CourseBatchDetails'}"> delete </router-link>
                    </th>
                </tr>
            </thead>
        </table> -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            quiz_question: {},
        }
    },
    methods: {
        get_quiz_questions: async function () {
            let course_id = this.$route.params.id
            axios.get(`/api/v1/quiz-questions/all`).then((response) => {
                // console.log(response.data);
                this.quiz_question = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        },
        deleteCourseForWhom: async function(id) {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/quiz-questions/destroy`, {id: id}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Quiz question deleted successfully!");
                    this.get_quiz_questions();
                })
                .catch((e) => {
                    console.log(e);
                });
            }
            
        }
    },
    computed: {

    },

    created: async function () {
        await this.get_quiz_questions();
    },
}
</script>
<style>

</style>