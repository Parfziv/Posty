<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user, Post $post)
    {
        $posts = $user->posts()->with('user', 'likes')->paginate(20);
        return view('posts.show', compact('user', 'posts'));
    }
}
