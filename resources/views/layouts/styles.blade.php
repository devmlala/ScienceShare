<!-- resources/views/layouts/styles.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #141414;
        color: #fff;
        margin: 0;
        padding: 0;
    }

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
    }

    .header-gif {
    width: 50px; /* Define o tamanho do GIF */
    height: auto;
    margin-left: 10px; /* Espaço entre o texto e o GIF */
    display: inline-block;
    vertical-align: middle;
}



.welcome-gif {
    width: 50px; /* Ajuste o tamanho do GIF */
    height: auto;
    margin-left: 10px; /* Espaço entre o texto e o GIF */
    display: inline-block;
    vertical-align: middle;
}



    main {
        padding: 20px;
    }

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

    .carousel-control {
        background-color: #000;
        border: none;
        color: #1db954;
        font-size: 24px;
        cursor: pointer;
    }
</style>

@stack('styles') <!-- Permite adicionar estilos customizados em views específicas -->
