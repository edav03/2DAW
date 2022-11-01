<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
      </li>
      @if(auth()->guest())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      @endif
      @if(auth()->check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.create') }}">Nuevo post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
      @endif
    </ul>
  </div>
</nav>
