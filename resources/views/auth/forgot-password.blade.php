@extends('layouts.layout')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <div class="text-center mb-6">
            <a href="/" class="inline-block">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-20 h-20 mx-auto">
            </a>
            <h1 class="text-2xl font-bold text-gray-800 mt-2">{{ __('Forgot Password') }}</h1>
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-sm text-red-600 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                <input 
                    id="email" 
                    type="email" 
                    name="email" 
                    class="block w-full mt-1 rounded-md shadow-sm border-gray-300 text-gray-900 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required 
                />
            </div>

            <div class="flex justify-end mt-4">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
