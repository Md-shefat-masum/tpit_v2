<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All what you will get: 🎓</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'CourseWhatWillGetCreate'}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>title</td>
                                <td>Status</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="course_what_will_get.data && course_what_will_get.data.length > 0">
                            <tr v-for="(learn, index) in course_what_will_get.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td><span class="text-warning cursor_pointer">{{ learn.title }}</span></td>
                                <td><span class="badge">{{ learn.status }}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- <router-link :to="{ name: 'CourseWhatLearnCreate', params: { id: learn.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link> -->
                                            <router-link :to="{ name: 'CourseWhatWillGetEdit', params: { id: learn.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteCourseGetting(learn.id)" class="dropdown-item">
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
            course_what_will_get: {},
        }
    },
    methods: {
        get_course_gettings: async function () {
            let course_id = this.$route.params.id
            axios.get(`/api/v1/course/course-what-you-will-get/all/${course_id}`).then((response) => {
                // console.log(response.data);
                this.course_what_will_get = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        },
        deleteCourseGetting: async function(id) {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-what-you-will-get/destroy`, {id: id}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course what you will get deleted successfully!");
                    this.get_course_gettings();
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
        await this.get_course_gettings();
    },
}
</script>
<style>

</style>