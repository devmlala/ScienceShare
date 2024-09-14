@extends('layouts.app')

@section('content')
    <div class="home-header">
        <h1>Bem-vindo ao ScienceShare!</h1>
        <p>Explore nossas áreas de conhecimento e materiais.</p>
        <h4>



        </h4>
    </div>

    <div class="home-categories">
        @foreach ($categories as $category)
            <div class="category-section">
                <h3><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></h3>
                <div class="category-carousel">
                    <button class="carousel-control prev">&#9664;</button>
                    <div class="carousel-wrapper">
                        <div class="carousel-content">
                            @foreach ($category->subcategories as $subcategory)
                                <div class="subcategory-card">
                                    <a href="{{ route('subcategories.show', $subcategory->id) }}" class="subcategory-title">
                                        <img src="{{ asset('img/fisica.jpg' . $subcategory->image) }}" alt="{{ $subcategory->name }} sem img">
                                        {{ $subcategory->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="carousel-control next">&#9654;</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
