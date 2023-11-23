<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModulClasses;
use App\Models\Course\CourseModuleClasses;
use App\Models\Course\CourseModuleClassRoutines;
use Carbon\Carbon;
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
        CourseModuleClassRoutines::truncate();
        CourseModuleClasses::truncate();
        $milestone_1_module_1 = [
            [
                'title' => 'What is http',
                'type' => 'recorded',
                'link' => 'https://www.youtube.com/embed/oS1SkU2ksZM'
            ],
            [
                'title' => 'What is ssl',
                'type' => 'recorded',
                'link' => 'https://www.youtube.com/embed/7InxDgQmzn8'
            ],
            [
                'title' => 'What is ftp',
                'type' => 'recorded',
                'link' => 'https://www.youtube.com/embed/RhDQF7EQnzM'
            ],
            [
                'title' => 'Vs code installation',
                'type' => 'recorded',
                'link' => 'https://www.youtube.com/embed/W3aSGmu0WlM'
            ],
            [
                'title' => 'Node js installation',
                'type' => 'recorded',
                'link' => 'https://www.youtube.com/embed/D8BSmv3qtIw'
            ],
            [
                'title' => 'First html project',
                'type' => 'recorded',
                'link' => 'https://www.youtube.com/embed/4eOfT3YQ7aQ'
            ]
        ];

        $date_count = 10;
        foreach($milestone_1_module_1 as $key => $item) {
            $course_module_class = new CourseModuleClasses();
            $course_module_class->course_id = 1;
            $course_module_class->course_modules_id = 1;
            $course_module_class->milestone_id = 1;
            $course_module_class->class_no = $key+1;
            $course_module_class->title = $item['title'];
            $course_module_class->type = $item['type'];
            $course_module_class->class_video_link = $item['link'];
            $course_module_class->class_video_poster = 'uploads/course/graphic.jpg';
            $course_module_class->save();

            CourseModuleClassRoutines::create([
                'course_id' => 1,
                'module_id' => 1,
                'class_id'  => $course_module_class->id,
                'date' => Carbon::now()->addDays($date_count+=3)->toDateString(),
                'time' => '21:00',
                'topic' => 'php',
            ]);
        }


        $milestone_1_module_2 = [
            [
                'title' => 'Heading tags in html',
                'type' => 'recorded',
            ],
            [
                'title' => 'Text realated tags',
                'type' => 'recorded',
            ],
            [
                'title' => 'Image',
                'type' => 'recorded',
            ],
            [
                'title' => 'Html list',
                'type' => 'recorded',
            ],
            [
                'title' => 'Html form',
                'type' => 'recorded',
            ],
            [
                'title' => 'Html cementic tag',
                'type' => 'recorded',
            ]
        ];

        $date_count = 10;
        foreach($milestone_1_module_2 as $key => $item) {

            $course_module_class = new CourseModuleClasses();
            $course_module_class->course_id = 1;
            $course_module_class->course_modules_id = 2;
            $course_module_class->milestone_id = 1;
            $course_module_class->class_no = $key+1;
            $course_module_class->title = $item['title'];
            $course_module_class->type = $item['type'];
            $course_module_class->class_video_link = "https://www.youtube.com/embed/7InxDgQmzn8";
            $course_module_class->class_video_poster = 'uploads/course/graphic.jpg';
            $course_module_class->save();

            

            CourseModuleClassRoutines::create([
                'course_id' => 1,
                'module_id' => 2,
                'class_id'  => $course_module_class->id,
                'date' => Carbon::now()->addDays($date_count+=3)->toDateString(),
                'time' => '22:00',
                'topic' => 'javaScript',
            ]);
        }

        $milestone_1_module_3 = [
            [
                'title' => 'Css box model',
                'type' => 'recorded',
            ],
            [
                'title' => 'Css margin',
                'type' => 'recorded',
            ],
            [
                'title' => 'Css padding',
                'type' => 'recorded',
            ],
            [
                'title' => 'Css border',
                'type' => 'recorded',
            ],
            [
                'title' => 'Css positions',
                'type' => 'recorded',
            ],
            [
                'title' => 'Css grids',
                'type' => 'recorded',
            ]
        ];
        $date_count = 10;
        foreach($milestone_1_module_3 as $key => $item) {
            $course_module_class = new CourseModuleClasses();
            $course_module_class->course_id = 1;
            $course_module_class->course_modules_id = 3;
            $course_module_class->milestone_id = 1;
            $course_module_class->class_no = $key+1;
            $course_module_class->title = $item['title'];
            $course_module_class->type = $item['type'];
            $course_module_class->class_video_link = "https://www.youtube.com/embed/RhDQF7EQnzM";
            $course_module_class->class_video_poster = 'uploads/course/graphic.jpg';
            $course_module_class->save();

            CourseModuleClassRoutines::create([
                'course_id' => 1,
                'module_id' => 3,
                'class_id'  => $course_module_class->id,
                'date' => Carbon::now()->addDays($date_count+=3)->toDateString(),
                'time' => '21:00',
                'topic' => 'vue js',
            ]);
        }
    }
}
