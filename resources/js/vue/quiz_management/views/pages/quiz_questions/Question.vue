<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create Quiz</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="store_course_work($event.target)" @submit.prevent="store_course_work($event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="topic">Topic</label>
                                        <select name="topic" class="form-control" id="topic">
                                            <option v-for="(topic, index) in topics" :key="index" :value="topic.id">{{ topic.title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div v-for="(question, index) in questions" :key="index" class="border boder-primary p-1">
                                        <div class="form-group mb-2">
                                            <label for="">Question {{ index+1 }}</label>
                                            <div class="input">
                                                <input type="text" :value="question.title" class="form-control">
                                            </div>
                                        </div>

                                        
                                        <div class="form_group border boder-primary p-1 mb-2">
                                            <h4>Options</h4><hr>
                                            <div class="form-row">

                                                <div v-for="(option, serial) in question.options" :key="serial" class="form-group col-md-6">
                                                    <label for="">Option {{  serial+1  }}</label>
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <div class="input">
                                                                <input v-if="option.is_correct == 1" checked class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <input v-else class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <input type="text" :value="option.title" class="form-control">
                                                                <button v-if="question.options.length > 1" @click.prevent="remove_option(question.options, index)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="action_btns mt-1">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="float-right">
                                                            <button @click.prevent="append_new_option(question)" class="btn btn-primary btn-sm mr-1"><i class="fa fa-plus mr-1"></i>Add new option</button>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>

                                        <div class="action_btns mt-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="float-right">
                                                        <button @click.prevent="append_new_question()" class="btn btn-primary btn-sm mr-1"><i class="fa fa-plus mr-1"></i>Add new Question</button>
                                                    </div>
                                                    <div class="float-right">
                                                        <button v-if="questions.length > 1" @click.prevent="remove_question(questions, index)" class="btn btn-danger btn-sm mr-1"><i class="fa fa-trash mr-1"></i>Remove Question</button>
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
                    <button type="submit" class="btn btn-outline-info" >
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
        store_question: async function(event) {
            let formData = new FormData(event);
            let course_id = this.$route.params.id;
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/quiz-questions/store', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course Job position added successfully!");
                event.reset();
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_quiz_data: async function (event) {
            await axios.get('/api/v1/quiz-questions/all_data').then((response) => {
                console.log(response.data);
            })
            .catch((e) => {
                console.log(e);
            });
        },

        get_all_topics: async function() {
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

        remove_option: function(options, index) {
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
                    is_correct: 0,
                }
            );
        },
        
        append_new_question: function () {
            this.questions.push({
                id: "",
                topic_id: "1",
                title: "What is C",
                mark: 1,
                is_multiple: 1,
                options: [
                    {
                        id: "",
                        question_id: '',
                        title: "A programming language",
                        is_correct: 1,
                    },
                    {
                        id: "",
                        question_id: '',
                        title: "A Markup language",
                        is_correct: 0,
                    },
                    {
                        id: "",
                        question_id: '',
                        title: "A Styling language",
                        is_correct: 0,
                    },
                    {
                        id: "",
                        question_id: '',
                        title: "A compiler",
                        is_correct: 0,
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
        await this.get_quiz_data();
    },
}
</script>


<style>

</style>