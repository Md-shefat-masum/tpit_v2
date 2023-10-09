<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="update_batch($event.target)" @submit.prevent="update_batch($event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <h6>1. Batch Details 💡</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="batch_name">Batch name</label>
                                    <input type="text" id="batch_name" name="batch_name" :value="batch_details.batch_name" class="form-control" placeholder="GD-1" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="batch_student_limit">Batch Student limit</label>
                                    <input type="number" id="batch_student_limit" :value="batch_details.batch_student_limit" name="batch_student_limit" class="form-control" placeholder="eg: 40,50" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="seat_booked">Batch Seat booked</label>
                                    <input type="number" name="seat_booked" id="seat_booked" :value="batch_details.seat_booked" class="form-control" placeholder="eg: 40,50" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="booked_percent">Batch Seat booked percent</label>
                                    <input type="number" name="booked_percent" :value="batch_details.booked_percent" id="booked_percent" class="form-control" placeholder="eg: 40,50" />
                                </div>

                                
                            </div>

                            <hr class="my-2 mx-n2" />
                            <h6>2.Batch pricing 🏷️</h6>
                            <div class="row">
                                <!-- pricing -->
                                <div class="col-md-6">
                                    <label class="form-label" for="course_price">Course price</label>
                                    <input type="number" name="course_price" :value="batch_details.course_price" id="course_price" class="form-control" placeholder="eg: 10500, 9500" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="course_discount">Course Discount</label>
                                    <input type="number" name="course_discount" :value="batch_details.course_discount" id="course_discount" class="form-control" placeholder="eg: 30,20" />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="after_discount_price">Discounted Price</label>
                                    <input type="number" name="after_discount_price" :value="batch_details.after_discount_price" id="after_discount_price" class="form-control" placeholder="eg: 9500,8200" />
                                </div>
                            </div>
                            
                            <hr class="my-2 mx-n2" />
                            <h6>3.Batch Schedule and time 🗓️</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="admission_start_date">Admission Start Date</label>
                                    <input type="date" name="admission_start_date" :value="batch_details.admission_start_date" id="admission_start_date" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="admission_end_date">Admission End Date</label>
                                    <input type="date" name="admission_end_date" :value="batch_details.admission_end_date" id="admission_end_date" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="first_class_date">First Class Date</label>
                                    <input type="date" name="first_class_date" :value="batch_details.first_class_date" id="first_class_date" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="class_start_time">Class Start Time</label>
                                    <input type="time" name="class_start_time" :value="batch_details.class_start_time" id="class_start_time" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="class_end_time">Class End Time</label>
                                    <input type="time" name="class_end_time" :value="batch_details.class_end_time" id="class_end_time" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="class_days">Class Days</label>
                                    <input type="text" id="class_days" :value="batch_details.class_days" name="class_days" class="form-control" placeholder="রবিবার,মঙ্গলবার,বৃহস্পতিবার" aria-label="রবিবার,মঙ্গলবার,বৃহস্পতিবার" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-info" >
                        <i class="fa fa-upload"></i>
                        update
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
        },
        update_batch: async function(event) {
            let formData = new FormData(event);
            let course_id = this.batch_details.course_id;
            formData.append('id', this.batch_details.id);
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/course-batch/update', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course Batch update successfully!");
                // event.reset();
            })
            .catch((e) => {
                console.log(e);
            });
        }
    },
    computed: {

    },

    created: async function () {
        await this.get_course_batch_details();
        console.log(this.$route.params);
    },
}
</script>

<style>

</style>