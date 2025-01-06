@extends('layouts.layout')

@section('content')
<div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-gray-800 p-6 rounded-md shadow-md">
        <!-- Erros de Validação -->
        @if ($errors->any())
            <div class="mb-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="text-2xl font-bold text-center mb-6">Cadastro</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nome -->
            <div class="mb-4">
                <label for="name" class="block text-gray-300 font-medium mb-2">Nome</label>
                <input id="name" name="name" type="text" 
                    class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500"
                    value="{{ old('name') }}" required autofocus
                    placeholder="Digite seu nome">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-300 font-medium mb-2">Email</label>
                <input id="email" name="email" type="email"
                    class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500"
                    value="{{ old('email') }}" required
                    placeholder="Digite seu email">
            </div>

            <!-- Senha -->
            <div class="mb-4">
                <label for="password" class="block text-gray-300 font-medium mb-2">Senha</label>
                <input id="password" name="password" type="password"
                    class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500"
                    required placeholder="Digite sua senha">
            </div>

            <!-- Confirmar Senha -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-300 font-medium mb-2">Confirmar Senha</label>
                <input id="password_confirmation" name="password_confirmation" type="password"
                    class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500"
                    required placeholder="Confirme sua senha">
            </div>

            <div class="flex items-center justify-between">
                <a class="text-sm text-blue-500 hover:underline" href="{{ route('login') }}">
                    Já tem uma conta?
                </a>
                <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    Cadastrar
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
