<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('seo')->insert([
            'title'         => 'XRManga - Free Manga Online',
            'meta_tag'      => '<meta name="description" content="Free to Read and Download Manga in Highest quality - Daily Update - No Ads - Read Manga Online NOW!"/> <meta name="keywords" content="mangareader, read manga online, read manga, manga online, manga online free, free manga, manga reader, manga scans, manga raw"/>',
            'artikel'       => '<h1>Read Manga Online Free</h1> <p>Are you looking to read manga online at no cost? Or are you subscribing to a paid reading service already but in hopes of saving up? Or are you feeling unsafe on the current free manga site? If you can relate to any of these questions, you will find the solution here, on MangaReader.</p> <p>If you search about Reading manga on Google, one of the first autocomplete predictions is &ldquo;Why manga is so expensive?&rdquo;. Yes, not everyone can afford to read their favorite manga online and MangaReader is created to change it. We are here to make sure all manga lovers can have access to their manga of interest. And that is why MangaReader is free and safe.</p> <h2>How To Read Manga online?</h2> <p>As manga originates from Japan, the easiest way to read it is to know the language. However, as you are here, we assume that Japanese might not be one of the languages you can read proficiently. But don&#39;t sweat it, all mangas on MangaReader are in English for your convenience.</p> <p>Reading manga can be different from reading a comic, book, or magazine, especially when it is traditional Japanese manga. The main reason for this is that kanji, the Japanese writing, is read right to left. So when you pick up a manga volume to read, you need to start with the frame (a.k.a koma) in the upper right-hand corner and end a page with the koma in the bottom left-hand corner. Most publishers retain the original format of the manga; therefore, it is important to know this first rule.</p>',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
