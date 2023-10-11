<template>
    <div>
        <div class="card list_card">
            <div class="card-header">
                <h4>Course Details</h4>
                <div class="btns">
                    <a href="" @click.prevent="$router.go(-1)"  class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        <span >
                            Back
                        </span>
                    </a>
                </div>
            </div>
            <div class="card-body pb-5 ">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <table class="table table-bordered details_table">
                            <tr>
                                <td>id</td>
                                <td>{{ quiz_topic.id }}</td>
                            </tr>
                            <tr>
                                <td>Quiz topic title:</td>
                                <td>{{ quiz_topic.title }}</td>
                            </tr>
                            <tr>
                                <td>Quiz topic description</td>
                                <td>{{ quiz_topic.description }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
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
    },
    computed: {

    },

    created: async function () {
        await this.get_course_quiz_topic();
    },
}
</script>

<style>

</style>