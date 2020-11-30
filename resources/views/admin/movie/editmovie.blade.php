@extends('layouts.app')

@section('main-content')
    <div class="container h-100">
        <link rel="stylesheet" href="{{asset('css/yearpicker.css')}}">
        <script src="{{asset('js/yearpicker.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/duration-picker.min.css')}}">
        <script src="{{asset('js/duration-picker.min.js')}}"></script>
        <h3>კინოს განახლება</h3>
        <form action="{{ route('updatemovie', ['id' => $movie->id])}}"  method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="სათაური" value="{{$movie->name}}">

            <label for="yearpicker">წელი</label>
            <input type="text" name="year" class="yearpicker" value="{{$movie->year}}">
            <label for="duration">ხანგრძლივობა</label><input class="form-control" value="{{$movie->duration}}" name="dur" type="text">
            <div id="saver" class="btn btn-primary" >Save</div>
            <input class="form-control" type="text" name="url" placeholder="კინოს ლინკი" value="{{$movie->url}}">
            <input class="form-control" type="text" name="imdb_id" placeholder="IMDB id" value="{{$movie->imdb_id}}">
            <input class="form-control" type="text" name="banner_url" placeholder="ფილმის ბანერი URL" value="{{$movie->banner_url}}">
            <label for="description">აღწერა</label>
            <textarea class="form-control" name="description">{{$movie->description}}</textarea>
            <label for="genre">ჟანრი</label>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="genresDropdownButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ჟანრები
                </button>
                <div  class="dropdown-menu movie-dropdown" aria-labelledby="#genresDropdownButton">
                    @foreach($genres as $genre)
                        <div class="dropdown-item">
                            <input type="checkbox" checked name="genre[]" value="{{$genre->id}}"/>
                            <span>{{$genre->name}}</span>
                        </div>
                    @endforeach
                    @foreach($all_genres as $genre)
                        <div class="dropdown-item">
                            <input type="checkbox" name="genre[]" id="genre-{{$genre->id}}" value="{{$genre->id}}"/>
                            <span>{{$genre->name}}</span>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="countriesDropdownButton" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    ქვეყნები
                </button>
                <div  class="dropdown-menu movie-dropdown" aria-labelledby="#countriesDropdownButton">
                    @foreach($countries as $country)
                        <div class="dropdown-item">
                            <input type="checkbox" checked name="country[]" value="{{$country->id}}"/>
                            <span>{{$country->name}}</span>
                        </div>
                    @endforeach
                    @foreach($all_countries as $country)
                        <div class="dropdown-item">
                            <input type="checkbox" name="country[]" value="{{$country->id}}"/>
                            <span>{{$country->name}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="tagsDropdownButton" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    თეგები
                </button>
                <div  class="dropdown-menu movie-dropdown" aria-labelledby="#tagsDropdownButton">
                    @foreach($tags as $tag)
                        <div class="dropdown-item">
                            <input type="checkbox" checked name="tags[]" value="{{$tag->id}}"/>
                            <span>{{$tag->name}}</span>
                        </div>
                    @endforeach
                    @foreach($alltags as $tag)
                        <div class="dropdown-item">
                            <input type="checkbox" name="tags[]" value="{{$tag->id}}"/>
                            <span>{{$tag->name}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn w-100 btn-primary">განახლება</button>

        </form>

        <script>


            $("#durationpicker").value = "{{$movie->duration}}";
            $('.yearpicker').yearpicker();




        </script>
    </div>
@endsection
