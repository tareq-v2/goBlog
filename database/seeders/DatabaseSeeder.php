<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            GeneralSeetingsSeeder::class,
            SocialUrlSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            SubscriberSeeder::class,
            ColorSettingsSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class,
        ]);
    }
}
