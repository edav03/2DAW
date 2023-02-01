const express = require('express')

let libro = require(__dirname + '/../models/libro.js')

let router = express.Router()

/* Muestra todos los libros */
router.get('/', (req, res) => {
  libro
    .find()
    .then((resultado) => {
      res.send(resultado)
    })
    .catch((error) => {
      res.send('Error buscando libros')
    })
})

/* Muestra el libro segun su ID */
router.get('/:id', (req, res) => {
  libro
    .findById(req.params.id)
    .then((resultado) => {
      if (resultado) {
        res.send({ error: false, resultado: resultado })
      } else {
        res.send({
          error: true,
          mensajeError: 'No se ha encontrado resultado',
        })
      }
    })
    .catch((error) => {
      res.send({
        error: true,
        mensajeError: 'No es ha encontrado ningun resultado',
      })
    })
})

/* Crea nuevos libros, autores y comentarios */
router.post('/', (req, res) => {
  let nuevoLibro = new libro({
    titulo: req.body.titulo,
    editorial: req.body.editorial,
    precio: req.body.precio,
    autor: req.body.autor,
    comentarios: req.body.comentarios,
  })
  nuevoLibro
    .save()
    .then((resultado) => {
      res.send({ error: false, resultado: resultado })
    })
    .catch((error) => {
      res.send({ error: true, mensaje: 'Error añadiendo libro' })
    })
})

/* Actualiza libros, autores y comentarios */
router.put('/:id', (req, res) => {
  libro
    .findByIdAndUpdate(
      req.params.id,
      {
        $set: {
          titulo: req.body.titulo,
          editorial: req.body.editorial,
          precio: req.body.precio,
          autor: req.body.autor,
          comentarios: req.body.comentarios,
        },
      },
      { new: true }
    )
    .then((resultado) => {
      res.send({ error: false, resultado: resultado })
    })
    .catch((error) => {
      res.send({
        error: true,
        mensajeError: 'Error actualizando libro',
      })
    })
})

/* Elimina libros segun su ID */
router.delete('/:id', (req, res) => {
  libro
    .findByIdAndRemove(req.params.id)
    .then((resultado) => {
      res.send({ error: false, resultado: resultado })
    })
    .catch((error) => {
      res.send({ error: true, mensajeError: 'Error eliminando el libro' })
    })
})

module.exports = router
