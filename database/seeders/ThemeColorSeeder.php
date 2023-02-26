<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThemeColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('theme_colors')->insert(
            [
                'theme_name' => 'Default',
                'primary_color' => '#5f25a6',
                'secondary_color' => '#7b36ce',
                'primary_base_color' => '#1f1f1f',
                'secondary_base_color' => '#2f2f2f',
                'tertiary_base_color' => '#3f3f3f',
                'button_color' => '#ffd702',
                'text_color' => '#ffffff',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'theme_name' => 'Dark Blue',
                'primary_color' => '#075DD6',
                'secondary_color' => '#3367D6',
                'primary_base_color' => '#16151D',
                'secondary_base_color' => '#1D1B26',
                'tertiary_base_color' => '#333333',
                'button_color' => '#FFC700',
                'text_color' => '#ffffff',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'theme_name' => 'Dark Orange',
                'primary_color' => '#FF7900',
                'secondary_color' => '#FF9B40',
                'primary_base_color' => '#16151D',
                'secondary_base_color' => '#222222',
                'tertiary_base_color' => '#333333',
                'button_color' => '#FFC700',
                'text_color' => '#ffffff',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
