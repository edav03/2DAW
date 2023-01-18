const express = require('express')

let Categoria = require(__dirname + '/../models/categoria.js')
let Participantes = require(__dirname + '/../models/participante.js')

let router = express.Router()

/* Mostrar pagina de Incio */
router.get('/', (req, res) => {
  res.render('index')
})

/* Pagina Nueva Categoria */
router.get('/nueva_categoria', (req, res) => {
  res.render('nueva_categoria')
})

/* Pagina Nuevo Participante */
router.get('/nuevo_participante', (req, res) => {
  res.render('nuevo_participante')
})

/* Pagina Lista de los participantes */
router.get('/lista_participantes', (req, res) => {
  Participantes.find()
    .sort('apellido')
    .then((resultado) => {
      res.render('lista_participantes', { participante: resultado })
    })
    .catch((error) => {
      res.render('lista_participantes', { participante: [] })
    })
})

module.exports = router
