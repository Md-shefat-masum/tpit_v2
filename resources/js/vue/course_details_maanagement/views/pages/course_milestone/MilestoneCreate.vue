<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create Course Milestone</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="store_course_faq($event.target)" @submit.prevent="store_course_faq($event.target)"
                class="user_create_form">
                <div class="card-body">

                    <router-link :to="{ name: 'CourseModuleCSV' }" class="btn btn-sm btn-primary mb-2 mr-1">
                        <i class="fa-solid fa-plus mr-1"></i> <span>Upload CSV</span>
                    </router-link>

                    <router-link :to="{ name: 'CourseMileStone' }" class="btn btn-sm btn-primary mb-2 mr-1">
                        <i class="fa-solid"></i> <span>Milestones</span>
                    </router-link>

                    <router-link :to="{ name: 'CourseModuleAll' }" class="btn btn-sm btn-primary mb-2 mr-1">
                        <i class="fa-solid"></i> <span>Modules</span>
                    </router-link>

                    <router-link :to="{ name: 'CourseClassAll' }" class="btn btn-sm btn-primary mb-2 mr-1">
                        <i class="fa-solid"></i> <span>Classes</span>
                    </router-link>
                    
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Js advance work" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Milestone No</label>
                                        <input type="text" id="milestone_no" name="milestone_no" class="form-control"
                                            placeholder="1,2" />
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
            course_id: ''
        }
    },
    methods: {
        store_course_faq: async function (event) {
            let formData = new FormData(event);
            let course_id = this.$route.params.id;
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/course-milestones/store', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course Milestone added successfully!");
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
    },
    computed: {

    },

    created: async function () {

    },
}
</script>


<style></style>