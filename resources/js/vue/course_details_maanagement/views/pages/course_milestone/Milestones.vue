<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Course Milestones: 🎓</h4>
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
                                <td>Milestone title</td>
                                <td>Milestone No</td>
                                <td>Status</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="milestones && milestones.length > 0">
                            <tr v-for="(milestone, index) in milestones" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td><span class="text-warning cursor_pointer">{{ milestone.title }}</span></td>
                                <td><span class="text-info cursor_pointer">{{ milestone.milestone_no }}</span></td>
                                <td><span class="badge">{{ milestone.status }}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- <router-link :to="{ name: 'CourseWhatmilestoneCreate', params: { id: milestone.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link> -->
                                            <router-link :to="{ name: 'CourseJobWorkEdit', params: { id: milestone.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteCoursejobWork(milestone.id)" class="dropdown-item">
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
            milestones: {},
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_course_milestones: async function (event) {
            let id = this.$route.params.id
            axios.get(`/api/v1/course/course-milestones/all-milestones/${id}`).then((response) => {
                // console.log(response.data);
                this.milestones = response.data;
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
        await this.get_course_milestones();
    },
}
</script>

<style>

</style>