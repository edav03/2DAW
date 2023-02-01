<h1>Listado posts</h1>
<button><h5><a href="{{ route('nuevoPost') }}">Crear Post</a></h5></button>

@forelse ($posts as $post)
    <p>{{ $post->titulo }}
    <button><a href="{{ route('posts.show', $post->id)}}">Ver</a></button>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>BORRAR</button>
    </form>
    <form action="{{ route('editarPost', $post->id) }}" method="POST">
        @csrf
        <button>EDITAR</button>
    </form>
    </p>
@empty
    <p>No hay nada para mostrar</p>
@endforelse

{{ $posts->links() }}
