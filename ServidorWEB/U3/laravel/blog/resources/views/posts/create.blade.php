{{--Formulario para dar de 
    alta nuevos posts--}}

    @extends('plantilla')

    @section('titulo', 'Creacion Posts')

    @section('estilo')
        <style>
            form{
                display: table;
            }

            div.row{
                display: table-row;
            }

            label{
                display: table-cell;
            }

            input{
                display: table-cell;
            }
        </style>
    @endsection

    @section('contenido')
        <h1>NUEVO POST</h1>

        <form action="" method="post">
            <div class="row">
                <label for="titulo">Titulo:</label>
                <input id="titulo" type="text">
            </div>

            <div class="row">
                <label for="contenido">Contenido:</label>
                <textarea id="contenido" type="text"></textarea>
            </div>
        </form>
    @endsection