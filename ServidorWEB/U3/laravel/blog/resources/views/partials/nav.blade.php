<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('inicio') }}">Pagina de inicio</a>
            <a class="nav-item nav-link active" href="{{ route('posts.index') }}">Listado de posts</a>
            <a class="nav-item nav-link active" href="#" id="route">{{setActivo(Route::currentRouteName())}}</a>
        </div>
    </div>
</nav>