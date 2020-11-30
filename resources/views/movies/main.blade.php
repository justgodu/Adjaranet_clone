@extends('layouts.app')

@section('main-content')
    <div class="container">

       <div class="pt-5">
           @include('movies.search')
           @yield('search')
           @include('movies.filters')
           @yield('filters')
           <div class="row d-flex m-auto mt-3">
               @foreach($movies as $movie)
               <div class="col-20 col mt-4 single-movie-card">
                   <a href="{{url('movie', ['id' => $movie->id])}}">
                       <img src="{{$movie->poster_url}}" alt="{{$movie->name}}">
                   </a>
               </div>
               @endforeach

           </div>
       </div>
    </div>
@endsection
