<template>
    <div>
        <div v-for="(milestone, index) in milestones" :key="index" class="milestones group">
            <div class="top">
                <div class="title">
                    <h4 class="heading">
                        <span class="badge badge-primary"> {{ index + 1 }}</span>
                        Milestone
                    </h4>
                </div>
                <div class="form_group mb-4">
                    <label for="">
                        Title
                    </label>
                    <input type="text" class="form-control" v-model="milestone.title">
                </div>
            </div>
            <div class="modules group" v-for="(module, index) in milestone.modules" :key="index">
                <div class="top">
                    <div class="title">
                        <h4 class="heading">
                            <span class="badge badge-primary"> {{ index + 1 }}</span>
                            Module
                        </h4>
                    </div>
                    <div class="form_group">
                        <label for="">
                            Module No
                        </label>
                        <div class="input">
                            <input type="text" class="form-control" v-model="module.module_no">
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">Module title</label>
                        <div class="input">
                            <input type="text" class="form-control" v-model="module.title">
                        </div>
                    </div>
                </div>

                <div class="classes group" v-for="(classs, index) in module.classes" :key="index">
                    <div class="top pb-0">
                        <div class="title">
                            <h4 class="heading">
                                <span class="badge badge-primary"> {{ index + 1 }}</span>
                                Class
                            </h4>
                            <div class="actions">
                                <button @click.prevent="remove_class(module.classes, index)"
                                    v-if="module.classes.length > 1" type="button"
                                    class="btn btn-sm btn-outline-danger">Remove</button>

                                <button type="button" class="btn btn-sm btn-outline-info">Add Exam</button>

                                <button type="button" class="btn btn-sm btn-outline-primary">Add Quiz</button>
                            </div>
                        </div>
                    </div>

                    <div class="form_group">
                        <label for="">Class No</label>
                        <div class="input">
                            <input type="text" class="form-control" v-model="classs.class_no">
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">title</label>
                        <div class="input">
                            <input type="text" class="form-control" v-model="classs.title">
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">type</label>
                        <div class="input">
                            <select class="form-control">
                                <option value="">recoreded</option>
                                <option value="">live</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">class video link</label>
                        <div class="input">
                            <input type="text" class="form-control" v-model="classs.class_video_link">
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">class video poster</label>
                        <div class="input">
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">class Date</label>
                        <div class="input">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">class Time</label>
                        <div class="input">
                            <input type="time" class="form-control">
                        </div>
                    </div>
                    <div class="form_group">
                        <label for="">class topic</label>
                        <div class="input">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="add_class classes group">
                    <button type="button" @click.prevent="append_new_class(module)" class="btn btn-sm btn-outline-warning">
                        Create Class
                    </button>
                </div>

            </div>
            <div class="add_class modules group">
                <button type="button" @click.prevent="append_new_module(milestone)" class="btn btn-sm btn-outline-warning">
                    Create New Module for Milestone - {{ index + 1 }}
                </button>
            </div>
        </div>
        <div class="add_class group">
            <button type="button" @click.prevent="append_new_milstone()" class="btn btn-sm btn-outline-warning">
                Create New Milstone
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        milestones: []
    }),
    created: function () {
        this.append_new_milstone();
    },
    methods: {
        append_new_class: function (module) {
            module.classes.push({
                id: "",
                class_no: "",
                title: "class 1",
                type: "recorded",
                class_video_link: "https://www.youtube.com/embed/oS1SkU2ksZM?si=2XFBVu8BME7VsrxI",
                class_video_poster: "uplodes/course/graphic.jpg",
                resource: {
                    resourse_content: "",
                    resourse_link: "",
                },
                routine: {
                    date: new Date().toISOString().substr(0, 10),
                    time: "18:45",
                    topic: "",
                },
                quiz_id: '',
                exam_id: '',
            });
        },
        remove_class: function (classes, index) {
            if (confirm('remove')) {
                classes.splice(index, 1);
            }
        },
        append_new_module: function (milestone) {
            milestone.modules.push({
                id: "",
                module_no: "",
                title: "module 1",
                classes: [
                    {
                        id: "",
                        class_no: "",
                        title: "class 1",
                        type: "recorded",
                        class_video_link: "https://www.youtube.com/embed/oS1SkU2ksZM?si=2XFBVu8BME7VsrxI",
                        class_video_poster: "uplodes/course/graphic.jpg",
                        resource: {
                            resourse_content: "",
                            resourse_link: "",
                        },
                        routine: {
                            date: new Date().toISOString().substr(0, 10),
                            time: "18:45",
                            topic: "",
                        },
                        quiz_id: '',
                        exam_id: '',
                    }
                ]
            })
        },
        append_new_milstone: function () {
            this.milestones.push({
                id: "",
                title: "milestone 1",
                modules: [
                    {
                        id: "",
                        module_no: "",
                        title: "module 1",
                        classes: [
                            {
                                id: "",
                                class_no: "",
                                title: "class 1",
                                type: "recorded",
                                class_video_link: "https://www.youtube.com/embed/oS1SkU2ksZM?si=2XFBVu8BME7VsrxI",
                                class_video_poster: "uplodes/course/graphic.jpg",
                                resource: {
                                    resourse_content: "",
                                    resourse_link: "",
                                },
                                routine: {
                                    date: new Date().toISOString().substr(0, 10),
                                    time: "18:45",
                                    topic: "",
                                },
                                quiz_id: '',
                                exam_id: '',
                            }
                        ]
                    },
                    {
                        id: "",
                        module_no: "",
                        title: "module 1",
                        classes: [
                            {
                                id: "",
                                class_no: "",
                                title: "class 1",
                                type: "recorded",
                                class_video_link: "https://www.youtube.com/embed/oS1SkU2ksZM?si=2XFBVu8BME7VsrxI",
                                class_video_poster: "uplodes/course/graphic.jpg",
                                resource: {
                                    resourse_content: "",
                                    resourse_link: "",
                                },
                                routine: {
                                    date: new Date().toISOString().substr(0, 10),
                                    time: "18:45",
                                    topic: "",
                                },
                                quiz_id: '',
                                exam_id: '',
                            }
                        ]
                    },
                ]
            })
        },
    }
}
</script>
