<template>
    <div>
        <div class="card list_card">
            <div class="card-header">
                <h4>Quiz Details</h4>
                <div class="btns">
                    <a href="" @click.prevent="$router.push({ name: `AllQuiz` })"  class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        <span >
                            Back
                        </span>
                    </a>
                </div>
            </div>
            <div class="card-body pb-5 ">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <label for=""><b>Quiz title:</b></label>
                        
                        <h3 class="mb-2">{{ quiz_details.title }}</h3>

                        <label for="" class="mb-2"><b>Questions: </b></label>
                        <!-- <ul class="list-group list-group-flush"> -->
                            <div v-for="(question, serial) in quiz_details.questions" :key="serial">
                                <h4><b>{{ serial+1 }}: {{  question.title  }}</b></h4>

                                <div class="row mt-1 mb-2">
                                    <div class="col-md-6">
                                        <h5 v-for="(option, index) in question.options" :key="index">
                                            <span :class="[option.is_correct == 1 ? rightAns : '']">{{ index+1 }}. {{ option.title }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <!-- </ul> -->
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
            quiz_details: {},
            rightAns: 'text-success'
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_quiz_details: async function (event) {
            let id = this.$route.params.quiz_id
            
            axios.get(`/api/v1/quiz/${id}`).then((response) => {
                // console.log(response.data);
                this.quiz_details = response.data;
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
        await this.get_quiz_details();
    },
}
</script>

<style>

</style>