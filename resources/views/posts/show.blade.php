@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-6/12">
        <div class="p-4">
            <h1 class="text-2xl font-medium mb-2">{{$user->username}}</h1>
            <p class="text-gray-500 mb-2">Posts: {{ $posts->count()}} {{ Str::plural('post', $posts->count())}}</p>
            <span class="text-gray-500">All Likes: {{ $user->receivedLikes->count()}} {{ Str::plural('like', $user->receivedLikes->count())}}</span>
        </div>
        <div class=" p-4 bg-gray-100 mt-6 rounded-lg">
            @if( $posts->count())
            @foreach( $posts as $post )
            <x-post :post="$post" />
            @endforeach
            {{ $posts->links() }}
            @else
            <p class="text-yellow-500 font-normal text-lg">{{ $user->name}} hasnot posted any posts..</p>
            @endif
        </div>
    </div>
</div>
@endsection