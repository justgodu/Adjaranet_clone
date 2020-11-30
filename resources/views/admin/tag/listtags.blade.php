@extends('layouts.app')

@section('main-content')
    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>სახელი</th>
            </tr>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td>{{$tag->name}}</td>
                    <td>
                        <form action="{{ route('deletetag',$tag->id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$tag->id}}">
                            <button class="btn btn-danger">წაშლა</button>
                        </form>
                        <form action="{{ route('edittag',$tag->id)}}" method="get">

                            <button class="btn btn-warning" type="submit">ჩასწორება</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
