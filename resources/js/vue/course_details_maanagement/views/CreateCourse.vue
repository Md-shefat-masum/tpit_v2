<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Create new course
                </h4>
                
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            all_courses: {},
        }
    },
    methods: {
        course_edit: async function(course) {
            let current_course = JSON.stringify(course)
            localStorage.setItem('current_course', current_course);
            this.$router.push({ name: 'CourseDetails', params: { id: course.id } })
        },
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
        
    },
}
</script>

<style></style>
