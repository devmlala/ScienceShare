@extends('layouts.app')

@section('content')
    <h1>Materials</h1>
    <ul>
        @foreach($materials as $material)
            <li>
                <h2>{{ $material->title }}</h2>
                <p>{{ $material->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection
