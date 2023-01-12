const express = require('express')
const mongoose = require('mongoose')

mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/libros')

let libroSchema = new mongoose.Schema({
  titulo: {
    type: String,
    required: true,
    minlength: 3,
  },
  editorial: {
    type: String,
  },
  precio: {
    type: Number,
    required: true,
    min: 0,
  },
})

let libro = mongoose.model('libro', libroSchema)

let app = express()

app.listen(8080)

app.get('/libros', (req, res) => {
  libro
    .find()
    .then((resultado) => {
      res.send(resultado)
    })
    .catch((error) => {
      res.send([])
    })
})

app.get('/libros/:id', (req, res) => {
  libro
    .findById(req.params.id)
    .then((resultado) => {
      if (resultado) {
        res.send({ error: false, resultado: resultado })
      } else {
        res.send({ error: true, mensajeError: 'No se ha encontrado resultado' })
      }
    })
    .catch((error) => {
      res.send([])
    })
})
