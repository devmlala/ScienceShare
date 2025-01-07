@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>{{ $material->title }}</h1>
    @if ($material->created_at || $material->updated_at || $material->user_id)

        <p>Criado por: {{ $material->user ? $material->user->name : 'Unknown User' }}</p>
        <p>Criado em: {{ optional($material->created_at)->format('d/m/Y') }}</p>
        <p>Última atualização: {{ optional($material->updated_at)->format('d/m/Y') }}</p>
    @endif

    <p>{{ $material->description }}</p>
    <!-- Se existir imagem -->

    @if(pathinfo($material->file_path, PATHINFO_EXTENSION) === 'pdf')
    <div class="pdf-preview">
        <img src="/img/pdf-icon.png" alt="PDF">
        <p>Este é um arquivo PDF: <a href="{{ asset('materials/' . $material->file_path) }}">Visualizar PDF</a></p>
    </div>
@else
    <img src="{{ asset('materials/' . $material->file_path) }}" alt="Imagem do Material">
@endif

</div>
@endsection