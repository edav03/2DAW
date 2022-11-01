@extends('plantilla')

@section('titulo', 'Editar post')

@section('contenido')
    <h1>Edición de post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo"
                id="titulo" value="{{ $post->titulo }}">
        </div>

        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea class="form-control" name="contenido" id="contenido">{{ $post->contenido }}</textarea>
        </div>

        <input type="submit" name="enviar" value="Enviar"
            class="btn btn-dark btn-block">

    </form>
@endsection
