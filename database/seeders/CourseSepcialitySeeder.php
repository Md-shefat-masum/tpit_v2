<?php

namespace Database\Seeders;

use App\Models\CourseSepciality;
use Illuminate\Database\Seeder;

class CourseSepcialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseSepciality::truncate();
        CourseSepciality::create([
            'title' => 'সার্বক্ষণিক সাপোর্ট',
            'image' => 'frontend/assets/images/home_page_image/our_course_specialty/support.png'
        ]);

        CourseSepciality::create([
            'title' => 'প্রশিক্ষকের লাইভ সাপোর্ট',
            'image' => 'frontend/assets/images/home_page_image/our_course_specialty/live.png'
            
        ]);
        CourseSepciality::create([
            'title' => 'দৈনিক পর্যবেক্ষণ',
            'image' => 'frontend/assets/images/home_page_image/our_course_specialty/quiz.png'
        ]);
    }
}
