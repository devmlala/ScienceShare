@extends('layouts.layout')

@section('title', 'Criar Módulo')

@section('content')
    <h2>Criar Novo Módulo</h2>

    <form action="{{ route('modules.store', $profile) }}" method="POST">
        @csrf
        <div>
            <label for="title">Título</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="module_content">Conteúdo do Módulo</label>
            <textarea id="module_content" name="module_content" required></textarea>
        </div>

        <div>
            <label for="module_theme">Tema do Módulo</label>
            <input type="text" id="module_theme" name="module_theme" required>
        </div>

        <button type="submit">Salvar Módulo</button>
    </form>
@endsection
    