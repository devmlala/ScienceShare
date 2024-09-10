@extends('layouts.app')

@section('content')
    <h1>{{ $subcategory->name }}</h1>

    <div class="item-grid">
        @if($subcategory->materials->isNotEmpty())
            @foreach($subcategory->materials as $material)
                <div class="item">
                    <div class="item-content">
                        <h3>{{ $material->title }}</h3>
                        <p>{{ $material->description }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nenhum material encontrado para esta subcategoria.</p>
        @endif
    </div>
@endsection
