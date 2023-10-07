<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModulClasses;
use App\Models\Course\CourseModuleClasses;
use Illuminate\Database\Seeder;

class CourseModuleClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseModuleClasses::truncate();
        
        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>1,
            'class_no' =>  1,
            'title' => 'Bootstrap',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/embed/oS1SkU2ksZM?si=2XFBVu8BME7VsrxI',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);   

        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>1,
            'class_no' =>  2,
            'title' => 'css',
            'type' => 'recorded',
            'class_vedio_link' => 'https://www.youtube.com/embed/RhDQF7EQnzM?si=agS3CYTRzk9iUxYv',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>1,
            'class_no' =>  3,
            'title' => 'Javascript',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/embed/W3aSGmu0WlM?si=qCMyYlRKlJ8XAEZ7',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  

        //modulse two class

        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>2,
            'class_no' =>  1,
            'title' => 'class',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/embed/D8BSmv3qtIw?si=qPdrS3Fn0rdJ6cxv',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);   

        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>2,
            'class_no' =>  2,
            'title' => 'css',
            'type' => 'recorded',
            'class_vedio_link' => 'https://www.youtube.com/embed/4eOfT3YQ7aQ?si=3rqtxxBDZR-tqKoF',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>2,
            'class_no' =>  3,
            'title' => 'array',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/embed/x8owJQllmS4?si=LnH0UtWKiuASYXb4',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
      

        //module theree


        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>3,
            'class_no' =>  1,
            'title' => 'Free Plan',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/embed/ndHbkv7S0Ro?si=CsThShvs0yxzJm3F',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);   

        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>3,
            'class_no' =>  2,
            'title' => 'Storage',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/embed/B45hvH5YH3A?si=yz1fX8dGBhZL7ut2',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
        CourseModuleClasses::create([
            'course_id' =>1,
            'course_modules_id' =>3,
            'class_no' =>  3,
            'title' => 'Authentication',
            'type' => 'recorded',
            'class_vedio_link' => 'https://www.youtube.com/embed/OLllqb8mHrI?si=PTlljPGH5F6N5bLr',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
      
    }
}
