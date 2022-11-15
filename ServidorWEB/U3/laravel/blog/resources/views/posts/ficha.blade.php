@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h1>Ficha posts {{ $id }}</h1>

    <h3>Contenido</h3>
    @forelse ($posts as $cont)
        <p> {{ $cont->contenido_post}} </p>
    @empty
        
    @endforelse
@endsection