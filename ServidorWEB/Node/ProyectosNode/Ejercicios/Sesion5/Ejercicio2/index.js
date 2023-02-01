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
let autor = mongoose.model('autores', autorSchema)

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

/* Documento de Libro */
let libro1 = new libro({
  titulo: 'El capitan Alatriste',
  editorial: 'Alfaguara',
  precio: 15,
  autor: '63c1c682665136bb7a7d77a5',
})

libro1.comentarios.push({
  fecha: 20 / 12 / 2022,
  nickname: 'Vidaved',
  comentario: 'Esto es una comentario de Vidaved',
})

libro1.comentarios.push({
  fecha: 31 / 8 / 2022,
  nickname: 'Jorge',
  comentario: 'Esto es una comentario de Jorge',
})

libro1
  .save()
  .then((resultado) => {
    console.log('Libro 1 añadido: ' + resultado)
  })
  .catch((error) => {
    console.log('Error añadiendo contacto: ' + error)
  })
