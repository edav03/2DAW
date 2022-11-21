{{--Formulario para dar de 
    alta nuevos posts--}}

    @extends('plantilla')

    @section('titulo', 'Creacion Posts')

    @section('contenido')
        <h1>NUEVO POST</h1>

        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <label for="titulo">Titulo:</label>
            <input id="titulo" name="titulo" type="text" value="{{ old('titulo') }}">
            @if ($errors->has('titulo'))
                {{$errors->first('titulo')}}
            @endif

            <br><hr>

            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" type="text" minlength="15">{{ old('contenido') }}</textarea>
            @if ($errors->has('contenido'))
                {{$errors->first('contenido')}}
            @endif


            <br><hr>

            <label for="user">Usuario/a:</label>
            <input id="user" name="user" type="text" value="{{$users->name}}" readonly>

            <br><hr>

            <label for="userID">ID:</label>
            <input id="userID" name="userID" type="text" value="{{$users->id}}" readonly>

            <br><hr>

            <input type="submit" value="Enviar">
        </form>
    @endsection