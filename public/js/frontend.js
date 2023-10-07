function error_response(data) {
    
    $('.loader_body').removeClass('active');
    $('form button').prop('disabled',false);
    $('#backend_body .main_content').css({overflowY:'scroll'});
    // whatever you want to do with the error
    // console.log(error.response.data.errors);
    let object = data.errors;
    $(`label`).siblings(".text-danger").remove();
    $(`select`).siblings(".text-danger").remove();
    $(`input`).siblings(".text-danger").remove();
    $(`textarea`).siblings(".text-danger").remove();
    $('.form_errors').html('');

    let error_html = ``;
    // console.log(data);
    for (const key in object) {
        // console.log(object);
        if (Object.hasOwnProperty.call(object, key)) {
            const element = object[key];
            if (document.getElementById(`${key}`)) {
                $(`#${key}`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);
            } else {
                $(`input[name="${key}"]`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);

                $(`select[name="${key}"]`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);

                $(`input[name="${key}"]`).trigger("focus");

                $(`textarea[name="${key}"]`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);

                $(`textarea[name="${key}"]`).trigger("focus");
            }
            // console.log({
            //     [key]: element,
            // });

            error_html += `
                <div class="alert alert_${key} my-1 mx-2 alert-danger pe-5 inverse alert-dismissible fade show" role="alert">
                    <i class="icon-alert txt-dark rounded-0"></i>
                    <div>${element}</div>
                    <button type="button" class="btn-close txt-light" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
            `;
        }
    }

    $('.form_errors').html(error_html);

    if (typeof data === "string") {
        // console.log("error", data);
    } else {
        // console.log(data);
    }

    window.toaster(data.err_message, 'error')
    throw data;
}
document.addEventListener("DOMContentLoaded", () => {
    Turbolinks.start()
    document.addEventListener("turbolinks:load", function (event) {

        if(location.pathname == '/'){
            setTimeout(() => {
                initiate_our_course_types();
            }, 1000);
        }

        document.querySelector(`nav a[href="${location.pathname}"]`)?.classList.add('active_button');
    });

    document.addEventListener("turbolinks:before-render", function (event) {
        // console.log("page before render");
    });

    document.addEventListener("turbolinks:render", function (event) {
        // console.log("page before render");
    });
});
