@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 p-4 bg-white mt-6 rounded-lg">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="w-full p-4 bg-gray-100 rounded border-2 @error('name') border-red-500 @enderror" value="{{ old('name')}}">
                @error('name')
                <div class="text-red-600 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Your username" class="w-full p-4 bg-gray-100 rounded border-2 @error('username') border-red-500 @enderror" value="{{ old('username')}}">
                @error('username')
                <div class="text-red-600 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email" class="w-full p-4 bg-gray-100 rounded border-2 @error('email') border-red-500 @enderror" value="{{ old('email')}}">
                @error('email')
                <div class="text-red-600 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="w-full p-4 bg-gray-100 rounded border-2 @error('password') border-red-500 @enderror">
                @error('password')
                <div class="text-red-600 text-sm mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="w-full p-4 bg-gray-100 rounded border-2 ">
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-800 text-white rounded p-2">Register</button>
            </div>


        </form>
    </div>
</div>
@endsection