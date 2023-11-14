<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\Blogs;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blogs::truncate();
        Blogs::create([
            'title' => 'How to Become a Programmer',
            'short_description' => 'I say, there is no perfect way to learn.',
            'description' => 'I say, there is no perfect way to learn. Whatever anyone recommends, check it out. If you like it, continue.',
            'image' => 'uploads/blog/babar.png',
            'published' => '1',
            'slug' => \Str::kebab('How to Become a Programmer'),
        ]); 
        Blogs::create([
            'title' => 'Learn and Master Python in a Month',
            'short_description' => 'Remember, one month has plenty of time. If you can spend 6–7hours every day.',
            'description' => 'Remember, one month has plenty of time. If you can spend 6–7hours every day. You will finish much more than you think.',
            'image' => 'uploads/blog/jonker.png',
            'published' => '0',
            'slug' => \Str::kebab('Learn and Master Python in a Month'),
        ]);
        Blogs::create([
            'title' => 'How to Become a web developer',
            'short_description' => 'I say, there is no perfect way to learn.',
            'description' => 'I say, there is no perfect way to learn. Whatever anyone recommends, check it out. If you like it, continue.',
            'image' => 'uploads/blog/writer.png',
            'published' => '1',
            'slug' => \Str::kebab('How to Become a web developer'),
        ]);
    }
}
