@extends('layouts.layout')

@section('content')
<h1 class="page-title">{{ $subcategory->name }}</h1>
<div class="subcategory-grid">
    @if($subcategory->materials->isNotEmpty())
        @foreach($subcategory->materials as $material)
            <div class="subcategory-card">
                <a href="{{ url('/materials', $material->id)}}">
                    <img src="{{ $material->fonte_url }}" alt="{{ $material->title }}" class="subcategory-image">
                    <div class="subcategory-name">
                        <h3>{{ $material->title }}</h3>
                        <p>{{ $material->description }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    @else
        <p class="text-center">Nenhum material encontrado para esta subcategoria.</p>
    @endif
</div>
@endsection

<style>
    .subcategory-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .subcategory-card {
        position: relative;
        background-color: #f9f9f9;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.2s ease-in-out;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .subcategory-card:hover {
        transform: scale(1.05);
    }

    .subcategory-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .subcategory-name {
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        text-align: center;
        padding: 0.5rem;
        font-size: 1.1rem;
    }

    .subcategory-name h3 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 700;
    }

    .subcategory-name p {
        margin: 0.5rem 0 0;
        font-size: 0.9rem;
    }
</style>