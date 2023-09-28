<?php

namespace Database\Seeders;

use App\Models\CourseOutcomeStep;
use Illuminate\Database\Seeder;

class CourseOutcomeStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseOutcomeStep::truncate();
        CourseOutcomeStep::create([
            'title' => 'কোর্সে জয়েন করুন',
        ]);

        CourseOutcomeStep::create([
            'title' => 'কোর্স কমপ্লিট করুন',
            
        ]);
        CourseOutcomeStep::create([
            'title' => 'কোর্সের টাস্কগুলো পোর্টফোলিওতে শেয়ার করুন',
        ]);

        CourseOutcomeStep::create([
            'title' => 'গেট Hired',
        ]);
    }
}
