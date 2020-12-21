@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 p-4 bg-white mt-6 rounded-lg">
        <form action="{{ route('login') }}" method="post">
            @csrf
            @if(session('status'))
            <div class=" mb-4 text-white rounded bg-red-500 p-2 text-center">
                {{ session('status')}}
            </div>
            @endif
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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" class="pl-2">Remember Me ?</label>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-800 text-white rounded p-2">Login</button>
            </div>


        </form>
    </div>
</div>
@endsection