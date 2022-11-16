@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de post</h1>

    <ul>
        @forelse ($data as $row)
            <li>
                <h3> {{ $row->titulo }}
                    <button><a href="{{ route('posts.show', $row->id) }}">VER</a></button>
                    <form action="{{ route('posts.destroy', $row->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button>Borrar</button>
                    </form>
                    <button><a href="{{ route('EditarLibro', $row->id) }}">EDITAR</a></button>
                </h3>
            </li>
        @empty
            <p>La Query esta vacia</p>
        @endforelse
    </ul>

    
@endsection