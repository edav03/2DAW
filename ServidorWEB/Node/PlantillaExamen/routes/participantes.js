const express = require('express')
const moment = require('moment')

let Participante = require(__dirname + '/../models/participante.js')
let dorsal = 1

let router = express.Router()

/* Creacion Nuevo Participante */
router.post('/', (req, res) => {
  const fecha1 = moment(req.params.fechaNacimiento)
  const fechaAhora = moment.diff(fecha1, 'years')
  let categoria

  const edad = fecha1 - fecha2

  if (edad > 17 && edad < 25) {
    categoria = 'PROMESA'
  } else if (edad > 24 && edad < 40) {
    categoria = 'SENIOR'
  } else if (edad > 39 && edad < 50) {
    categoria = 'VETERANOS A'
  } else if (edad > 49 && edad < 60) {
    categoria = 'VETERANOS B'
  } else if (edad > 59) {
    categoria = 'VETERANOS C'
  }

  let nuevoParticipante = new Participante({
    dorsal: dorsal,
    nombre: req.body.nombre,
    apellidos: req.body.apellidos,
    fechaNacimiento: req.body.fechaNacimiento,
    categoria: categoria,
  })

  dorsal++
})

router.delete('/:id', (req, res) => {
  Participante.findByIdAndDelete(req.params.id)
    .then((resultado) => {
      res.send({ error: false })
    })
    .catch((error) => {
      res.send({ error: true })
    })
})

module.exports = router
