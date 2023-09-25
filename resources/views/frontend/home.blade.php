@php
$meta = [
    // "meta" => [],
    "seo" => [
        "title" => "Tech Park IT",
        "image" => asset('seo.jpg'),
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')

<!-- banner_part start -->
<section class="banner_part">
    <div class="container">
        <div class="banner_part_content">

            <!-- banner_part_left start -->
            <div class="banner_part_left">
                <!-- banner_title start -->
                <div class="banner_title">
                    <h2 class="banner_title_text">
                        <span class="title_bangla">আইটি প্রফেশনাল হয়ে উঠুন</span>
                        <span class="title_english"> Tech Park IT এর সাথে</span>
                    </h2>
                </div>
                <!-- banner_title end -->

                <!-- description start -->
                <div class="description">
                    <p>প্রফেশনাল ট্রেইনার । কোর্স শেষে ইন্টার্নশিপ । জবের ক্ষেত্রে সহযোগিতা</p>
                </div>
                <!-- description end -->

                <!-- button_area start -->
                <div class="button_area">

                    <div class="button_left">
                        <button class="button_all">
                            <span class="btn_img">
                                <!-- button image start-->
                                <svg width="25" height="18" viewBox="0 0 25 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="icon"
                                        d="M14.766 5.83848C14.766 5.70835 14.8124 5.57524 14.9051 5.43912C14.9978 5.30301 15.1033 5.20954 15.2215 5.15869C15.8003 4.92683 16.396 4.75108 17.0085 4.63144C17.621 4.51178 18.2571 4.45195 18.9167 4.45195C19.2981 4.45195 19.6671 4.47438 20.0239 4.51924C20.3806 4.56412 20.7399 4.62544 21.1019 4.70322C21.2395 4.73462 21.3584 4.80941 21.4586 4.92757C21.5588 5.04573 21.609 5.18334 21.609 5.3404C21.609 5.60364 21.5263 5.7962 21.361 5.9181C21.1958 6.04 20.9815 6.06953 20.7183 6.00671C20.4386 5.94838 20.148 5.9065 19.8466 5.88109C19.5453 5.85565 19.2353 5.84294 18.9167 5.84294C18.3513 5.84294 17.7975 5.89716 17.2553 6.0056C16.7131 6.11404 16.1959 6.26099 15.7038 6.44645C15.4286 6.55266 15.2035 6.54668 15.0285 6.42852C14.8535 6.31035 14.766 6.11367 14.766 5.83848ZM14.766 12.2103C14.766 12.0801 14.8124 11.9451 14.9051 11.8053C14.9978 11.6655 15.1033 11.5701 15.2215 11.5192C15.7853 11.2874 16.381 11.1135 17.0085 10.9976C17.636 10.8817 18.272 10.8237 18.9167 10.8237C19.2981 10.8237 19.6671 10.8462 20.0239 10.891C20.3806 10.9359 20.7399 10.9972 21.1019 11.075C21.2395 11.1064 21.3584 11.1812 21.4586 11.2994C21.5588 11.4175 21.609 11.5551 21.609 11.7122C21.609 11.9754 21.5263 12.168 21.361 12.2899C21.1958 12.4118 20.9815 12.4413 20.7183 12.3785C20.4386 12.3202 20.148 12.2783 19.8466 12.2529C19.5453 12.2274 19.2353 12.2147 18.9167 12.2147C18.3587 12.2147 17.8106 12.2678 17.2721 12.374C16.7336 12.4802 16.2184 12.6298 15.7263 12.8228C15.4511 12.9364 15.2222 12.9334 15.0397 12.8138C14.8573 12.6941 14.766 12.4929 14.766 12.2103ZM14.766 9.02438C14.766 8.89424 14.8124 8.75924 14.9051 8.6194C14.9978 8.47956 15.1033 8.38421 15.2215 8.33336C15.8003 8.10153 16.396 7.92765 17.0085 7.81172C17.621 7.69579 18.2571 7.63783 18.9167 7.63783C19.2981 7.63783 19.6671 7.66026 20.0239 7.70514C20.3806 7.75002 20.7399 7.81135 21.1019 7.88913C21.2395 7.92053 21.3584 7.99531 21.4586 8.11347C21.5588 8.23164 21.609 8.36924 21.609 8.52627C21.609 8.78953 21.5263 8.98211 21.361 9.104C21.1958 9.2259 20.9815 9.25544 20.7183 9.19261C20.4386 9.13428 20.148 9.0924 19.8466 9.06696C19.5453 9.04155 19.2353 9.02884 18.9167 9.02884C18.3587 9.02884 17.8106 9.08493 17.2721 9.1971C16.7336 9.30928 16.2184 9.46184 15.7263 9.65479C15.4511 9.76848 15.2222 9.7625 15.0397 9.63685C14.8573 9.51122 14.766 9.30706 14.766 9.02438ZM6.08334 14.1891C7.04959 14.1891 7.98966 14.2987 8.90355 14.5178C9.81744 14.7369 10.7246 15.0806 11.625 15.5487V4.07949C10.8054 3.54553 9.9184 3.14505 8.96413 2.87806C8.00985 2.61107 7.04959 2.47757 6.08334 2.47757C5.38334 2.47757 4.72933 2.53253 4.12132 2.64245C3.51332 2.75239 2.88848 2.93225 2.24681 3.18203C2.15706 3.21196 2.09348 3.25497 2.05609 3.31107C2.0187 3.36716 2 3.42886 2 3.49616V14.5301C2 14.6348 2.03739 14.7115 2.11218 14.7601C2.18698 14.8087 2.26926 14.8143 2.35902 14.7769C2.91242 14.5885 3.4965 14.4434 4.11123 14.3417C4.72597 14.24 5.38334 14.1891 6.08334 14.1891ZM13.375 15.5487C14.2754 15.0806 15.1826 14.7369 16.0965 14.5178C17.0103 14.2987 17.9504 14.1891 18.9167 14.1891C19.6167 14.1891 20.274 14.24 20.8888 14.3417C21.5035 14.4434 22.0876 14.5885 22.641 14.7769C22.7307 14.8143 22.813 14.8087 22.8878 14.7601C22.9626 14.7115 23 14.6348 23 14.5301V3.49616C23 3.42886 22.9813 3.36903 22.9439 3.31667C22.9065 3.2643 22.843 3.21943 22.7532 3.18203C22.1115 2.93225 21.4867 2.75239 20.8787 2.64245C20.2707 2.53253 19.6167 2.47757 18.9167 2.47757C17.9504 2.47757 16.9902 2.61107 16.0359 2.87806C15.0816 3.14505 14.1946 3.54553 13.375 4.07949V15.5487ZM12.5 17.6262C12.2727 17.6262 12.0599 17.5978 11.8617 17.541C11.6635 17.4842 11.4762 17.4086 11.2997 17.3144C10.4965 16.8597 9.65626 16.5168 8.77901 16.2857C7.90177 16.0546 7.00321 15.9391 6.08334 15.9391C5.37138 15.9391 4.67214 16.018 3.98561 16.1758C3.29907 16.3335 2.63721 16.5658 2.00003 16.8724C1.58423 17.0638 1.18862 17.0335 0.813182 16.7815C0.437768 16.5295 0.250061 16.1724 0.250061 15.7102V3.04297C0.250061 2.79169 0.314743 2.55574 0.444107 2.33512C0.57349 2.1145 0.760089 1.95559 1.0039 1.85836C1.79364 1.47397 2.61665 1.18941 3.47295 1.00468C4.32924 0.819961 5.19937 0.7276 6.08334 0.7276C7.2186 0.7276 8.32768 0.882786 9.41058 1.19316C10.4935 1.50351 11.5233 1.96157 12.5 2.56735C13.4767 1.96157 14.5065 1.50351 15.5894 1.19316C16.6723 0.882786 17.7814 0.7276 18.9167 0.7276C19.8006 0.7276 20.6708 0.819961 21.5271 1.00468C22.3834 1.18941 23.2064 1.47397 23.9961 1.85836C24.2399 1.95559 24.4265 2.1145 24.5559 2.33512C24.6853 2.55574 24.75 2.79169 24.75 3.04297V15.7102C24.75 16.1724 24.5548 16.5257 24.1644 16.7703C23.774 17.0148 23.3634 17.0414 22.9327 16.8499C22.3029 16.5508 21.6504 16.3242 20.9751 16.1702C20.2998 16.0161 19.6137 15.9391 18.9167 15.9391C17.9968 15.9391 17.0982 16.0546 16.221 16.2857C15.3437 16.5168 14.5035 16.8597 13.7003 17.3144C13.5238 17.4086 13.3365 17.4842 13.1383 17.541C12.9401 17.5978 12.7273 17.6262 12.5 17.6262Z"
                                        fill="white" />
                                </svg>
                                <!-- button image end-->
                            </span>
                            <span class="btn_text">
                                কোর্স দেখুন
                            </span>
                        </button>
                    </div>

                    <div class="button_right">
                        <button class="button_all">
                            আমাদের আইটি সার্ভিস
                        </button>
                    </div>

                </div>
                <!-- button_area end -->

            </div>
            <!-- banner_part_left end -->

            <!-- banner_part_right start -->
            <div class="banner_part_right">
                <!-- banner_img start -->
                <div class="banner_img">
                    <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/student.png" alt="studdent,  tech park it">
                </div>
                <!-- banner_img end -->

                <!-- banner_part_right_content start -->
                <div class="banner_part_right_content">

                    <div class="right_area_content certificate">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/certificate.png"
                                alt="certificate, tech park it">
                        </span>
                        <span class="right_site">
                            কোর্স শেষে <br> সার্টিফিকেট
                        </span>
                    </div>

                    <div class="right_area_content support">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/support.png"
                                alt="support, tech park it">
                        </span>
                        <span class="right_site">
                            সার্বক্ষণিক <br> সাপোর্ট
                        </span>
                    </div>

                    <div class="right_area_content quiz">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/quiz.png" alt="quiz, tech park it">
                        </span>
                        <span class="right_site">
                            বিষয়ভিত্তিক <br> কুইজ
                        </span>
                    </div>

                    <div class="right_area_content live_class">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/live_class.png"
                                alt="live_class, tech park it">
                        </span>
                        <span class="right_site">
                            লাইভ ও <br> রেকর্ডেড ক্লাস
                        </span>
                    </div>

                </div>
                <!-- banner_part_right_content end -->

            </div>
            <!-- banner_part_right end -->

        </div>
    </div>
</section>
<!-- banner_part end -->

<!-- course_item start -->
@include('frontend.pages.homepage_sections.course_category_section', ['categories' => $course_categories])
<!-- course_item end -->

<!-- our_course area start -->
<section class="our_course_area">
    <div class="container">
        <div class="our_course_area_content">

            <!-- our_course_area_title start -->
            <div class="our_course_area_title">
                <h2 class="area_title">
                    আমাদের কোর্সসমূহ
                </h2>
            </div>
            <!-- our_course_area_title end -->

            <!-- course_schedule_name start-->
            <div class="course_schedule_name">
                <ul>
                    <li>
                        <a href="#">সকল কোর্স</a>
                    </li>
                    <li>
                        <a href="#">অনলাইন কোর্স</a>
                    </li>
                    <li>
                        <a href="#">অফলাইন কোর্স</a>
                    </li>
                    <li>
                        <a href="#">ডে-কেয়ার কোর্স</a>
                    </li>
                </ul>
            </div>
            <!-- course_schedule_name end-->

            <!-- our_course_all_card start -->
            <div class="our_course_all_card">
                <!-- <div class="row"> -->
                <!-- <div class="col-4"> -->
                <!-- graphic_designer card area start-->
                <div class="c_card graphic_designer">
                    <!-- card_img start -->
                    <a href="#" class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/grafix.png"
                                alt="graphic_designer, tech park it">
                        </div>
                    </a>
                    <!-- card_img end -->

                    <!-- card_title_area start -->
                    <div class="card_title_area">
                        <!-- card_title start -->
                        <a href="#" class="card_title">
                            <p class="title_text">প্রফেশনাল গ্রাফিক্স ডিজাইন</p>
                        </a>
                        <!-- card_title end -->


                        <div>

                            <!-- day_and_boking_area start -->
                            <div class="day_and_boking_area">
                                <div class="day_area">
                                    <span class="day_icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png"
                                            alt="clock, tech park it">
                                    </span>
                                    <span class="day_tex">
                                        ১৪ দিন বাকী
                                    </span>
                                </div>
                                <div class="boking_area">
                                    <span class="boking_text">
                                        ৬৮%
                                    </span>
                                    <span class="boking_text">
                                        বুকড
                                    </span>
                                </div>
                            </div>
                            <!-- day_and_boking_area end -->

                            <!-- amount_and_button_area start -->
                            <div class="amount_and_button_area">
                                <!-- all_amount area start -->
                                <div class="all_amount">
                                    <div class="previous_amount_area">
                                        <p class="previous_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka">২০,০০০</span>
                                        </p>
                                    </div>
                                    <div class="current_amount_area">
                                        <p class="current_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka"> ১০,০০০</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- all_amount area end -->

                                <!-- button_area start -->
                                <button class="button_all">
                                    <span class="btn-text">কোর্সটি দেখি</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <!-- <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/arrow.png"
                alt="arrow, tech park it"> -->
                                    </span>
                                </button>
                                <!-- button_area end-->
                            </div>
                            <!-- amount_and_button_area end -->

                        </div>

                    </div>
                    <!-- card_title_area end -->
                </div>
                <!-- graphic_designer card area end-->
                <!-- </div> -->
                <!-- <div class="col-4"> -->
                <!-- web card area start-->
                <div class="c_card web">
                    <!-- card_img start -->
                    <a href="#" class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/web.png"
                                alt="graphic_designer, tech park it">
                        </div>
                    </a>
                    <!-- card_img end -->

                    <!-- card_title_area start -->
                    <div class="card_title_area">
                        <!-- card_title start -->
                        <a href="#" class="card_title">
                            <p class="title_text">Full Stack Web Development
                                with MERN</p>
                        </a>
                        <!-- card_title end -->


                        <div>
                            <!-- day_and_boking_area start -->
                            <div class="day_and_boking_area">
                                <div class="day_area">
                                    <span class="day_icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png"
                                            alt="clock, tech park it">
                                    </span>
                                    <span class="day_tex">
                                        ১৪ দিন বাকী
                                    </span>
                                </div>
                                <div class="boking_area">
                                    <span class="boking_text">
                                        ৬৮%
                                    </span>
                                    <span class="boking_text">
                                        বুকড
                                    </span>
                                </div>
                            </div>
                            <!-- day_and_boking_area end -->

                            <!-- amount_and_button_area start -->
                            <div class="amount_and_button_area">
                                <!-- all_amount area start -->
                                <div class="all_amount">
                                    <div class="previous_amount_area">
                                        <p class="previous_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka">২০,০০০</span>
                                        </p>
                                    </div>
                                    <div class="current_amount_area">
                                        <p class="current_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka"> ১০,০০০</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- all_amount area end -->

                                <!-- button_area start -->
                                <button class="button_all">
                                    <span class="btn-text">কোর্সটি দেখি</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-right"></i>

                                    </span>
                                </button>
                                <!-- button_area end-->
                            </div>
                            <!-- amount_and_button_area end -->
                        </div>

                    </div>
                    <!-- card_title_area end -->

                </div>
                <!-- web card area end-->
                <!-- </div> -->
                <!-- <div class="col-4"> -->
                <!-- degital marketing card area start-->
                <div class="c_card digital_marketing">
                    <!-- card_img start -->
                    <a href="#" class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/desital_marketing.png"
                                alt="graphic_designer, tech park it">
                        </div>
                    </a>
                    <!-- card_img end -->

                    <!-- card_title_area start -->
                    <div class="card_title_area">
                        <!-- card_title start -->
                        <a href="#" class="card_title">
                            <p class="title_text"> কমপ্লিট ডিজিটাল মার্কেটিং</p>
                        </a>
                        <!-- card_title end -->

                        <div>
                            <!-- day_and_boking_area start -->
                            <div class="day_and_boking_area">
                                <div class="day_area">
                                    <span class="day_icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png"
                                            alt="clock, tech park it">
                                    </span>
                                    <span class="day_tex">
                                        ১৪ দিন বাকী
                                    </span>
                                </div>
                                <div class="boking_area">
                                    <span class="boking_text">
                                        ৬৮%
                                    </span>
                                    <span class="boking_text">
                                        বুকড
                                    </span>
                                </div>
                            </div>
                            <!-- day_and_boking_area end -->

                            <!-- amount_and_button_area start -->
                            <div class="amount_and_button_area">
                                <!-- all_amount area start -->
                                <div class="all_amount">
                                    <div class="previous_amount_area">
                                        <p class="previous_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka">২০,০০০</span>
                                        </p>
                                    </div>
                                    <div class="current_amount_area">
                                        <p class="current_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka"> ১০,০০০</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- all_amount area end -->

                                <!-- button_area start -->
                                <button class="button_all">
                                    <span class="btn-text">কোর্সটি দেখি</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <!-- <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/arrow.png"
                alt="arrow, tech park it"> -->
                                    </span>
                                </button>
                                <!-- button_area end-->
                            </div>
                            <!-- amount_and_button_area end -->
                        </div>

                    </div>
                    <!-- card_title_area end -->

                </div>
                <!-- degital marketing card area end-->
                <!-- </div> -->
            </div>
        </div>
        <!-- our_course_all_card end -->
    </div>
    </div>
</section>
<!-- our_course area end -->

<!-- our_course_specialty area start -->
<section class="our_course_specialty"
    style="background-image: url({{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/bg_img.png);">
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
            <div class="course_card_area">

                <!-- card start -->
                <div class="c_card card_1">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/support.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_2">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/live.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_3">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/quiz.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_4">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/tainer.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_5">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/certificate.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->


            </div>
            <!-- course_card_area end -->

        </div>
    </div>
</section>
<!-- our_course_specialty area end -->

<!-- earning_area start -->
<section class="earning_area">
    <div class="container">
        <div class="earning_area_content">

            <!-- earning_area_title start -->
            <div class="earning_area_title">
                <h2 class="area_title">
                    কোর্স শেষেই আর্নিং শুরু করুন
                </h2>
            </div>
            <!-- earning_area_title end -->

            <!-- earning_area_sub_title start -->
            <div class="earning_area_sub_title">
                <p class="sub_title">আমাদের কোর্স মডিউল এমনভাবে সাজানো যে স্টুডেন্টরা কোর্স কমপ্লিট করার
                    সাথে সাথেই জব-রেডি হয়ে যায়</p>
            </div>
            <!-- earning_area_sub_title end -->

            <!-- earning_area_bottom start -->
            <div class="earning_area_bottom">
                <ul>
                    <li class="one">
                        <div class="step_number">
                            <a href="#">1</a>

                            <div class="right_arrow_area arrow_area_1">
                                <div class="right_arrow arrow_1">
                                    <!-- <hr class="stain"> -->
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>

                        <p class="bottom_text">কোর্সে জয়েন করুন</p>
                    </li>
                    <!-- <li>
                            <div class="arrow">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/earning_area/Arrow 1.png" alt="arrow tech park it">
                            </div>
                        </li> -->
                    <li>
                        <div class="step_number step_two">
                            <a href="#">2</a>
                            <div class="right_arrow_area arrow_area_2">
                                <div class="right_arrow  arrow_2">
                                    <!-- <hr class="stain"> -->
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                        <p class="bottom_text">কোর্স কমপ্লিট করুন</p>
                    </li>
                    <!-- <li>
                            <div class="arrow">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/earning_area/Arrow 2.png" alt="arrow tech park it">
                            </div>
                        </li> -->
                    <li>
                        <div class="step_number step_three">
                            <a href="#">3</a>
                            <div class="right_arrow_area arrow_area_3">
                                <div class="right_arrow arrow_3">
                                    <!-- <hr class="stain"> -->
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                        <p class="bottom_text">কোর্সের টাস্কগুলো পোর্টফোলিওতে শেয়ার করুন</p>
                    </li>
                    <!-- <li>
                            <div class="arrow">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/earning_area/Arrow 2.png" alt="arrow tech park it">
                            </div>
                        </li> -->
                    <li>
                        <div class="step_number">
                            <a href="#">4</a>
                        </div>
                        <p class="bottom_text">গেট Hired</p>
                    </li>
                </ul>
            </div>
            <!-- earning_area_bottom end -->

        </div>
    </div>
</section>
<!-- earning_area end -->

<!-- Student success history arer start -->
<section class="student_success_history_area">
    <div class="container">
        <div class="student_success_history_content">

            <!--student_success_history_area_title start -->
            <div class="student_success_history_area_title">
                <h2 class="area_title">
                    শিক্ষার্থীদের সাকসেস স্টোরি
                </h2>
            </div>
            <!-- student_success_history_area_title end -->

            <!-- student_success_history_area_sub_title start -->
            <div class="student_success_history_area_sub_title">
                <span class="sub_title">
                    আমাদের শিক্ষার্থীরা সফলতার সাথে কোর্স শেষ করে সফলতার সাথে ফ্রিলান্সিং ও জব করছে।
                </span>
                <span class="sub_title">
                    আমাদের শিক্ষার্থীদের মুখ থেকেই শুনুন তাদের সফলতার গল্প
                </span>
            </div>
            <!-- student_success_history_area_sub_title end -->

            <!-- student_success_video_area start -->
            <div class="student_success_video_area">
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
            </div>
            <!-- student_success_video_area end -->

            <!-- student_success_history_area_button start-->
            <div class="success_history_button_area">
                <button class="button_all">
                    <span class="btn_text">আরও দেখুন</span>
                    <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                </button>
            </div>
            <!-- student_success_history_area_button end-->

        </div>
    </div>
</section>
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
                        <div class="date_line_area">

                            <div class="date">
                                <span class="date_number">৩</span>
                                <span class="date_text">দিন বাকী</span>
                            </div>

                            <div class="data_science">
                                <span class="data_science_text_title">ডাটা সায়েন্স এ সম্ভাবনাময় ক্যারিয়ার
                                    গড়ুন</span>
                                <div class="data_science_text_sub_title">
                                    <!-- অনলাইন | ১৯ ডিসেম্বর ২৩ সোমবার, 09:00 pm -->
                                    <span> অনলাইন</span>
                                    <span class="space_space"> |</span>
                                    <span> ১৯ ডিসেম্বর ২৩ সোমবার, 09:00 pm</span>

                                </div>
                            </div>

                            <div class="join_button">
                                <button class="button_all">
                                    <span class="btn_text"> জয়েন</span>
                                </button>
                            </div>

                        </div>
                        <!--  date_line_area end -->

                        <!-- free_seminar_area_button start-->
                        <div class="free_seminar_button_area">
                            <button class="button_all">
                                <span class="btn_icon"><i class="fa-solid fa-calendar-days"></i></span>
                                <span class="btn_text">সকল সেমিনারের সময়সূচি</span>
                            </button>
                        </div>
                        <!-- free_seminar_area_button end-->

                    </div>
                </div>
                <!-- left_area end -->

                <!-- right_area start -->
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <div class="right_area">
                        <div class="free_seminar_image">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/free_seminar_area/img.png"
                                alt="seminar_image tech park it">
                        </div>
                    </div>
                </div>
                <!-- right_area end -->

            </div>
        </div>
    </div>
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


                <div class="service wordpress">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/wordpress.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                ওয়ার্ডপ্রেস ডেভোলাপমেন্ট
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                ওয়ার্ডপ্রেস ইন্সটলেশন, থিম কাস্টমাইজেশন,
                                রেসপনসিভ ডিজাইন, ওয়ার্ডপ্রেস ডেভেলপমেন্ট,
                                ওয়ার্ডপ্রেস প্লাগইন ইন্টিগ্রেশন এবং ওয়ার্ডপ্রেস এসইও।
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service  react ">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/react.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                React ডেভোলাপমেন্ট
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                আমরা React ফ্রন্টএন্ড ডেভোলাপমেন্ট এবং

                                আপনার সিঙ্গেল পেজ React ওয়েবসাইট (SPA) তৈরি করুন
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service e_commers">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/e_comarce.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                Laravel ই-কমার্স
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                আমরা ফুলস্ট্যাক Laravel ই-কমার্স সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service psd">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/phd.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                PSD to HTML
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                PSD/Figma/Adobe XD ডিজাইন HTML-এ কনভার্ট করি
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service vue">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/vuejs-ar21 1.png"
                            alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                Vue ডেভোলাপমেন্ট
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                Laravel+VueJS এর মাধ্যমে আপনার ওয়েবসাইট তৈরি করুন আমাদের থেকে আপনি VueJS এর মাধ্যমে
                                SPA Application বানাতে পারবেন
                            </p>
                        </div>
                    </div>
                </div>

                <div class="service server">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/server.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                সাইভার সিকিউরিটি
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                আমরা সকল ধরনের সাইবার সিকিউরিটি সার্ভিস প্রদান করি
                            </p>
                        </div>
                    </div>
                </div>
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
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/1.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/2.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/3.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/4.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/5.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/6.png" alt="logo">
                    </a>
                </li>

            </ul>
        </div>
        <!-- all_company_name and logo area end -->
    </div>
</section>
<!-- working_company_name area end -->

@endsection
