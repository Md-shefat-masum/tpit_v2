<?php

namespace Database\Seeders;

use App\Models\ItServices;
use Illuminate\Database\Seeder;

class ItServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItServices::truncate();
        ItServices::create([
            'title' => 'একাউন্ট ম্যনেজম্যন্ট',
            'description' => 'একাউন্ট ম্যনেজম্যন্ট, সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'image' => 'frontend/assets/images/home_page_image/ti_service/accounting_software.jpeg',
            'background_color' => '#e6f1f8'
        ]);

        ItServices::create([
            'title' => 'লার্নিং ম্যানেজমেন্ট',
            'description' => 'লার্নিং ম্যানেজমেন্ট ডেভোলাপমেন্ট এবং আপনার সিঙ্গেল পেজ React ওয়েবসাইট (SPA) তৈরি করুন',
            'image' => 'frontend/assets/images/home_page_image/ti_service/lms.jpg',
            'background_color' => '#fef2f2'
        ]);

        ItServices::create([
            'title' => 'স্কুল ম্যানেজমেন্ট',
            'description' => 'Laravel স্কুল ম্যানেজমেন্ট সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'image' => 'frontend/assets/images/home_page_image/ti_service/school_management.png',
            'background_color' => '#fef2f2'
        ]);

        ItServices::create([
            'title' => 'ই-কমার্স',
            'description' => 'Laravel ই-কমার্স সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'image' => 'frontend/assets/images/home_page_image/ti_service/e-commerce.png',
            'background_color' => '#fef2f2'
        ]);

        ItServices::create([
            'title' => 'ইনভেন্টরি ম্যানেজমেন্ট',
            'description' => 'Laravel+VueJS এর মাধ্যমে আপনার ইনভেন্টরি ম্যানেজমেন্ট তৈরি করুন আমাদের থেকে আপনি VueJS এর মাধ্যমে SPA Application বানাতে পারবেন',
            'image' => 'frontend/assets/images/home_page_image/ti_service/inventory.jpg',
            'background_color' => '#ecf8f3'
        ]);

        ItServices::create([
            'title' => 'এসেট ম্যানেজমেন্ট',
            'description' => 'Laravel এসেট ম্যানেজমেন্ট সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'image' => 'frontend/assets/images/home_page_image/ti_service/asset_management.jpg',
            'background_color' => '#fef2f2'
        ]);
    }
}
