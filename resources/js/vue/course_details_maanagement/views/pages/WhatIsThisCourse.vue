<template>
    <div>
        <h6 class="mb-1">What is this course</h6>

        <form class="m-2">
            <div @submit.prevent="updateWhatCourse()" class="form-group">
                <label for="">What is this course</label>
                <textarea class="form-control" name="what_is_this_course" id="default" cols="30" rows="10" v-model="what_course"></textarea>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">update</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            what_course: null,
        }
    },
    methods: {
        updateWhatCourse: async function(event) {

        },
        get_course_details: async function (event) {
            let whatcourse = localStorage.getItem('current_course');
            if(whatcourse) {
                whatcourse = JSON.parse(whatcourse);
                this.what_course = whatcourse.what_is_this_course;
            }
        }
    },
    computed: {

    },

    created: async function () {
        await this.get_course_details();
        setTimeout(() => {
            tinymce.init({
                selector: 'textarea#default'
            });
        }, 1000);
    },
}
</script>

<style></style>