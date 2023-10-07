<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Batches: 👥</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'CourseBatchCreate'}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Course</td>
                                <td>Name</td>
                                <td>Admission Start Date</td>
                                <td>Admission End Date</td>
                                <td>Price</td>
                                <td>Sale Price</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody v-if="course_batches.data && course_batches.data.length > 0">
                            <tr v-for="(batch, index) in course_batches.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td><span v-if="batch.course">{{ batch.course.title }}</span></td>
                                <td><span class="text-warning cursor_pointer">{{ batch.batch_name }}</span></td>
                                <td>{{ batch.admission_start_date }}</td>
                                <td>{{ batch.admission_end_date }}</td>
                                <td><span class="text-info">{{ batch.course_price }}</span></td>
                                <td class="text-success">{{ batch.after_discount_price }}</td>
                                <td>
                                    
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <router-link :to="{ name: 'CourseBatchDetails', params: { id: batch.id }}" class="dropdown-item">
                                                <i class="fa text-info fa-eye mr-2"></i> <span>Details</span>
                                            </router-link>
                                            <router-link :to="{ name: 'CourseBatchEdit', params: { id: batch.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteCourseBatch(batch.id)" class="dropdown-item">
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
            course_batches: {},
        }
    },
    methods: {
        get_course_batches: async function () {
            let course_id = this.$route.params.id
            axios.get(`/api/v1/course/course-batch/course-batches/${course_id}`).then((response) => {
                // console.log(response.data);
                this.course_batches = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        },
        deleteCourseBatch: async function(id) {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-batch/destroy`, {id: id}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course Batch deleted successfully!");
                    this.get_course_batches();
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
        await this.get_course_batches();
    },
}
</script>
<style>

</style>