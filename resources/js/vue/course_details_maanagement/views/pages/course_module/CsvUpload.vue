<template>
    <div class="conatiner">
        <div class="card">
            <div class="card-header">
                <h4>
                    Import
                </h4>
                <div class="btns">
                    
                    <a @click="$router.go(-1)" class="btn rounded-pill btn-outline-warning">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-body text-nowrap pb-0">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group d-grid gap-1 mb-2">
                                <label for="" class="text-capitalize">Import CSV file</label>
                                <input type="file" @change="load_csv" name="csv_file" accept=".csv" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center py-1">
                <button @click.prevent="bulk_import_course_modules(object_data)" class="btn btn-sm btn-outline-info mr-1">
                    <i class="fa fa-upload"></i>
                    Upload
                </button>
                <button @click.prevent="download_csv(object_data)" class="btn btn-sm btn-outline-info">
                    <i class="fa fa-download"></i>
                    Download demo csv
                </button>
            </div>
        </div>

        <div class="card list_card">
            <div class="card-header"></div>
            <div class="table-responsive card-body text-nowrap" style="max-height: calc(100vh - 455px);">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr v-for="(row, index) in data" :key="index">
                            <td v-for="(col, col_index) in row" :key="col_index">
                                {{ col }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex';
export default {
    created: function(){

    },
    data: function(){
        return {
            data: [],
            object_data: [],
        }
    },
    methods: {
        load_csv: function(){
            const input = event.target.files[0];
            const reader = new FileReader();
            let that = this;
            reader.onload = function (e) {
                const text = e.target.result;
                that.data = text.csvToArray();
                // console.log(that.data);
                that.make_object_data();
            };

            reader.readAsText(input);
        },
        make_object_data: function(){
            this.object_data = [];
            let keys = this.data[0];
            for (let index = 1; index < this.data.length; index++) {
                let temp = {};
                const arr = this.data[index];
                for (let j = 0; j < arr.length; j++) {
                    const item = arr[j];
                    temp[keys[j]] = item;
                }
                this.object_data.push(temp);
            }
            // console.log(this.object_data);
        },

        download_csv: async function() {
            // let confirm = await window.s_confirm("upload");
            // if(confirm) {
            window.location.href = "/csv/course_upload_sheet.csv";
            // }
        },

        [`bulk_import_course_modules`]: async function (data) {
            
            let cconfirm = await window.s_confirm("upload");
            if (cconfirm) {
                axios
                    .post(`/api/v1/course/course-modules/bulk-import`, { data })
                    .then(({ data }) => {
                        window.toaster("Course data imported successfully!");
                    });
            }
        },
    }
}
</script>

<style>

</style>