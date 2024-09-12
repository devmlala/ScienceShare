@extends('layouts.app')

@section('content')
<div class="home-container">
<header class="home-header">
    <h1>Seu Portal para o Conhecimento</h1>
    <p>Explore nosso acervo de materiais científicos com facilidade.</p>
    <form class="search-form" action="{{ url('/search') }}" method="GET">
        <input type="text" name="query" placeholder="Busque por tópicos, materiais ou subcategorias..."
            aria-label="Barra de busca">
        <button type="submit">Buscar</button>
    </form>
</header>



    <section class="home-categories">
        <h2>Categorias</h2>
        @foreach($categories as $category)
            <div class="category-section">
                <h3>{{ $category->name }}</h3>
                @if($category->subcategories->isNotEmpty())
                    <div class="subcategory-grid">
                        @foreach($category->subcategories as $subcategory)
                            <div class="subcategory-card">
                                <a href="{{ url('/subcategories', $subcategory->id) }}">
                                    <h4 class="subcategory-title">{{ $subcategory->name }}</h4>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>Nenhuma subcategoria encontrada para esta categoria.</p>
                @endif
            </div>
        @endforeach
    </section>
</div>
@endsection