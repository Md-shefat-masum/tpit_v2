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
                                        <input type="text" name="quiz_title" id="quiz_title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="topic">Select Topic</label>
                                                    <select name="topic" class="form-control" v-model="topic_id" id="topic">
                                                        <option v-for="(topic, index) in topics" :key="index"
                                                            :value="topic.id">{{
                                                                topic.title }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="topic">Search</label>
                                                    <input type="text" name="search" id="search" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td>Select</td>
                                                    <td>#</td>
                                                    <td>Title</td>
                                                    <!-- <td>Actions</td> -->
                                                </tr>
                                            </thead>
                                            <tbody v-if="questions.data && questions.data.length > 0">
                                                <tr v-for="(question, index) in questions.data" :key="index">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                :id="`question_${question.id}`">
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
            course_id: '',
            questions: '',
            topic_id: '',
            topics: [

            ]
        }
    },
    methods: {
        store_quiz: async function () {
            let quiz_data = JSON.stringify(this.questions);
            let data = {
                topic_id: this.topic_id,
                quiz: quiz_data
            }

            await axios.post('/api/v1/quiz/store', data).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster(response?.data.message);


            })
                .catch((e) => {
                    console.log(e);
                });
        },

        get_all_topics: async function () {
            await axios.get('/api/v1/quiz-topics/all-topic').then((response) => {
                this.topics = response.data;
            })
                .catch((e) => {
                    console.log(e);
                });
        },

        get_all_questions: async function () {
            await axios.get('/api/v1/quiz-questions/all').then((response) => {
                this.questions = response.data;
            })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    computed: {

    },

    created: async function () {
        await this.get_all_topics();
        await this.get_all_questions();
    },
}
</script>


<style></style>