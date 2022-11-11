<html>
    <head>
        <title>
            @yield('titulo')
        </title>
        {{setActivo('inicio')}}
    </head>
    <body>
        <header class="headerPartials">
            @extends('partials.nav')
        </header>

        @yield('contenido')
    </body>
</html>