function nuevoContacto()
{
    var mascotasSeleccionadas = $('.mascotas:checked').map(function(){
        return this.value;
    }).get();

    $.ajax({
        url:"/contactos",
        type:"POST",
        data: JSON.stringify({nombre: $("#nombre").val(), telefono: $("#telefono").val(), edad: $("#edad").val(), restauranteFavorito: $("#restauranteFavorito").val(), mascotas: mascotasSeleccionadas}),
        contentType:"application/json; charset=utf-8",
        dataType:"json",
        success: function(data) {
            if (data.error) {
                $("#nuevoError").css('display', 'block');
                $("#nuevoOK").css('display', 'none');
            } else {
                $("#nuevoError").css('display', 'none');
                $("#nuevoOK").css('display', 'block');
            }
        }
    });
}

function nuevoRestaurante()
{
    $.ajax({
        url:"/restaurantes",
        type:"POST",
        data: JSON.stringify({nombre: $("#nombre").val(), direccion: $("#direccion").val(), telefono: $("#telefono").val()}),
        contentType:"application/json; charset=utf-8",
        dataType:"json",
        success: function(data) {
            if (data.error) {
                $("#nuevoError").css('display', 'block');
                $("#nuevoOK").css('display', 'none');
            } else {
                $("#nuevoError").css('display', 'none');
                $("#nuevoOK").css('display', 'block');
            }
        }
    });
}

function nuevaMascota()
{
    $.ajax({
        url:"/mascotas",
        type:"POST",
        data: JSON.stringify({nombre: $("#nombre").val(), tipo: $("#tipo").val()}),
        contentType:"application/json; charset=utf-8",
        dataType:"json",
        success: function(data) {
            if (data.error) {
                $("#nuevoError").css('display', 'block');
                $("#nuevoOK").css('display', 'none');
            } else {
                $("#nuevoError").css('display', 'none');
                $("#nuevoOK").css('display', 'block');
            }
        }
    });
}

function borrarContacto(id) 
{
    $.ajax({
        url:"/contactos/" + id,
        type:"DELETE",
        contentType:"application/json; charset=utf-8",
        dataType:"json",
        success: function(data) {
            window.location = "/contactos";
        }
    });
}