@extends('layouts.layout')

@section('content')
<div class="home-section">
    <div class="home-header d-flex align-items-center justify-content-center">
        <h2>Bem-vindo ao ScienceShare</h2>
        <!-- Adicionando o GIF ao lado do texto -->
        <img src="https://media2.giphy.com/media/VI2UC13hwWin1MIfmi/200.webp?cid=790b7611djak34urvo5xxae8zzfr03jj25nuk68dis9sc47s&ep=v1_gifs_search&rid=200.webp&ct=g" alt="Welcome GIF" class="welcome-gif">
    </div>
    <p>Explore materiais de diversas subcategorias e amplie seu conhecimento!</p>

    <div class="materials-section">
        @foreach ($subcategories as $subcategory)
            <div class="subcategory-section">
                <h3>{{ $subcategory->name }}</h3>

                <div class="material-carousel-wrapper">
                    <button class="carousel-control prev">&#9664;</button>
                    <div class="material-carousel">
                        <div class="carousel-items">
                            @if ($subcategory->materials->isNotEmpty())
                                @foreach ($subcategory->materials as $material)
                                    <div class="material-card">
                                        <h4>{{ $material->title }}</h4>
                                        <p>{{ $material->description }}</p>

                                        @if ($material->fonte_url)
                                            <div class="material-image-wrapper">
                                                <a href="{{ $material->fonte_url }}" class="material-title">
                                                    <img src="{{ $material->fonte_url }}" alt="{{ $material->title }}" class="material-image">
                                                    <div class="material-overlay">{{ $material->title }}</div>
                                                </a>
                                            </div>
                                        @else
                                            <p>Imagem do material não disponível</p>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <p>Nenhum material disponível nesta subcategoria.</p>
                            @endif
                        </div>
                    </div>
                    <button class="carousel-control next">&#9654;</button>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('styles')
<style>
    .home-section {
        padding: 2rem;
        background-color: #1c1c1c;
        color: #fff;
    }

    .home-header {
        text-align: center;
        margin-bottom: 2rem;
        background: linear-gradient(to right, #1db954, #1ed760);
        color: #ffffff;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .home-header h2 {
        font-size: 2.5rem;
        margin: 0;
        font-family: 'Oswald', sans-serif;
    }

    .welcome-gif {
        width: 50px; /* Ajuste o tamanho do GIF */
        height: auto;
        margin-left: 10px; /* Espaço entre o texto e o GIF */
        display: inline-block;
        vertical-align: middle;
    }

    .home-header p {
        font-size: 1.2rem;
        margin-top: 0.5rem;
    }

    .materials-section {
        margin-top: 20px;
    }

    .subcategory-section {
        margin-bottom: 50px;
    }

    .material-carousel-wrapper {
        display: flex;
        align-items: center;
    }

    .material-carousel {
        overflow-x: auto;
        scroll-behavior: smooth;
    }

    .carousel-items {
        display: flex;
        gap: 15px;
    }

    .carousel-control {
        background-color: transparent;
        border: none;
        color: #fff;
        font-size: 2rem;
        cursor: pointer;
        transition: color 0.3s;
    }

    .carousel-control:hover {
        color: #1db954;
    }

    .material-card {
        flex: 0 0 auto;
        width: 220px;
        padding: 15px;
        border-radius: 10px;
        background-color: #2c2c2c;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .material-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
    }

    .material-image-wrapper {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
    }

    .material-image {
        width: 100%;
        height: auto;
        transition: opacity 0.3s;
    }

    .material-title {
        text-decoration: none;
        color: inherit;
    }

    .material-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        text-align: center;
        padding: 10px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .material-image-wrapper:hover .material-overlay {
        opacity: 1;
    }
</style>
@endpush

@push('scripts')
<script>
    document.querySelectorAll('.carousel-control.prev').forEach(button => {
        button.addEventListener('click', () => {
            const carousel = button.nextElementSibling;
            carousel.scrollBy({ left: -300, behavior: 'smooth' });
        });
    });

    document.querySelectorAll('.carousel-control.next').forEach(button => {
        button.addEventListener('click', () => {
            const carousel = button.previousElementSibling;
            carousel.scrollBy({ left: 300, behavior: 'smooth' });
        });
    });
</script>
@endpush
@endsection
