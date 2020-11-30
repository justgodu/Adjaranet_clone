@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h3>ჟანრის ჩასწორება</h3>
        <form action="{{ route('updategenre', ['id' => $genre->id])}}"  method="POST">
            @csrf
            <input class="form-control" type="text" name="name" value="{{$genre->name}}" placeholder="ჯანრის სახელი"/>
            <button type="submit" class="btn w-100 btn-primary">განახლება</button>

        </form>
    </div>
@endsection
