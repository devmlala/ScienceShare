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
    
    <!-- Box de Pré-visualização -->
    <div class="file-preview">
        @php
            $filePath = asset('storage/' . $material->file_path); // Corrigir o caminho do arquivo
            $fileExtension = pathinfo($material->file_path, PATHINFO_EXTENSION);
        @endphp

        @if($fileExtension === 'pdf')
            <div class="pdf-preview">
                <img src="/img/pdf-icon.png" alt="PDF">
                <!-- Exibindo o PDF diretamente em um iframe -->
                <iframe src="{{ $filePath }}" width="100%" height="600px" frameborder="0"></iframe>
                <p>Este é um arquivo PDF: <a href="{{ $filePath }}" target="_blank">Visualizar PDF Completo</a></p>
            </div>
        @else
            <div class="image-preview">
                <img src="{{ asset('materials/' . $material->file_path) }}" alt="Imagem do Material" class="preview-img">
            </div>
        @endif
    </div>

</div>
@endsection

<style>
    .file-preview {
        margin-top: 20px;
        padding: 20px;
        border: 2px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .image-preview {
        text-align: center;
    }

    .preview-img {
        max-width: 100%;
        height: auto;
        max-height: 400px;
        object-fit: contain;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .pdf-preview {
        text-align: center;
    }

    .pdf-preview img {
        max-width: 50px;
        margin-bottom: 10px;
    }

    .pdf-preview p {
        font-size: 14px;
        color: #555;
    }
</style>
