<?php

namespace Database\Seeders;

use App\Models\Exam\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::truncate();
        Exam::create([
            'title' => 'c programing languge',
        ]);

        Exam::create([
            'title' => 'php programing languge',
            
        ]);
        Exam::create([
            'title' => 'java programing languge',
            
        ]);
    }
}
