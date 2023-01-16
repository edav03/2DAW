const express = require('express')

let libro = require(__dirname + '../models/autor.js')

let app = express.Router()

/* Listar todos */
app.get('/autor', (req, res) => {
  autor
    .find()
    .then((resultado) => {
      res.send(resultado)
    })
    .catch((error) => {
      res.send([])
    })
})

/* Añadir nuevo */
app.post('/autor', (req, res) => {
  let nuevoAutor = new autor({
    nombre: 'Jose',
    nacimiento: 1990,
  })

  nuevoAutor
    .save()
    .then((resultado) => {
      console.log('Autor 1 añadido: ' + resultado)
    })
    .catch((error) => {
      console.log('Error añadiendo Autor1')
    })
})

/* Borrar por ID */
app.put('/libros/:id', (req, res) => {
  autor
    .findOneAndDelete(req.params.id)
    .then((resultado) => {
      res.send({ error: false, resultado: resultado })
    })
    .catch((error) => {
      res.send({ error: true, mensajeError: 'Error eliminando libro' })
    })
})
