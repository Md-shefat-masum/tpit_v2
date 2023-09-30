<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModule;
use Illuminate\Database\Seeder;

class CourseModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CourseModule::truncate();
        CourseModule::create([
            'course_id' => 1,
            'milestone_id' => 1,
            'module_no' => 1,
            'title' => 'Introduction, Web & Internet Fundamentals',
        ]);   

        CourseModule::create([
            'course_id' => 1,
            'milestone_id' => 1,
            'module_no' => 2,
            'title' => 'HTML, Everything needs to be learned',
        ]);   

        CourseModule::create([
            'course_id' => 1,
            'milestone_id' => 1,
            'module_no' => 3,
            'title' => 'CSS Basics',
        ]);   
      
    }
}
