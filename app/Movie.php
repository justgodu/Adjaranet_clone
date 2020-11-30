<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'description',
        'year',
        'duration',
        'url',
        'imdb_id',
        'banner_url',
        'poster_url',
        'views'
    ];

    public function genre(){
        return $this->belongsToMany('App\Genre', 'movie_genre');
    }
    public function country(){
        return $this->belongsToMany('App\Country', 'movie_country');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public static function getImdbMovieById($imdb_id){
        $client = new \GuzzleHttp\Client();
        $request =  $client->get("http://www.omdbapi.com/?i=$imdb_id&apikey=c65d7bef");
        return json_decode($request->getBody()->getContents());

    }
    public static function savePosterImage($path){
        $filename = basename($path);

        $image = Image::make($path)
            ->save(public_path('images/posters/' . $filename));
        return $image->basePath();
    }
    public static function savePosterImageIMDB($imdb_id){
        $response = self::getImdbMovieById($imdb_id);
        $path = $response->Poster;

        $filename = basename($path);

        $image = Image::make($path)
            ->save(public_path('images/posters/' . $filename));
        return $image->basePath();
    }
    public static function saveBannerImage($path){
        $filename = basename($path);

        $image = Image::make($path)
            ->save(public_path('images/banner/' . $filename));
        return $image->basePath();
    }

}
