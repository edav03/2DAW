const express = require('express')

const Contacto = require(__dirname + '/../models/contacto.js')
const Mascota = require(__dirname + '/../models/mascota.js')
const Restaurante = require(__dirname + '/../models/restaurante.js')

let router = express.Router()

/* Mostrar Contactos */
router.get('/', (req, res) => {
  Contacto.find().then((resultado) => {
    res.render('lista_contacto', { contacto: resultado })
  })
})

/*Crear nuevo Contacto*/
router.post('/', (req, res) => {
  let nuevoContacto = new Contacto({
    nombre: req.body.nombre,
    telefono: req.body.telefono,
    edad: req.body.edad,
    restauranteFavorito: req.body.restauranteFavorito,
    mascotas: req.body.mascotas,
  })

  nuevoContacto
    .save()
    .then((resultado) => {
      res.send({ error: false, nuevoContacto: resultado })
    })
    .catch((error) => {
      res.send({ error: true, nuevoContacto: error })
    })
})

/* Ficha Contacto */
router.get('/ficha_contacto/:id', (req, res) => {
  Contacto.findById(req.params.id)
    .then((resultado) => {
      let mascota = Mascota.findById(resultado.mascotas)
      let restaurante = Restaurante.findById(resultado.restauranteFavorito)
      res.render('ficha_contacto', {
        contacto: resultado,
        mascota: mascota,
        restaurante: restaurante,
      })
    })
    .catch((error) => {
      res.render('ficha_contacto', { contacto: [] })
    })
})

/* Eliminar Contacto */
router.delete('/:id', (req, res) => {
  Contacto.findByIdAndDelete(req.params.id)
    .then((resultado) => {
      res.send({ error: false })
    })
    .catch((error) => {
      res.send({ error: true })
    })
})

module.exports = router
