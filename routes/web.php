<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/user/{user:username}/posts', [\App\Http\Controllers\UserPostController::class, 'index'])->name('users.posts');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'store'])->name('logout');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'store']);

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store']);
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.view');
Route::delete('/posts/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [\App\Http\Controllers\LikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [\App\Http\Controllers\LikeController::class, 'destroy'])->name('posts.likes');
