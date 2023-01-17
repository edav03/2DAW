const express = require('express')

let autor = require(__dirname + '/../models/autor.js')

let router = express.Router()

/* Listar todos */
router.get('/', (req, res) => {
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
router.post('/', (req, res) => {
  let nuevoAutor = new autor({
    nombre: 'Jose',
    nacimiento: 1990,
  })

  nuevoAutor
    .save()
    .then((resultado) => {
      console.log('Autor añadido: ' + resultado)
      res.send('Autor añadido: ' + resultado)
    })
    .catch((error) => {
      console.log('Error añadiendo Autor')
      res.send('Error añadiendo autor: ' + error)
    })
})

/* Borrar por ID */
router.put('/:id', (req, res) => {
  autor
    .findByIdAndRemove(req.params.id)
    .then((resultado) => {
      res.send({ error: false, resultado: resultado })
    })
    .catch((error) => {
      res.send({ error: true, mensajeError: 'Error eliminando autor' })
    })
})

module.exports = router
