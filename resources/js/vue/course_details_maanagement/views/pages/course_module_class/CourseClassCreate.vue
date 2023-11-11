<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create Course Class</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="store_course_class($event.target)" @submit.prevent="store_course_class($event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Js advance work" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Class no</label>
                                        <input type="text" id="class_no" name="class_no" class="form-control" placeholder="1,2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="milestone">Milestones</label>
                                        <select name="milestone_id" class="form-control" id="milestone">
                                            <option v-for="(milestone, index) in course_milestones" :key="index" :value="milestone.id">{{ milestone.title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="module">Module</label>
                                        <select name="course_modules_id" class="form-control" id="module">
                                            <option v-for="(module, index) in course_modules" :key="index" :value="module.id">{{ module.title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Class No</label>
                                        <input type="text" id="milestone_no" name="milestone_no" class="form-control" placeholder="1,2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Class Type</label>
                                        <select name="type" class="form-control" id="type">
                                            <option value="recorded">recorded</option>
                                            <option value="live">live</option>
                                        </select>
                                    </div>
                                    <!-- <input type="text" id="milestone_no" name="milestone_no" class="form-control" placeholder="1,2" /> -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Class Video link</label>
                                        <input type="text" id="class_video_link" name="class_video_link" class="form-control" placeholder="youtube.com" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">class video poster</label>
                                        <input name="class_video_poster" accept="image/*" type="file" class="form-control">
                                    </div>
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
            course_modules: '',
            course_milestones: ''
        }
    },
    methods: {
        store_course_class: async function(event) {
            let formData = new FormData(event);
            let course_id = this.$route.params.id;
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/course-modules-class/store', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course module class added successfully!");
                event.reset();
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_course_modules: async function() {
            await axios.get('/api/v1/course/course-modules/all-modules/'+this.course_id).then((response) => {
                this.course_modules = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_course_milestones: async function() {
            await axios.get('/api/v1/course/course-milestones/all-milestones/'+this.course_id).then((response) => {
                this.course_milestones = response.data;
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
    },
    computed: {

    },

    created: async function () {
        this.course_id = this.$route.params.id;
        await this.get_course_modules();
        await this.get_course_milestones();
    },
}
</script>


<style>

</style>