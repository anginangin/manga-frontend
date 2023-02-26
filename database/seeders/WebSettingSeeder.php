<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('web_setting')->insert([
            'icon'          => 'upload/assets/1669801231_icon.png',
            'logo'          => 'upload/assets/1669801231_logo-manga.svg',
            'description'   => 'Free website to download and read manga online. We have a big library of over 600,000 manga chapters in all genres that are available to read or download for FREE without registration. The manga is updated daily to make sure no one will ever miss the latest chapter on their favorite manga. If you like the website, please bookmark it and help us to spread the words. Thank you!',
            'theme_id'      => 1,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
