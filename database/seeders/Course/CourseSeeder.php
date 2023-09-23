<?php

namespace Database\Seeders\Course;

use App\Models\Course\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();
        DB::table('course_course_instructor')->truncate();
        Course::create([
            'id' => 1,
            'title' => 'web design',
            'image' =>'web.jpg',
            "type" => "online",
            'intro_video' => 'https://www.youtube.com/',
            'what_is_this_course' => 'ওয়েব ডেভেলপম্যান্ট হচ্ছে একটি ওয়েবসাইটের প্রাণ সঞ্চার করা। একজন ওয়েব ডিজাইনার যে ডিজাইন তৈরি করেন, তার প্রতিটি উপকরণকে ফাংশনাল এবং ডায়নামিক করার জন্য পরিচালিত কার্যক্রমই হচ্ছে Web Development',
            'why_is_this_course' => 'ওয়েব ডেভেলপম্যান্ট এর কর্মক্ষেত্র ক্রমবর্ধমান। এটি শেখা অনেক কাজের তুলনায় সহজ এবং শেখার পর রয়েছে অফুরন্ত কাজের সুযোগ। ডিজিটালাইজেশনের যুগে ওয়েবসাইট ছাড়া চিন্তাই করা যায় না। কারণ মানুষ কোনো তথ্যের প্রয়োজনে ঘরে বসে অনলাইনে সার্চ করেই জানতে স্বাচ্ছন্দ্যবোধ করে। যে পরিমাণ ওয়েবসাইট বানানো প্রয়োজন, তাঁর তুলনায় বিশ্বে খুব অল্প সংখ্যকই ওয়েব ডিজাইনার ও ওয়েব ডেভেলপার রয়েছে। ওয়েব ডেভেলপম্যান্ট শিখে আপনি ফ্রিল্যান্স মার্কেটপ্লেসে কাজ করতে পারবেন। বিভিন্ন কোম্পানির ওয়েব ডিজাইন বা ওয়েব ডেভেলপম্যান্ট রিলেটেড ফিক্সড জবও করতে পারবেন।

            ওয়েব ডেভেলপম্যান্ট শিখে আপনি ফ্রিল্যান্স মার্কেটপ্লেসে কাজ করতে পারবেন। বিভিন্ন কোম্পানির ওয়েব ডিজাইন বা ওয়েব ডেভেলপম্যান্ট রিলেটেড ফিক্সড জবও করতে পারবেন।',

        ]);

        DB::table('course_course_instructor')->insert([
            'instructor_id' => 1,
            'course_id' => 1,
            'batch_id' => 1,
        ]);
    }
}
