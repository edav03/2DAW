{{--Plantilla base para las demas paginas--}}
<html>
    <head>
        <meta charset="utf-8">
        <title>
            @yield('titulo')
        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            *{
                list-style: none;
            }
            article{
                margin-top: 70px;
            }

            a#route{
                position: fixed;
                right: 10;
                font-size: 1.5rem;
            }
            a{
                color: white;
            }
        </style>
    </head>
    <body>
        <header>@extends('partials.nav')</header>

        <article>@yield('contenido')</article>
    </body>
</html>