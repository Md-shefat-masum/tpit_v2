<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create Quiz</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="store_quiz($event.target)" @submit.prevent="store_quiz($event.target)"
                class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="topic">Quiz title</label>
                                        <input v-model="quiz_details.title" type="text" name="quiz_title" id="quiz_title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <router-link :to="{ name: 'AddQuestionQuiz', params: {quiz_id: quiz_details.id} }" class="btn btn-sm btn-primary mb-2 float-right">
                                            <i class="fa-solid fa-plus mr-1"></i> <span>Add new question</span>
                                        </router-link>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td>Select</td>
                                                    <td>#</td>
                                                    <td>Title</td>
                                                    <!-- <td>Actions</td> -->
                                                </tr>
                                            </thead>
                                            <tbody v-if="questions && questions.length > 0">
                                                <tr v-for="(question, index) in questions" :key="index">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" @click="SetQuestionIds(question)" class="custom-control-input"
                                                                :id="`question_${question.id}`" checked>
                                                            <label class="custom-control-label"
                                                                :for="`question_${question.id}`"></label>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                                    <td>{{ question.title }}</td>
                                                    <!-- <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-gears"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" @click.prevent="quiz_edit(quiz)">
                                                                    <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td> -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-info">
                        <i class="fa fa-upload"></i>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            questions: [],
            topics: [

            ],
            question_ids: [

            ],
            quiz_id: '',
            quiz_details: ''
        }
    },
    watch: {
        questions: {
            handler: function (newv, oldv) {
                newv.forEach(element => {
                    this.question_ids.push(element.id)
                });
            },
            deep: true,
        },
    },
    methods: {
        get_quiz_details: async function (event) {
            let id = this.$route.params.quiz_id
            
            axios.get(`/api/v1/quiz/${id}`).then((response) => {
                this.quiz_details = response.data;
                this.questions = response?.data?.questions;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        store_quiz: async function () {
            let question_ids = JSON.stringify(this.question_ids);
            let data = {
                question_ids: question_ids,
                title: this.quiz_details.title,
                id: this.quiz_details.id
            }

            await axios.post('/api/v1/quiz/update', data).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster(response?.data.message);
                this.get_quiz_details();
            })
            .catch((e) => {
                console.log(e);
            });
        },
        SetQuestionIds: async function(question) {
            if(!this.question_ids.includes(question.id)) {
                this.question_ids.push(question.id)
            }else {
                let index = this.question_ids.indexOf(question.id);
                this.question_ids.splice(index, 1);
            }
        },
    },
    computed: {

    },

    created: async function () {
        this.quiz_id = this.$route.params.quiz_id
        await this.get_quiz_details();
    },
}
</script>


<style></style>