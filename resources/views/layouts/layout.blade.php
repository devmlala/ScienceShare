<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ScienceShare')</title>
    
    @include('layouts.styles') <!-- Inclui o arquivo de estilização -->
</head>
<body>
    <!-- Cabeçalho com menu fixo -->
    <header>
        <nav class="container-fluid">
            <ul class="d-flex justify-content-between align-items-center">
                <li>
                    <a href="/" class="navbar-brand d-flex align-items-center">
                        <span>ScienceShare</span>
                        <!-- Adicionando o GIF ao lado do texto -->
                        <img src="https://media2.giphy.com/media/VI2UC13hwWin1MIfmi/200.webp?cid=790b7611djak34urvo5xxae8zzfr03jj25nuk68dis9sc47s&ep=v1_gifs_search&rid=200.webp&ct=g" alt="ScienceShare GIF" class="header-gif">
                    </a>
                </li>
                <li><a href="/categories">Categorias</a></li>
                <li><a href="/materials">Materiais</a></li>
                <li><a href="/favorites">Favoritos</a></li>
                <li><a href="/profile">Perfil</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo da página -->
    <main class="container-fluid">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="text-center py-3 mt-5">
        <p>&copy; 2024 ScienceShare. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') <!-- Permite adicionar scripts customizados em views específicas -->
</body>
</html>
