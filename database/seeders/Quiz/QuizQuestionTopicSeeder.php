<?php

namespace Database\Seeders\Quiz;

use App\Models\QuizQuestionTopic;
use Illuminate\Database\Seeder;

class QuizQuestionTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizQuestionTopic::truncate();
        
        QuizQuestionTopic::create([
            'title' => "html & css",
            'description' => 'html css is the most fundamental element of web design'
        ]);

        QuizQuestionTopic::create([
            'title' => "Javascript",
            'description' => 'javascript is a programming language and one of the most fundamental element of web design'
        ]);

        QuizQuestionTopic::create([
            'title' => "Responsive",
            'description' => 'responsive design is very important for web development'
        ]);
    }
}
