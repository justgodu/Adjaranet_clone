@extends('layouts.app')

@section('top-content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <script>
        jQuery(document).ready(function($) {
            $('.owl-top').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                lazyLoad: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 500,
                navContainer: "#carousel-nav-top",
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })

        });
                </script>
    <div class="bg-black top-slider">
        <div class="w-70 bg-black">
            <div class="row">
{{--                <div class="w-100 row">--}}
{{--                    <div id="carousel-nav-top" class="carousel-nav w-50 float-right position-absolute"></div>--}}
{{--                </div>--}}


                <div class="owl-carousel owl-top w-100 owl-theme">
                    @foreach($newly_added_movies as $movie)
                        <div class="top-movie-slider">
                            <a href="/movie/{{$movie->id}}">
                                <h3 class="text-white position-absolute slider-name">{{$movie->name}}</h3>
                                <img src="{{$movie->banner_url}}" alt="{{$movie->name}}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
<div class="container">
    <style>

        .owl-carousel{
            font-weight: 400;
            margin-top: 0rem;
        }

    </style>

    <script>
        jQuery(document).ready(function($){
            $('.owl-one').owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                lazyLoad:true,
                dots:false,
                navContainer:"#carousel-nav-1",
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
            $('.owl-two').owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                lazyLoad:true,
                dots:false,
                navContainer:"#carousel-nav-2",
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
            $('.owl-three').owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                lazyLoad:true,
                dots:false,
                navContainer:"#carousel-nav-3",
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
            // $('.owl-four').owlCarousel({
            //     loop:false,
            //     margin:10,
            //     nav:true,
            //     lazyLoad:true,
            //     dots:false,
            //     navContainer:"#carousel-nav-3",
            //     responsive:{
            //         0:{
            //             items:1
            //         },
            //         600:{
            //             items:3
            //         },
            //         1000:{
            //             items:5
            //         }
            //     }
            // })

        })
    </script>
{{--    <div class="row mt-2">--}}
{{--        <div class="w-100 row">--}}
{{--            <h2 class="float-left w-50">ახალი დამატებული ფილმები</h2>--}}
{{--            <div id="carousel-nav-3" class="carousel-nav w-50 float-right"></div>--}}
{{--        </div>--}}


{{--        <div class="owl-carousel owl-three w-100 owl-theme">--}}
{{--            @foreach($newly_added_movies as $movie)--}}
{{--                <div class="single-movie-card">--}}
{{--                    <a href="/movies/{{$movie->id}}">--}}
{{--                        <img src="{{$movie->poster_url}}" alt="{{$movie->name}}">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="search-bar-container">
        @include('movies.search')
        @yield('search')
    </div>


    <div class="row mt-2">
        <div class="w-100 row">
            <h2 class="float-left w-50">ტოპ ფილმები</h2>
            <div id="carousel-nav-2" class="carousel-nav w-50 float-right"></div>
        </div>


            <div class="owl-carousel owl-two w-100 owl-theme">
                @foreach($top_movies as $movie)
                    <div class="single-movie-card">
                        <a href="{{url('movie',['id' => $movie->id])}}">
                            <img src="{{$movie->poster_url}}" alt="{{$movie->name}}">
                        </a>
                    </div>
                @endforeach

            </div>

    </div>
{{--    <div class="row mt-2">--}}
{{--        <div class="w-100 row">--}}
{{--            <h2 class="float-left w-50">პრემიერა</h2>--}}
{{--            <div id="carousel-nav-3" class="carousel-nav w-50 float-right"></div>--}}
{{--        </div>--}}


{{--            <div class="owl-carousel owl-three w-100 owl-theme">--}}
{{--                @foreach($premiere_movies as $movie)--}}
{{--                    <img src="{{asset($movie.src)}}" alt="{{$movie->alt}}" class="text-lg-right btn item rounded">--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--    </div>--}}
    <div class="row mt-2">
        <div class="w-100 row">
            <h2 class="float-left w-50">ახალი დამატებული ფილმები</h2>
            <div id="carousel-nav-3" class="carousel-nav w-50 float-right"></div>
        </div>


        <div class="owl-carousel owl-three w-100 owl-theme">
           @foreach($newly_added_movies as $movie)
                <div class="single-movie-card">
                    <a href="{{url('movie',['id' => $movie->id])}}">
                        <img src="{{$movie->poster_url}}" alt="{{$movie->name}}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
