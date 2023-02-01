function nuevaCategoria() {
  console.log('Entra en el bucle')
  $.ajax({
    url: '/categorias',
    type: 'POST',
    data: JSON.stringify({
      codigo: $('#codigo').val(),
      descripcion: $('#descripcion').val(),
      edadMinima: $('#edadMinima').val(),
      edadMaxima: $('#edadMaxima').val(),
    }),
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(data) {
      if (data.error) {
        $('#nuevoError').css('display', 'block')
        $('#nuevoOK').css('display', 'none')
      } else {
        $('#nuevoError').css('display', 'none')
        $('#nuevoOK').css('display', 'block')
      }
    },
  })
}

function nuevoParticipante() {
  console.log('Entra en el bucle')
  $.ajax({
    url: '/participantes',
    type: 'POST',
    data: JSON.stringify({
      nombre: $('#nombre').val(),
      apellidos: $('#apellidos').val(),
      fechaNacimiento: $('#fechaNacimiento').val(),
    }),
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(data) {
      if (data.error) {
        $('#nuevoError').css('display', 'block')
        $('#nuevoOK').css('display', 'none')
      } else {
        $('#nuevoError').css('display', 'none')
        $('#nuevoOK').css('display', 'block')
      }
    },
  })
}

function borrarParticipante(id) {
  $.ajax({
    url: '/contacto/' + id,
    type: 'DELETE',
    contentType: 'application/json; charset: utf-8',
    dataType: 'json',
    succes: function(data) {
      window.location = '/participantes'
    },
  })
}
