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

        foreach($milestone_1_module_1 as $key => $item) {
            CourseModuleClasses::create([
                'course_id' =>1,
                'course_modules_id' =>1,
                'milestone_id' => 1,
                'class_no' =>  $key+1,
                'title' => $item['title'],
                'type' => $item['type'],
                'class_video_link' => $item['link'],
                'class_video_poster' => 'uploads/course/graphic.jpg',
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

        foreach($milestone_1_module_2 as $key => $item) {
            CourseModuleClasses::create([
                'course_id' =>1,
                'course_modules_id' => 2,
                'milestone_id' => 1,
                'class_no' =>  $key+1,
                'title' => $item['title'],
                'type' => $item['type'],
                'class_video_link' => 'https://www.youtube.com/embed/7InxDgQmzn8?si=2XFBVu8BME7VsrxI',
                'class_video_poster' => 'uploads/course/graphic.jpg',
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

        foreach($milestone_1_module_3 as $key => $item) {
            CourseModuleClasses::create([
                'course_id' =>1,
                'course_modules_id' => 3,
                'milestone_id' => 1,
                'class_no' =>  $key+1,
                'title' => $item['title'],
                'type' => $item['type'],
                'class_video_link' => 'https://www.youtube.com/embed/RhDQF7EQnzM?si=2XFBVu8BME7VsrxI',
                'class_video_poster' => 'uploads/course/graphic.jpg',
            ]);
        }
    }
}
