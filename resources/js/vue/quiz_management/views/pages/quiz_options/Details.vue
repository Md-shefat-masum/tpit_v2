<template>
    <div>
        <div class="card list_card">
            <div class="card-header">
                <h4>Course Details</h4>
                <div class="btns">
                    <a href="" @click.prevent="$router.push({ name: `CourseBatchALL` })"  class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        <span >
                            Back
                        </span>
                    </a>
                </div>
            </div>
            <div class="card-body pb-5 ">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <table class="table table-bordered details_table">
                            <tr>
                                <td>id</td>
                                <td>{{ batch_details.id }}</td>
                            </tr>
                            <tr>
                                <td>Course name:</td>
                                <td>{{ batch_details.course.title }}</td>
                            </tr>
                            <tr>
                                <td>Admission Start Date</td>
                                <td>{{ batch_details.admission_start_date }}</td>
                            </tr>
                            <tr>
                                <td>Admission End Date</td>
                                <td>{{ batch_details.admission_end_date }}</td>
                            </tr>
                            <tr>
                                <td>Student limit</td>
                                <td>{{ batch_details.batch_student_limit }}</td>
                            </tr>
                            <tr>
                                <td>Seat booked </td>
                                <td>{{ batch_details.seat_booked  }}</td>
                            </tr>
                            <tr>
                                <td>Seat booked percent </td>
                                <td>{{ batch_details.booked_percent  }} %</td>
                            </tr>
                            <tr>
                                <td>Price </td>
                                <td>{{ batch_details.course_price }}</td>
                            </tr>
                            <tr>
                                <td>Discount </td>
                                <td>{{ batch_details.course_discount }} </td>
                            </tr>
                            <tr>
                                <td>Discount Price </td>
                                <td>{{ batch_details.after_discount_price }} </td>
                            </tr>
                            <tr>
                                <td>Class Days </td>
                                <td>{{ batch_details.class_days }} </td>
                            </tr>
                            <tr>
                                <td>Class Start time </td>
                                <td>{{ batch_details.class_start_time }} </td>
                            </tr>
                            <tr>
                                <td>Class Start time </td>
                                <td>{{ batch_details.class_end_time }} </td>
                            </tr>
                            <tr>
                                <td>status </td>
                                <td>
                                    <span v-if="batch_details.status == 'active'" class="badge bg-label-success me-1">active</span>
                                    <span v-if="batch_details.status == 'inactive'" class="badge bg-label-success me-1">deactive</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            batch_details: {},
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_course_batch_details: async function (event) {
            let id = this.$route.params.id
            axios.get(`/api/v1/course/course-batch/${id}`).then((response) => {
                // console.log(response.data);
                this.batch_details = response.data;
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
        await this.get_course_batch_details();
    },
}
</script>

<style>

</style>