<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="update_batch($event.target)" @submit.prevent="update_batch($event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <h6>Topic 💡</h6>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="title">Topic title</label>
                                    <input type="text" id="title" name="title" :value="quiz_topic.title" class="form-control" placeholder="GD-1" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="description">Topic Description</label>
                                    <textarea type="number" id="description" :value="quiz_topic.description" name="description" class="form-control"></textarea>
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
            quiz_topic: {},
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_course_quiz_topic: async function (event) {
            let id = this.$route.params.id
            axios.get(`/api/v1/quiz-topics/${id}`).then((response) => {
                // console.log(response.data);
                this.quiz_topic = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        },
        update_batch: async function(event) {
            let formData = new FormData(event);
            formData.append('id', this.quiz_topic.id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/quiz-topics/update', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course Batch updated successfully!");
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
        await this.get_course_quiz_topic();
        console.log(this.$route.params);
    },
}
</script>

<style>

</style>