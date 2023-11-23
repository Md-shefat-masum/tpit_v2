@php
    $meta = [
        'seo' => [
            'title' => 'contact',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <section class="science_and_technology_area">
        <div class="container">
            <div class="science_and_technology_content">
                <!-- title_area start -->
                <div class="title_area">
                    <div class="title">
                        <p class="text">{{ $blog->category[0]->title }}</p>
                    </div>
                    <div class="content_text">
                        <h2 class="text">{{ $blog->title }}</h2>
                    </div>
                </div>
                <!-- title_area end -->

                <!-- title_image start -->
                <div class="title_image">
                    <img src="/{{ $blog->image }}" alt="tech park it">
                </div>
                <!-- title_image end -->

                <!--new_technology section_area start -->
                <div class="new_technology section_area">
                    <div class="new_technology_title title_area">
                        <p class="title_text">নতুন প্রযুক্তিগুলো সম্পর্কে জেনে নেই</p>
                    </div>
                    <div class="new_technology_details details_area">
                        <p class="details_text">প্রযুক্তির জগতে স্বাগতম! আজকের দ্রুত-গতির বিশ্বে, প্রযুক্তি দ্রুত গতিতে
                            বিকশিত হচ্ছে, এবং
                            সর্বশেষ প্রবণতা এবং অগ্রগতি সম্পর্কে আপডেট থাকা অপরিহার্য। এই ব্লগে, আমরা প্রযুক্তির বিশ্বের
                            সর্বশেষ উন্নয়ন এবং প্রবণতাগুলি অন্বেষণ করব।</p>
                    </div>
                </div>
                <!--new_technology section_area end -->

                <!--year new_technology section_area start -->
                <div class="year_new_technology section_area">
                    <div class="year_new_technology_title title_area">
                        <p class="title_text">২০২৩ সালের নতুন প্রযুক্তি সমূহ</p>
                    </div>
                    <div class="year_new_technology_details details_area">
                        <p class="details_text">প্রযুক্তির জগতে স্বাগতম! আজকের দ্রুত-গতির বিশ্বে, প্রযুক্তি দ্রুত গতিতে
                            বিকশিত হচ্ছে, এবং সর্বশেষ প্রবণতা এবং অগ্রগতি সম্পর্কে আপডেট থাকা অপরিহার্য। এই ব্লগে, আমরা
                            প্রযুক্তির বিশ্বের সর্বশেষ উন্নয়ন এবং প্রবণতাগুলি অন্বেষণ করব।প্রযুক্তির জগতে স্বাগতম!
                            আজকের দ্রুত-গতির বিশ্বে, প্রযুক্তি দ্রুত গতিতে বিকশিত হচ্ছে, এবং সর্বশেষ
                            <br><br>
                            প্রবণতা এবং অগ্রগতি সম্পর্কে আপডেট থাকা অপরিহার্য। এই ব্লগে, আমরা প্রযুক্তির বিশ্বের সর্বশেষ
                            উন্নয়ন
                            এবং প্রবণতাগুলি অন্বেষণ করব।
                        </p>
                    </div>
                </div>
                <!--year_new_technology section_area end -->

                <!--advantages_of_technology section_area start -->
                <div class="advantages_of_technology section_area">
                    <div class="advantages_of_technology title_area">
                        <p class="title_text">প্রযুক্তির সুবিধাসমূহ</p>
                    </div>

                    <div class="advantages_of_technology_details details_area">
                        <ul>
                            <li>
                                <span class="details_text">
                                    কর্মদক্ষতা এবং উৎপাদনশীলতা বৃদ্ধি
                                </span>
                            </li>
                            <li>
                                <span class="details_text">
                                    উন্নত যোগাযোগ এবং সহযোগিতা
                                </span>
                            </li>
                            <li>
                                <span class="details_text">
                                    তথ্য এবং জ্ঞান সম্প্রসারিত অ্যাক্সেস
                                </span>
                            </li>
                            <li>
                                <span class="details_text">
                                    উন্নত স্বাস্থ্যসেবা এবং চিকিৎসা চিকিত্সা
                                </span>
                            </li>
                            <li>
                                <span class="details_text">
                                    বর্ধিত সুবিধা এবং ব্যবহার সহজ
                                </span>
                            </li>
                            <li>
                                <span class="details_text">
                                    বৃহত্তর বিনোদন বিকল্প
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="advantages_of_technology_image">
                        <img src="./assets/images/blog_details_image/blog_details2.png" alt="tech park it">
                    </div>

                    <div class="details_text">
                        <span>“প্রযুক্তির জগতে স্বাগতম! আজকের দ্রুত-গতির বিশ্বে, প্রযুক্তি দ্রুত গতিতে বিকশিত হচ্ছে, এবং
                            সর্বশেষ প্রবণতা এবং অগ্রগতি সম্পর্কে আপডেট থাকা অপরিহার্য। এই ব্লগে, আমরা প্রযুক্তির বিশ্বের
                            সর্বশেষ উন্নয়ন এবং প্রবণতাগুলি অন্বেষণ করব।”
                        </span>
                    </div>
                </div>
                <!--advantages_of_technology section_area end -->
            </div>
        </div>
    </section>
@endsection
