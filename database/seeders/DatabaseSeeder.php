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
        $this->call([
            ThemeColorSeeder::class,
            WebSettingSeeder::class,
            UserSeeder::class,
            SeoSeeder::class
        ]);
    }
}
