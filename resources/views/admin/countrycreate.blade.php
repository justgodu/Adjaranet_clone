@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h3>ქვეყნის დამატება</h3>
        <form action="{{ route('storecountry')}}"  method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="ქვეყნის სახელი"/>
            <button type="submit" class="btn w-100 btn-primary">დამატება</button>

        </form>
    </div>
@endsection
