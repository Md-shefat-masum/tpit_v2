<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All course List: 🚀</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>image</td>
                                <td>Title</td>
                                <td>Type</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(course, index) in all_courses.data" :key="index">
                                <td>{{ index + 1 }}</td>
                                <td><img height="100" :src="`/${course.image}`" alt=""></td>
                                <td>{{ course.title }}</td>
                                <td>{{ course.type }}</td>
                                <td>
                                    
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-gears"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <router-link class="dropdown-item" :to="{ name: 'CourseDetails', params: { id: course.id } }">
                                                <i class="fa text-warning fa-pencil mr-2"></i> <span>Edit</span>
                                            </router-link>
                                        </div>
                                    </div>
                                    <!-- <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                            class="btn btn-outline-secondary dropdown-toggle waves-effect"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                                            <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                        </div>
                                    </div> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            all_courses: null,
        }
    },
    methods: {
        get_all_course: async function (event) {
            axios.get('/api/v1/course/all').then((response) => {
                // console.log(response.data);
                this.all_courses = response.data;
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
        await this.get_all_course();
    },
}
</script>

<style></style>