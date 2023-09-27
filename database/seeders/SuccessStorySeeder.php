<?php

namespace Database\Seeders;

use App\Models\SuccessStory;
use Illuminate\Database\Seeder;

class SuccessStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuccessStory::truncate();
        SuccessStory::create([
            'title' => 'story 1',
            'thumbnail_image' => 'frontend/assets/images/success_story.jpg',
            'video_link' => 'https://www.youtube.com/embed/oakcMR7BzTk'
        ]);

        SuccessStory::create([
            'title' => 'story 2',
            'thumbnail_image' => 'frontend/assets/images/success_story.jpg',
            'video_link' => 'https://www.youtube.com/embed/XdxM0kxcrB4'
            
        ]);
        SuccessStory::create([
            'title' => 'story 3',
            'thumbnail_image' => 'frontend/assets/images/success_story.jpg',
            'video_link' => 'https://www.youtube.com/embed/4ZQYyM4okO4'
        ]);

        SuccessStory::create([
            'title' => 'story 4',
            'thumbnail_image' => 'frontend/assets/images/success_story.jpg',
            'video_link' => 'https://www.youtube.com/embed/rHz00Ukcd7w'
        ]);
    }
}
