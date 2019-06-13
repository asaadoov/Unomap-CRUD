<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timeStamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
