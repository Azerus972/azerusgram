<!-- AzerusGram created by Azerus
Author : https://www.kmarous.fr
Mail : developer@mybestplace.fr
-->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="https://scontent-mrs2-2.cdninstagram.com/v/t51.2885-19/s150x150/51880691_793452351012640_4481513148892839936_n.jpg?_nc_ht=scontent-mrs2-2.cdninstagram.com&_nc_ohc=eN6txkpUzIYAX8zd9X4&oh=a29be89b87d18a07f09db4d113805af7&oe=5EFE38D8" class="rounded-circle">
            </div>
            <div class="col-8">
                <div class="d-flex align-items-baseline">
                <div class="h4 mr-3 pt-2">{{ $user->username }}</div>
                <button class="btn btn primary">Follow</button>
                </div>
                <div class="d-flex mt-3">
                    <div class="mr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="mr-3"><strong>280</strong> followers</div>
                    <div class="mr-3"><strong>280</strong> following</div>
                </div>
                <div class="mt-3">
                    <div class="font-weight-bold ">{{ $user->profile->title }}</div>
                    <div> {{ $user->profile->description }}</div>
                    <a href={{ $user->profile->link }}>{{ $user->profile->link }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($user->posts as $post)
        <div class="col-4">
            <a href="{{ route('posts.show', ['post' => $post->id]) }}"><img src="{{ asset('storage') . '/' . $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
