<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create</h4>
                <div class="btns">
                    <router-link :to="{ name: `CourseBatchALL` }" class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </router-link>
                </div>
            </div>
            <form @keyup.enter="call_store(`store_${store_prefix}`,$event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <form>
                                <h6>1. Batch Details 💡</h6>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="batch_name">Batch name</label>
                                        <input type="text" id="batch_name" name="batch_name" class="form-control" placeholder="GD-1" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="batch_student_limit">Batch Student limit</label>
                                        <input type="number" id="batch_student_limit" name="batch_student_limit" class="form-control" placeholder="eg: 40,50" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="seat_booked">Batch Seat booked</label>
                                        <input type="number" name="seat_booked" id="seat_booked" class="form-control" placeholder="eg: 40,50" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="booked_percent">Batch Seat booked percent</label>
                                        <input type="number" name="booked_percent" id="booked_percent" class="form-control" placeholder="eg: 40,50" />
                                    </div>

                                    
                                </div>

                                <hr class="my-2 mx-n2" />
                                <h6>2.Batch pricing 🏷️</h6>
                                <div class="row">
                                    <!-- pricing -->
                                    <div class="col-md-6">
                                        <label class="form-label" for="course_price">Course price</label>
                                        <input type="number" name="course_price" id="course_price" class="form-control" placeholder="eg: 10500, 9500" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="course_discount">Course Discount</label>
                                        <input type="number" name="course_discount" id="course_discount" class="form-control" placeholder="eg: 30,20" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="after_discount_price">Discounted Price</label>
                                        <input type="number" name="after_discount_price" id="after_discount_price" class="form-control" placeholder="eg: 9500,8200" />
                                    </div>
                                </div>
                                
                                <hr class="my-2 mx-n2" />
                                <h6>3.Batch Schedule and time 🗓️</h6>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="multicol-first-name">First Name</label>
                                        <input type="text" id="multicol-first-name" class="form-control" placeholder="John" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="multicol-last-name">Last Name</label>
                                        <input type="text" id="multicol-last-name" class="form-control" placeholder="Doe" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="multicol-birthdate">Birth Date</label>
                                        <input type="date" id="multicol-birthdate" class="form-control dob-picker flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="multicol-phone">Phone No</label>
                                        <input type="text" id="multicol-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-outline-info" >
                        <i class="fa fa-upload"></i>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>