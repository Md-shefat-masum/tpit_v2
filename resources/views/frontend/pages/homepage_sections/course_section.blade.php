@foreach ($courses as $course)    
<div class="c_card graphic_designer">
    <!-- card_img start -->
    <a href="#" class="card_img_area">
        <div class="card_img">
            <img src="{{ asset($course->image) }}" alt="graphic_designer, tech park it" />
        </div>
    </a>
    <!-- card_img end -->

    <!-- card_title_area start -->
    <div class="card_title_area">
        <!-- card_title start -->
        <a href="#" class="card_title">
            <p class="title_text">{{ $course->title }}</p>
        </a>
        <!-- card_title end -->

        <div>
            <!-- day_and_boking_area start -->
            <div class="day_and_boking_area">
                <div class="day_area">
                    <span class="day_icon">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png" alt="clock, tech park it" />
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
@endforeach