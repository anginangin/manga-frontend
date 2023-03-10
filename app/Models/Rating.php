<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';
    protected $guarded = [];
    use HasFactory;


    public function manga(){
        return $this->belongsTo('App\Models\Manga', 'manga_id');
    }
}
