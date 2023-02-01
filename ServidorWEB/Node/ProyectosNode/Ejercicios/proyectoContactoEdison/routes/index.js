const express = require('express')

const Contacto = require(__dirname + '/../models/contacto.js')
const Restaurante = require(__dirname + '/../models/restaurante.js')
const Mascota = require(__dirname + '/../models/mascota.js')

let router = express.Router()

/* Mostrar pagina de inicio */
router.get('/', (req, res) => {
  res.render('index')
})

/* Pagina Nuevo Contacto */
router.get('/nuevo_contacto', (req, res) => {
  Restaurante.find()
    .then((resultado_Restaurantes) => {
      Mascota.find().then((resultado_Mascotas) => {
        res.render('nuevo_contacto', {
          restaurantes: resultado_Restaurantes,
          mascotas: resultado_Mascotas,
        })
      })
    })
    .catch((error) => {
      res.render('nuevo_contacto', { restaurantes: [] })
    })
})

/* Pagina Nuevo Restaurante */
router.get('/nuevo_restaurante', (req, res) => {
  res.render('nuevo_restaurante')
})

/* Pagina Nueva Mascota */
router.get('/nueva_mascota', (req, res) => {
  res.render('nueva_mascota')
})

module.exports = router
