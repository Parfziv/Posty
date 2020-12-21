@props(['post' => $post])
<div class="mb-4">
    <a href="{{ route('users.posts', $post->user)}}" class="font-bold">{{ $post->user->username }}</a><span class="text-sm ml-2 text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
    <p class=" mt-2">{{ $post->content }}</p>
</div>
<div class="mb-2 flex items-center">
    @auth
    @if(!$post->likedBy(auth()->user()))
    <form action="{{ route('posts.likes', $post->id)}}" method="post">
        @csrf
        <button type="submit" class="text-blue-400">Like</button>
    </form>
    @else
    <form action="{{ route('posts.likes', $post)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-400">Unlike</button>
    </form>
    @endif
    @endauth
    @can('delete', $post)
    <form action="{{ route('posts.destroy', $post)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="ml-2 text-red-900">Delete</button>
    </form>
    @endcan

    <span class="ml-2">{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count() )}}</span>
</div>