@extends('layouts.layout')

@section('content')
    <div class="subcategory-container">
        <h1 class="subcategory-title">{{ $subcategory->name }}</h1>
        
        <div class="item-grid">
            @if($subcategory->materials->isNotEmpty())
                @foreach($subcategory->materials as $material)
                    <div class="item">
                        <div class="item-content">
                            <h3>{{ $material->title }}</h3>
                            <p>{{ $material->description }}</p>
                            <p>{{ $material->image_path }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Nenhum material encontrado para esta subcategoria.</p>
            @endif
        </div>
    </div>
@endsection
