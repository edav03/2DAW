@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h1>{{ $post->titulo }}</h1>
    <p><em>Escrito por {{ $post->usuario->login }}
        el {{ Carbon\Carbon::parse($post->created_at)->format("d/m/Y") }}</em></p>
    <div>
        {{ $post->contenido }}
    </div>

    @if(auth()->check() && (auth()->user()->id == $post->usuario->id || auth()->user()->rol == 'admin'))
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Eliminar post" />
        </form>

        <div>
            <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Editar post</a>
        </div>
    @endif

    <h3>Comentarios</h3>
    @forelse ($post->comentarios as $comentario)
        <div class="card">
            <div class="card-body">
                {{ $comentario->contenido }}
            </div>
            <div class="card-footer">
                <em>{{ $comentario->usuario->login }}</em>
            </div>
        </div>
    @empty
        <p>No hay comentarios en este post.</p>
    @endforelse

@endsection
