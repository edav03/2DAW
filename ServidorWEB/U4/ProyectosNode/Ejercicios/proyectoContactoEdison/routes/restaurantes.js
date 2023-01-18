const express = require('express')

const Restaurante = require(__dirname + '/../models/restaurante.js')

let router = express.Router()

/* Crear nuevo Restaurante */
router.post('/', (req, res) => {
  let nuevoRestaurante = new Restaurante({
    nombre: req.body.nombre,
    direccion: req.body.direccion,
    telefono: req.body.telefono,
  })

  nuevoRestaurante
    .save()
    .then((resultado) => {
      res.send({ error: false, restaurante: resultado })
    })
    .catch((error) => {
      res.send({ error: true, restaurante: error })
    })
})

module.exports = router
