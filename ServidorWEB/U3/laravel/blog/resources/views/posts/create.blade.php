{{--Formulario para dar de 
    alta nuevos posts--}}

    @extends('plantilla')

    @section('titulo', 'Creacion Posts')

    @section('estilo')
        <style>
            form{
                display: flex;
                flex-direction: column;
            }
        </style>
    @endsection

    @section('contenido')
        <h1>NUEVO POST</h1>

        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <label for="titulo">Titulo:</label>
            <input id="titulo" name="titulo" type="text" maxlength="10">

            <br><hr>

            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" type="text" minlength="15"></textarea>

            <br><hr>

            <label for="user">Usuario/a:</label>
            <input id="user" name="user" type="text" value="{{$users->name}}" readonly>

            <br><hr>

            <label for="userID">ID:</label>
            <input id="userID" name="userID" type="text" value="{{$users->id}}" readonly>

            <input type="submit" value="Enviar">
        </form>
    @endsection