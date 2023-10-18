<?php

namespace Database\Seeders\Quiz;

use App\Models\Quiz\QuizQuestion;
use Illuminate\Database\Seeder;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizQuestion::truncate();

        $data = new QuizQuestion();

        $data->quiz_id = '1';
        $data->quiz_question_topic_id = '1';
        $data->title = 'Who is the father of C programming?';
        $data->topic_title = 'html & css';
        $data->mark = '1';
        $data->is_multiple = '0';
        $data->save();
        $data->quiz()->attach([1]);

        $data = new QuizQuestion();
        $data->quiz_id = '1';
        $data->quiz_question_topic_id = '1';
        $data->title = 'Which of the following are unary operators in C?';
        $data->topic_title = 'html & css';
        $data->mark = '1';
        $data->is_multiple = '1';
        $data->save();
        $data->quiz()->attach([1]);

        $data = new QuizQuestion();
        $data->quiz_id = '1';
        $data->quiz_question_topic_id = '1';
        $data->title = 'The keyword used to transfer control from a function back to the calling function is.';
        $data->topic_title = 'html & css';
        $data->mark = '1';
        $data->is_multiple = '0';
        $data->save();
        $data->quiz()->attach([1]);

        $data = new QuizQuestion();
        $data->quiz_id = '2';
        $data->quiz_question_topic_id = '2';
        $data->title = 'Who is the father of PHP?';
        $data->topic_title = 'Javascript';
        $data->mark = '1';
        $data->is_multiple = '0';
        $data->save();
        $data->quiz()->attach([2]);

        $data = new QuizQuestion();
        $data->quiz_id = '2';
        $data->quiz_question_topic_id = '2';
        $data->title = 'What are the popular frameworks in PHP?';
        $data->topic_title = 'Javascript';
        $data->mark = '1';
        $data->is_multiple = '1';
        $data->save();
        $data->quiz()->attach([2]);

        $data = new QuizQuestion();
        $data->quiz_id = '2';
        $data->quiz_question_topic_id = '2';
        $data->title = 'What are the different types of loops in PHP';
        $data->topic_title = 'Javascript';
        $data->mark = '1';
        $data->is_multiple = '0';
        $data->save();
        $data->quiz()->attach([2]);

        $data = new QuizQuestion();
        $data->quiz_id = '3';
        $data->quiz_question_topic_id = '3';
        $data->title = 'Who is the father of Java programming?';
        $data->topic_title = 'Responsive';
        $data->mark = '1';
        $data->is_multiple = '0';
        $data->save();
        $data->quiz()->attach([3]);

        $data = new QuizQuestion();
        $data->quiz_id = '3';
        $data->quiz_question_topic_id = '3';
        $data->title = 'What are DML Commands?';
        $data->topic_title = 'Responsive';
        $data->mark = '1';
        $data->is_multiple = '1';
        $data->save();
        $data->quiz()->attach([3]);

    }
}
