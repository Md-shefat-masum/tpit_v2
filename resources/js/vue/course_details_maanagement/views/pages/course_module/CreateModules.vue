<template>
    <div class="custom_scroll">
        <div class="card list_card">

            <div class="card-header">

                <h4>Create Course Module</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="store_course_module($event.target)" @submit.prevent="store_course_module($event.target)"
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
                                        <label class="form-label" for="milestone">Milestones</label>
                                        <select name="milestone_id" class="form-control" id="milestone">
                                            <option v-for="(milestone, index) in course_milestones" :key="index" :value="milestone.id">{{ milestone.title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Js advance work" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Module No</label>
                                        <input type="text" id="module_no" name="module_no" class="form-control"
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
            course_id: '',
            course_milestones: ''
        }
    },
    methods: {
        store_course_module: async function (event) {
            let formData = new FormData(event);
            let course_id = this.$route.params.id;
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/course-modules/item-store', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course Milestone added successfully!");
                event.reset();
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
    },
    computed: {

    },

    created: async function () {
        this.course_id = this.$route.params.id;
        await this.get_course_milestones();
    },
}
</script>


<style></style>