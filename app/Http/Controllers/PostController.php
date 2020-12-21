<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderby('created_at', 'desc')->with('user', 'likes')->paginate(20);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.view', compact('post'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);

        Post::create([
            'content' => $request->content,
            'user_id' => auth()->user()->id,
        ]);

        return back();
    }
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
