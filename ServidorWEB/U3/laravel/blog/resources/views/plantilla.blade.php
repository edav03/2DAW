{{--Plantilla base para las demas paginas--}}
<html>
    <head>
        <meta charset="utf-8">
        <title>
            @yield('titulo')
        </title>
        {{setActivo('inicio')}}

        {{-- <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            @extends('partials.nav')
        </header>

        @yield('contenido')
    </body>
</html>