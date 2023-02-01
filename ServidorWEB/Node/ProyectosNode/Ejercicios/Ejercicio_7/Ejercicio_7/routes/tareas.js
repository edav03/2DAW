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

/* Listar TODAS las Tareas */
router.get('/', (req, res) => {
  Tarea.find()
    .then((resultado) => {
      res.render('lista_tareas', { tareas: resultado })
    })
    .catch((error) => {
      res.render('lista_tareas', { tareas: [] })
    })
})

/* Ordenar por Prioridad */
router.get('/prio', (req, res) => {
  Tarea.find()
    .sort('prioridad')
    .then((resultado) => {
      res.render('lista_tareas', { tareas: resultado })
    })
    .catch((error) => {
      res.render('lista_tareas', { tareas: [] })
    })
})

/* Ordenar por Fecha */
router.get('/fecha', (req, res) => {
  Tarea.find()
    .sort('fecha')
    .then((resultado) => {
      res.render('lista_tareas', { tareas: resultado })
    })
    .catch((error) => {
      res.render('lista_tareas', { tareas: [] })
    })
})

/* Encuentra Ficha de Tarea segun su ID */
router.get('/:id', (req, res) => {
  Tarea.findById(req.params.id)
    .then((resultado) => {
      res.render('ficha_tarea', {
        tarea: resultado,
        mes: meses,
        prioridad: prioridades,
      })
    })
    .catch((error) => {
      res.send('Error encontrando la Tarea')
    })
})

/* Dar de alta nueva Tarea */
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

/* Eliminar Tarea */
router.delete('/:id', (req, res) => {
  Tarea.findByIdAndDelete(req.params.id)
    .then(() => {
      res.send({ error: false })
    })
    .catch(() => {
      res.send({ error: true })
    })
})

module.exports = router
