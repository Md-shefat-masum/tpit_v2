<template>
    <div class="custom_scroll">
        <div class="card list_card">

            <div class="card-header">

                <h4>Create Class Quiz</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="CourseQuizSubmit($event.target)" @submit.prevent="CourseQuizSubmit($event.target)"
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

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" @click="resetFilter()" class="btn btn-sm btn-outline-primary mb-1">Reset
                                filter</button>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="module">Module</label>
                                        <select name="course_modules_id" @change.prevent="filterByModule($event)"
                                            class="form-control" id="module">
                                            <option v-for="(module, index) in course_modules" :key="index"
                                                :value="module.id">{{
                                                    module.title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="topic">Search</label>
                                        <input @keyup.prevent="filterBySearch($event)" type="text" name="search" id="search"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>sl</td>
                                            <td>class title</td>
                                            <td>date</td>
                                        </tr>
                                    </thead>
                                    <tbody v-if="course_routine.data && course_routine.data.length > 0">
                                        <!-- <form action="#" @submit.prevent="CourseRoutineSubmit()"> -->
                                        <tr v-for="(routine, index) in course_routine.data" :key="index">
                                            <td>
                                                <input class="form-control-input" type="radio"  :value="routine.id" v-model="selected_class_id" name="selected_class_id" id="selected_class_id">
                                            </td>
                                            <td>
                                                <span v-if="routine.class" class="text-warning cursor_pointer">{{
                                                    routine.class.title
                                                }}</span>
                                            </td>
                                            
                                            <td>
                                                {{ routine.show_date }}
                                            </td>
                                        </tr>
                                        <!-- </form> -->
                                    </tbody>

                                </table>
                                <pagination class="mt-2" v-if="course_routine" :data="course_routine"
                                    :method="get_course_routines" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="button" @click="resetFilter()" class="btn btn-sm btn-outline-primary mb-1">Reset
                                filter</button>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="topic">Search</label>
                                        <input @keyup.prevent="filterQuizBySearch($event)" type="text" name="search" id="search"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Title</td>
                                        </tr>
                                    </thead>
                                    <tbody v-if="all_quizes.data && all_quizes.data.length > 0">
                                        <tr v-for="(quiz, index) in all_quizes.data" :key="index">
                                            <td>
                                                <input class="form-control-input" type="checkbox" @click="SetQuizIds(quiz)"
                                                :id="`quiz_${quiz.id}`" :checked="is_selected(quiz)">
                                            </td>
                                            <td>{{ quiz.title }}</td>
                                        </tr>
                                    </tbody>
                                </table>
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
            course_id: null,
            course_routine: {},
            all_quizes: {},
            course_milestones: null,
            course_modules: null,
            search_key: null,
            module_id: null,
            search_key_quiz: null,
            selected_class_id: '',
            selected_quizes: []
        }
    },
    methods: {
        setClassId: async function(event) {
            this.selected_class_id = event.target.value;
        },
        get_course_routines: async function (url) {
            let course_id = this.$route.params.id
            if (!url) {
                url = `/api/v1/course/course-routines/all/${course_id}?`;
            }

            if (this.search_key && this.search_key != '') {
                url += `search_key=${this.search_key}`;
            }

            if (this.module_id && this.module_id != '') {
                url += `&module_id=${this.module_id}`;
            }

            axios.get(url).then((response) => {
                this.course_routine = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_all_quiz: async function (url) {
            if (!url) {
                url = `/api/v1/quiz/all?`;
            }

            if (this.search_key_quiz && this.search_key_quiz != '') {
                url += `search_key=${this.search_key_quiz}`;
            }
            
            axios.get(url).then((response) => {
                this.all_quizes = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        SetQuizIds: async function(question) {
            var check_quiz = this.selected_quizes.find((element) => element.id == question.id);
            if(!check_quiz) {
                this.selected_quizes.push(question);
            }else {
                var serial = this.selected_quizes.findIndex((element) => element.id == question.id);
                this.selected_quizes.splice(serial, 1);
            }
        },
        is_selected: function(question) {
            var check_quiz = this.selected_quizes.find((element) => element.id == question.id);
            if(check_quiz) {
                return true;
            }else {
                return false;
            }
        },
        filterByModule: async function() {
            this.module_id = event.target.value;
            this.get_course_routines();
        },
        filterBySearch: async function(event) {
            this.search_key = event.target.value;
            this.get_course_routines();
        },
        filterQuizBySearch: async function(event) {
            this.search_key_quiz = event.target.value;
            this.get_all_quiz();
        },
        resetFilter: async function() {
            this.search_key = null;
            this.module_id = null;

            await this.get_course_routines();
        },
        CourseQuizSubmit: async function () {
            // console.log('hello');
            let data = {
                class_id: this.selected_class_id,
                course_id: this.course_id,
                quizes: this.selected_quizes
            }
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-modules-class/add-quiz`, data).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course routine updated successfully!");
                    this.get_course_routines();
                })
                    .catch((e) => {
                        console.log(e);
                    });
            }
        },
        get_course_modules: async function() {
            await axios.get('/api/v1/course/course-modules/all-modules/'+this.course_id).then((response) => {
                this.course_modules = response.data;
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
        await this.get_course_modules();
        await this.get_course_routines();

        await this.get_all_quiz();
    },
}
</script>


<style></style>