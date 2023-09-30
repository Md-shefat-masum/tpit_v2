@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => 'My Course',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <div class="course_details_quiz_area">
        <div class="container">
            <div class="course_progress_mearn">
                <div class="course_progress_mearn_title">
                    {{ $course->title }}
                </div>
                <div class="course_progress_area">
                    <div class="course_progress">
                        <div class="course_progress_title">কোর্স প্রোগ্রেস ৭%</div>
                        <div class="course_progress_bar">
                            <div class="course_progress_bar_complete"></div>
                        </div>
                        <div class="course_progress_info">
                            কোর্স সার্টিফিকেট পেতে কোর্সটি সম্পুর্ণ করুন
                        </div>
                    </div>
                    <div class="course_certificate">
                        <div class="course_certificate_image">
                            <img class="img-fluid" src="/frontend/assets/images/course_details_image/course_certificate.png" alt="" />
                        </div>
                        <div class="course_certificate_lock">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class_routine">
                <div class="class_routine_title_and_details">
                    <div class="class_routine_title">ক্লাস রুটিন</div>
                    <div class="class_routine_details">
                        বিস্তারিত দেখুন<i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
                <div class="class_routine_table">
                    <div class="class_routine_month">এপ্রিল 2023</div>
                    <div class="table_div">
                        <table>
                            <thead>
                                <tr>
                                    <td>ক্লাস নং</td>
                                    <td>তারিখ</td>
                                    <td>সময়</td>
                                    <td>ক্লাস টপিক</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ক্লাস ১</td>
                                    <td>১২ এপ্রিল - বুধবার</td>
                                    <td>রাত ০৮ঃ৩০ - রাত ১১ঃ৩০</td>
                                    <td>
                                        <div>রেকর্ডেড ক্লাসঃ Basici JS</div>
                                        <div>কুইজঃMCQ Question about basics of Bootstrap</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ক্লাস ১</td>
                                    <td>১২ এপ্রিল - বুধবার</td>
                                    <td>রাত ০৮ঃ৩০ - রাত ১১ঃ৩০</td>
                                    <td>
                                        <div>রেকর্ডেড ক্লাসঃ Basici JS</div>
                                        <div>কুইজঃMCQ Question about basics of Bootstrap</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ক্লাস ১</td>
                                    <td>১২ এপ্রিল - বুধবার</td>
                                    <td>রাত ০৮ঃ৩০ - রাত ১১ঃ৩০</td>
                                    <td>
                                        <div>রেকর্ডেড ক্লাসঃ Basici JS</div>
                                        <div>কুইজঃMCQ Question about basics of Bootstrap</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="class_routine_month">মে 2023</div>
                    <div class="table_div">
                        <table>
                            <!-- <thead>
                    <tr>
                      <td>ক্লাস নং</td>
                      <td>তারিখ</td>
                      <td>সময়</td>
                      <td>ক্লাস টপিক</td>
                    </tr>
                  </thead> -->
                            <tbody>
                                <tr>
                                    <td>ক্লাস ১</td>
                                    <td>১২ এপ্রিল - বুধবার</td>
                                    <td>রাত ০৮ঃ৩০ - রাত ১১ঃ৩০</td>
                                    <td>
                                        <div>রেকর্ডেড ক্লাসঃ Basici JS</div>
                                        <div>কুইজঃMCQ Question about basics of Bootstrap</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ক্লাস ১</td>
                                    <td>১২ এপ্রিল - বুধবার</td>
                                    <td>রাত ০৮ঃ৩০ - রাত ১১ঃ৩০</td>
                                    <td>
                                        <div>রেকর্ডেড ক্লাসঃ Basici JS</div>
                                        <div>কুইজঃMCQ Question about basics of Bootstrap</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ক্লাস ১</td>
                                    <td>১২ এপ্রিল - বুধবার</td>
                                    <td>রাত ০৮ঃ৩০ - রাত ১১ঃ৩০</td>
                                    <td>
                                        <div>রেকর্ডেড ক্লাসঃ Basici JS</div>
                                        <div>কুইজঃMCQ Question about basics of Bootstrap</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /course details quiz area end -->
    <!-- course quize and module part start -->
    <div class="course_quize_and_module_part" id="course_section">
        <div class="container">
            <div class="mearn_course_detail_module_and_bootstrap_quiz">
                <div class="mearn_course_detail_module">

                    {{-- <div class="class_module_details">
                        <ul class="class_module_features">
                            <li class="active">
                                <div class="class_module_title">
                                    <div class="class_module_title_and_number">
                                        <!-- <div class="class_module_number">
                            মডিউল <span class="number">১</span>
                          </div> -->
                                        <div class="class_module_title_details">
                                            <div class="title">মডিউল ১ঃ Frontend Recap</div>
                                            <ul class="details">
                                                <li>3 টি লাইভ ক্লাস</li>
                                                ।
                                                <li>৩ টি কুইজ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="class_module_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="class_module_feature_content">
                                    <ul>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ১</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/frontend/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">
                                                    রেকর্ডেড ক্লাসঃ
                                                </div>
                                                <div class="class_module_topic">Bootstrap</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">
                                                    MCQ Question about basics of Bootstrap
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ২</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">
                                                    রেকর্ডেড ক্লাসঃ
                                                </div>
                                                <div class="class_module_topic">JQuery</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">MCQ Question about basics JS</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ৩</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">
                                                    রেকর্ডেড ক্লাসঃ
                                                </div>
                                                <div class="class_module_topic">JQuery</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">
                                                    MCQ Question about basics of JQuery
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="class_module_features">
                            <li class="">
                                <div class="class_module_title">
                                    <div class="class_module_title_and_number">
                                        <!-- <div class="class_module_number">
                            মডিউল <span class="number">২</span>
                          </div> -->
                                        <div class="class_module_title_details">
                                            <div class="title">Object Oriented PHP</div>
                                            <ul class="details">
                                                <li>3 টি লাইভ ক্লাস</li>
                                                ।
                                                <li>১ টি প্র্যাকটিকাল প্রজেক্ট</li>
                                                ।
                                                <li>৩ টি কুইজ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="class_module_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="class_module_feature_content">
                                    <ul>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ১</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">লাইভ ক্লাসঃ</div>
                                                <div class="class_module_topic">Bootstrap</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">
                                                    MCQ Question about basics of Bootstrap
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ২</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">লাইভ ক্লাসঃ</div>
                                                <div class="class_module_topic">Basic JS</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">MCQ Question about basics JS</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ৩</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">লাইভ ক্লাসঃ</div>
                                                <div class="class_module_topic">JQuery</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">
                                                    MCQ Question about basics of JQuery
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="class_module_features">
                            <li class="">
                                <div class="class_module_title">
                                    <div class="class_module_title_and_number">
                                        <!-- <div class="class_module_number">
                            মডিউল <span class="number">৩</span>
                          </div> -->
                                        <div class="class_module_title_details">
                                            <div class="title">
                                                Understanding Server side Technology
                                            </div>
                                            <ul class="details">
                                                <li>3 টি লাইভ ক্লাস</li>
                                                ।
                                                <li>৩ টি কুইজ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="class_module_acordion_icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="class_module_feature_content">
                                    <ul>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ১</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">লাইভ ক্লাসঃ</div>
                                                <div class="class_module_topic">Bootstrap</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">
                                                    MCQ Question about basics of Bootstrap
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ২</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">লাইভ ক্লাসঃ</div>
                                                <div class="class_module_topic">Basic JS</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">MCQ Question about basics JS</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="class_module_class_no">ক্লাস ৩</div>
                                            <div class="live_class_and_topic">
                                                <div class="live_class_icon">
                                                    <img src="/assets/images/about_page_image/class_module/podcasts.png"
                                                        alt="" />
                                                </div>
                                                <div class="class_module_live_class">লাইভ ক্লাসঃ</div>
                                                <div class="class_module_topic">JQuery</div>
                                            </div>
                                            <div class="quiz_and_mcq">
                                                <div class="quiz_icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                </div>
                                                <div class="quiz">কুইজঃ</div>
                                                <div class="mcq">
                                                    MCQ Question about basics of JQuery
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div> --}}

                    <div class="class_module_details">
                        {{-- @dd($course->course_modules) --}}

                        @foreach ($course->course_module as $key => $item)
                            {{-- {{ ddd($course->course_module) }} --}}
                            <ul class="class_module_features">
                                <li class="active">
                                    <div class="class_module_title">
                                        <div class="class_module_title_and_number">
                                            {{-- <div class="class_module_number">
                                                মডিউল <span class="number"> {{ $item->module_no }} </span>
                                            </div> --}}
                                            <div class="class_module_title_details">
                                                <div class="title">মডিউল <span class="number"> {{ $item->module_no }} - </span> {{ $item->title }}</div>
                                                <ul class="details">
                                                    <li>
                                                        {{ $item->classes->where('type','live')->count()}}
                                                        টি লাইভ ক্লাস
                                                    </li>

                                                    <li>
                                                        {{ $item->classes->where('type','recorded')->count()}}
                                                        টি রেকর্ডেড ক্লাস
                                                    </li>
                                                    ।
                                                    <li>
                                                        {{ $item->quizes->count()}}
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
                                            @foreach ($item->classes as $key => $class)
                                                {{-- @dd($class)     --}}
                                                <li>
                                                    <div class="class_module_class_no">ক্লাস {{ $class->class_no }}</div>
                                                    
                                                    
                                                    <div data-key="{{ $key }}" data-link="`{{ $class->link }}`" class="live_class_and_topic" style="cursor: {{$class->is_complete ? "pointer;" : 'not-allowed;'}};" 
                                                        @if ($class->is_complete)
                                                            onclick="getClassVideolink(`{{ $class->link }}`)"
                                                        @endif
                                                    >
                                                        @if ($class->is_complete)
                                                            <div class="live_class_icon">
                                                                <i class="fa-solid fa-circle-check text-success"></i>
                                                            </div>
                                                        @else
                                                            <div class="live_class_icon">
                                                                <img src="/frontend/assets/images/about_page_image/class_module/podcasts.png"
                                                                    alt="" />
                                                            </div>
                                                        @endif
                                                        <div class="class_module_live_class">
                                                            @if ($class->type == 'live')
                                                                লাইভ ক্লাসঃ
                                                            @else
                                                                রেকর্ডেড ক্লাসঃ
                                                            @endif
                                                        </div>
                                                        <div class="class_module_topic cursor_pointer">{{ $class->title }}</div>
                                                    </div>
                                                    
                                                    @if($class->class_quiz && $class->class_quiz->quiz)
                                                        <div class="quiz_and_mcq">
                                                            @if ($class->class_quiz->is_complete)
                                                                <div class="quiz_icon">
                                                                    <i class="fa-solid fa-circle-check text-success"></i>
                                                                </div>
                                                            @else
                                                                <div class="quiz_icon">
                                                                    <i class="fa-solid fa-list-check"></i>
                                                                </div>
                                                            @endif
                                                            
                                                            <div class="quiz">কুইজঃ </div>
                                                            <div class="mcq">
                                                                {{ $class->class_quiz->quiz->title ?? '' }}
                                                                {{-- MCQ Question about basics of Bootstrap --}}
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if($class->class_exam && $class->class_exam->exam)
                                                        <div class="quiz_and_mcq">
                                                            @if ($class->class_exam->exam->is_complete)
                                                                <div class="quiz_icon">
                                                                    <i class="fa-solid fa-circle-check text-success"></i>
                                                                </div>
                                                            @else
                                                                <div class="quiz_icon">
                                                                    <i class="fa-solid fa-file-lines"></i>
                                                                </div>
                                                            @endif
                                                            <div class="quiz">এক্সামঃ </div>
                                                            <div class="mcq">
                                                                {{ $class->class_exam->exam->title ?? '' }}
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

                    <div class="course_lession_video_btn">
                        
                        <div class="course_lession_video">
                            <div class="course_lession_video_thum">
                                {{-- <img src="/frontend/assets/images/course_details_image/course_lessson_video_thum.png"
                                    alt="" /> --}}

                                    <iframe id="class_video_link" width="100%" height="450" src="https://www.youtube.com/embed/oakcMR7BzTk?si=tjMD3j4srWgDXMVE"
                                    title="YouTube video player" frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen>
                                    </iframe>
                            </div>
                            {{-- <div class="course_lession_video_icon">
                                <img src="/frontend/assets/images/course_details_image/course_info_icon.png" alt="" />
                            </div> --}}
                            
                        </div>
                        
                        <div class="course_lession_video_next_btn">
                            <div class="next_btn">
                                নেক্সট লেসন <i class="fa-solid fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="bootstrap_grid_quiz_part">
                    <div class="bootstrap_grid_empty_space"></div>
                    <div class="bootstrap_grid_quiz_space">
                        <div class="bootstrap_grid_quiz">
                            <div class="bootstrap_grid_quiz_question">
                                কুইজ ১ঃ বুটস্ট্রােপ গ্রিডে গাটার স্পেসিং কত?
                            </div>
                            <div class="bootstrap_grid_text_area">
                                <textarea name="" id="" cols="30" rows="10" placeholder="আপনার উত্তর লিখুন"></textarea>
                            </div>
                            <div class="character_length_and_submit_btn">
                                <div class="character_length_title">Carecter 0/1000</div>
                                <div class="bootstrap_grid_submit_btn">
                                    সাবমিট করুন
                                </div>
                            </div>
                        </div>
                        <div class="mearn_course_previos_and_next_button">
                            <div class="previous_btn">
                                <i class="fa-solid fa-angle-left"></i>পূর্বের লেসন
                            </div>
                            <div class="next_btn">
                                নেক্সট লেসন<i class="fa-solid fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <script>
        [...document.querySelectorAll(".class_module_acordion_icon")].forEach(
            (el) => {
                el.onclick = function(e) {
                    e.currentTarget.parentNode.parentNode.classList.toggle("active");
                    console.log(e.currentTarget);
                };
            }
        );
        function getClassVideolink(link) {
            document.getElementById('class_video_link').src = link;
            document.getElementById("course_section").scrollIntoView();
        }
    </script>
@endsection
