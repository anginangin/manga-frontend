<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MangaView extends Model
{
    protected $table = 'manga_view';
    protected $guarded = [];
    use HasFactory;


    public function manga(){
        return $this->belongsTo('App\Models\Manga', 'manga_id');
    }
}
