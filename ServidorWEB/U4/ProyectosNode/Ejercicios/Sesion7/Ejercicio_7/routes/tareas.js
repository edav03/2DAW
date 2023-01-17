const express = require('express')

let Tarea = require(__dirname + '/../models/tarea.js')

const prioridades = ['ALTA', 'NORMAL', 'BAJA']
const meses = [
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre',
]

let router = express.Router()

router.get('/', (req, res) => {
  Tarea.find()
    .then((respuesta) => {
      res.render('lista_tareas', { tareas: respuesta })
    })
    .catch((error) => {
      res.render('lista_tareas', { tareas: [] })
    })
})

router.get('/:id', (req, res) => {
  Tarea.findById(req.params.id)
    .then((resultado) => {
      res.render('ficha_tarea', { tareas: resultado })
    })
    .catch((error) => {
      res.send('Error encontrando Tarea: ' + error)
    })
})

router.post('/', (req, res) => {
  let nuevaTarea = new Tarea({
    titulo: req.params.titulo,
    fecha: req.params.fecha,
    prioridad: req.params.prioridad,
  })

  nuevaTarea
    .save()
    .then(() => {
      res.send({ error: false })
    })
    .catch(() => {
      res.send({ error: true })
    })
})

router.delete('/:id', (req, res) => {
  Tarea.findById(req.params.id)
    .then((error) => {
      res.send({ error: false })
    })
    .catch((error) => {
      res.send({ error: true })
    })
})

module.exports = router
