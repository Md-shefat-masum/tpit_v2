<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All quizes List: 🚀</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'CreateQuiz'}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Title</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="all_quizes.data && all_quizes.data.length > 0">
                            <tr v-for="(quiz, index) in all_quizes.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td>{{ quiz.title }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" @click.prevent="quiz_edit(quiz)">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </a>
                                            <router-link :to="{ name: 'DetailsQuiz' , params: { quiz_id: quiz.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link>
                                            <a class="dropdown-item" @click.prevent="deleteQuiz(quiz.id)">
                                                <i class="fa text-danger fa-trash mr-2"></i> <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</template>

<script>
export default {
    data() {
        return {
            all_quizes: {},
        }
    },
    methods: {
        quiz_edit: async function(quiz) {
            let current_quiz = JSON.stringify(quiz)
            localStorage.setItem('current_quiz', current_quiz);
            this.$router.push({ name: 'CourseDetails', params: { id: quiz.id } })
        },
        
        get_all_quiz: async function (event) {
            
            axios.get('/api/v1/quiz/all').then((response) => {
                // console.log(response.data);
                this.all_quizes = response.data;
            })
                .catch((e) => {
                    console.log(e);
                    // if(e.response.status == 401) {
                    //     console.log(e.response.data);
                    //     location.href = '/';
                    // }
                });
        },
        deleteQuiz: async function(id) {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/quiz/destroy`, {id: id}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Quiz deleted successfully!");
                    this.get_all_quiz();
                })
                .catch((e) => {
                    console.log(e);
                });
            }
            
        }
    },
    computed: {

    },

    created: async function () {
        await this.get_all_quiz();
    },
}
</script>

<style>
</style>