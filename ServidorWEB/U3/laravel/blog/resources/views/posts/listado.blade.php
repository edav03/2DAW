{{--listado.blade.php muestra todos los posts guardados en la DB --}}
@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1 id="list">Listado de post</h1>
    <button class="btn btn-primary"><a href="{{ route('NuevoPost')}}">Nuevo Post</a></button><br><br>

            @forelse ($data as $row)
                            {{--Muestra el titulo del post--}}

                        <h3 class="d-inline p-2"> {{ $row->titulo }} ( {{ $row->usuarios->name  ?? 'None'}} )
                        
                            {{--Boton para ver el contenido del post--}}
                    
                        <button class="d-inline p-2 btn btn-secondary "><a href="{{ route('posts.show', $row->id) }}">VER</a></button>
                    
                            {{--Boton borra el post--}}
                    
                        <form class="d-inline p-2 " action="{{ route('posts.destroy', $row->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    
                            {{--Boton edita el contenido post--}}
                    
                        <button class="d-inline p-2 btn btn-success"><a href="{{ route('EditarLibro', $row->id) }}">EDITAR</a></button>
                    </h3>
                <br><br><br>
            @empty
                <p>La Query esta vacia</p>
            @endforelse
    
@endsection