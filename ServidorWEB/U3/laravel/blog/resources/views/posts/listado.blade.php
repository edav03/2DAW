/*
    listado.blade.php muestra todos los posts guardados en la DB
*/
@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de post</h1>

    <ul>
        @forelse ($data as $row)
            <li>
                <h3> {{ $row->titulo }} // Muestra el titulo del post
                    /*
                        Boton para ver el contenido del post
                    */
                    <button><a href="{{ route('posts.show', $row->id) }}">VER</a></button>

                    /*
                        Boton borra el post
                    */
                    <form action="{{ route('posts.destroy', $row->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button>Borrar</button>
                    </form>

                    /*
                        Boton edita el contenido post
                    */
                    <button><a href="{{ route('EditarLibro', $row->id) }}">EDITAR</a></button>
                </h3>
            </li>
        @empty
            <p>La Query esta vacia</p>
        @endforelse
    </ul>

    
@endsection