<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ScienceShare')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivo de Estilos Customizados -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles') <!-- Permite adicionar estilos customizados nas views -->
</head>
<body class="font-sans antialiased" style="background-color: #141414; color: white;">
    <div class="min-h-screen">
        <!-- Cabeçalho -->
        <header>
            <nav class="container-fluid">
                <ul class="d-flex justify-content-between align-items-center">
                    <li>
                        <a href="/" class="navbar-brand d-flex align-items-center">
                            <span>ScienceShare</span>
                            <img src="https://media2.giphy.com/media/VI2UC13hwWin1MIfmi/200.webp?cid=790b7611djak34urvo5xxae8zzfr03jj25nuk68dis9sc47s&ep=v1_gifs_search&rid=200.webp&ct=g" alt="ScienceShare GIF" class="header-gif">
                        </a>
                    </li>
                    <li><a href="/categories" class="text-light">Categorias</a></li>
                    <li><a href="/materials" class="text-light">Materiais</a></li>
                    <li><a href="/favorites" class="text-light">Favoritos</a></li>
                    <li><a href="/profile" class="text-light">Perfil</a></li>
                </ul>
            </nav>
        </header>

        <!-- Conteúdo da Página -->
        <main class="container-fluid">
            @yield('content')
        </main>

        <!-- Rodapé -->
        <footer class="text-center py-3 mt-5">
            <p>&copy; 2024 ScienceShare. Todos os direitos reservados.</p>
        </footer>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts') <!-- Permite adicionar scripts customizados nas views -->
</body>
</html>
