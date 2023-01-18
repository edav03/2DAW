const express = require('express')

const Mascota = require(__dirname + '/../models/mascota.js')

let router = express.Router()

router.post('/', (req, res) => {
  let nuevaMascota = new Mascota({
    nombre: req.body.nombre,
    tipo: req.body.tipo,
  })

  nuevaMascota
    .save()
    .then((resultado) => {
      res.send({ error: false, mascota: resultado })
    })
    .catch((error) => {
      res.send({ error: true, mascota: error })
    })
})

module.exports = router
