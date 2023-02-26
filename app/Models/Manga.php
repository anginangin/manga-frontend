<?php

namespace App\Models;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;
use Nagy\LaravelRating\Traits\Rate\Rateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manga extends Model
{
    protected $table = 'manga';
    protected $guarded = [];
    use HasFactory;
    use Commentable;
    use Rateable;

    public function chapters()
    {
        return $this->hasMany('App\Models\Chapter', 'manga_id');
    }

    public function bookmarks(){
        return $this->hasMany('App\Models\Bookmark', 'manga_id');
    }

    public function slider()
    {
        return $this->hasOne('App\Models\Slider', 'manga_id');
    }

    public function trending()
    {
        return $this->hasOne('App\Models\Trending', 'manga_id');
    }

    public function recommend()
    {
        return $this->hasOne('App\Models\Recommend', 'manga_id');
    }
}
