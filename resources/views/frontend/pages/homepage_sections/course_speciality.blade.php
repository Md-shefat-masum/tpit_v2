<div class="course_card_area">
    @foreach ($course_speciality as $course_item)    
        <div class="c_card card_1">
            <div class="card_img_area">
                <div class="card_img">
                    <img src="{{ asset($course_item->image) }}" alt="card tech park it
                        ">
                </div>
            </div>
            <div class="card_text">
                <p>{{ $course_item->title }}</p>
            </div>
        </div>
    @endforeach
    <!-- card start -->
    {{-- <div class="c_card card_4">
        <div class="card_img_area">
            <div class="card_img">
                <img src="https://techparkit.org/frontend/assets/images/home_page_image/our_course_specialty/tainer.png" alt="card tech park it
                    ">
            </div>
        </div>
        <div class="card_text">
            <p>সার্বক্ষণিক সাপোর্ট</p>
        </div>
    </div> --}}
    <!-- card end -->
    <!-- card start -->
    {{-- <div class="c_card card_5">
        <div class="card_img_area">
            <div class="card_img">
                <img src="https://techparkit.org/frontend/assets/images/home_page_image/our_course_specialty/certificate.png" alt="card tech park it
                    ">
            </div>
        </div>
        <div class="card_text">
            <p>সার্বক্ষণিক সাপোর্ট</p>
        </div>
    </div> --}}
    <!-- card end -->


</div>