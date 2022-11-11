{{-- <nav>
    <h3><a href="{{ route('inicio') }}">Pagina de inicio</a></h3>
    <h3><a href="{{ route('posts.index')}}">Listado de posts</a></h3>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('inicio') }}">Pagina de inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
        </ul>
    </div>
</nav>