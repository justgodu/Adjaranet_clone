@extends('layouts.app')

@section('main-content')
    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>სახელი</th>
            </tr>
            @foreach ($countries as $country)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td>{{$country->name}}</td>
                    <td>
                        <form action="{{ route('deletecountry',$country->id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$country->id}}">
                            <button class="btn btn-danger">წაშლა</button>
                        </form>
                        <form action="{{ route('editcountry',$country->id)}}" method="get">

                            <button class="btn btn-warning" type="submit">ჩასწორება</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
