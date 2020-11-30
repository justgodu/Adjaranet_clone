@extends('layouts.app')

@section('main-content')
    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>სახელი</th>
            </tr>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td>{{$genre->name}}</td>
                    <td>
                        <form action="{{ route('deletegenre',$genre->id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$genre->id}}">
                            <button class="btn btn-danger">წაშლა</button>
                        </form>
                        <form action="{{ route('editgenre',$genre->id)}}" method="get">

                            <button class="btn btn-warning" type="submit">ჩასწორება</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
