@extends('layouts.layout')

@section('title', 'Adicionar Material')

@section('content')
<div class="form-container">
    <h2>Adicionar Material</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('materials.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="content">Conteúdo (URL ou arquivo):</label>
            <input type="text" id="content" name="content" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Subcategorias:</label>
            <div class="subcategory-checkboxes">
                @foreach ($subcategories as $subcategory)
                    <div class="form-check">
                        <input type="checkbox" id="subcategory{{ $subcategory->id }}" name="subcategories[]" value="{{ $subcategory->id }}" class="form-check-input">
                        <label for="subcategory{{ $subcategory->id }}" class="form-check-label">{{ $subcategory->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Material</button>
    </form>
</div>

@push('styles')
<style>
    .form-container {
        background-color: #1f1f1f;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        max-width: 600px;
        margin: 50px auto;
        color: #fff;
    }

    h2 {
        text-align: center;
        color: #1db954;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        background-color: #2c2c2c;
        border: 1px solid #444;
        border-radius: 5px;
        color: #fff;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #1db954;
        outline: none;
        box-shadow: 0 0 5px rgba(29, 185, 84, 0.5);
    }

    .subcategory-checkboxes {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .form-check {
        flex: 1 1 30%;
        display: flex;
        align-items: center;
    }

    .form-check-input {
        margin-right: 8px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: #1db954;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #148c3d;
    }

    .alert {
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 5px;
        background-color: #155724;
        color: #fff;
    }
</style>
@endpush
@endsection
