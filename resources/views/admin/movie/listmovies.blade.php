@extends('layouts.app')

@section('main-content')
    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>პოსტერ</th>
                <th>სახელი</th>
            </tr>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td><a href="{{route('singlemovie', ['id' => $movie->id])}}"><img src="{{$movie->poster_url}}"/></a></td>
                    <td>{{ $movie->name}}</td>
                    <td>
                        <form action="{{ route('deletemovie',$movie->id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $movie->id}}">
                            <button class="btn btn-danger">წაშლა</button>
                        </form>
                        <form action="{{ route('editmovie',$movie->id)}}" method="get">

                            <button class="btn btn-warning" type="submit">ჩასწორება</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
