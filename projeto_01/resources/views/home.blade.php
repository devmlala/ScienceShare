{{-- resources/views/subcategories/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h2>Subcategorias</h2>
    <div class="item-grid">
        @foreach($subcategories as $subcategory)
            <div class="item">
                <div class="item-content">
                    <h3>{{ $subcategory->name }}</h3>
                    @if($subcategory->materials->isNotEmpty())
                        <ul>
                            @foreach($subcategory->materials as $material)
                                <li>
                                    <strong>{{ $material->title }}</strong><br>
                                    {{ $material->description }}
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Nenhum material encontrado para esta subcategoria.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
