<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('inicio') }}">Pagina de inicio</a>
            <a class="nav-item nav-link active" href="{{ route('posts.index') }}">Listado de posts</a>
            @if(auth()->guest())
                <a class="nav-item nav-link active" href="{{ route('login') }}">Login</a>
            @endif
            @if (auth()->check())
            <p class="nav-item nav-link active">Bienvenido/a <strong>{{auth()->user()->login}}</strong></p>
            <a class="nav-item nav-link active" href="{{ route('logout') }}">Logout</a>
            @endif
            <p class="nav-item nav-link active" href="#" id="route">{{setActivo(Route::currentRouteName())}}</p>
        </div>
    </div>
</nav>