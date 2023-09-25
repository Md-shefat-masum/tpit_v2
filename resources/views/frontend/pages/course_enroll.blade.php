@php
$meta = [
    "seo" => [
        "title" => "$course->title - Enroll",
        "image" => asset($course->image),
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
<!-- contact area start -->
<!-- course_and_payment_area start -->
<section class="course_and_payment_area">
    <div class="container">
        <div class="course_and_payment_area_content">
            <!-- course_area_start -->
            <a href="#" class="course_area">
                <div class="course_image">
                    <img src="{{ asset($course->image) }}" class="img-fluid" alt="tech_park_it">
                </div>
                <div class="course_title_and_price">

                    <div class="course_title_and_price">
                        <div class="course_title">
                            <h2 class="title">
                                {{ $course->title }}
                            </h2>
                        </div>
                        <div class="course_price">
                            @php
                                $batch_info = $course->course_batch()->first();
                            @endphp

                            @if($batch_info->after_discount_price != null && $batch_info->after_discount_price > 0)
                                <span class="old_price">৳ {{ $batch_info->course_price }}</span>
                                <span class="update_price">৳ {{ $batch_info->after_discount_price }}</span>
                            @endif
                            
                        </div>
                    </div>

                </div>
            </a>
            <!-- course_area_end -->

            <!-- payment_form_area_start -->
            <div class="payment_form_area">
                <form action="{{ route('course_enroll_submit', $course->slug) }}" method="POST">
                    @csrf
                    <div class="form_area">
                        <div class="form_content border_dash">
                            <label for="">ট্রান্সেকশন আইডিঃ</label>
                            <input type="text" name="trx_id" placeholder="পেইমেন্ট ট্রান্সেকশন আইডি">
                        </div>
                        @error('trx_id')
                            <div class="text-danger pt-2 ms-2">
                                {{$message}}
                            </div>
                        @enderror
                        <div class="form_content border_dash">
                            <label for="">মোটঃ</label>
                            <input type="text" readonly value="{{ $batch_info->course_price }}">
                        </div>
                        <div class="form_content border_dash">
                            <label for="">% ডিস্কাউন্ট</label>
                            <input type="text" readonly placeholder=" (-) ৳" value="{{ $batch_info->course_price - $batch_info->after_discount_price }}">
                        </div>
                        {{-- <div class="form_content border_solid ">
                            <label for=""> <i class="fa-solid fa-ticket"></i> এপ্লাই কুপন কোড</label>
                            <input type="text" placeholder="| এপ্লাই করুন">
                        </div> --}}
                        <div class="form_content">
                            <label for="">সর্বমোটঃ</label>
                            <input type="text" readonly placeholder="৳ " value="{{ $batch_info->after_discount_price ? $batch_info->after_discount_price : $batch_info->course_price }}">
                        </div>
                    </div>

                    <button type="submit" class="button_all">
                        পেমেন্ট করুন
                    </button>

                </form>
            </div>
            <!-- payment_form_area_end -->
        </div>
    </div>
</section>
<!-- course_and_payment_area end-->

<!-- bank_name_area start -->
<section class="bank_name_area">
    <div class="container">
        <div class="bank_name_area_content">
            <div class="bank_name_area_title">
                <p class="title">You can pay by</p>
            </div>

            <div class="bank_logo_area">
                <a href="#" class="bank_logo">
                    <span><img src="{{ asset('frontend') }}/assets/images/course_enrollment_page_image/bank_image/bkash.png"
                            alt="techpark it"></span>
                </a>
                <a href="#" class="bank_logo">
                    <span><img src="{{ asset('frontend') }}/assets/images/course_enrollment_page_image/bank_image/roket.png"
                            alt="techpark it"></span>
                </a>
                <a href="#" class="bank_logo">
                    <span><img src="{{ asset('frontend') }}/assets/images/course_enrollment_page_image/bank_image/nogot.png"
                            alt="techpark it"></span>
                </a>
                <a href="#" class="bank_logo">
                    <span><img src="{{ asset('frontend') }}/assets/images/course_enrollment_page_image/bank_image/cellz_fin.png"
                            alt="techpark it"></span>
                </a>
            </div>

            {{-- <a href="#" class="ssl_area">
                <div class="ssl_title">
                    <p class="title">Verified by</p>
                </div>
                <div class="ssl_image">
                    <img src="{{ asset('frontend') }}/assets/images/course_enrollment_page_image/bank_image/ssl.png" alt="techpark it">
                </div>
            </a> --}}
        </div>
    </div>
</section>
<!-- bank_name_area end -->
<!-- contact area end -->
@endsection

