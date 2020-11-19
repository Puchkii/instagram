@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-19/s150x150/118602155_129295715197702_2732493355555099320_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_ohc=0QYeM7wRSJsAX-d_CQW&_nc_tp=25&oh=b1d274f2a02f78898e2c196682276e40&oe=5FDCED5C">

        </div>
        <div class="col-9 pt-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add New Post</a>
                </div>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>154</strong> followers</div>
                <div class="pr-5"><strong>347</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a> </div>
        </div>
    </div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
