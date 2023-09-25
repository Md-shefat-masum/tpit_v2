<?php

namespace App\Http\Controllers;

use App\Models\Course\Course;
use App\Models\Course\CourseCategory;
use App\Models\CourseType;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    public function index()
    {
        $course_categories = CourseCategory::where('status', 'active')->get();
        $course_types = CourseType::where('status', 'active')->get();
        $courses = Course::where('status', 'active')->with(['course_batch' => function ($batch) {
            $batch->orderBY('id', 'desc')->take(1);
        }])->get();
        return view('frontend.home', 
            [
                'course_categories' => $course_categories, 
                'course_types' => $course_types,
                'courses' => $courses
            ]
        );
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function courses()
    {
        return view('frontend.pages.courses');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }
    public function it_solution_services()
    {
        return view('frontend.pages.it_solution_services');
    }


}
