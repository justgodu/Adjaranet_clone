@include('singlemovie.moviedescription')
@include('singlemovie.comments')
@include('singlemovie.related')
@extends('layouts.app')

@section('main-content')

    <link href="{{ asset('css/video.css') }}" rel="stylesheet">
    <link href="{{ asset('css/singlemovie.css') }}" rel="stylesheet">
    <div class="single-movie-header">
       @include('movies.search')
       @yield('search')
    </div>
    <div class="">
        <div class="bg-single-movie-banner"
             style="background-image: url('{{$movie->banner_url}}')">
            <div class="dark-overlay"></div>
            <div class="movie-window">
                <div class="movie-video">
                    <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="980px"
                        height="477"
                        poster="{{$movie->banner_url}}"
                        data-setup='{
                          "textTrackSettings": false,
                           "errorDisplay": false,
                           "liveui": false,
                           "liveTracker": false,
                           "liveDisplay": false
                        }'
                    >
                        <source src="{{$movie->url}}"
                                type="video/mp4"/>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                            >
                        </p>
                    </video>

                    <script src="https://vjs.zencdn.net/7.10.2/video.js">
                        videojs.options.autoSetup = false;
                    </script>

                </div>
                <div class="movie-desc">
                    <div class="movie-desc-left">
                        <div class="movie-title-geo">{{$movie->name}}</div>
                        <div class="movie-title-eng">{{$imdb_info->Title}}</div>
                    </div>
                    <div class="d-flex">
                        <a href="https://www.imdb.com/title/{{$imdb_info->imdbID}}" target="_blank"
                                                         rel="noopener noreferrer">
                            <div class="imdb-container">
                                <svg class="svg-icon svg-icon--imdbRating" width="47" height="26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.4 7.8h1.4V18H7.4V7.8zm4.1 0h2l2.7 7 2.6-7h2V18h-1.3V9l-2.6 7h-1.4l-2.7-7v9h-1.3V7.8zM25 8.9v8h1.6c1.4 0 2.5-.4 3.1-1 .7-.6 1-1.6 1-3s-.3-2.4-1-3c-.6-.7-1.7-1-3-1H25zm-1.4-1.1h2.8c2 0 3.5.4 4.4 1.2 1 .9 1.4 2.1 1.4 3.9 0 1.7-.5 3-1.4 3.9-1 .8-2.4 1.2-4.4 1.2h-2.8V7.8zm16.2 6.4c0-1-.2-1.7-.6-2.2-.3-.5-.9-.8-1.5-.8-.7 0-1.2.3-1.6.8-.4.5-.6 1.3-.6 2.2 0 .9.2 1.6.6 2.2.4.5 1 .7 1.6.7.6 0 1.2-.2 1.5-.7.4-.6.6-1.3.6-2.2zm-4.3-2.7a2.6 2.6 0 0 1 2.5-1.3c1 0 1.7.3 2.2 1 .6.8 1 1.8 1 3s-.4 2.2-1 2.9c-.5.7-1.3 1.1-2.2 1.1a3 3 0 0 1-1.5-.3l-1-1V18h-1.2V7.4h1.2v4.1z"
                                        fill="#999"></path>
                                    <rect x="1" y="1" width="45" height="24" rx="3" stroke="#1A90CF"
                                          stroke-width="2"></rect>
                                </svg>
                                @if(!empty($imdb_info->Ratings))
                                <div class="kmnvii-1 bjteOd">{{str_ireplace("/10","",$imdb_info->Ratings[0]->Value)}}</div>
                                @endif
                            </div>
                        </a>
{{--                        <button disabled="" class="tgm1dy-0 dniPJB">თრეილერი</button>--}}
                    </div>
                </div>
            </div>

        </div>
    </div>

    @yield('description')
    @yield('related-movies')
    @yield('comments')
@endsection
