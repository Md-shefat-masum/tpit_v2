@php
$meta = [
// "meta" => [],
    "seo" => [
        "title" => "My Course",
        "image" => asset('seo.jpg'),
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
    <div class="my_courses_area">
        <div class="container">
            <div class="my_courses">
                <div class="my_courses_title">আমার কোর্সসমূহ</div>
                <div class="my_all_courses">
                    <div class="complete_course">
                        <div class="complete_courses_icon"><i class="fa-regular fa-circle-check"></i></div>
                        <div class="complete_courses_info">
                            <div class="complete_courses_title">কোর্স কমপ্লিট</div>
                            <div class="complete_courses_total">{{ $complete_courses->count() }} টি</div>
                        </div>
                    </div>
                    <div class="contunued_course">
                        <div class="contunued_courses_icon"><i class="fa-regular fa-circle-right"></i></div>
                        <div class="contunued_courses_info">
                            <div class="contunued_courses_title">চলমান কোর্স</div>
                            <div class="contunued_courses_total">{{ $user_course->count() }} টি</div>
                        </div>
                    </div>
                    <div class="incomplete_course">
                        <div class="incomplete_courses_icon"><i class="fa-regular fa-circle-xmark"></i></div>
                        <div class="incomplete_courses_info">
                            <div class="incomplete_courses_title">অসম্পন্ন কোর্স</div>
                            <div class="incomplete_courses_total">{{ $incomplete_courses->count() }} টি</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my_contunued_courses">
                <div class="my_contunued_courses_title">চলমান কোর্সসমূহ</div>
                <div class="contunued_courses_border"></div>
                <div class="my_contunued_all_courses">
                    {{-- @dd($userWithCourses) --}}
                    @foreach ($incomplete_courses as $item)
                        <div class="c_card graphic_designer">
                            <!-- card_img start -->
                            <a href="{{ route('mycourse_details', $item->course->slug) }}" class="card_img_area">
                                <div class="card_img">
                                    <img src="{{ asset($item->course->image) }}"
                                        alt="graphic_designer, tech park it">
                                </div>
                            </a>
                            <!-- card_img end -->

                            <!-- card_title_area start -->
                            <div class="card_title_area">
                                <!-- card_title start -->
                                <a href="#" class="card_title">
                                    <p class="title_text">{{ $item->course->title }}</p>
                                </a><br>
                                <a href="#" class="card_title">
                                    {{-- <p class="title_text">{{ $item->course->title }}</p> --}}
                                    <p class="batch_text">ব্যাচঃ  {{ $item->batch->batch_name }}</p>
                                </a>
                                <!-- card_title end -->

                                <!-- day_and_boking_area start -->
                                <div class="day_and_boking_area">
                                    <div class="day_area">
                                        <!-- <span class="day_icon">
                                            <img src="./assets/images/home_page_image/our_course_area/clock.png"
                                                alt="clock, tech park it">
                                        </span> -->
                                        <span class="day_tex">
                                            কমপ্লিটেডঃ
                                        </span>
                                    </div>
                                    <div class="boking_area d-flex justify-content-center align-items-center pt-0 fw-bolder">
                                        <span class="boking_text">
                                            {{ $item->course_percent }} %
                                        </span>
                                    </div>
                                </div>
                                <!-- day_and_boking_area end -->

                                <!-- amount_and_button_area start -->
                                <div class="amount_and_button_area">

                                    <!-- button_area start -->
                                    <a href="{{ route('mycourse_details', $item->course->slug) }}" class="text-center button_all">
                                        <span class="btn-text">কোর্স বিস্তারিত</span>
                                        <span class="btn_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <!-- <img src="./assets/images/home_page_image/our_course_area/arrow.png"
                                                alt="arrow, tech park it"> -->
                                        </span>
                                    </a>
                                    <!-- button_area end-->
                                </div>
                                <!-- amount_and_button_area end -->
                            </div>
                            <!-- card_title_area end -->
                        </div>
                    @endforeach
                </div>
            </div>
            @if ($complete_courses->count() > 0)
                <div class="my_contunued_courses">
                    <div class="my_contunued_courses_title">কমপ্লিট কোর্সসমূহ</div>
                    <div class="contunued_courses_border"></div>
                    <div class="my_contunued_all_courses">
                        @foreach ($complete_courses as $comp_item)
                            <div class="c_card graphic_designer">
                                <!-- card_img start -->
                                <a href="#" class="card_img_area">
                                    <div class="card_img">
                                        <img src="{{ asset($comp_item->course->image) }}"
                                            alt="graphic_designer, tech park it">
                                    </div>
                                </a>
                                <!-- card_img end -->

                                <!-- card_title_area start -->
                                <div class="card_title_area">
                                    <!-- card_title start -->
                                    <a href="#" class="card_title">
                                        <p class="title_text">{{ $comp_item->course->title }}</p>
                                    </a>
                                    <!-- card_title end -->

                                    <!-- day_and_boking_area start -->
                                    <div class="day_and_boking_area">
                                        <div class="day_area">
                                            <!-- <span class="day_icon">
                                                <img src="./assets/images/home_page_image/our_course_area/clock.png"
                                                    alt="clock, tech park it">
                                            </span> -->
                                            <span class="day_tex">
                                                কমপ্লিটেডঃ
                                            </span>
                                        </div>
                                        <div class="boking_area d-flex justify-content-center align-items-center pt-0 fw-bolder">
                                            <span class="boking_text">
                                                {{ $comp_item->course_percent }} %
                                            </span>
                                        </div>
                                    </div>
                                    <!-- day_and_boking_area end -->

                                    <!-- amount_and_button_area start -->
                                    <div class="amount_and_button_area">
                                        <!-- all_amount area start -->
                                        <!-- <div class="all_amount">
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
                                        </div> -->
                                        <!-- all_amount area end -->

                                        <!-- button_area start -->
                                        <a href="{{ route('mycourse_details', $comp_item->course->slug) }}" class="button_all text-center">
                                            <span class="btn-text">কোর্স সার্টিফিকেট দেখুন</span>
                                            <span class="btn_icon">
                                                <i class="fa-solid fa-arrow-right"></i>
                                                <!-- <img src="./assets/images/home_page_image/our_course_area/arrow.png"
                                                    alt="arrow, tech park it"> -->
                                            </span>
                                        </a>
                                        <!-- button_area end-->
                                    </div>
                                    <!-- amount_and_button_area end -->
                                </div>
                                <!-- card_title_area end -->
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
