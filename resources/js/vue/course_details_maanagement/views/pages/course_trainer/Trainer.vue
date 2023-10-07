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
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="title">Select teacher</label>
                                    <select name="instructor_id" id="" class="form-control">
                                        <option v-for="(teacher, index) in course_teachers" :key="index" :value="teacher.id">{{  teacher.full_name }}</option>
                                    </select>
                                    <!-- <input type="text" id="title" name="title" class="form-control" placeholder="website design" /> -->
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
            course_teachers: []
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
        get_all_teachers: async function (event) {
            let id = this.$route.params.id
            axios.get(`/api/v1/course/course-instructor/get-all`).then((response) => {
                // console.log(response.data);
                this.course_teachers = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        }
    },
    computed: {
        
    },

    created: async function () {
        this.get_all_teachers();
    },
}
</script>


<style>

</style>