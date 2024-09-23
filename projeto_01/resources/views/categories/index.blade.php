@extends('layouts.layout')

@section('content')
    <h1 class="page-title">Áreas do Conhecimento</h1>
    <div class="catalog-grid">
        @foreach($categories as $category)
            <div class="catalog-item">
                <div class="catalog-item-header">
                    <h2 class="category-title">{{ $category->name }}</h2>
                </div>
                <div class="subcategory-grid">
                    @if($category->subcategories->isNotEmpty())
                        @foreach($category->subcategories as $subcategory)
                            <div class="subcategory-card">
                                <a href="{{ url('/subcategories', $subcategory->id) }}">
                                    <img src="{{ $subcategory->image_path }}" alt="{{ $subcategory->name }}" class="subcategory-image">
                                    <div class="subcategory-name">{{ $subcategory->name }}</div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <p>Nenhuma subcategoria encontrada para esta categoria.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap');

    body {
        font-family: 'Playfair Display', serif; /* Fonte Playfair Display */
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }

    .page-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }

    .catalog-grid {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .catalog-item {
        border: none;
        background-color: transparent;
        margin-bottom: 2rem;
    }

    .catalog-item-header {
        margin-bottom: 1rem;
        text-align: center;
    }

    .category-title {
        font-size: 2rem;
        font-weight: 700; /* Título mais espesso */
    }

    .subcategory-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); /* Até 5 por linha */
        gap: 1.5rem;
    }

    .subcategory-card {
        position: relative;
        width: 338px; /* 30% maior que 260px */
        height: 225px; /* 30% maior que 173px */
        background-color: #f9f9f9;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.2s;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .subcategory-card:hover {
        transform: scale(1.05);
    }

    .subcategory-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .subcategory-name {
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: rgba(47, 133, 90, 0.6); /* Fundo esverdeado translúcido */
        color: #fff;
        text-align: center;
        padding: 0.5rem;
        font-weight: 700; /* Título com peso 700 */
        font-size: 1.2rem;
        font-family: 'Playfair Display', serif; /* Fonte Playfair para os títulos */
    }

    .subcategory-name:hover {
        background-color: rgba(47, 133, 90, 1); /* Cor sólida ao passar o mouse */
    }
</style>
