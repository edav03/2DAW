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
})

/* Aplicamos el esquema Libro al modelo */
let libro = mongoose.model('libro', libroSchema)

/* Documentos de Autores */
// let autor1 = new autor({
//   nombre: 'Jose',
//   nacimiento: 1990,
// })
//
// autor1
//   .save()
//   .then((resultado) => {
//     console.log('Autor 1 añadido: ' + resultado)
//   })
//   .catch((error) => {
//     console.log('Error añadiendo Autor1')
//   })
//
// let autor2 = new autor({
//   nombre: 'Paco de Lucia',
//   nacimiento: 1947,
// })
//
// autor2
//   .save()
//   .then((resultado) => {
//     console.log('Autor 2 añadido: ' + resultado)
//   })
//   .catch((error) => {
//     console.log('Error añadiendo Autor 2')
//   })
//
// let autor3 = new autor({
//   nombre: 'Natalia Lafourcade',
//   nacimiento: 1984,
// })
//
// autor3
//   .save()
//   .then((resultado) => {
//     console.log('Autor 3 añadido: ' + resultado)
//   })
//   .catch((error) => {
//     console.log('Error añadiendo Autor 3')
//   })
//
/* Documento de Libro */
let libro1 = new libro({
  titulo: 'El principito',
  editorial: 'Disney',
  precio: 8,
  autor: '63c1c682665136bb7a7d77a5',
})

libro1
  .save()
  .then((resultado) => {
    console.log('Libro 1 añadido: ' + resultado)
  })
  .catch((error) => {
    console.log('Error añadiendo libro: ' + error)
  })

let libro2 = new libro({
  titulo: 'El nombre del viento',
  editorial: 'Alfalhuir',
  precio: 15,
  autor: '63c1c682665136bb7a7d77a4',
})

libro2
  .save()
  .then((resultado) => {
    console.log('Libro 2 añadido: ' + resultado)
  })
  .catch((error) => {
    console.log('Error añadiendo libro: ' + error)
  })

let libro3 = new libro({
  titulo: 'El señor de las moscas',
  editorial: 'Santillana',
  precio: 18,
  autor: '63c1c682665136bb7a7d77a3',
})

libro3
  .save()
  .then((resultado) => {
    console.log('Libro 3 añadido: ' + resultado)
  })
  .catch((error) => {
    console.log('Error añadiendo libro: ' + error)
  })
