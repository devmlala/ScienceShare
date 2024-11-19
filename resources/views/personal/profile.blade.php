@extends('layouts.layout')

@section('title', 'Bem-vindo ao ScienceShare')

@section('content')

  <!-- Adicionando o GIF ao lado do texto -->
  <img src="https://media2.giphy.com/media/VI2UC13hwWin1MIfmi/200.webp?cid=790b7611djak34urvo5xxae8zzfr03jj25nuk68dis9sc47s&ep=v1_gifs_search&rid=200.webp&ct=g" alt="Welcome GIF" class="welcome-gif">

    <div class="home-section d-flex align-items-center justify-content-center">
        <h3>Use essa página para salvar e armazenar seus materiais de estudo para serem acessados depois</h3>
        <h3>Armazene seus materiais de estudo remotamente para serem consultados em pastas organizadas por matéria!</h3>
        <h3>Vejo os materials de outros estudantes do seu curso!</h3>
    </div>

    <div>
        <h2>Meus materials...</h2>
            <ul>
                <li>Mapa mental de fisica</li>
                <li>Gráfico de Funções Logarítimicas</li>
            </ul>
        

    </div>
    <div>
        <p>
            @foreach ($profiles as $profile)
                <h3>{{ $profile->name }}</h3> <!-- Exibe o nome do perfil -->
                
                <!-- Verifica se o perfil tem materiais associados -->
                @if($profile->material)
                    <ul>
                        <li><strong>Título do Material:</strong> {{ $profile->material->title }}</li>
                        <li><strong>Descrição:</strong> {{ $profile->material->description }}</li>
                        <li><strong>Conteúdo:</strong> {{ $profile->material->content }}</li>
                    </ul>
                @else
                    <p>Este perfil não possui materiais associados.</p>
                @endif
            @endforeach
        </p>

      
    </div>
    <p>Explore materiais de diversas subcategorias e amplie seu conhecimento!</p>
@endsection
