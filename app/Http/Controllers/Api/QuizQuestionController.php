<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quiz\QuizQuestion;
use App\Models\Quiz\QuizQuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuizQuestionController extends Controller
{
    public function all()
    {
        $paginate = (int) request()->paginate ?? 10;
        $orderBy = request()->orderBy ?? 'id';
        $orderByType = request()->orderByType ?? 'ASC';

        $query = QuizQuestion::orderBy($orderBy, $orderByType);

        if (request()->has('search_key')) {
            $key = request()->search_key;
            $query->where(function ($q) use ($key) {
                return $q->where('id', '%' . $key . '%')
                    ->orWhere('title', '%' . $key . '%');
            });
        }

        $datas = $query->paginate($paginate);
        return response()->json($datas);
    }

    public function all_data()
    {
        $quiz_data = QuizQuestion::select('*')->with(['options'])->get();

        return response()->json($quiz_data);
    }

    public function show($id)
    {

        $select = ["*"];
        if (request()->has('select_all') && request()->select_all) {
            $select = "*";
        }
        $data = QuizQuestion::where('id', $id)
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
            'topic_id' => ['required'],
        ]);
        $questions = json_decode(request()->question);
        // dd($questions);
        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        // dd($questions);
        foreach ($questions as $key => $item) {
            $question = QuizQuestion::where('title', $item->title)->first();

            if($question != null) {
                $question->quiz_question_topic_id = request()->topic_id;
                $question->title = $item->title;
                $question->topic_title = request()->topic_title;
                $question->mark = $item->mark;
                $question->is_multiple = $item->is_multiple;
                $question->save();

                QuizQuestionOption::where('question_id', $item->id)->delete();
                foreach($item->options as $option) {
                    $quiz_option = new QuizQuestionOption();
                    $quiz_option->question_id = $question->id;
                    $quiz_option->title = $option->title;
                    $quiz_option->is_correct = $option->is_correct;
                    $quiz_option->save();
                }

                return response()->json(['message' => 'question updated successfully']);

            }else {
                $new_question = new QuizQuestion();
                $new_question->quiz_question_topic_id = request()->topic_id;
                $new_question->title = $item->title;
                $new_question->mark = $item->mark;
                $new_question->is_multiple = $item->is_multiple;
                $new_question->save();

                if(count($item->options) > 0) {
                    foreach($item->options as $option) {
                        $quiz_option = new QuizQuestionOption();
                        $quiz_option->question_id = $new_question->id;
                        $quiz_option->title = $option->title;
                        $quiz_option->is_correct = $option->is_correct;
                        $quiz_option->save();
                    }
                }

                return response()->json(['message' => 'new question created successfully']);
            }
        }
        

        $data = new QuizQuestion();
        $data->title = request()->title;
        $data->description = request()->description;
        $data->save();

        return response()->json($data, 200);
    }

    public function update()
    {
        $data = QuizQuestion::find(request()->id);
        if (!$data) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => ['name' => ['data not found by given id ' . (request()->id ? request()->id : 'null')]],
            ], 422);
        }

        $validator = Validator::make(request()->all(), [
            'title' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }


        $data->title = request()->title;
        $data->description = request()->description;
        
        $data->save();

        return response()->json($data, 200);
    }

    public function destroy()
    {
        $validator = Validator::make(request()->all(), [
            'id' => ['required', 'exists:quiz_question_topics,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = QuizQuestion::find(request()->id);
        $data->delete();

        return response()->json([
            'result' => 'deleted',
        ], 200);
    }
}
