<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Manage course instructor</h4>
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
                            <div class="row g-3">
                                <div class="col-md-12" v-if="current_batch != ''">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Select Batch</label>
                                        <select name="batch_id" id="" class="form-control" v-model="current_batch">
                                            <option v-for="(batch, index) in course_batches" :key="index" :value="batch.id">{{ batch.batch_name }}</option>
                                        </select>
                                    </div>
                                    <!-- <input type="text" id="title" name="title" class="form-control" placeholder="website design" /> -->
                                </div>
                                <div class="col-md-12" v-if="current_teacher != ''">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Select teacher</label>
                                        <select name="instructor_id" id="" class="form-control" v-model="current_teacher">
                                            <option v-for="(teacher, index) in course_teachers" :key="index" :value="teacher.id">{{  teacher.full_name }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-info" >
                        <i class="fa fa-upload"></i>
                        Update
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
            course_teachers: [],
            course_batches: [],
            current_teacher: '',
            current_batch: ''
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

            await axios.post('/api/v1/course/course-instructor/update-instructor', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                if(response) {
                    window.toaster(response.data.message, 'info');
                }
                
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_all_teachers: async function () {
            axios.get(`/api/v1/course/course-instructor/get-all`).then((response) => {
                this.course_teachers = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_current_course_teachers: async function() {
            axios.get(`/api/v1/course/course-instructor/current-course-teacher/${this.course_id}`).then((response) => {
                this.current_teacher = response.data.instructor_id;
                this.current_batch = response.data.batch_id;
                // console.log(this.current_teacher, this.current_batch);
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_all_batches: async function () {
            axios.get(`/api/v1/course/course-batch/get-all/${this.course_id}`).then((response) => {
                this.course_batches = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        }
    },
    computed: {
        
    },

    created: async function () {
        let course = localStorage.getItem('current_course');
        if(course) {
            course = JSON.parse(course);
            this.course_id = course.id
        }
        await this.get_current_course_teachers();
        await this.get_all_batches();
        await this.get_all_teachers();
    },
}
</script>


<style>

</style>