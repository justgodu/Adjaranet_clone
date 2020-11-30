<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name'
    ];

    public function movie(){
        return $this->belongsToMany('App\Movie','movie_country');
    }
}
