function getAlldata(api_prefix="/course/course-batch/course-batches/", params={}) {
    let course_id = params?.course_id
    axios.get(`/api/v1/course/${api_prefix}/${course_id}`).then((response) => {
        // console.log(response.data);
        this.course_batches = response.data;
    })
    .catch((e) => {
        console.log(e);
    });
}