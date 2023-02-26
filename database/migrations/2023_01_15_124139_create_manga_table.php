<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga', function (Blueprint $table) {
            $table->id();
            $table->text('poster');
            $table->text('thumbnail');
            $table->text('title');
            $table->string('domain');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('information');
            $table->text('genre');
            $table->string('sort');
            $table->boolean('is_blacklist')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manga');
    }
}
