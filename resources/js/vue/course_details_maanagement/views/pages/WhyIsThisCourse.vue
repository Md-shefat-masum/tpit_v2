<template>
  <div>
      <h6 class="mb-1">why is this course</h6>
      <form class="m-2">
          <div class="mb-2">
              <label class="form-label" for="basic-default-message">why is this course</label>
              <textarea id="basic-default-message" cols="30" rows="10" name="why_is_this_course" class="form-control" placeholder="why to admit in this course" v-model="why_course"></textarea>
          </div>
          <button type="submit" class="btn btn-primary waves-effect waves-light">update</button>
      </form>
  </div>
</template>


<script>
export default {
    data() {
        return {
            why_course: null,
        }
    },
    methods: {
        get_course_details: async function (event) {
            let whycourse = localStorage.getItem('current_course');
            if(whycourse) {
                whycourse = JSON.parse(whycourse);
                this.why_course = whycourse.why_is_this_course;
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

</style>