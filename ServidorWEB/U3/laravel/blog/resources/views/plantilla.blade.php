{{--Plantilla base para las demas paginas--}}
<html>
    <head>
        <meta charset="utf-8">
        <title>
            @yield('titulo')
        </title>
        {{setActivo('inicio')}}

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            @extends('partials.nav')
        </header>

        @yield('contenido')
    </body>
</html>