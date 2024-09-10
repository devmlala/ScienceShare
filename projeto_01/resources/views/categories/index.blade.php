@extends('layouts.app')

@section('content')
    <h1 class="page-title">Áreas do Conhecimento</h1>
    <div class="catalog-grid">
        @foreach($categories as $category)
            <div class="catalog-item">
                <div class="catalog-item-header">
                    <h2>{{ $category->name }}</h2>
                </div>
                <div class="catalog-item-content">
                    @if($category->subcategories->isNotEmpty())
                        <ul class="subcategory-list">
                            @foreach($category->subcategories as $subcategory)
                                <li class="subcategory-item">
                                    <a href="{{ url('/subcategories', $subcategory->id) }}">
                                        {{ $subcategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Nenhuma subcategoria encontrada para esta categoria.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
