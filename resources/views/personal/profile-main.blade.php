@extends('layouts.layout')

@section('content')
<div class="profile-section">
    <!-- Barra lateral à esquerda -->
    <div class="sidebar">
        <!-- Foto do usuário -->
        <div class="profile-photo">
            <img src="{{ $profile->profile_picture ? asset('storage/' . $profile->profile_picture) : asset('images/default-avatar.png') }}"
                alt="Foto de Perfil">
        </div>

        <h3>Informações Adicionais</h3>
        <ul>
            <li><a href="#">Materiais baixados</a></li>
            <li><a href="#">Módulos criados</a></li>
            <li><a href="#"></a></li>
        </ul>
    </div>


    <!-- Conteúdo principal -->
    <div class="profile-content">
        <div class="profile-header">
            <h2>{{$profile->name}} - Perfil</h2>
            <p>{{ $profile->email }}</p>
            <p>{{ $profile->created_at->format('d/m/Y') }}</p>
        </div>

        <div class="materials-section">
            <h3>Seus Materiais</h3>
            <div class="material-carousel-wrapper">
                <button class="carousel-control prev">&#9664;</button>
                <div class="material-carousel">
                    <div class="carousel-items">
                        @foreach ($materials as $material)
                            <a href="{{ url('materials/' . $material->id) }}" class="material-card">
                                <h4>{{ $material->title }}</h4>
                                <p>{{ $material->description }}</p>
                                @if ($material->fonte_url)
                                    <div class="material-image-wrapper">
                                        <img src="{{ $material->fonte_url }}" alt="{{ $material->title }}"
                                            class="material-image">
                                    </div>
                                @else
                                    <p>Imagem não disponível</p>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
                <button class="carousel-control next">&#9654;</button>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        /* Garante que o box-sizing considere bordas e padding no cálculo da largura */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Evita rolagem horizontal */
            width: 100%;
        }

        .profile-section {
            display: flex;
            width: 100%;
            padding: 2rem;
            background-color: #1c1c1c;
            color: #fff;
            flex-wrap: wrap;
            /* Garante que o conteúdo quebre para a próxima linha se necessário */
        }

        /* Barra lateral à esquerda */
        .sidebar {
            flex: 0 0 20%;
            max-width: 250px;
            /* Limita o tamanho da barra lateral */
            background-color: #2c2c2c;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-right: 2rem;
        }

        .sidebar h3 {
            color: #fff;
            margin-bottom: 1rem;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            color: #1db954;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        /* Conteúdo principal à direita */
        .profile-content {
            flex: 1;
            min-width: 0;
            /* Impede que o conteúdo ultrapasse a largura disponível */
        }

        .profile-header {
            margin-bottom: 2rem;
            background: linear-gradient(to right, #1db954, #1ed760);
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .profile-header h2 {
            font-size: 2rem;
            margin: 0;
        }

        .profile-header p {
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }

        .materials-section {
            margin-top: 20px;
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