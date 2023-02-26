<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmark';
    protected $guarded = [];
    use HasFactory;

    public function manga(){
        return $this->belongsTo('App\Models\Manga', 'manga_id');
    }    
}
