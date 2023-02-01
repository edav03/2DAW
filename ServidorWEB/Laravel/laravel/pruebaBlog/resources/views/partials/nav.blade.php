<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('inicio') }}">Pagina de inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index') }}">Listado Posts</a>
        </li>
        <li class="nav-item">
          <p class="nav-link">{{ setActivo(Route::currentRouteName()) }}</p>
        </li>
    </ul>
</nav>