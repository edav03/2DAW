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

/* Mostrar toda la Lista de Tareas */
router.get('/', (req, res) => {
  Tarea.find()
    .then((resultado) => {
      res.render('lista_tareas', { tareas: resultado })
    })
    .catch((error) => {
      res.render('lista_tareas', { tareas: [] })
    })
})

/* Ordenar por prioridad */
router.get('/prioridad', (req, res) => {
  Tarea.find()
    .sort('prioridad')
    .then((resultado) => {
      res.render('lista_tareas', { tareas: resultado })
    })
})

/* Ordenar por fecha */
router.get('/fecha', (req, res) => {
  Tarea.find()
    .sort('fecha')
    .then((resultado) => {
      res.render('lista_tareas', { tareas: resultado })
    })
})

/* Mostrar Ficha de una Tarea */
router.get('/:id', (req, res) => {
  Tarea.findById(req.params.id)
    .then((resultado) => {
      res.render('ficha_tarea', {
        tareas: resultado,
        mes: meses,
        prioridad: prioridades,
      })
    })
    .catch((error) => {
      res.send('Error encontrando Tarea: ' + error)
    })
})

/* Crear un nueva Tarea */
router.post('/', (req, res) => {
  let nuevaTarea = new Tarea({
    titulo: req.body.titulo,
    fecha: req.body.fecha,
    prioridad: req.body.prioridad,
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

/* Eliminar una Tarea */
router.delete('/:id', (req, res) => {
  Tarea.findByIdAndDelete(req.params.id)
    .then((resultado) => {
      res.send({ error: false })
    })
    .catch((error) => {
      res.send({ error: true })
    })
})

module.exports = router
