@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => $data->title,
            'image' => asset($data->image),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <section class="course_details_area">
        <div class="container">
            <div class="course_details_part">
                <div class="course_details">
                    <div class="course_title">
                        <h2 class="course_title_text">
                            {{$data->title}}
                        </h2>
                    </div>
                    <!-- what is course start -->
                    <div class="what_is_course">
                        <h2 class="what_is_course_title">{{$data->title}} কী?</h2>
                        <p class="what_is_course_details">
                            {!! $data->what_is_this_course !!}
                        </p>
                    </div>
                    <!-- /what is course end -->

                    <!-- why learn this course start -->
                    <div class="why_learn_this_course">
                        <h2 class="why_learn_this_course_title">
                            এই কোর্স কেনো করবেন?
                        </h2>
                        <p class="why_learn_this_course_details">
                            {!!$data->why_is_this_course!!}
                        </p>
                    </div>
                    <!-- /why learn this course end -->

                    <!-- job possition and frelancing part start -->
                    <div class="job_possition_and_freelancing">
                        <div class="job_possition">
                            <h2 class="job_possition_title">
                                আপনি যেসব পজিশনে জব করতে পারবেন
                            </h2>
                            <div class="job_categories">
                                @foreach ($data->course_job_position()->get() as $item)
                                    <div class="job_categorie">
                                        <div class="job_categorie_icon">
                                            <i class="fa-regular fa-circle-check"></i>
                                        </div>
                                        <div class="job_categorie_title">
                                            {{ $item->title }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="freelancing_project">
                            <h2 class="freelancing_project_title">
                                যেসব ফ্রিলান্সিং প্রজেক্ট করতে পারবেন
                            </h2>
                            <div class="freelancing_categories">
                                @foreach ($data->course_job_works()->get() as $item)
                                    <div class="freelancing_categorie">
                                        <div class="freelancing_categorie_icon">
                                            <i class="fa-regular fa-circle-check"></i>
                                        </div>
                                        <div class="freelancing_categorie_title">
                                            {{ $item->title }}
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- / job possintion and freelanching part end -->

                    <!-- course feature start -->
                    <div class="course_feature_part">
                        <ul class="course_features">
                            <li class="active">
                                <div class="feature_title">
                                    <div class="feature_name">এই কোর্সে যা যা শিখবেন</div>
                                    <div class="feature_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="feature_content">
                                    <ul>
                                        @foreach( $data->course_you_will_learns()->get() as $item)
                                        <li>
                                            <div class="cheak_icon">
                                                <i class="fa-regular fa-circle-check"></i>
                                            </div>
                                            <div class="feature_content_text">
                                                {{$item->title}}
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="">
                                <div class="feature_title">
                                    <div class="feature_name">এই কোর্সটি যাদের জন্য</div>
                                    <div class="feature_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="feature_content">
                                    <ul>
                                        @foreach( $data->course_for_whomes()->get() as $item)
                                        <li>
                                            <div class="cheak_icon">
                                                <i class="fa-regular fa-circle-check"></i>
                                            </div>
                                            <div class="feature_content_text">
                                                {{$item->title}}
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="">
                                <div class="feature_title">
                                    <div class="feature_name">
                                        আপনি কেন আমাদের কাছ থেকে শিখবেন?
                                    </div>
                                    <div class="feature_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="feature_content">
                                    <ul>
                                        @foreach( $data->course_you_will_learn_for_us()->get() as $item)
                                        <li>
                                            <div class="cheak_icon">
                                                <i class="fa-regular fa-circle-check"></i>
                                            </div>
                                            <div class="feature_content_text">
                                                {{$item->title}}
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="">
                                <div class="feature_title">
                                    <div class="feature_name">
                                        এই কোর্সে আপনি যা যা পাচ্ছেন?
                                    </div>
                                    <div class="feature_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="feature_content">
                                    <ul>
                                        @foreach( $data->course_what_you_will_get()->get() as $item)
                                        <li>
                                            <div class="cheak_icon">
                                                <i class="fa-regular fa-circle-check"></i>
                                            </div>
                                            <div class="feature_content_text">
                                                {{$item->title}}
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script>
                        [...document.querySelectorAll(".feature_acordion_icon")].forEach(
                            (el) => {
                                el.onclick = function(e) {
                                    e.currentTarget.parentNode.parentNode.classList.toggle(
                                        "active"
                                    );
                                    // console.log(e.currentTarget);
                                };
                            }
                        );
                    </script>
                    <!-- / course feature end -->

                    <!-- class module start -->
                    <div class="class_module">
                        <div class="class_module_head">
                            <div class="class_module_title">ক্লাস মডিউল</div>
                            <ul class="class_module_content">
                                @foreach ($data->course_module_at_a_glance()->get() as $key=>$item)
                                    <li>{{$item->title}}</li>
                                    @if ($key < $data->course_module_at_a_glance()->count() - 1)
                                        ।
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="class_module_details">
                            {{-- @dump($data->course_modules()->get()) --}}

                            @foreach ($data->course_modules()->orderBy('module_no','ASC')->get() as $item)
                                <ul class="class_module_features">
                                    <li class="active">
                                        <div class="class_module_title">
                                            <div class="class_module_title_and_number">
                                                <div class="class_module_number">
                                                    মডিউল <span class="number"> {{ $item->module_no }} </span>
                                                </div>
                                                <div class="class_module_title_details">
                                                    <div class="title">Frontend Recap</div>
                                                    <ul class="details">
                                                        <li>
                                                            {{ $item->classes()->where('type','live')->count()}}
                                                            টি লাইভ ক্লাস
                                                        </li>

                                                        <li>
                                                            {{ $item->classes()->where('type','recorded')->count()}}
                                                            টি রেকর্ডেড ক্লাস
                                                        </li>
                                                        ।
                                                        <li>
                                                            {{ $item->quizes()->count()}}
                                                             টি কুইজ
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="class_module_acordion_icon">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="class_module_feature_content">
                                            <ul>
                                                @foreach ($item->classes as $class)
                                                    {{-- @dd($class)     --}}
                                                    <li>
                                                        <div class="class_module_class_no">ক্লাস {{ $class->class_no }}</div>
                                                        <div class="live_class_and_topic">
                                                            <div class="live_class_icon">
                                                                <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="class_module_live_class">
                                                                @if ($class->type == 'live')
                                                                    লাইভ ক্লাসঃ
                                                                @else
                                                                    রেকর্ডেড ক্লাসঃ
                                                                @endif
                                                            </div>
                                                            <div class="class_module_topic">{{ $class->title }}</div>
                                                        </div>
                                                        @if($class->class_quiz && $class->class_quiz->quiz)

                                                        <div class="quiz_and_mcq">
                                                            <div class="quiz_icon">
                                                                <i class="fa-solid fa-file-lines"></i>
                                                            </div>
                                                            <div class="quiz">কুইজঃ</div>
                                                            <div class="mcq">
                                                                {{ $class->class_quiz->quiz->title ?? '' }}
                                                                {{-- MCQ Question about basics of Bootstrap --}}
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach

                        </div>
                    </div>
                    <script>
                        [
                            ...document.querySelectorAll(".class_module_acordion_icon"),
                        ].forEach((el) => {
                            el.onclick = function(e) {
                                e.currentTarget.parentNode.parentNode.classList.toggle(
                                    "active"
                                );
                                console.log(e.currentTarget);
                            };
                        });
                    </script>
                    <!-- /class module end -->
                    <!-- course trainer start-->
                    <section class="course_trainers_area">
                        <div class="container">
                            <div class="trainers_description">
                                <div class="trainers_title">
                                    <h2 class="trainers_title_bangla">কোর্স প্রশিক্ষক</h2>
                                </div>
                                <div class="trainers_details">
                                    <div class="trainer_details">
                                        <div class="trainer_images">
                                            <div class="image">
                                                <img src="./assets/images/about_page_image/trainers_images/trainer.png"
                                                    alt="" />
                                            </div>
                                            <div class="trainer_info">
                                                <div class="trainer_name">মুহাম্মদ সিফাতুল্লাহ</div>
                                                <p>ওয়েব ডিজাইন ও ডেভোলাপমেন্ট</p>
                                                <div class="trainer_link">
                                                    <i class="fa-brands tw fa-square-twitter"></i>
                                                    <i class="fa-brands fb fa-square-facebook"></i>
                                                    <i class="fa-brands ld fa-linkedin"></i>
                                                    <i class="fa-brands in fa-square-instagram"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trainer_descrip">
                                            <p>
                                                ৩ বছরেরও বেশি সময় ধরে ওয়েব ডিজাইন ও ডেভোলাপম্যান্ট
                                                ট্রেইনার হিসেবে কর্মরত আছেন। এছাড়াও তিনি গত ৫ বছর ধরে
                                                Fiverr, Upwork ও Freelancer.com এ সফলতার সাথে
                                                ফ্রিলান্সিং করে আসছেন, ও ৩০০+ প্রজেক্ট সম্পন্ন
                                                করিয়েছেন
                                            </p>
                                            <p>
                                                তিনি ৫০০+ স্টুডেন্টকে ট্রেনিং করিয়েছেন, যারা বর্তমানে
                                                বাংলাদেশের বিভিন্ন স্বনামধন্য প্রতিষ্ঠানে কর্মরত আছেন।
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /course trainer end -->
                </div>
                <div class="course_info">
                    <div class="course_info_div">
                        <div class="course_info_thubnail_and_icon">
                            <div class="course_info_thubnail">
                                <img src="./assets/images/course_details_image/course_details_thumbnail.png"
                                    alt="">
                            </div>
                            <div class="course_info_icon">
                                <img src="./assets/images/course_details_image/course_info_icon.png" alt="">
                            </div>
                        </div>
                        <div class="course_info_time">
                            <div class="time_have">
                                <div class="time_have_title">সময় বাকী আছে</div>
                                <ul>
                                    <li>1<span> day</span></li>|
                                    <li>06<span> hrs</span></li>|
                                    <li>08<span> mins</span></li>|
                                    <li>13<span> secs</span></li>
                                </ul>
                            </div>
                            <div class="course_booked">
                                <div>৬৮%</div>
                                <div>বুকড</div>
                            </div>
                        </div>
                        <div class="course_fee">
                            <del class="twenty_thousand">৳ ২০,০০০</del>
                            <div class="ten_thousand">৳ ১০,০০০</div>
                        </div>
                        <div class="admit_course">
                            <div class="admit_course_title_and_icon">
                                <div class="admit_course_title">কোর্সে ভর্তি হোন</div>
                                <div class="admit_course_icon"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                            <div class="admit_course_batch">
                                <div class="admit_course_batch_title">ব্যাচ <span>২</span></div>
                                <div class="admit_course_start_and_deadline">
                                    <div class="admit_course_start">
                                        <div class="admit_course_start_title"><span><i
                                                    class="fa-regular fa-calendar-days"></i></span><span>ভর্তী শুরুঃ</span>
                                        </div>
                                        <div class="admit_course_start_date">১২ অক্টোবর ২০২২</div>
                                    </div>
                                    <div class="admit_course_line"></div>
                                    <div class="admit_course_deadline">
                                        <div class="admit_course_deadline_title"><span><i
                                                    class="fa-regular fa-calendar-xmark"></i></span><span>ভর্তী শেষঃ</span>
                                        </div>
                                        <div class="admit_course_deadline_date">১২ জানুয়ারি ২০২৩</div>
                                    </div>
                                </div>
                            </div>
                            <div class="admit_course_batch_details">
                                <div class="admit_course_orientation"><span><i
                                            class="fa-regular fa-calendar-days"></i></span><span>ওরিয়েন্টেশন ও প্রথম ক্লাসঃ
                                        ১২ অক্টোবর,
                                        বুধবার</span></div>
                                <div class="admit_course_class_date"><span><i
                                            class="fa-regular fa-calendar-days"></i></span><span>ক্লাসের দিনঃ
                                        শনি-সোম-বুধ</span></div>
                                <div class="admit_course_class_time"><span><i
                                            class="fa-regular fa-calendar-days"></i></span><span>ক্লাসের সময়ঃ রাত ০৮ঃ৩০ -
                                        রাত ১১ঃ৩০</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course_needed">
                        <div class="course_needed_title">কোর্সটি করার জন্য যা যা লাগবে</div>
                        <div class="course_needed_internet"><i class="fa-regular fa-circle-dot"></i>ইন্টারনেট সংযোগ যুক্ত
                            কম্পিউটার
                        </div>
                        <div class="course_hotline_and_schedule">
                            <div class="course_hotline">
                                <div class="course_hotline_title">যেকোনো প্রয়োজনে কল করুনঃ </div>
                                <i class="fa-solid fa-phone"></i>
                                <div class="course_hotline_number"> 01719-229595</div>
                            </div>
                            <div class="course_schedule">(সকাল ১০ টা থেকে রাত ৮ টা)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- general question area start-->
    <div class="general_question_part">
        <div class="container">
            <div class="general_questions">
                <div class="general_question_details">
                    <div class="general_question_head">
                        <div class="general_question_heading_title">সাধারণ জিজ্ঞাসা</div>
                        <div class="general_question_heading_brief">
                            আপনার কোন জিজ্ঞাসা থাকলে এখান থেকে খুঁজে দেখতে পারেন
                        </div>
                    </div>
                    <ul class="general_question_all">
                        <div class="general_question">
                            <li class="">
                                <div class="general_question_title_and_icon">
                                    <div class="general_question_title">
                                        আপনাদের এখানে ইন্টার্নের সুজোগ আছে?
                                    </div>
                                    <div class="general_question_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="general_question_content">
                                    আমরা সকল ক্লাসের রেকর্ডেড ভিডিও সরবরাহ করি, আপনি আপনার স্টুডেন্ট
                                    পোর্টাল থেকে আপনার কোর্সের সকল ক্লাসের রেকর্ডেড ভিডিও পাবেন।
                                </div>
                            </li>
                        </div>
                        <div class="general_question">
                            <li>
                            <li class="general_question active">
                                <div class="general_question_title_and_icon">
                                    <div class="general_question_title">
                                        অনলাইন/অফলাইন ক্লাসের রেকর্ডেড ভিডিও পাওয়া যায়?
                                    </div>
                                    <div class="general_question_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="general_question_content">
                                    আমরা সকল ক্লাসের রেকর্ডেড ভিডিও সরবরাহ করি, আপনি আপনার স্টুডেন্ট
                                    পোর্টাল থেকে আপনার কোর্সের সকল ক্লাসের রেকর্ডেড ভিডিও পাবেন।
                                </div>
                            </li>
                            </li>
                        </div>
                        <div class="general_question">
                            <li>
                            <li class="general_question ">
                                <div class="general_question_title_and_icon">
                                    <div class="general_question_title">
                                        একাধিক স্কিমে পেমেন্ট করার সুজোগ আছে কি?
                                    </div>
                                    <div class="general_question_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="general_question_content">
                                    আমরা সকল ক্লাসের রেকর্ডেড ভিডিও সরবরাহ করি, আপনি আপনার স্টুডেন্ট
                                    পোর্টাল থেকে আপনার কোর্সের সকল ক্লাসের রেকর্ডেড ভিডিও পাবেন।
                                </div>
                            </li>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        [
            ...document.querySelectorAll(".general_question_acordion_icon"),
        ].forEach((element) => {
            element.onclick = function(e) {
                e.currentTarget.parentNode.parentNode.classList.toggle(
                    "active"
                );
                // console.log(e.currentTarget.parentNode.classList);
            };
        });
    </script>
@endsection
