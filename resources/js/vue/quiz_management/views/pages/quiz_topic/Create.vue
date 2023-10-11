<template>
    <div class="custom_scroll">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create</h4>
                <div class="btns">
                    <a href="" @click.prevent="$router.go(-1)"  class="btn rounded-pill btn-outline-warning" >
                        <i class="fa fa-arrow-left me-5px"></i>
                        <span >
                            Back
                        </span>
                    </a>
                </div>
            </div>
            <form @keyup.enter="store_batch($event.target)" @submit.prevent="store_batch($event.target)" class="user_create_form">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <h6>Topic 💡</h6>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="title">Topic title</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Css, Bootstrap" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="description">Topic Description</label>
                                    <textarea id="description" name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-info" >
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
    data() {
        return {
            course_id: ''
        }
    },
    methods: {
        store_batch: async function(event) {
            let formData = new FormData(event);
            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/quiz-topics/store', data.formData).then((response) => {
                // localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Quiz topic created successfully!");
                event.reset();
            })
            .catch((e) => {
                console.log(e);
            });
        },
        // get_course_details: async function (event) {
        //     let whatcourse = localStorage.getItem('current_course');
        //     if(whatcourse) {
        //         whatcourse = JSON.parse(whatcourse);
        //         this.course_id = whatcourse.id
        //     }
        // }
    },
    computed: {

    },

    created: async function () {
        
    },
}
</script>


<style>

</style>