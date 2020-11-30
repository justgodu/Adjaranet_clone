<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Country;
use App\Genre;
use App\Movie;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|View
     */
    public function index()
    {
        $top_movie = Movie::orderBy('views', 'DESC')->get();
        $newly_added_movies = Movie::orderBy('created_at', 'DESC')->get();
        return view('main.main',["top_movies" => $top_movie,
            "newly_added_movies" => $newly_added_movies]);
    }

    public function listall(){
        $movies = Movie::all();

        return view('admin.movie.listmovies', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = GenreController::getAll();
        $countries = CountryController::getAll();
        $tags = TagController::getAll();
        return view('admin.movie.moviecreate', [
            'genres' => $genres,
            'countries' => $countries,
            'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $response = Movie::getImdbMovieById($request->input('imdb_id'));
        $poster = $response->Poster;
//        $poster = Movie::savePosterImage($path);
//
//        $banner_url = Movie::saveBannerImage($request->input('banner_url'));
        $movie = Movie::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "year" => $request->input('year'),
            "duration" => $request->input('dur'),
            "url" => $request->input('url'),
            "imdb_id" => $request->input('imdb_id'),
            "banner_url" => $request->input('banner_url'),
            "poster_url" => $poster,
        ]);
        $movie = $movie->fresh();
        $movie->genre()->attach($request->input('genre'));
        $movie->country()->attach($request->input('country'));
        $movie->tags()->attach($request->input('tags'));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|View
     */
    public function show($id)
    {
                $movie = Movie::with(['genre','country'])->where('id',$id)->firstOrFail();
        $response = Movie::getImdbMovieById($movie->imdb_id);
        $comments = Comment::with(['user','movie'])->where('movie_id', $id)->get();
        $related = Movie::whereHas('tags', function ($q) use ($movie) {
            return $q->whereIn('name', $movie->tags->pluck('name'));
        })
            ->where('id', '!=', $movie->id) // So you won't fetch same post
            ->get();

        $movie->increment('views');
        return view('singlemovie', ["movie" => $movie,
            "imdb_info" => $response,
            "comments" => $comments,
            "related_movies" => $related]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|View
     */
    public function edit($id)
    {
        $movie = Movie::with(['genre', 'country','tags'])->where('id', $id)->firstOrFail();
        $allgenres = GenreController::getAll();
        $allcountries = CountryController::getAll();
        $alltags = TagController::getAll();
        return view('admin.movie.editmovie', ['movie' => $movie,'alltags' => $alltags,'all_genres' => $allgenres,'all_countries' => $allcountries,'genres' => $movie->genre, 'countries' => $movie->country, 'tags' => $movie->tags]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
            Movie::where('id', $id)
                ->update(['name' => $request->input('name'),
                        'description'=>$request->input('description'),
                        'year'=>$request->input('year'),
                        'duration' => $request->input('dur'),
                        'url' => $request->input('url'),
                        'imdb_id' => $request->input('imdb_id'),
                        'banner_url' => $request->input('banner_url')
                    ]
                );
            $movie = Movie::find($id);
            $movie->genre()->sync($request->input('genre'));
            $movie->country()->sync($request->input('country'));
            $movie->tags()->sync($request->input('tags'));

            return redirect()->route('listmovies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::where("id", $id)->delete();
        return redirect()->back();
    }

    public function movies($filter = null, $query = null){

        switch ($filter){
            case "genre":
                $movies = Genre::with(['movie'])->where('id', $query)->firstOrFail();
                $movies = $movies->movie;
                break;
            case "country":
                $movies = Country::with(['movie'])->where('id', $query)->firstOrFail();
                $movies = $movies->movie;
                break;
            case "search":
                $query = Input::get('query');
//                return $query;
                $movies = Movie::where('name', 'LIKE', "%$query%")->get();
                break;
            default: $movies = Movie::get();
        }
        $genres = Genre::get();
            $countries = Country::get();

//        $movies = Movie::get();
//        return $movies;
        return view("movies.main" , [ "movies" => $movies, "genres" => $genres, "countries" => $countries]);
    }

    public function liveSearch(){
        $query = Input::get('query');
//                return $query;
        $movies = Movie::where('name', 'LIKE', "%$query%")->get();
        return response()->json($movies, 200);
    }
}
