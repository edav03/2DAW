const mongoose = require('mongoose')

mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/libros')

/* Esquema Autores*/
let autorSchema = new mongoose.Schema({
  nombre: {
    type: String,
    required: true,
  },
  nacimiento: {
    type: Number,
    min: 0,
    max: 2000,
  },
})

/*Aplicamos el esquema de Autores al modelo*/
let autores = mongoose.model('autores', autorSchema)

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

/* Buscador */
libro
  .find({ precio: { $lte: 10 } })
  .populate({
    path: 'autor',
    select: 'nombre',
  })
  .then((resultado) => {
    // const jj =
    console.log(resultado[0].autor.nombre)
  })
  .catch((error) => {
    console.log(error)
  })
