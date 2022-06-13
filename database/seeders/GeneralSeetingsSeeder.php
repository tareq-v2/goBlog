<?php

namespace Database\Seeders;
use App\Models\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSeetingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *email	phone	address	logo	favicon	meta_title	meta_description	meta_keywords
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'email' => 'email@email.com',
            'phone' => 'phone',
            'address' => 'address',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'meta_title' => 'meta_title',
            'meta_description' => 'meta_description',
            'meta_keywords' => 'meta_keywords',
        ]);
    }
}
