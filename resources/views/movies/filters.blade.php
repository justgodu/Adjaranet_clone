@section('filters')
    <div class="">
        <div class="w-100 pt-3 d-flex">
        @foreach($genres as $genre)
            <a class="filter-button" href="{{url('movies', ['filter' =>'genre' ,'query' => $genre->id])}}" >{{$genre->name}}</a>
        @endforeach
        </div>
        <div class="w-100 pt-3 d-flex">
        @foreach($countries as $country)
            <a class="filter-button" href="{{url('movies', ['filter' =>'country' ,'query' => $country->id])}}" >{{$country->name}}</a>
        @endforeach
        </div>
    </div>
@endsection
