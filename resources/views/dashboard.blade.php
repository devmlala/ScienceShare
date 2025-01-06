@extends('layouts.layout')

@section('title', 'Dashboard - ScienceShare')

@section('content')
<div class="home-section d-flex flex-column align-items-center justify-content-center">
    <h1>Bem-vindo ao seu Dashboard!</h1>
    <p>Visualize e gerencie seus dados e preferências aqui.</p>

    <!-- Exibindo a imagem com estilização -->
    <div class="image-container mb-4">
        <img src="{{ $imgUrl }}" alt="Imagem do dashboard" class="dashboard-img img-fluid rounded shadow-lg">
    </div>

    <!-- Exemplo de conteúdo do Dashboard -->
    <div>
        <h1>Seus Materiais</h1>
        <div class="dashboard-content">
            @foreach($materials as $material)
                <div class="material-card mb-3 p-3 border rounded">
                    <h4><a href="{{ route('materials.show', $material->id) }}">{{ $material->title }}</a></h4>
                    <p>{{ $material->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
