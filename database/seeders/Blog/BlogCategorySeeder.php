<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\BlogsCategories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        BlogsCategories::truncate();
        BlogsCategories::create([
            'title' => 'Programming',
            'image' => 'uploads/blog/babr.png',

        ]);

        BlogsCategories::create([
            'title' => 'web design',
            'image' => 'uploads/blog/babr.png',

        ]);

        BlogsCategories::create([
            'title' => 'degital marketing',
            'image' => 'uploads/blog/eeu.png',

        ]);

        DB::table('blog_blog_category')->truncate();
        DB::table('blog_blog_category')->insert([
            'blog_category_id' => 1,
            'blog_id' => 1,
        ]);
    }
}
