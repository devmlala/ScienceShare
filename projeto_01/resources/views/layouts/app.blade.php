<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Importando fontes do Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');

        /* Estilo geral da página */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            padding: 2rem;
            margin-bottom: 2rem;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        /* Estilo para o cabeçalho */
        .home-header {
    text-align: center;
    margin-bottom: 1rem; /* Reduzido para mais compacto */
    background: linear-gradient(to right, #2f855a, #38a169);
    color: #ffffff;
    padding: 1rem; /* Reduzido para mais compacto */
    border-radius: 8px; /* Reduzido para mais fino */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra mais sutil */
}
.home-header h1 {
    font-size: 2rem; /* Reduzido para mais fino */
    margin: 0;
    color: #ffffff;
    font-family: 'Oswald', sans-serif;
}

.home-header p {
    font-size: 1rem; /* Reduzido para mais fino */
    color: #ffffff;
    margin: 0.5rem 0; /* Reduzido para mais compacto */
}
        /* Estilo para o cabeçalho da página (layouts/app.blade.php) */
        header {
            background: linear-gradient(to right, #2f855a, #38a169);
            color: #ffffff;
            padding: 1.5rem 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
            position: relative;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Oswald', sans-serif;
            font-size: 2rem;
            font-weight: 700;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        header nav ul li {
            position: relative;
        }

        header nav ul li a {
            color: #ffffff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        header nav ul li a:hover {
            background-color: #2c7a7b;
            transform: scale(1.05);
        }

        header nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #2f855a;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header nav ul li:hover ul {
            display: block;
        }

        header nav ul li ul li {
            padding: 0.5rem 1rem;
        }

        header nav ul li ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        header nav ul li ul li a:hover {
            background-color: #38a169;
        }

        /* Estilo para o formulário de busca */
        .search-form {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    justify-content: center;
    margin-top: 1rem;
}

.search-form input {
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 5px;
    font-size: 0.9rem; /* Ajustado para mais fino */
    width: 300px; /* Ajuste a largura conforme necessário */
    outline: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.search-form button {
    padding: 0.5rem 1rem; /* Ajustado para mais fino */
    border: none;
    border-radius: 5px;
    background-color: #2f855a;
    color: #fff;
    cursor: pointer;
    font-size: 0.9rem; /* Ajustado para mais fino */
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.search-form button:hover {
    background-color: #38a169;
    transform: scale(1.05);
}

        /* Estilo para o conteúdo das categorias */
        .home-categories {
            margin-top: 2rem;
        }

        .home-categories h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #2f855a;
        }

        .category-section {
            margin-bottom: 2rem;
        }

        .category-section h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #2f855a;
        }

        .subcategory-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }

        .subcategory-card {
            flex: 1 1 calc(21% - 1rem); /* Ajustado para 21% */
            max-width: calc(21% - 1rem); /* Ajustado para 21% */
            aspect-ratio: 3 / 2; /* Mantendo a proporção 3:2 */
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            text-align: center;
        }

        .subcategory-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .subcategory-title {
            font-size: 1.2rem;
            color: #2f855a;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .subcategory-card {
                flex: 1 1 calc(45% - 1rem);
            }
        }

        @media (max-width: 480px) {
            .subcategory-card {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="header-content">
        <div class="logo">ScienceShare</div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <a href="{{ url('/categories') }}">Áreas do Conhecimento</a>
                    <ul>
                        <li><a href="{{ url('/subcategories') }}">Matérias</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>


<div class="container">
    @yield('content')
</div>

<footer>
    &copy; {{ date('Y') }} Science. All rights reserved.
</footer>
</body>
</html>
