@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h3>თეგის ჩასწორება</h3>
        <form action="{{ route('updatetag', ['id' => $tag->id])}}"  method="POST">
            @csrf
            <input class="form-control" type="text" name="name" value="{{$tag->name}}" placeholder="თეგის სახელი"/>
            <button type="submit" class="btn w-100 btn-primary">განახლება</button>

        </form>
    </div>
@endsection
