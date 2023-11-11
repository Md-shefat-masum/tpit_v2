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
                    <div class="row">
                        <div class="col-xl-12 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="topic">Quiz title</label>
                                        <input v-model="quiz_title" type="text" name="quiz_title" id="quiz_title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="topic">Select Topic</label>
                                                    <select name="topic" @change.prevent="filterBytopic($event)" class="form-control" v-model="topic_id" id="topic">
                                                        <option v-for="(topic, index) in topics" :key="index"
                                                            :value="topic.id">{{
                                                                topic.title }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="topic">Search</label>
                                                    <input @keyup.prevent="filterBySearch($event)" type="text" name="search" id="search" class="form-control">
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
                                                <tr v-for="(question, index) in questions.data" :key="question.id">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <!-- <label v-if="is_selected() == true" class="custom-control-label"
                                                                :for="`question_${question.id}`"> -->
                                                                <input class="form-control-input" type="checkbox" v-if="is_selected() == true" @click="SetQuestionIds(question)"
                                                                :id="`question_${question.id}`" checked>
                                                                <input class="form-control-input" type="checkbox" v-else @click="SetQuestionIds(question)"
                                                                :id="`question_${question.id}`">
                                                            <!-- </label> -->
                                                            <!-- <label v-else class="custom-control-label"
                                                                :for="`question_${question.id}`"> -->
                                                                
                                                            <!-- </label> -->
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
                                        <pagination class="mt-2" v-if="questions" :data="questions" :method="get_all_questions" />
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="table-responsive">
                                        
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td>Title</td>
                                                </tr>
                                            </thead>
                                            <tbody v-if="selected_questions && selected_questions.length > 0">
                                                <tr v-for="(selected_ques, index) in selected_questions" :key="index">
                                                    <td>
                                                        <button type="button" @click.prevent="remove_selected_question(selected_ques)" class="btn btn-sm btn-danger mr-1"><i class="fa fa-trash"></i></button>
                                                        {{ selected_ques.title }}
                                                    </td>
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

            ],
            search_key: '',
            question_ids: [

            ],
            quiz_title: '',
            selected_questions: [

            ]
        }
    },
    methods: {
        store_quiz: async function () {
            let question_ids = JSON.stringify(this.selected_questions);
            let data = {
                question_ids: question_ids,
                title: this.quiz_title
            }

            await axios.post('/api/v1/quiz/store', data).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster(response?.data.message);
            })
            .catch((e) => {
                console.log(e);
            });
        },
        is_selected: async function(question) {
            var check_question = this.selected_questions.find((element) => element.id == question.id);
            if(check_question) {
                return true;
            }else {
                return false;
            }
        },
        remove_selected_question: async function(question) {
            
            var check_question = this.selected_questions.find((element) => element.id == question.id);
            if(check_question) {
                var serial = this.selected_questions.findIndex((element) => element.id == question.id);
                this.selected_questions.splice(serial, 1);
            }

            if(this.question_ids.includes(question.id)) {
                let index = this.question_ids.indexOf(question.id);
                this.question_ids.splice(index, 1);
            }
        },
        SetQuestionIds: async function(question) {
            this.selected_questions.push(question);
            if(!this.question_ids.includes(question.id)) {
                this.question_ids.push(question.id)
            }else {
                let index = this.question_ids.indexOf(question.id);
                this.question_ids.splice(index, 1);
            }
        },
        filterBytopic: async function(event) {
            this.topic_id = event.target.value;
            this.get_all_questions();
        },

        filterBySearch: async function(event) {
            this.search_key = event.target.value;
            this.get_all_questions();
        },

        get_all_topics: async function () {
            await axios.get('/api/v1/quiz-topics/all-topic').then((response) => {
                this.topics = response.data;
            })
                .catch((e) => {
                    console.log(e);
                });
        },

        get_all_questions: async function (url) {
            // console.log(page);
            if(!url) {
                url = "/api/v1/quiz-questions/all?";
            }

            if (this.search_key && this.search_key != '') {
                url += `search_key=${this.search_key}`;
            }

            if (this.topic_id && this.topic_id != '') {
                url += `&topicID=${this.topic_id}`;
            }
            
            await axios.get(url).then((response) => {
                // '/asset/index?page='+page
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