<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap">
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
        margin-bottom: 1rem;
        background: linear-gradient(to right, #2f855a, #38a169);
        color: #ffffff;
        padding: 1rem;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .home-header h1 {
        font-size: 2rem;
        margin: 0;
        color: #ffffff;
        font-family: 'Oswald', sans-serif;
    }

    .home-header p {
        font-size: 1rem;
        color: #ffffff;
        margin: 0.5rem 0;
    }

    /* Estilo para o cabeçalho da página */
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
        background-color: transparent;
        height: auto;
        padding: 0.5rem 1rem;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
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

    .category-section a {
        text-decoration: none;
        color: #2f855a;
    }

    .category-section h3 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        color: #2f855a;
    }

    .category-carousel {
        position: relative;
        overflow: hidden;
    }

    .carousel-wrapper {
        overflow: hidden;
        width: 100%;
    }

    .carousel-content {
        display: flex;
        flex-wrap: nowrap;
        transition: transform 0.5s ease;
        gap: 1rem;
    }

    .subcategory-card {
    flex: 0 0 calc(25% - 1rem); /* Ajusta a largura da caixa */
    height: 300px; /* Altura fixa para a caixa */
    aspect-ratio: 3 / 4; /* Mantendo a proporção 3:4 */
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 0; /* Remover o padding para que a imagem ocupe todo o espaço */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    position: relative; /* Para a sobreposição do texto */
    overflow: hidden; /* Para ocultar qualquer parte da imagem que saia da div */
}

    .subcategory-title {
        font-size: 1.2rem;  
        color: #2f855a;
        text-decoration: none;
    }

    .subcategory-card img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Faz com que a imagem cubra toda a área da div */
    border-radius: 8px; /* Bordas arredondadas */
}

    /* Estilo para a sobreposição do título */
    .subcategory-overlay {
    position: absolute;
    bottom: 0; 
    left: 0;
    right: 0;
    padding: 0.5rem;
    background: linear-gradient(to top, rgba(46, 204, 113, 0.8), rgba(44, 62, 80, 0.8)); 
    color: #ffffff; 
    text-align: center;
    font-size: 1.4rem; 
    font-weight: bold; 
    letter-spacing: 1px; 
    border-radius: 0 0 10px 10px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
    transition: background 0.3s ease, transform 0.3s ease; 
    font-family: 'Roboto', sans-serif; /* Aplicando a fonte Roboto */
}


.subcategory-overlay:hover {
    transform: translateY(-3px); /* Levanta ao passar o mouse */
    background: rgba(46, 204, 113, 1); /* Altera a transparência ao passar o mouse */
}
    .subcategory-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 0.5rem;
        cursor: pointer;
        z-index: 10;
        font-size: 1rem;
    }

    .prev {
        left: 0;
    }

    .next {
        right: 0;
    }

    @media (max-width: 768px) {
        .subcategory-card {
            flex: 0 0 calc(45% - 1rem);
        }
    }

    @media (max-width: 480px) {
        .subcategory-card {
            flex: 0 0 calc(100% - 1rem);
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

<script>
    function scrollCarousel(direction) {
        const carouselContent = document.querySelector('.carousel-content');
        const carouselWrapper = document.querySelector('.carousel-wrapper');
        const scrollAmount = direction === 'next' ? -300 : 300;

        // Tamanho do carrossel e conteúdo
        const carouselWidth = carouselWrapper.offsetWidth;
        const contentWidth = carouselContent.scrollWidth;

        // Pega a posição atual de translateX
        const currentTransform = getComputedStyle(carouselContent).transform;
        const matrix = new DOMMatrix(currentTransform);
        const currentX = matrix.m41;

        // Calcula a nova posição de scroll, limitando para não exceder o conteúdo
        let newX = currentX + scrollAmount;

        if (newX > 0) {
            newX = 0;  // Impede de rolar para a esquerda além do limite
        } else if (Math.abs(newX) + carouselWidth > contentWidth) {
            newX = -(contentWidth - carouselWidth);  // Impede de rolar para a direita além do limite
        }

        // Aplica a nova posição
        carouselContent.style.transform = `translateX(${newX}px)`;
    }

    document.querySelector('.prev').addEventListener('click', () => scrollCarousel('prev'));
    document.querySelector('.next').addEventListener('click', () => scrollCarousel('next'));
</script>

</body>
</html>
