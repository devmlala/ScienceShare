<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
@extends('layouts.layout')

@section('content')
<h1>Welcome to Laravel</h1>
    <h2><a href="{{ url('/login') }}">Login</a></h2>
    <h1><a href="{{ url('/register')}}">Cadastro</a></h1>

@endsection


