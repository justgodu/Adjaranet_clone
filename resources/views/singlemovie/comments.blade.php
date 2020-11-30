@section('comments')
    <div class="w-50 m-auto">


        <div class="card">
            <div class="card-header">კომენტარები</div>
            <div class="card-body">
                @if(Auth::check())
                    <div class="card">
                        <div class="card-header">კომენტარის დატოვება</div>
                        <div class="card-body">
                    <form action="{{route('storecomment',['id'=> $movie->id])}}" method="POST">
                        @csrf
                        <textarea class="form-control" name="content"></textarea>
                        <button class="form-control" type="submit">დასრულება</button>
                    </form>
                        </div>
                    </div>
                @else
                    <a href="{{route('login')}}">გაიარეთ ავტორიზაცია</a>
                @endif
        @foreach($comments as $comment)
        <div class="card">
            <div class="card-header">
{{--                {{\App\User::where('id', $comment->user_id)->firstOrFail()->username}}--}}
                @if(!is_null($comment->user))
                {{$comment->user->username}}
                @else
                   წაშლილია
                @endif
            </div>
            <div class="card-body">
                {{$comment->content}}
            </div>

        </div>
            @endforeach
            </div>
        </div>
    </div>

@endsection
