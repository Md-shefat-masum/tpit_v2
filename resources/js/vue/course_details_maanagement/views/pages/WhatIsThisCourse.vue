<template>
    <div>
        <h6 class="mb-1">What is this course</h6>

        <form class="m-2" @submit.prevent="updateWhatCourse($event.target)">
            <div class="form-group">
                <label for="">What is this course</label>
                <!-- <textarea class="form-control" name="what_is_this_course" id="default" cols="30" rows="10" v-model="what_course"></textarea> -->
                <ckeditor :editor="editor" v-model="what_course" :config="editorConfig"></ckeditor>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">update</button>
        </form>
    </div>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    data() {
        return {
            editor: ClassicEditor,
            what_course: null,
            course_id: '',
            editorConfig: {
                // The configuration of the editor.
                uiColor: '#283046',
                height: 400,
            }
            
        }
    },
    methods: {
        updateWhatCourse: async function(event) {
            let formData = new FormData(event);
            formData.append('what_is_this_course', this.what_course);
            formData.append('id', this.course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/update', data.formData).then((response) => {
                localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Course Data updated successfully!");
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_course_details: async function (event) {
            let whatcourse = localStorage.getItem('current_course');
            if(whatcourse) {
                whatcourse = JSON.parse(whatcourse);
                this.what_course = whatcourse.what_is_this_course;
                this.course_id = whatcourse.id
            }
        }
    },
    computed: {

    },

    created: async function () {
        await this.get_course_details();
        
    },
}
</script>

<style>
    .ck-editor__editable {
        min-height: 400px;
    }
    .ck.ck-editor__main>.ck-editor__editable {
        background-color: #283046;
        border-color: #757575;
    }
</style>