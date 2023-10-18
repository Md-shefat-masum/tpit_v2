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
        QuizQuestion::create([
            'quiz_question_topic_id' => '1',
            'title' => 'Who is the father of c programing?',
            'topic_title' => 'html & css',
            'mark' => '1',
            'is_multiple' => '0'
        ]);
        QuizQuestion::create([
            'quiz_question_topic_id' => '1',
            'title' => 'Which of the following are unary operators in C?',
            'topic_title' => 'html & css',
            'mark' => '1',
            'is_multiple' => '1'
        ]);

        QuizQuestion::create([
            'quiz_question_topic_id' => '1',
            'title' => 'The keyword used to transfer control from a function back to the calling function is.',
            'topic_title' => 'html & css',
            'mark' => '1',
            'is_multiple' => '0'
        ]);






        QuizQuestion::create([
            'quiz_question_topic_id' => '2',
            'title' => 'Who is the father of php?',
            'topic_title' => 'Javascript',
            'mark' => '1',
            'is_multiple' => '0'


        ]);
        QuizQuestion::create([
            'quiz_question_topic_id' => '2',
            'title' => 'What are the popular frameworks in PHP ?',
            'topic_title' => 'Javascript',
            'mark' => '1',
            'is_multiple' => '1'

        ]);
        QuizQuestion::create([
            'quiz_question_topic_id' => '2',
            'title' => 'What are the different types of loop in PHP ',
            'topic_title' => 'Javascript',
            'mark' => '1',
            'is_multiple' => '0'

        ]);




        QuizQuestion::create([
            'quiz_question_topic_id' => '3',
            'title' => 'Who is the father of java programing?',
            'topic_title' => 'Responsive',
            'mark' => '1',
            'is_multiple' => '0'

        ]);

        QuizQuestion::create([
            'quiz_question_topic_id' => '3',
            'title' => 'what is DML Commands are',
            'topic_title' => 'Responsive',
            'mark' => '1',
            'is_multiple' => '1'

        ]);
    }
}
