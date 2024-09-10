<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        /* Importando fontes do Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e9f5ec; /* Fundo verde suave */
            color: #333; /* Cor principal do texto */
        }

        header {
            background-color: #2f855a; /* Verde médio */
            color: #ffffff;
            padding: 1.5rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 10; /* Certifica que o header está acima do conteúdo anterior */
            position: relative; /* Mantém o header no topo */
        }

        header .container {
            background-color: transparent; /* Removendo o fundo branco */
        }

        header h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        nav ul li {
            position: relative;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }

        nav ul li:hover {
            background-color: #38a169; /* Verde mais claro ao hover */
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            display: block;
        }

        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #2f855a; /* Verde médio */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        nav ul li:hover ul {
            display: block;
        }

        nav ul li ul li {
            padding: 0.5rem 1rem;
        }

        nav ul li ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        nav ul li ul li a:hover {
            background-color: #38a169; /* Verde mais claro ao hover */
        }

        .container {
            padding: 2rem;
            margin-bottom: 2rem;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        /* Estilos gerais */
.page-title {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    color: #2f855a; /* Verde escuro */
    text-align: center;
}

.catalog-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}

.catalog-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #ffffff;
    overflow: hidden;
    width: calc(33.333% - 2rem);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.catalog-item:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.catalog-item-header {
    padding: 1rem;
    background-color: #2f855a; /* Verde escuro */
    color: #ffffff;
    text-align: center;
}

.catalog-item-content {
    padding: 1rem;
}

.subcategory-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.subcategory-item {
    margin-bottom: 0.5rem;
}

.subcategory-item a {
    color: #2f855a; /* Verde escuro */
    text-decoration: none;
    font-weight: bold;
}

.subcategory-item a:hover {
    text-decoration: underline;
}

/* Responsividade */
@media (max-width: 768px) {
    .catalog-item {
        width: calc(50% - 2rem);
    }
}

@media (max-width: 480px) {
    .catalog-item {
        width: 100%;
    }
}





        .materials-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding: 1rem;
        }

        .material-card {
            border-radius: 10px;
            overflow: hidden;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: calc(25% - 1.5rem);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .material-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .material-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .material-info {
            padding: 1rem;
            text-align: center;
        }

        .material-info h3 {
            margin: 0;
            font-size: 1.2rem;
            color: #2f855a;
        }

        .material-info p {
            margin: 0.5rem 0 0;
            color: #555;
        }

        footer {
            background-color: #2f855a;
            color: #ffffff;
            text-align: center;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .catalog-item {
                width: calc(50% - 2rem);
            }

            .material-card {
                width: calc(50% - 1.5rem);
            }
        }

        @media (max-width: 480px) {
            .catalog-item {
                width: 100%;
            }

            .material-card {
                width: 100%;
            }

            header h1 {
                font-size: 1.5rem;
            }

            nav ul {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
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
    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
</footer>
</body>
</html>
