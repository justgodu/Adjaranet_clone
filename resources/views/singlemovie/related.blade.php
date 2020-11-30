@section('related-movies')
    <div class="w-50 m-auto p-3 bg-white">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <div class="row mt-2">
    <div class="w-100 d-flex">
        <h2 class="w-50">მსგავსი</h2>
        <div id="related-caroused-nav" class="carousel-nav w-50 float-right"></div>
    </div>


    <div class="owl-carousel related w-100 owl-theme">
        @foreach($related_movies as $movie)
            <div class="single-movie-card">
                <a href="{{url('movie',['id' => $movie->id])}}">
                    <img src="{{$movie->poster_url}}" alt="{{$movie->name}}">
                </a>
            </div>
        @endforeach
    </div>
    </div>

    <style>

        .owl-carousel{
            font-weight: 400;
            margin-top: 0rem;
        }

    </style>
    <script>
        jQuery(document).ready(function($){
            $('.related').owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                lazyLoad:true,
                dots:false,
                navContainer:"#related-caroused-nav",
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
            });
            });
    </script>
    </div>
@endsection
