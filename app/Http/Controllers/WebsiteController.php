<?php

namespace App\Http\Controllers;

use App\Models\Course\Course;
use App\Models\Course\CourseBatches;
use App\Models\Course\CourseBatchStudent;
use App\Models\Course\CourseCategory;
use App\Models\Course\CourseModuleClassRoutines;
use App\Models\Course\CourseModuleTaskCompleteByUsers;
use App\Models\CourseOutcomeStep;
use App\Models\CourseSepciality;
use App\Models\CourseType;
use App\Models\EnrollInformation;
use App\Models\ItServices;
use App\Models\Seminars\SeminarParticipants;
use App\Models\Seminars\Seminars;
use App\Models\SuccessStory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $course_speciality = CourseSepciality::get();
        $course_learning_steps = CourseOutcomeStep::get();
        $success_stories = SuccessStory::get();
        $it_services = ItServices::get();
        return view(
            'frontend.home',
            [
                'course_categories' => $course_categories,
                'course_types' => $course_types,

                'courses' => $courses,
                "seminar" => $seminar,

                'course_speciality' => $course_speciality,
                'course_learning_steps' => $course_learning_steps,
                'success_stories' => $success_stories,
                'it_services' => $it_services
            ]
        );
    }

    public function all_types()
    {
        return CourseType::active()->get();
    }

    public function all_course()
    {
        $today = Carbon::today();
        $query = Course::select('id', 'title', 'slug', 'image')
        ->where('published_at', '<=', $today)->orWhere('published_at', NULL)->active();
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
        $courses = Course::active()->with(['course_batch' => function ($batch) {
            $batch->orderBY('id', 'desc')->take(1);
        }])->get();
        return view('frontend.pages.courses', [
            'courses' => $courses
        ]);
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
        $it_services = ItServices::get();
        return view('frontend.pages.it_solution_services', [
            'it_services' => $it_services
        ]);
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
            'batchStudents.batch' => function ($q2) {
                $q2->select('id', 'batch_name', 'class_days', 'class_start_time', 'class_end_time');
            }
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

    public function routine_details($course_id) {
        $course_routines = CourseModuleClassRoutines::select('id' , 'course_id','date')->where('course_id', $course_id)->get();
        $month = [];
        // ddd($course_routines);
        if(count($course_routines) > 0) {
            foreach($course_routines as $course_routine) {
                // dd($course_routine->date->format('m'));
                $formated_date = $course_routine->date->format('m');
                array_push($month, $formated_date);
            }
        }

        $months = array_unique($month);
        sort($months);
        $month_wise_routines = [];
        foreach ($months as $key => $value) {
            $month_name = Carbon::parse("2023-$value-01")->format('F');
            $month_wise_routines[$month_name] = CourseModuleClassRoutines::where('course_id', $course_id)->with(['class'])->whereMonth('date', $value)->get();
        }

        return $month_wise_routines;
    }

    public function myCourseDetails($slug) {

        $data = Course::active()->where('slug', $slug)->select('id', 'title')->first();

        $data->routines = $this->routine_details($data->id);
        // dd($data->course_mile_stones);
        $data->course_mile_stones = $data->course_mile_stones()->orderBy('milestone_no', 'ASC')->get();
        // $data->course_module = $data->course_modules()->orderBy('module_no','ASC')->get();

        foreach ($data->course_mile_stones as $key => $mileStones) {
            $modules = $mileStones->course_modules()->orderBy('module_no','ASC')->get();
            $mileStones->course_modules = $modules;
            foreach ($mileStones->course_modules as $key => $module) {

                $classes = $module->classes()->get();

                foreach ($classes as $key => $class) {
                    
                    $class_watched_check = CourseModuleTaskCompleteByUsers::where('class_id', $class->id)
                    ->where('quiz_id', null)
                    ->where('exam_id', null)
                    ->where('course_id', $data->id)
                    ->first();

                    if($key == 0) {
                        $class->is_complete = true;
                    }else{
                        $class->is_complete = false;
                        if($class_watched_check != null) {
                            $class->is_complete = true;
                        }
                    }
                    
                    $class_quiz = $class->class_quiz()->with(['quiz'])->orderBy('id', 'DESC')->first();
                    $class_exam = $class->class_exam()->with(['exam'])->orderBy('id', 'DESC')->first();

                    if($class_quiz != null) {
                        $quiz_complete_check = CourseModuleTaskCompleteByUsers::where('class_id', $class->id)
                        ->where('course_id', $data->id)
                        ->where('user_id', auth()->user()->id)
                        ->where('quiz_id', $class_quiz->quiz_id)
                        ->first();

                        $class->class_quiz = $class_quiz;

                        $class->class_quiz->is_complete = false;
                        if($quiz_complete_check != null) {
                            $class->class_quiz->is_complete = true;
                        }
                    }

                    if($class_exam != null) {
                        $exam_complete_check = CourseModuleTaskCompleteByUsers::where('class_id', $class->id)
                        ->where('course_id', $data->id)
                        ->where('user_id', auth()->user()->id)
                        ->where('exam_id', $class_exam->exam_id)
                        ->first();

                        $class->class_exam = $class_exam;

                        $class->class_exam->is_complete = false;
                        if($exam_complete_check != null) {
                            $class->class_exam->is_complete = true;
                        }
                    }
                }

                $module->classes = $classes;
                // $data->course_module[$key] = $module;

            }
        }


        // ddd($data->toArray());

        return view('frontend.pages.my_course_details', ['course' => $data]);
    }

    public function registerSeminar() {
        $validator = Validator::make(request()->all(), [
            'full_name' => ['required'],
            'phone_number' => ['required'],
            'email' => ['email', 'nullable'],
            'address' => ['string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $seminar = new SeminarParticipants();
        $seminar->seminar_id = request()->seminar_id;
        $seminar->full_name = request()->full_name;
        $seminar->email = request()->email;
        $seminar->phone_number = request()->phone_number;
        $seminar->address = request()->address;
        $seminar->save();

        return response()->json(['message' => 'Registraiton for the seminar completed'], 200);
    }
}
