<template>
    <div>
        <h6 class="mb-1">What is this course</h6>

        <form class="m-2" @submit.prevent="updateWhatCourse($event.target)">

            <div class="form-group">
                <label class="form-label" for="title">Course Title</label>
                <input type="text" id="title" v-model="course_title" name="title" class="form-control" />
            </div>
            <div class="form-group">
                <h5>banner</h5>
                <label v-if="course_image" :for="`classData${course_id}`">
                    <img height="100" width="100" class="img-fluid" :src="'/' + course_image">
                </label>
                <input type="file" @change="updateImage($event)" :id="`classData${course_id}`"
                    class="form-control d-none" accept=".jpg,.png,.jpeg,.webp">
            </div>
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
            course_title: null,
            course_image: null,
            course_id: '',
            editorConfig: {
                // The configuration of the editor.
                uiColor: '#283046',
                height: 400,
            }

        }
    },
    methods: {
        updateWhatCourse: async function (event) {
            let formData = new FormData(event);
            formData.append('what_is_this_course', this.what_course);
            formData.append('title', this.course_title);
            formData.append('id', this.course_id);

            let data = {
                formData: formData,
            }

            await axios.post('/api/v1/course/update', data.formData).then((response) => {
                localStorage.setItem('current_course', JSON.stringify(response?.data))
                this.get_course_details();
                window.toaster("Course Data updated successfully!");
            })
                .catch((e) => {
                    console.log(e);
                });
        },
        updateImage: async function(event) {
            var image_pic = event.target.files[0];
            
            let form = new FormData(document.createElement("form"));
            form.append('image', image_pic);
            form.append('id', this.course_id);

            axios.post(`/api/v1/course/update`, form).then((response) => {
                // console.log(response.data);
                localStorage.setItem('current_course', JSON.stringify(response?.data))
                window.toaster("Image updated successfully!");
            })
            .catch((e) => {
                console.log(e);
            });
        },
        get_course_details: async function (event) {
            let whatcourse = localStorage.getItem('current_course');
            if (whatcourse) {
                whatcourse = JSON.parse(whatcourse);
                this.what_course = whatcourse.what_is_this_course;
                this.course_title = whatcourse.title;
                this.course_image = whatcourse.image;
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