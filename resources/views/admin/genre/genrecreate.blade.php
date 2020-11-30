@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h3>ჟანრის დამატება</h3>
        <form action="{{ route('storegenre')}}"  method="POST">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="ჯანრის სახელი"/>
            <button type="submit" class="btn w-100 btn-primary">დამატება</button>

        </form>
    </div>
@endsection
