{{--ficha.blade.php muestra el contenido de un post--}}

@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h1>Ficha posts {{ $post->titulo }}</h1>

    <p> Autor: {{ $post->usuarios->name }}</p>
    <p> {{ $post->contenido_post}} </p>
    <p> <em>Fecha de creacion: </em>{{ $post->created_at}}</p>
        
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button>Borrar</button>
    </form>
@endsection