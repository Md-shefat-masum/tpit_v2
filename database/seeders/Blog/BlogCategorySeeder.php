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

        DB::table('blogs_blogs_categories')->truncate();
        DB::table('blogs_blogs_categories')->insert([
            'blogs_categories_id' => 1,
            'blogs_id' => 1,
        ]);
        DB::table('blogs_blogs_categories')->insert([
            'blogs_categories_id' => 2,
            'blogs_id' => 2,
        ]);
        DB::table('blogs_blogs_categories')->insert([
            'blogs_categories_id' => 3,
            'blogs_id' => 3,
        ]);
    }
}
