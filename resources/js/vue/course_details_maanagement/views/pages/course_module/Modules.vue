<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Course Modules: 🎓</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: ''}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Module title</td>
                                <td>Module No</td>
                                <td>Status</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="modules && modules.length > 0">
                            <tr v-for="(module, index) in modules" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td>
                                    <input type="text" class="form-control" v-model="module.title">
                                    <!-- <span class="text-warning cursor_pointer">{{ module.title }}</span> -->
                                </td>
                                <td>
                                    <!-- <span class="cursor_pointer">{{ module.module_no }}</span> -->
                                    <input type="text" class="form-control" v-model="module.module_no">    
                                </td>
                                <td><span class="badge">{{ module.status }}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- <router-link :to="{ name: 'CourseWhatmoduleCreate', params: { id: module.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link> -->
                                            <router-link :to="{ name: 'CourseJobWorkEdit', params: { id: module.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteCoursejobWork(module.id)" class="dropdown-item">
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
            <div class="card-footer text-center">
                <button type="button" @click="update_course_modules()" class="btn btn-outline-info">
                    <i class="fa fa-upload"></i>
                    Update
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            modules: {},
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_course_modules: async function (event) {
            let id = this.$route.params.id
            axios.get(`/api/v1/course/course-modules/all-modules/${id}`).then((response) => {
                // console.log(response.data);
                this.modules = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        },
        update_course_modules: async function() {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-modules/store-all`, {data: this.modules}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course modules updated successfully!");
                    this.get_course_modules();
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
        await this.get_course_modules();
    },
}
</script>

<style>

</style>