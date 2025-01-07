<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-gif {
            background-image: url('https://media2.giphy.com/media/VI2UC13hwWin1MIfmi/200.webp?cid=790b7611djak34urvo5xxae8zzfr03jj25nuk68dis9sc47s&ep=v1_gifs_search&rid=200.webp&ct=g');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
@extends('layouts.layout')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen background-gif text-white">
    <div class="bg-white bg-opacity-80 text-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center mb-4">Welcome to ScienceShare</h1>

        @auth
            <h2 class="text-xl font-semibold text-center mb-4">Bem-vindo, {{ Auth::user()->name }}!</h2>
            <form action="{{ route('logout') }}" method="POST" class="text-center">
                @csrf
                <button type="submit" class="w-full px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-md font-medium transition">Logout</button>
            </form>
        @else
            <div class="text-center space-y-4">
                <a href="{{ url('/login') }}" class="block w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md font-medium transition">Login</a>
                <a href="{{ url('/register') }}" class="block w-full px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md font-medium transition">Cadastro</a>
            </div>
        @endauth
    </div>
</div>
@endsection
</body>
</html>
