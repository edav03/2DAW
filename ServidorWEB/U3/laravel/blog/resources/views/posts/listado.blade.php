@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de post</h1>

    <ul>
        @forelse ($data as $row)
            <li><h3> {{ $row->titulo }} </h3></li>
            <button><a href="{{ route('posts.show', $row->id) }}"></a> VER</button>
        @empty
            <p>La Query no funciona</p>
        @endforelse
    </ul>

@endsection