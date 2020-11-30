<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'movie_id',
        'user_id',
        'content'
    ];

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
