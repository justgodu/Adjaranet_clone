@section('description')
<div class="movie-info">
    <div class="movie-info-poster-container">
        <div class="movie-info-poster" poster="{{$imdb_info->Poster}}"
             style="background-image: url('{{$imdb_info->Poster}}');"></div>
        <div class="movie-info-report-problem"><span>!</span> პრობლემების შეტყობინება</div>
    </div>
    <div class="movie-info-container">
        <div class="movie-info-details">
            <div class="movie-info-details-item">
                <div class="movie-info-details-item-label">გამოშვების წელი:</div>
                <div class="movie-info-details-item-value">{{$movie->year}}</div>
            </div>
            <div class="movie-info-details-item">
                <div class="movie-info-details-item-label">ქვეყანა:</div>
                <div class="movie-info-details-item-value">

                @foreach($movie->country as $country)
{{--                    <a href="{{route('movies',['filter' => 'country', 'query' => $country->id])}}">{{$country->name}} </a>--}}
                        <a href="{{url('movies', ['filter' => 'country', 'query' => $country->id])}}">{{$country->name}} </a>
                @endforeach
                </div>
            </div>
            <div class="movie-info-details-item">
                <div class="movie-info-details-item-label">ჟანრი:</div>
                <div class="movie-info-details-item-value">
                    @foreach($movie->genre as $genre)
{{--                        <a href="{{route('movies',['filter' => 'genre', 'query' => $genre->id])}}"> {{$genre->name}} </a>--}}
                        <a href="{{url('movies', ['filter' => 'genre', 'query' => $genre->id])}}">{{$genre->name}} </a>
                    @endforeach
                </div>
            </div>
            <div class="movie-info-details-item">
                <div class="movie-info-details-item-label">ხანგრძლივობა:</div>
                <div class="movie-info-details-item-value">{{$movie->duration}}</div>
            </div>

        </div>


        <div class="movie-info-details-item">
                <div class="movie-info-authors">
                    <div class="movie-info-details-item-label">რეჟისორი:</div>
                    <div class="movie-info-details-item-value"><a href="/actors/230350">ჯეფრი ჰორნადეი</a></div>
                </div>


        </div>
        <div class="movie-info-description">
            <div class="movie-info-description-title">აღწერა</div>
            <div class="movie-info-description-text">{{$movie->description}}
            </div>
        </div>
    </div>
</div>
@endsection
