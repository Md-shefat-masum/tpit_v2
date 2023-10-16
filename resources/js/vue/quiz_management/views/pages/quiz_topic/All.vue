<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Quiz topic: 📓</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'QuizTopicCreate'}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="quiz_topics.data && quiz_topics.data.length > 0">
                            <tr v-for="(quiz, index) in quiz_topics.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td><span class="text-warning cursor_pointer">{{ quiz.title }}</span></td>
                                <td><span>{{ quiz.description }}</span></td>
                                <td>
                                    
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <router-link :to="{ name: 'QuizTopicDetails', params: { id: quiz.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link>
                                            <router-link :to="{ name: 'QuizTopicEdit', params: { id: quiz.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteQuizTopic(quiz.id)" class="dropdown-item">
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
        <!-- <table>
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>title</th>
                    <th>
                        <router-link :to="{name:'QuizTopicEdit'}"> edit </router-link>
                        <router-link :to="{name:'QuizTopicDetails'}"> delete </router-link>
                    </th>
                </tr>
            </thead>
        </table> -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            quiz_topics: {},
        }
    },
    methods: {
        get_quiz_topics: async function () {
            axios.get(`/api/v1/quiz-topics/all`).then((response) => {
                // console.log(response.data);
                this.quiz_topics = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        },
        deleteQuizTopic: async function(id) {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/quiz-topics/destroy`, {id: id}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Quiz topic deleted successfully!");
                    this.get_quiz_topics();
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
        await this.get_quiz_topics();
    },
}
</script>
<style>

</style>