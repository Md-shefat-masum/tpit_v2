@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => 'Tech Park IT',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <!-- banner_part start -->
    @include('frontend.pages.homepage_sections.banner_section')
    <!-- banner_part end -->

    <!-- course_item start -->
    @include('frontend.pages.homepage_sections.course_category_section', [
        'categories' => $course_categories,
    ])
    <!-- course_item end -->

    <!-- our_course area start -->
    @include('frontend.pages.homepage_sections.course_section')

    <!-- our_course area end -->

    <!-- our_course_specialty area start -->
    <section class="our_course_specialty"
        style="background-image: url(http://techparkit.org/frontend/assets/images/home_page_image/our_course_specialty/bg_img.png);">
        <div class="container">
            <div class="our_course_specialty_area_content">

                <!--our_course_specialty_area_title start -->
                <div class="our_course_specialty_area_title">
                    <h2 class="area_title">
                        আমাদের কোর্সসমূহের বিশেষত্ব
                    </h2>
                </div>
                <!-- our_course_specialty_area_title end -->

                <!-- course_card_area start -->
                @include('frontend.pages.homepage_sections.course_speciality', [
                    'course_speciality' => $course_speciality,
                ])
                <!-- course_card_area end -->

            </div>
        </div>
    </section>

    <!-- earning_area start -->
    @include('frontend.pages.homepage_sections.course_outcome_steps', [
        'course_learning_steps' => $course_learning_steps,
    ])
    <!-- earning_area end -->

    <!-- Student success history arer start -->
    @include('frontend.pages.homepage_sections.success_story', [
        'success_stories' => $success_stories,
    ])
    <!-- Student success history arer end -->

    <!-- profational_trainer area start-->
    <section class="profational_trainer_area">
        <div class="container">
            <div class="profational_trainer_area_content">
                <div class="row">

                    <!-- left_area start -->
                    <div class="col-xs-12 col-md-6">
                        <div class="left_area">
                            <div class="trainer_img">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/profational_trainer_area/traine.jpg"
                                    alt="trainer tech park it">
                            </div>
                        </div>
                    </div>
                    <!-- left_area end -->

                    <!-- right_area start -->
                    <div class="col-xs-12 col-md-6">
                        <div class="right_area">
                            <div class="right_area_content">
                                <!-- profational_trainer_area title start -->
                                <div class="profational_trainer_area_title">
                                    <h2 class="area_title">
                                        আমাদের প্রফেশনাল ট্রেইনারস
                                    </h2>
                                </div>
                                <!-- profational_trainer_area title end -->

                                <!-- profational_trainer_area sub_title start -->
                                <div class="profational_trainer_area_sub_title">
                                    <span class="sub_title sub1">
                                        আমাদের রয়েছেন প্রফেশনাল ট্রেইনারস, যারা প্রত্যেকেরই রয়েছে স্ব স্ব ক্ষেত্রে বেশ
                                        কয়েকবছর ধরে কোর্স করানোর অভিজ্ঞতা
                                    </span>
                                    <span class="sub_title">
                                        যাদের হাত ধরে বহু শিক্ষার্থী ফ্রিলানিং ও জব সেক্টরে সফলতার সাথে কাজ করছেন
                                    </span>
                                </div>
                                <!-- profational_trainer_area sub_title end -->

                                <!-- profational_trainer_area_button start-->
                                <div class="profational_trainer_button_area">
                                    <button class="button_all">
                                        <span class="btn_text">বিস্তারিত দেখুন</span>
                                        <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </button>
                                </div>
                                <!-- profational_trainer_area_button end-->
                            </div>
                        </div>
                    </div>
                    <!-- right_area end -->

                </div>

            </div>
        </div>
    </section>
    <!-- profational_trainer area end-->

    <!-- free_seminar_area_start -->
    <section class="free_seminar_area">
        <div class="container">
            <div class="free_seminar_area_content">
                <div class="row">
                    <!-- left_area start -->
                    <div class="col-xs-12 col-md-12 col-lg-6">
                        <div class="left_area">
                            <!--free_seminar_area title start -->
                            <div class="free_seminar_area_title">
                                <h2 class="area_title">
                                    অংশ নিন আমাদের ফ্রি সেমিনারে
                                </h2>
                            </div>
                            <!-- free_seminar_area title end -->

                            <!-- free_seminar_area sub_title start -->
                            <div class="free_seminar_area_sub_title">
                                <span class="sub_title">
                                    আপনার ক্যারিয়ার কোন সেক্টরে গড়ে তুলবেন, সিদ্ধান্ত নিতে পারছেন না? আমাদের ফ্রি
                                    সেমিনারে জয়েন করুন। বিষয়ভিত্তিক এই সেমিনারগুলোতে প্রতিটি কোর্সের সম্ভাবনা সম্পর্কে
                                    জানতে পারবেন। তাছাড়া সেমিনারে উপস্থিত এক্সপার্ট কাউন্সেলরের সাথে কথা বলে আপনি সহজেই
                                    উপযুক্ত কোর্স বেছে নেওয়ার সিদ্ধান্ত নিতে পারেন।
                                </span>
                            </div>
                            <!-- free_seminar_area sub_title end -->

                            <!-- date_line_area start -->
                            @foreach ($seminar as $item)
                                @php
                                    $date1 = \Carbon\Carbon::now();
                                    $date2 = \Carbon\Carbon::parse($item->date_time);

                                    $difference = $date1->diffInDays($date2);
                                @endphp
                                <div class="date_line_area">

                                    <div class="date">
                                        <span class="date_number">{{ $difference }}</span>
                                        <span class="date_text">দিন বাকী</span>
                                    </div>

                                    <div class="data_science">
                                        <span class="data_science_text_title">
                                            {{ $item->title }}
                                        </span>
                                        <div class="data_science_text_sub_title">
                                            <!-- অনলাইন | ১৯ ডিসেম্বর ২৩ সোমবার, 09:00 pm -->
                                            <span> অনলাইন</span>
                                            <span class="space_space"> |</span>
                                            <span>
                                                {{ Carbon\Carbon::parse($item->date_time)->format('d F l, h:i a') }}
                                            </span>

                                        </div>
                                    </div>

                                    <div class="join_button">
                                        <button class="button_all" onclick="showSeminarModel({{ $item }})">
                                            <span class="btn_text"> জয়েন</span>
                                        </button>
                                    </div>

                                </div>
                            @endforeach
                            <!-- date_line_area end -->
                            <!-- date_line_area start -->

                            <!--  date_line_area end -->

                            <!-- free_seminar_area_button start-->
                            <div class="free_seminar_button_area">
                                <a href="/seminar" class="button_all">
                                    <span class="btn_icon"><i class="fa-solid fa-calendar-days"></i></span>
                                    <span class="btn_text">সকল সেমিনারের সময়সূচি</span>
                                </a>
                            </div>
                            <!-- free_seminar_area_button end-->

                        </div>
                    </div>
                    <!-- left_area end -->

                    <div class="col-xs-12 col-md-12 col-lg-6">
                        <div class="right_area">
                            <div class="free_seminar_image">
                                <img src="/frontend/assets/images/home_page_image/free_seminar_area/img.png"
                                    alt="seminar_image tech park it">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- free seminar modal --}}
    <div id="seminar_modal" class="modal fade modal-lg" tabindex="-1">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>সেমিনারের জন্য রেজিস্ট্রেশন করুন</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-8 mx-auto">
                        <form class="mb-3" id="seminar_form" onsubmit="registerSeminar(event)">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">নামঃ </label>
                                <input type="text" name="full_name" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="col-form-label">মোবাইল নাম্বারঃ</label>
                                <input type="number" name="phone_number" class="form-control"
                                    id="phone_number"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">ই-মেইলঃ</label>
                                <input type="email" name="email" class="form-control" id="email"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="col-form-label">ঠিকানাঃ </label>
                                <textarea name="address" class="form-control" id="address"></textarea>
                            </div>

                            <button type="submit" class="button_all me-2">সাবমিট</button>
                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- end of free seminar modal --}}
    <!-- free_seminar_area_end -->

    <!-- job_career_area start-->
    <section class="job_career_area">
        <div class="container">
            <div class="job_career_area_content">
                <div class="row">
                    <!-- left_area start -->
                    <div class="col-xs-12 col-md-6">
                        <div class="left_area">
                            <!--job_career_area title start -->
                            <div class="job_career_area_title">
                                <h2 class="area_title">
                                    আপনার জব ক্যারিয়ার নিয়ে চিন্তিত?
                                </h2>
                            </div>
                            <!-- job_career_area title end -->
                            <!-- job_career_image start -->
                            <div class="job_career_image">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/job_career_area/img.png"
                                    alt="job_career tech park it">
                            </div>
                            <!-- job_career_image end -->
                        </div>
                    </div>
                    <!-- left_area end -->

                    <!-- right_area start -->
                    <div class="col-xs-12 col-md-6">
                        <div class="right_area">
                            <!-- form_area start -->
                            <div class="form_area">
                                <!-- form_area_sub_title start -->
                                <div class="form_area_sub_title">
                                    <p class="sub_title">
                                        আমাদের সাথে এপয়েন্টমেন্ট বুক করুন, আমরা আপনাকে ক্যারিয়ার সংক্রান্ত পরামর্শ দিব
                                    </p>
                                </div>
                                <!-- form_area_sub_title end -->

                                <!-- form stat -->
                                <form action="#">
                                    <input type="text" placeholder="আপনার নাম *">
                                    <input type="email" placeholder="আপনার ইমেইল *">
                                    <input type="tel" placeholder="আপনার ফোন নাম্বার">
                                    <textarea name="#" id="#" cols="30" rows="10" placeholder="বিস্তারিত লিখুন"></textarea>
                                    <button class="button_all">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        <span> সাবমিট করুন</span>
                                    </button>
                                </form>
                                <!-- form end -->
                            </div>
                            <!-- form_area end -->
                        </div>
                    </div>
                    <!-- right_area  -->

                </div>
            </div>
        </div>
    </section>
    <!-- job_career area end-->

    <!-- my_it_service_area start -->
    <section class="my_it_service_area"
        style="background-image: url({{ asset('frontend') }}/assets/images/home_page_image/ti_service/bg_img.png);">
        <div class="container">
            <div class="my_it_service_area_content">

                <!--my_it_service_area_title start -->
                <div class="my_it_service_area_title">
                    <h2 class="area_title">
                        আমাদের আইটি সার্ভিসগুলো
                    </h2>
                </div>
                <!-- my_it_service_area end -->

                <!-- my_it_service_area_sub_title start -->
                <div class="my_it_service_area_sub_title">
                    <span class="sub_title">
                        আমরা ক্লায়েন্ট-কেন্দ্রিক ওয়েব ডিজাইন ও ডেভোলাপমেন্ট এবং সাইভার সিকিউরিটি সার্ভিস প্রদান করি
                    </span>

                </div>
                <!-- my_it_service_area_sub_title end -->

                <!-- service_area start -->
                <div class="service_area">
                    @include('frontend.pages.homepage_sections.it_services', [
                        'it_services' => $it_services,
                    ])
                </div>
                <!-- service_area end-->
            </div>
        </div>
    </section>
    <!-- my_it_service_area end-->

    <!-- working_company_name area start -->
    <section class="working_company_name_area">
        <div class="working_company_name_area_content">

            <!--working_company_name_area_title start -->
            <div class="working_company_name_area_title">
                <h2 class="area_title">
                    আমরা যাদের সাথে কাজ করছি
                </h2>
            </div>
            <!-- -working_company_name_area_title end -->

            <!-- all_company_name and logo area start -->
            <div class="all_company_name">
                <ul>
                    <li class="company_logo">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/1.png"
                                alt="logo">
                        </a>
                    </li>
                    <li class="company_logo">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/2.png"
                                alt="logo">
                        </a>
                    </li>
                    <li class="company_logo">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/3.png"
                                alt="logo">
                        </a>
                    </li>
                    <li class="company_logo">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/4.png"
                                alt="logo">
                        </a>
                    </li>
                    <li class="company_logo">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/5.png"
                                alt="logo">
                        </a>
                    </li>
                    <li class="company_logo">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/6.png"
                                alt="logo">
                        </a>
                    </li>

                </ul>
            </div>
            <!-- all_company_name and logo area end -->
        </div>
    </section>
    <!-- working_company_name area end -->

    <script>
        var seminar_modal = new bootstrap.Modal(document.getElementById('seminar_modal'));
    
        function showSeminarModel(seminar) {
            window.seminar_id = seminar.id;
            document.getElementById('seminar_form').reset();
            seminar_modal.toggle();
            // console.log(seminar);
        }
    
        function registerSeminar(event) {
            event.preventDefault();
            let formData = new FormData(event.target);
            formData.append("seminar_id", window.seminar_id);
            // console.log('form submitting!');
            fetch("/seminar-registration", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: formData
            }).then(async res => {
                let response = {}
                response.status = res.status
                response.data = await res.json();
                return response;
            }).then(res => {
                if (res.status === 422) {
                    error_response(res.data)
                }
                if (res.status === 200) {
                    
                    window.toaster("Registration for the seminar submitted!");
                    seminar_modal.toggle();
                    document.getElementById('seminar_form').reset();
                    // location.href = "/order-complete";
                }
            })
        }
    </script>
@endsection
