<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<style>
    /* Corpo da página */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #141414;
        /* Fundo escuro */
        color: #fff;
        /* Texto branco */
        margin: 0;
        padding: 0;
    }

    /* Cabeçalho */
    header {
        background-color: #1f1f1f;
        padding: 15px;
    }

    header nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header nav ul li {
        margin: 0 15px;
    }

    header nav ul li a {
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        font-size: 18px;
    }

    header nav ul li a:hover {
        color: #1db954;
        /* Cor verde para links no cabeçalho */
    }

    /* Imagem GIF no cabeçalho */
    .header-gif {
        width: 50px;
        height: auto;
        margin-left: 10px;
        display: inline-block;
        vertical-align: middle;
    }

    /* Input de texto */
    input {
        color: black !important;
        text-indent: 0 !important;
        opacity: 1 !important;
        background-color: white !important;
    }

    /* GIF de boas-vindas */
    .welcome-gif {
        width: 50px;
        height: auto;
        margin-left: 10px;
        display: inline-block;
        vertical-align: middle;
    }

    /* Área principal */
    main {
        padding: 20px;
    }

    /* Cartão de material */
    .material-card {
        background-color: #2c2c2c;
        border-radius: 10px;
        overflow: hidden;
        margin: 10px;
        text-align: center;
        transition: transform 0.3s;
    }

    .material-card:hover {
        transform: scale(1.05);
    }

    .material-card img {
        width: 100%;
        height: auto;
        border-bottom: 2px solid #1db954;
    }

    .material-card h4 {
        color: #fff;
        padding: 15px 0;
    }

    .image-container {
        width: 300px;
        height: 200px;
        overflow: hidden;
        /* Esconde qualquer parte da imagem que ultrapasse os limites do contêiner */
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ajusta a imagem para cobrir o contêiner sem distorcer */
    }


    /* Controles do carrossel */
    .carousel-control {
        background-color: #000;
        border: none;
        color: #1db954;
        font-size: 24px;
        cursor: pointer;
    }

    /* Estilos específicos para o formulário de registro */
    .auth-form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-color: #2c2c2c;
        border-radius: 10px;
        margin-top: 50px;
    }

    .auth-form input {
        background-color: white;
        color: black;
        padding: 12px;
        border-radius: 5px;
        margin-bottom: 15px;
        width: 100%;
    }

    .auth-form button {
        background-color: #1db954;
        color: white;
        padding: 12px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .auth-form button:hover {
        background-color: #169c42;
    }

    .auth-form a {
        color: #1db954;
        text-decoration: none;
    }

    .auth-form a:hover {
        text-decoration: underline;
    }

    .auth-form .flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    /* Estilo do link no registro */
    .auth-form .text-link {
        font-size: 14px;
    }

    /* Ajustes gerais de responsividade */
    @media (max-width: 768px) {
        body {
            font-size: 14px;
        }

        .material-card {
            margin: 5px;
        }

        .auth-form {
            width: 90%;
        }

        .auth-form input,
        .auth-form button {
            width: 100%;
        }
    }
</style>

@stack('styles') <!-- Permite adicionar estilos customizados em views específicas -->