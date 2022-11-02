@extends('plantilla')

@section('titulo', 'Listado posts')

@section('contenido')
    <h1>Listado de posts</h1>

    <table>
    @forelse ($posts as $post)
        <tr>
            <td>{{ $post->titulo }} ({{ $post->usuario->login }})</td>
            <td><a class="btn btn-warning" href="{{ route('posts.show', $post) }}">Ver</a></td>
            @if(auth()->check() && (auth()->user()->id == $post->usuario->id || auth()->user()->rol == 'admin'))
                <td>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Borrar</button>
                    </form>
                </td>
                <td><a class="btn btn-success" href="{{ route('posts.edit', $post) }}">Editar</a></td>
            @endif
            </tr>
    @empty
        <tr><td>No se encontraron posts</td></tr>
    @endforelse
    </table>

    {{ $posts->links() }}

@endsection
