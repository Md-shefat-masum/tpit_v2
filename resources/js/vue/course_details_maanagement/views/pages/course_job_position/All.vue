<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Course Job positions: 🎓</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'CourseJobPositionCreate'}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Job position</td>
                                <td>Status</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="course_job_position.data && course_job_position.data.length > 0">
                            <tr v-for="(job_position, index) in course_job_position.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td><span class="text-warning cursor_pointer">{{ job_position.title }}</span></td>
                                <td><span class="badge">{{ job_position.status }}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- <router-link :to="{ name: 'CourseWhatjob_positionCreate', params: { id: job_position.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link> -->
                                            <router-link :to="{ name: 'CourseJobPositionEdit', params: { id: job_position.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteCoursejobPosition(job_position.id)" class="dropdown-item">
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
            course_job_position: {},
        }
    },
    methods: {
        get_course_job_positions: async function () {
            let course_id = this.$route.params.id
            axios.get(`/api/v1/course/course-job-position/all/${course_id}`).then((response) => {
                // console.log(response.data);
                this.course_job_position = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        },
        deleteCoursejobPosition: async function(id) {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-job-position/destroy`, {id: id}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course Job position deleted successfully!");
                    this.get_course_job_positions();
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
        await this.get_course_job_positions();
    },
}
</script>
<style>

</style>