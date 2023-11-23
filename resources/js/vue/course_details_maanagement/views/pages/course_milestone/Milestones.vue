<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Course Milestones: 🎓</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'CourseMileStoneCreate'}" class="btn btn-primary mb-2 float-right">
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
                            </tr>
                        </thead>
                        <tbody v-if="milestones && milestones.length > 0">
                            <tr v-for="(milestone, index) in milestones" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td>
                                    <!-- <span class="text-warning cursor_pointer">{{ milestone.title }}</span> -->
                                    <input type="text" class="form-control" v-model="milestone.title">
                                </td>
                                <td>
                                    <!-- <span class="text-info cursor_pointer">{{ milestone.milestone_no }}</span> -->
                                    <input type="number" class="form-control" v-model="milestone.milestone_no">
                                </td>
                                <td><span class="badge">{{ milestone.status }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="button" @click="update_course_milestone()" class="btn btn-outline-info">
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
            });
        },
        update_course_milestone: async function() {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-milestones/store-all`, {data: this.milestones}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course milestones updated successfully!");
                    this.get_course_milestones();
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
        await this.get_course_milestones();
    },
}
</script>

<style>

</style>