<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create Job work</h4>
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
                                    <div class="border boder-primary p-1">
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="topic">Topic</label>
                                            <select name="topic" class="form-control" id="topic">
                                                <option value="">topic 1</option>
                                                <option value="">topic 2</option>
                                                <option value="">topic 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="">Question</label>
                                            <div class="input">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form_group border boder-primary p-1 mb-2">
                                            <h4>Options</h4><hr>
                                            <div class="form-row">
                                                
                                                <div class="form-group col-md-6">
                                                    <label for="">Option 1</label>
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <div class="input">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <input type="text" class="form-control">
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Option 2</label>
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <div class="input">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <input type="text" class="form-control">
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Option 3</label>
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <div class="input">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <input type="text" class="form-control">
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Option 4</label>
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <div class="input">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <input type="text" class="form-control">
                                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="action_btns mt-1">
                                                    <div class="col-md-12">
                                                        <div class="float-right">
                                                            <button class="btn btn-primary btn-sm mr-1"><i class="fa fa-plus mr-1"></i>Add new option</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="action_btns mt-1">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary btn-sm mr-1"><i class="fa fa-plus mr-1"></i>Add new Question</button>
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
            milestones: []
        }
    },
    methods: {
        store_course_work: async function(event) {
            let formData = new FormData(event);
            let course_id = this.$route.params.id;
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/course-job-work/store', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course Job position added successfully!");
                event.reset();
            })
            .catch((e) => {
                console.log(e);
            });
        },
        // get_course_details: async function (event) {
        //     let whatcourse = localStorage.getItem('current_course');
        //     if(whatcourse) {
        //         whatcourse = JSON.parse(whatcourse);
        //         this.course_id = whatcourse.id
        //     }
        // }
        remove_question: function (modules, index) {
            if (confirm('remove')) {
                modules.splice(index, 1);
            }
        },
        append_new_option: function() {

        },
        append_new_question: function (milestone) {
            milestone.questions.push({
                id: "",
                module_no: "",
                title: "Question 1",
                options: [
                    {
                        id: "",
                        class_no: "",
                        title: "a programming language",
                        
                    }, 
                    {
                        id: "",
                        class_no: "",
                        title: "a markup",
                    }
                ]
            })
        },
        append_new_milstone: function () {
            this.milestones.push({
                id: "",
                title: "Topic 1",
                questions: [
                    {
                        id: "",
                        module_no: "",
                        title: "Question 1",
                        options: [
                            {
                                id: "",
                                class_no: "",
                                title: "a programming language",
                                
                            }, 
                            {
                                id: "",
                                class_no: "",
                                title: "a markup",
                            }
                        ]
                    },
                ]
            })
        },
    },
    computed: {

    },

    created: async function () {
        this.append_new_milstone();
    },
}
</script>


<style>

</style>