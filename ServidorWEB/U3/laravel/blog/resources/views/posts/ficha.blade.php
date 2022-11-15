@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h1>Ficha posts {{ $post->titulo }}</h1>

    <p> {{ $post->contenido_post}} </p>
    <p> <em>Fecha de creacion: </em>{{ $post->created_at}}</p>
        
@endsection