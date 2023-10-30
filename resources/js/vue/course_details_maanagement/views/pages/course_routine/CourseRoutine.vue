<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">class routines</h4>
            </div>
            <div class="card-body">
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
                            <tr v-for="(routine, index) in course_routine.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td>
                                    <span v-if="routine.class" class="text-warning cursor_pointer">{{ routine.class.title }}</span>
                                </td>
                                <!-- <td><span class="cursor_pointer">{{ routine.description }}</span></td> -->
                                <td><span v-if="routine.class" class="badge">{{ routine.class.class_no }}</span></td>
                                <td>
                                    <input type="text" class="form-control" :value="routine.topic" name="topic">
                                </td>
                                <td>
                                    <input type="date" class="form-control" :value="routine.date" name="date">
                                </td>
                                
                                <td>
                                    <input type="time" class="form-control" :value="routine.time" name="time">
                                </td>
                                
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-outline-info">
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
            course_routine: {},
        }
    },
    methods: {
        get_course_routines: async function () {
            let course_id = this.$route.params.id
            axios.get(`/api/v1/course/course-routines/all/${course_id}`).then((response) => {
                // console.log(response.data);
                this.course_routine = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        deleteCourseFaq: async function(id) {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-routines/destroy`, {id: id}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course Job Work deleted successfully!");
                    this.get_course_routines();
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
        await this.get_course_routines();
    },
}
</script>
<style>

</style>