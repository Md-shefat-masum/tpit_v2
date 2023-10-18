<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Edit course FAQ</h4>
                <div class="btns">
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form @keyup.enter="update_course_faq($event.target)" @submit.prevent="update_course_faq($event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="title">FAQ title</label>
                                    <input type="text" id="title" name="title" :value="course_faq.title" class="form-control" placeholder="GD-1" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="description">FAQ description</label>
                                    <textarea type="text" id="description" name="description" :value="course_faq.description" class="form-control"></textarea>
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
            course_faq: {},
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_course_faq_details: async function (event) {
            let id = this.$route.params.id
            axios.get(`/api/v1/course/course-faqs/${id}`).then((response) => {
                // console.log(response.data);
                this.course_faq = response.data;
            })
            .catch((e) => {
                console.log(e);
            });
        },
        update_course_faq: async function(event) {
            let formData = new FormData(event);
            let course_id = this.course_faq.course_id;
            formData.append('id', this.course_faq.id);
            formData.append('course_id', course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/course-faqs/update', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course FAQ updated successfully!");
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
        await this.get_course_faq_details();
        console.log(this.$route.params);
    },
}
</script>

<style>

</style>
