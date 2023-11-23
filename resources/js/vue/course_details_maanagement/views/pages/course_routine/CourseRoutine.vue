<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">class routines</h4>
            </div>
            <div class="card-body">
                <button type="button" @click="resetFilter()" class="btn btn-sm btn-primary">Reset filter</button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="module">Module</label>
                            <select name="course_modules_id" @change.prevent="filterByModule($event)" class="form-control" id="module">
                                <option v-for="(module, index) in course_modules" :key="index" :value="module.id">{{
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
                                <td>class no</td>
                                <td>topic</td>
                                <td>date</td>
                                <td>time</td>
                            </tr>
                        </thead>
                        <tbody v-if="course_routine.data && course_routine.data.length > 0">
                            <!-- <form action="#" @submit.prevent="CourseRoutineSubmit()"> -->
                            <tr v-for="(routine, index) in course_routine.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td>
                                    <span v-if="routine.class" class="text-warning cursor_pointer">{{ routine.class.title
                                    }}</span>
                                </td>
                                <!-- <td><span class="cursor_pointer">{{ routine.description }}</span></td> -->
                                <td><span v-if="routine.class" class="badge">{{ routine.class.class_no }}</span></td>
                                <td>

                                    <input type="text" class="form-control" v-model="routine.topic" name="topic">
                                </td>
                                <td>
                                    <input type="date" class="form-control" v-model="routine.show_date" name="date">
                                </td>

                                <td>
                                    <input type="time" class="form-control" v-model="routine.time" name="time">
                                </td>

                            </tr>
                            <!-- </form> -->
                        </tbody>

                    </table>
                    <pagination class="mt-2" v-if="course_routine" :data="course_routine" :method="get_course_routines" />
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="button" @click="CourseRoutineSubmit()" class="btn btn-outline-info">
                    <i class="fa fa-upload"></i>
                    Update
                </button>
            </div>
        </div>
        <!-- <table>
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>title</th>
                    <th>
                        <router-link :to="{name:'CourseBatchEdit'}"> edit </router-link>
                        <router-link :to="{name:'CourseBatchDetails'}"> delete </router-link>
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
            course_id: null,
            course_routine: {},
            course_milestones: null,
            course_modules: null,
            search_key: null,
            module_id: null
        }
    },
    methods: {
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
        filterByModule: async function() {
            this.module_id = event.target.value;
            this.get_course_routines();
        },
        filterBySearch: async function(event) {
            this.search_key = event.target.value;
            this.get_course_routines();
        },
        resetFilter: async function() {
            this.search_key = null;
            this.module_id = null;

            await this.get_course_routines();
        },
        CourseRoutineSubmit: async function () {
            // console.log('hello');
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-routines/store-all`, { data: this.course_routine.data }).then((response) => {
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
        await this.get_course_milestones();
        await this.get_course_modules();
        await this.get_course_routines();
    },
}
</script>
<style></style>