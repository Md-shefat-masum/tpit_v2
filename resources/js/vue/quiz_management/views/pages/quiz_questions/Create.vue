<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create Quiz Question</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="store_question($event.target)" @submit.prevent="store_question($event.target)"
                class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="topic">Topic</label>
                                        <select name="topic" class="form-control" v-model="topic_id" id="topic">
                                            <option v-for="(topic, index) in topics" :key="index" :value="topic.id">{{
                                                topic.title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div v-for="(question, index) in questions" :key="index"
                                        class="border boder-primary p-1">
                                        <div class="form-group mb-2">
                                            <h4>Question {{ index + 1 }}</h4>

                                            <label for="question_title">title</label>
                                            <div class="input mb-2">
                                                <input type="text" id="question_title" v-model="question.title"
                                                    class="form-control">
                                            </div>

                                            <div class="form-row">

                                                <div class="form-group col-md-6">
                                                    <div class="input">
                                                        <label for="mark">Mark</label>
                                                        <input type="text" id="mark" v-model="question.mark"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input">
                                                        <label for="mark">Question type</label>
                                                        <!-- <input class="form-check-input" v-model="question.is_multiple" type="checkbox" id="gridCheck1"> -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="1" v-model="question.is_multiple" name="question_type" id="question_type1">
                                                            <label class="form-check-label" for="question_type1">
                                                                Multiple
                                                            </label>
                                                        </div>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="0" v-model="question.is_multiple" name="question_type" id="question_type2" checked>
                                                            <label class="form-check-label" for="question_type2">
                                                                Single
                                                            </label>
                                                        </div> -->
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form_group border boder-primary p-1 mb-2">
                                            <h4>Options</h4>
                                            <hr>
                                            <div class="form-row">

                                                <div v-for="(option, serial) in question.options" :key="serial"
                                                    class="form-group col-md-6">
                                                    <label for="">Option {{ serial + 1 }}</label>
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <div class="input">

                                                                <input v-if="question.is_multiple == 1" class="form-check-input" value="1" v-model="option.is_correct" type="checkbox" id="gridCheck1">
                                                                <input v-else class="form-check-input" value="1" v-model="option.is_correct" type="radio" id="gridCheck1">
                                                                <!-- <input v-else class="form-check-input" type="checkbox" id="gridCheck1"> -->
                                                                <input type="text" v-model="option.title"
                                                                    class="form-control">
                                                                <button v-if="question.options.length > 1"
                                                                    @click.prevent="remove_option(question.options, serial)"
                                                                    class="btn btn-danger btn-sm"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="action_btns mt-1">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="float-right">
                                                            <button @click.prevent="append_new_option(question)"
                                                                class="btn btn-primary btn-sm mr-1"><i
                                                                    class="fa fa-plus mr-1"></i>Add new option</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="action_btns mt-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="float-right">
                                                        <button @click.prevent="append_new_question()"
                                                            class="btn btn-primary btn-sm mr-1"><i
                                                                class="fa fa-plus mr-1"></i>Add new Question</button>
                                                    </div>
                                                    <div class="float-right">
                                                        <button v-if="questions.length > 1"
                                                            @click.prevent="remove_question(questions, index)"
                                                            class="btn btn-danger btn-sm mr-1"><i
                                                                class="fa fa-trash mr-1"></i>Remove Question</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input type="text" id="title" name="title" class="form-control" placeholder="website design" /> -->
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
            questions: [],
            topic_id: '',
            topics: [

            ]
        }
    },
    methods: {
        store_question: async function () {
            let question_data = JSON.stringify(this.questions);
            let data = {
                topic_id: this.topic_id,
                question: question_data
            }

            await axios.post('/api/v1/quiz-questions/store', data).then((response) => {
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
        remove_question: function (questions, index) {
            if (confirm('remove')) {
                questions.splice(index, 1);
            }
        },

        remove_option: function (options, index) {
            if (confirm('remove')) {
                options.splice(index, 1);
            }
        },

        append_new_option: function (question) {
            question.options.push(
                {
                    id: "",
                    question_id: '',
                    title: "",
                    is_correct: false,
                }
            );
        },

        append_new_question: function () {
            this.questions.push({
                id: "",
                quiz_question_topic_id: "1",
                title: "",
                mark: 1,
                is_multiple: 0,
                options: [
                    {
                        id: "",
                        question_id: '',
                        title: "",
                        is_correct: false,
                    },
                    {
                        id: "",
                        question_id: '',
                        title: "",
                        is_correct: false,
                    },
                    {
                        id: "",
                        question_id: '',
                        title: "",
                        is_correct: false,
                    },
                    {
                        id: "",
                        question_id: '',
                        title: "",
                        is_correct: false,
                    },
                ]
            })
        },
    },
    computed: {

    },

    created: async function () {
        await this.get_all_topics();
        await this.append_new_question();
    },
}
</script>


<style>

</style>
