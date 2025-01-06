@extends('layouts.layout')

@section('title', 'Perfil Principal')

@section('content')

    <h1>Bem-vindo à sua página de perfil!</h1>
    <p>Aqui você pode gerenciar suas informações e módulos.</p>

    <!-- Botão para acessar os módulos do perfil -->
    <form action="{{ route('profile.show', ['id' => auth()->user()->id]) }}" method="get">
        @csrf
        <button type="submit" class="btn btn-primary">Acessar Módulos</button>
    </form>

@endsection
