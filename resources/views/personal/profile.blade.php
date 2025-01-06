@extends('layouts.layout')

@section('title', 'Perfil do Usuário')

@section('content')

    <!-- Exibe o nome do perfil -->
    <h1>{{ $profile->name }} - Perfil</h1>

    <!-- Exibe os detalhes do perfil -->
    <div>
        <p><strong>Email:</strong> {{ $profile->email }}</p>
        <p><strong>Data de criação:</strong> {{ $profile->created_at->format('d/m/Y') }}</p>
    </div>

    <!-- Exibe os módulos associados ao perfil -->
    <div>
        <h2>Meus Módulos</h2>

        @if($profile->modules->isEmpty())
            <p>Este perfil ainda não tem módulos associados.</p>
        @else
            <ul>
                @foreach($profile->modules as $module)
                    <li>
                        <h3>{{ $module->title }}</h3>
                        <p><strong>Conteúdo do módulo:</strong> {{ $module->module_content }}</p>
                        <p><strong>Tema do módulo:</strong> {{ $module->module_theme }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

@endsection
