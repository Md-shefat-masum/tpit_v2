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
        @include('frontend.pages.homepage_sections.seminar', [
            'seminar' => $seminar,
        ])
    </section>
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

    <!-- working_company_name area start -->
    <section class="working_company_name_area">
        <div class="working_company_name_area_content">

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


                @include('frontend.pages.homepage_sections.it_services', [
                    'it_services' => $it_services,
                ])

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
@endsection
