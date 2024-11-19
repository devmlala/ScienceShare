@extends('layouts.layout')

@section('content')
<div class="home-section">
    <div class="home-header d-flex align-items-center justify-content-center">
        <h2>ScienceShare</h2>
        <!-- Adicionando o GIF ao lado do texto -->
        <img src="https://media2.giphy.com/media/VI2UC13hwWin1MIfmi/200.webp?cid=790b7611djak34urvo5xxae8zzfr03jj25nuk68dis9sc47s&ep=v1_gifs_search&rid=200.webp&ct=g"
            alt="Welcome GIF" class="welcome-gif">

        <!-- Botão com link para /material/create -->
        <a href="/materials/create" class="create-material-btn">
            <button class="create-material-btn">Criar Material</button>
        </a>
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
                                    <a href="{{ url('materials/' . $material->id) }}" class="material-card">
                                        <h4>{{ $material->title }}</h4>
                                        <p>{{ $material->description }}</p>

                                        @if ($material->fonte_url)
                                            <div class="material-image-wrapper">
                                                <img src="{{ $material->fonte_url }}" alt="{{ $material->title }}"
                                                    class="material-image">
                                                <div class="material-overlay">{{ $material->title }}</div>
                                            </div>
                                        @else
                                            <p>Imagem do material não disponível</p>
                                        @endif
                                    </a>
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
            display: flex;
            justify-content: space-between;
            /* Afasta o botão do restante do conteúdo */
            align-items: center;
            margin-bottom: 2rem;
            background: linear-gradient(to right, #1db954, #1ed760);
            color: #ffffff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            /* Permite o uso de position: absolute dentro */
        }



        .home-header h2 {
            font-size: 2.5rem;
            margin: 0;
            font-family: 'Oswald', sans-serif;
        }

        .welcome-gif {
            width: 50px;
            /* Ajuste o tamanho do GIF */
            height: auto;
            margin-left: 10px;
            /* Espaço entre o texto e o GIF */
            display: inline-block;
            vertical-align: middle;
        }

        .home-header p {
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }

        .materials-section,
        .subcategory-section {
            margin-top: 20px;
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

        /* Botão de Criar Material */
        .create-material-btn {
            text-decoration: none;
            /* Remove o sublinhado do link */
        }

        button.create-material-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            position: absolute;
            right: 10px;
            /* Posiciona o botão na extrema esquerda */
            margin-left: 0;
            /* Remove qualquer margem extra */
        }


        button.create-material-btn:hover {
            background-color: #0056b3;
        }

        button.create-material-btn:active {
            background-color: #003f7f;
            transform: scale(0.98);
        }

        button.create-material-btn:focus {
            outline: none;
            /* Remove o contorno padrão ao focar */
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