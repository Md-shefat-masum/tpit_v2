<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\CourseCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactMessage;
use App\Models\Course\Course;
use App\Models\Course\CourseBatches;
use App\Models\Course\CourseInstructors;
use Illuminate\Support\Facades\DB;

class CourseInstructorController extends Controller
{
    public function all()
    {
        $paginate = (int) request()->paginate ?? 10;
        $orderBy = request()->orderBy ?? 'id';
        $orderByType = request()->orderByType ?? 'ASC';

        $status = 1;
        if (request()->has('status')) {
            $status = request()->status;
        }

  $query = CourseInstructors::where('status', $status)->orderBy($orderBy, $orderByType);

        if (request()->has('search_key')) {
            $key = request()->search_key;
            $query->where(function ($q) use ($key) {
                return $q->where('id', '%' . $key . '%')
                    ->orWhere('user_id', '%' . $key . '%')
                    ->orWhere('course_id', '%' . $key . '%')
                    ->orWhere('cover_photo', '%' . $key . '%')
                    ->orWhere('full_name', '%' . $key . '%')
                    ->orWhere('designation', 'LIKE', '%' . $key . '%')
                    ->orWhere('details', 'LIKE', '%' . $key . '%');

            });
        }

        $datas = $query->paginate($paginate);
        return response()->json($datas);
    }

    public function get_all()
    {
        $course_instructors = CourseInstructors::where('status', 'active')->get();
        return response()->json($course_instructors);
    }

    public function current_course_teachers($course_id) {
        // $course_instructors = course_course_instructor::where('course_id', $course_id)->whereExists()
        $course_batch = CourseBatches::where('status', 'active')->where('course_id', $course_id)->orderBy('id', 'DESC')->first();

        $course_instructor = DB::table('course_course_instructor')
        ->where('batch_id', $course_batch->id)->where('course_id', $course_id)->first();

        return response()->json($course_instructor);
    }

    public function update_instructor() {
        $course_check = DB::table('course_course_instructor')
        ->where('course_id', request()->course_id)
        ->where('batch_id', request()->batch_id)
        ->where('instructor_id', request()->instructor_id)->first();

        if($course_check == null) {
            DB::table('course_course_instructor')->insert([
                'course_id' => request()->course_id,
                'instructor_id' => request()->instructor_id,
                'batch_id' => request()->batch_id
            ]);
            return response()->json(['message' => 'course teacher updated']);
        }

        return response()->json(['message' => 'this teacher already exists for this course!']);
    }

    public function show($id)
    {

        $select = "*";
        if (request()->has('select_all') && request()->select_all) {
            $select = "*";
        }
        $data = CourseInstructors::where('id', $id)
            ->select($select)
            ->first();
        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json([
                'err_message' => 'data not found',
                'errors' => [
                    'user' => [],
                ],
            ], 404);
        }
    }
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'user_id' => ['required'],
            'course_id' => ['required'],
            'cover_photo' => ['required'],
            'full_name' => ['required'],
            'designation' => ['required'],
            'details' => ['required'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = new CourseInstructors();
        $data->user_id = request()->user_id;
        $data->course_id = request()->course_id;
        $data->full_name = request()->full_name;
        $data->designation = request()->designation;
        $data->short_description = request()->short_description;
        $data->description = request()->description;
        $data->save();

        if(request()->hasFile('cover_photo')){
            
        }

      
        return response()->json($data, 200);
    }

    public function canvas_store()
    {
        $validator = Validator::make(request()->all(), [
            'user_id' => ['required'],
            'course_id' => ['required'],
            'cover_photo' => ['required'],
            'full_name' => ['required'],
            'designation' => ['required'],
            'details' => ['required'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = new CourseInstructors();
        $data->user_id = request()->user_id;
        $data->course_id = request()->course_id;
        $data->full_name = request()->full_name;
        $data->designation = request()->designation;
        $data->short_description = request()->short_description;
        $data->description = request()->description;
        $data->save();

        if(request()->hasFile('cover_photo')){
            
        }

        return response()->json($data, 200);
    }

    public function update()
    {
        $data = CourseInstructors::find(request()->id);
        if(!$data){
            return response()->json([
                'err_message' => 'validation error',
                'errors' => ['name'=>['Course Instructors not found by given id '.(request()->id?request()->id:'null')]],
            ], 422);
        }

        $validator = Validator::make(request()->all(), [
            'user_id' => ['required'],
            'course_id' => ['required'],
            'cover_photo' => ['required'],
            'full_name' => ['required'],
            'designation' => ['required'],
            'details' => ['required'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data->user_id = request()->user_id;
        $data->course_id = request()->course_id;
        $data->full_name = request()->full_name;
        $data->designation = request()->designation;
        $data->short_description = request()->short_description;
        $data->description = request()->description;
        $data->update();

        return response()->json($data, 200);
    }

    public function canvas_update()
    {
        $data = CourseInstructors::find(request()->id);
        if(!$data){
            return response()->json([
                'err_message' => 'validation error',
                'errors' => ['name'=>['user_role not found by given id '.(request()->id?request()->id:'null')]],
            ], 422);
        }

        $validator = Validator::make(request()->all(), [
            'user_id' => ['required'],
            'course_id' => ['required'],
            'cover_photo' => ['required'],
            'full_name' => ['required'],
            'designation' => ['required'],
            'details' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data->user_id = request()->user_id;
        $data->course_id = request()->course_id;
        $data->full_name = request()->full_name;
        $data->designation = request()->designation;
        $data->short_description = request()->short_description;
        $data->description = request()->description;
        $data->update();

        return response()->json($data, 200);
    }

    public function soft_delete()
    {
        $validator = Validator::make(request()->all(), [
            'id' => ['required','exists:contact_messages,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = CourseInstructors::find(request()->id);
        $data->status = 'inactive';
        $data->save();

        return response()->json([
                'result' => 'deactivated',
        ], 200);
    }

    public function destroy()
    {

        $validator = Validator::make(request()->all(), [
            'id' => ['required', 'exists:course_instructors,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = CourseInstructors::find(request()->id);
        $data->delete();

        return response()->json([
            'result' => 'deleted',
        ], 200);
    }

    public function restore()
    {
        $validator = Validator::make(request()->all(), [
            'id' => ['required','exists:contact_messages,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = CourseInstructors::find(request()->id);
        $data->status = 1;
        $data->save();

        return response()->json([
                'result' => 'activated',
        ], 200);
    }

    public function bulk_import()
    {
        $validator = Validator::make(request()->all(), [
            'data' => ['required','array'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        foreach (request()->data as $item) {
            $item['created_at'] = $item['created_at'] ? Carbon::parse($item['created_at']): Carbon::now()->toDateTimeString();
            $item['updated_at'] = $item['updated_at'] ? Carbon::parse($item['updated_at']): Carbon::now()->toDateTimeString();
            $item = (object) $item;
            $check = CourseInstructors::where('id',$item->id)->first();
            if(!$check){
                try {
                    CourseInstructors::create((array) $item);
                } catch (\Throwable $th) {
                    return response()->json([
                        'err_message' => 'validation error',
                        'errors' => $th->getMessage(),
                    ], 400);
                }
            }
        }

        return response()->json('success', 200);
    }
}
