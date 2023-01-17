const mongoose = require('mongoose')

/* Esquema Comentarios */
let comentariosSchema = new mongoose.Schema({
  fecha: {
    type: Date,
    required: true,
    default: Date.now(),
  },
  nickname: {
    type: String,
    required: true,
  },
  comentario: {
    type: String,
    required: true,
  },
})

/* Esquema Libros*/
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
  autor: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'autores',
    required: false,
  },

  comentarios: [comentariosSchema],
})

/* Aplicamos el esquema Libro al modelo */
let libro = mongoose.model('libro', libroSchema)

module.exports = libro
