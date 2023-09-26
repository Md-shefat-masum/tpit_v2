<?php

namespace App\Http\Controllers;

use App\Models\Course\Course;
use App\Models\Course\CourseBatches;
use App\Models\Course\CourseBatchStudent;
use App\Models\Course\CourseCategory;
use App\Models\CourseType;
use App\Models\EnrollInformation;
use App\Models\Seminars\Seminars;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    public function index()
    {
        $course_categories = CourseCategory::where('status', 'active')->get();
        $course_types = CourseType::where('status', 'active')->get();
        $courses = Course::active()->with(['course_batch' => function ($batch) {
            $batch->orderBY('id', 'desc')->take(1);
        }])->get();
        $seminar = Seminars::whereDate('date_time', '>', Carbon::today())->get();
        return view(
            'frontend.home',
            [
                'course_categories' => $course_categories,
                'course_types' => $course_types,

                'courses' => $courses,
                "seminar" => $seminar,
            ]
        );
    }

    public function all_types()
    {
        return CourseType::active()->get();
    }

    public function all_course()
    {
        $query = Course::select('id', 'title', 'slug', 'image')->active();
        if (request()->has('course_type')) {
            $query->whereExists(function ($query) {
                $query->from('course_course_types')
                    ->whereColumn('course_course_types.course_id', 'courses.id')
                    ->where('course_course_types.course_type_id', request()->course_type);
            });
        }
        $courses = $query->paginate(3);

        if (request()->has('course_type')) {
            $courses->appends('course_type', request()->course_type);
        }

        foreach ($courses as $course) {
            // $course->rest_days = $course
            $course->details = $course->course_batch()
                ->select([
                    'id', 'course_id', 'admission_end_date',
                    'batch_student_limit', 'seat_booked', 'course_price', 'after_discount_price', 'booked_percent'
                ])
                ->active()->orderBy('id', 'DESC')->first();
        }
        return response()->json($courses);
    }

    public function course_details($slug)
    {
        $data = Course::active()->where('slug', $slug)->first();
        $check_enrolled = false;
        if(auth()->check()) {
            $check_enrolled = EnrollInformation::where('student_id', auth()->user()->id)
            ->where('course_id', $data->id)->exists();
        }
        return view('frontend.pages.course_details', ['data' => $data, 'check_enrolled' => $check_enrolled]);
    }

    public function course_enroll($slug)
    {
        $course = Course::active()->where('slug', $slug)->select('id', 'title', 'slug', 'image')->with([
            'course_batch' => function ($q) {
                $q->select('id', 'course_id', 'course_price', 'after_discount_price')->active()->orderBy('id', 'DESC');
            }
        ])->first();

        return view('frontend.pages.course_enroll', ['course' => $course]);
    }

    public function course_enroll_submit($slug)
    {
        $this->validate(request(), [
            "trx_id" => ["required"],
        ]);

        $course = Course::active()->where('slug', $slug)->select('id', 'slug', 'title')->first();
        $batch = CourseBatches::active()->where('course_id', $course->id)
            ->orderBy('id', 'DESC')->select('id', 'batch_name')->first();

        $course_std_check = CourseBatchStudent::where('student_id', auth()->user()->id)
            ->where('batch_id', $batch->id)->where('course_id', $course->id)->exists();

        if (!$course_std_check) {
            $enroll_payment = new EnrollInformation();
            $enroll_payment->course_id = $course->id;
            $enroll_payment->student_id = auth()->user()->id;
            $enroll_payment->batch_id = $batch->id;
            $enroll_payment->trx_id = request()->trx_id;
            $enroll_payment->payment_type = 'online';
            $enroll_payment->save();

            $course_batch_student = new CourseBatchStudent();
            $course_batch_student->course_id = $enroll_payment->course_id;
            $course_batch_student->batch_id = $enroll_payment->batch_id;
            $course_batch_student->student_id = $enroll_payment->student_id;
            $course_batch_student->status = 'active';
            $course_batch_student->save();
            return redirect('/')->with('success', 'Course Enrolled Successfully!');

        } else {
            return redirect()->back()->with('warning', 'You are already enrolled!');
        }
    }

    public function type_wise_course()
    {
        // $courses = Course
        $seminar = Seminars::whereDate('date_time', '>', Carbon::today())->get();
        return view('frontend.home', compact('seminar'));
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

    public function seminar()
    {
        $seminars = Seminars::whereDate('date_time', '>', Carbon::today())->get();
        return view('frontend.pages.seminar', compact('seminars'));
    }

    public function it_solution_services()
    {
        return view('frontend.pages.it_solution_services');
    }
    public function myCourse(){
        $user = User::find(auth()->user()->id);
        $userWithCourses = $user->load([
            'batchStudents' => function ($query) {
                $query->select('course_id', 'id', 'batch_id', 'student_id', 'course_percent', 'is_complete');
            },
            'batchStudents.course' => function ($query) {
                $query->select('id', 'title', 'image', 'slug');
            },
        ]);

        // Use collection methods to split courses based on 'is_complete'
        $completedCourses = $userWithCourses->batchStudents->where('is_complete', 'complete');
        $incompleteCourses = $userWithCourses->batchStudents->where('is_complete', 'incomplete');
        // dd($userWithCourses, $completedCourses, $incompleteCourses);

        
        return view('frontend.pages.mycouse', [
            'user_course' => $userWithCourses->batchStudents,
            'complete_courses' => $completedCourses,
            'incomplete_courses' => $incompleteCourses,
        ]);
    }
}
