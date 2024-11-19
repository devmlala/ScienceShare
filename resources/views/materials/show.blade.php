@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>{{ $material->title }}</h1>
    <p>{{ $material->description }}</p>
    <!-- Se existir imagem -->

    @if ($material->fonte_url)
        <p>Fonte da imagem: {{ $material->fonte_url}}</p>
        <img src="{{ asset($material->fonte_url) }}" alt="{{ $material->title }}">
    @endif
</div>
@endsection
