@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 p-4 bg-gray-100 mt-6 rounded-lg">
        @if(auth()->user())
        <form action="{{ route('posts') }}" method="post" class="mb-4">
            @csrf
            <div class="mb-6">
                <label for="content" class="sr-only">Body</label>
                <textarea name="content" placeholder="Post something..." class="w-full rounded border-2 p-4 @error('content') border-red-500 @enderror""></textarea>
                @error('content')
                <div class=" text-red-600 text-sm mt-2">
                {{ $message }}
            </div>
            @enderror
    </div>
    <div class="mb-6">
        <button type="submit" class="bg-blue-600 py-2 px-4 rounded text-white">Post</button>
    </div>
    </form>
    @endif
    @if( $posts->count())
    @foreach( $posts as $post )
    <x-post :post="$post" />
    @endforeach
    {{ $posts->links() }}
    @else
    <p class="text-yellow-500 font-normal text-lg">There are no posts..</p>
    @endif
</div>
</div>
@endsection