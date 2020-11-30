@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h3>თეგის დამატება</h3>
        <form action="{{ route('storetag')}}"  method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="თეგის სახელი"/>
            <button type="submit" class="btn w-100 btn-primary">დამატება</button>

        </form>
    </div>
@endsection
