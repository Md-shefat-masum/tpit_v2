<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Course classes: 🎓</h4>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'CourseClassCreate'}" class="btn btn-primary mb-2 float-right">
                    <i class="fa-solid fa-plus mr-1"></i> <span>Create</span>
                </router-link>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Banner</td>
                                <td>Title</td>
                                <td>Class No</td>
                                <td>type</td>
                                <td>Video link</td>
                                <td>Status</td>
                                <!-- <td>Actions</td> -->
                            </tr>
                        </thead>
                        <tbody v-if="course_classes.data && course_classes.data.length > 0">
                            <tr v-for="(course_class, index) in course_classes.data" :key="index">
                                <td><span class="text-primary">#{{ index + 1 }}</span></td>
                                <td>
                                    <label :for="`classData${index}`">
                                        <img height="50" width="50" class="img-fluid" :src="'/'+course_class.class_video_poster">
                                    </label>
                                    <input type="file" @change="updateImage($event, course_class)" :id="`classData${index}`" class="form-control d-none" accept=".jpg,.png,.jpeg,.webp">
                                </td>
                                <td>
                                    <input type="text" name="title" id="title" class="form-control" v-model="course_class.title">
                                    <!-- <span class="text-warning cursor_pointer">{{ course_class.title }}</span> -->
                                </td>
                                <td>
                                    <input type="number" name="title" id="title" class="form-control" v-model="course_class.class_no">
                                    <!-- <span class="text-warning cursor_pointer">{{ course_class.title }}</span> -->
                                </td>
                                <td>
                                    <select v-model="course_class.type" name="type" id="type" class="form-control">
                                        <option value="live">live</option>
                                        <option value="recorded">recorded</option>
                                    </select>
                                    <!-- <span class="badge">{{ course_class.type }}</span> -->
                                </td>
                                <td>
                                    <input type="text" class="form-control" v-model="course_class.class_video_link">
                                    <!-- <a target="_blank" :href="course_class.class_video_link" class="text-primary">{{ course_class.class_video_link }}</a> -->
                                </td>
                                <td><span class="badge">{{ course_class.status }}</span></td>
                                <!-- <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <router-link :to="{ name: 'CourseJobWorkEdit', params: { id: course_class.id }}" class="dropdown-item">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                            <a href="javascript:void(0)" @click.prevent="deleteCoursejobWork(course_class.id)" class="dropdown-item">
                                                <i class="fa text-danger fa-trash mr-2"></i> <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                    <pagination class="mt-2" v-if="course_classes" :data="course_classes" :method="get_course_classes" />
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="button" @click="update_course_modules_classes()" class="btn btn-outline-info">
                    <i class="fa fa-upload"></i>
                    Update
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            course_classes: {},
        }
    },
    methods: {
        // course_edit: async function(course) {
        //     let current_course = JSON.stringify(course)
        //     localStorage.setItem('current_course', current_course);
        //     this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        // },
        get_course_classes: async function (url) {
            let id = this.$route.params.id
            if(!url) {
                url = `/api/v1/course/course-modules-class/all-classes/${id}?`;
            }
            axios.get(url).then((response) => {
                // console.log(response.data);
                this.course_classes = response.data;
            })
            .catch((e) => {
                console.log(e);
                // if(e.response.status == 401) {
                //     console.log(e.response.data);
                //     location.href = '/';
                // }
            });
        }, 
        updateImage: async function(event, course_class) {
            var image_pic = event.target.files[0];
            
            let form = new FormData(document.createElement("form"));
            form.append('banner', image_pic);
            form.append('course', JSON.stringify(course_class));

            axios.post(`/api/v1/course/course-modules-class/update-image`, form).then((response) => {
                // console.log(response.data);
                window.toaster("Image updated successfully!");
                this.get_course_classes();
            })
            .catch((e) => {
                console.log(e);
            });
        },
        update_course_modules_classes: async function() {
            let confirm = await window.s_confirm("Are you sure?");
            if (confirm) {
                axios.post(`/api/v1/course/course-modules-class/store-all`, {data: this.course_classes.data}).then((response) => {
                    // console.log(response.data);
                    window.toaster("Course module classes updated successfully!");
                    this.get_course_classes();
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
        await this.get_course_classes();
    },
}
</script>

<style>

</style>