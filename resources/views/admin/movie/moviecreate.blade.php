@extends('layouts.app')

@section('main-content')
    <div class="container h-100">
        <link rel="stylesheet" href="{{asset('css/yearpicker.css')}}">
        <script src="{{asset('js/yearpicker.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/duration-picker.min.css')}}">
        <script src="{{asset('js/duration-picker.min.js')}}"></script>
        <h3>კინოს დამატება</h3>
        <form action="{{ route('storemovie')}}"  method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="სათაური">

            <label for="yearpicker">წელი</label>
            <input type="text" name="year" class="yearpicker" value="">
            <label for="duration">ხანგრძლივობა</label><input class="form-control" id="durationpicker" name="dur" type="text">
            <div id="saver" class="btn btn-primary" >Save</div>
            <input class="form-control" type="text" name="url" placeholder="კინოს ლინკი">
            <input class="form-control" type="text" name="imdb_id" placeholder="IMDB id">
            <input class="form-control" type="text" name="banner_url" placeholder="ფილმის ბანერი URL">
            <label for="description">აღწერა</label>
            <textarea class="form-control" name="description"></textarea>
            <label for="genre">ჟანრი</label>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="genresDropdownButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ჟანრები
                </button>
                <div  class="dropdown-menu movie-dropdown" aria-labelledby="#genresDropdownButton">
                    @foreach($genres as $genre)
                        <div class="dropdown-item">
                            <input type="checkbox" name="genre[]" value="{{$genre->id}}"/>
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
                            <input type="checkbox" name="tags[]" value="{{$tag->id}}"/>
                            <span>{{$tag->name}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn w-100 btn-primary">დამატება</button>

        </form>

        <script>

            $("#durationpicker").durationPicker({
                hours: {
                    label: "საათი",
                    min: 0,
                    max: 24
                },
                minutes: {
                    label: "წუთი",
                    min: 0,
                    max: 60
                },

                classname: 'form-control',
                responsive: true
            });
            $('.yearpicker').yearpicker();


            $('#saver').click(function (){
                $('#durationpicker').value = $('#duration-hours') + $('#duration-minutes').val()
                console.log($('#durationpicker').val());
            }
                );

        </script>
    </div>
@endsection
