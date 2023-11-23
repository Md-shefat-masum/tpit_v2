<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Edit Quiz Question:</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="update_course_for_whom($event.target)" @submit.prevent="update_course_for_whom($event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="title">Learning title</label>
                                    <input type="text" id="title" name="title" :value="course_for_whom.title" class="form-control" placeholder="GD-1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-info" >
                        <i class="fa fa-upload"></i>
                        update
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
            question: '',
            topic_id: '',
            topic_title: '',
            question_id: '',
            topics: [

            ],
            quiz_edit: ''
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_course_for_whom_details: async function (event) {
            let id = this.$route.params.id
            axios.get(`/api/v1/course/course-for-whoms/${id}`).then((response) => {
                // console.log(response.data);
                this.course_for_whom = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        update_course_for_whom: async function(event) {
            let formData = new FormData(event);
            let course_id = this.course_for_whom.course_id;
            formData.append('id', this.course_for_whom.id);
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/course-for-whoms/update', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course For whom updated successfully!");
                // event.reset();
            })
            .catch((e) => {
                console.log(e);
            });
        }
    },
    computed: {

    },

    created: async function () {
        await this.get_course_for_whom_details();
        console.log(this.$route.params);
    },
}
</script>

<style>

</style>
