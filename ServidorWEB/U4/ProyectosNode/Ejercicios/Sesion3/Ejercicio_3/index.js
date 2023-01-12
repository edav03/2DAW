const mongoose = require('mongoose')

mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/libros')

/* Esquema */
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

/* Aplicamos el esquema a modelo */
let libro = mongoose.model('libro', libroSchema)

/* Documentos */
let libro1 = new libro({
  titulo: 'El capitan Alatriste',
  editorial: 'Alfaguara',
  precio: 15,
})

let libro2 = new libro({
  titulo: 'El nombre del viento',
  editorial: 'Alfaguara',
  precio: 25,
})

let libro3 = new libro({
  titulo: 'La verdad sobre el caso Harry Quebert',
  editorial: 'Santillana',
  precio: 12,
})

/* Añadimos los libros a la base de datos */
libro1
  .save()
  .then((resultado) => {
    console.log('Libro 1 añadido: ' + resultado)
  })
  .catch((error) => {
    console.log('Error añadiendo contacto: ' + error)
  })

libro2
  .save()
  .then((resultado) => {
    console.log('Libro 2 añadido: ' + resultado)
  })
  .catch((error) => {
    console.log('Error añadiendo contacto: ' + error)
  })

libro3
  .save()
  .then((resultado) => {
    console.log('Libro 3 añadido: ' + resultado)
  })
  .catch((error) => {
    console.log('Error añadiendo libro: ' + error)
  })

/* Usamos metodo find y findId*/
libro
  .find({ edad: { $gte: 10, $lte: 20 } })
  .then((resultado) => {
    console.log('Resultado de la busqueda: ' + resultado)
  })
  .catch((error) => {
    console.log('Error ' + error)
  })

libro
  .findById('639845898e5d4dc641496877')
  .then((resultado) => {
    console.log('Resultado de la busqueda por ID: ' + resultado)
  })
  .catch((error) => {
    console.log('Error: ' + error)
  })

/* Editar valor del precio de libro segun ID */
libro
  .findByIdAndUpdate(
    '639845898e5d4dc641496876',
    { $set: { precio: 200 } },
    { new: true }
  )
  .then((resultado) => {
    console.log('Libro Modificado: ' + resultado)
  })
  .catch((error) => {
    console.log('Error ' + error)
  })

/* Eliminar libro segun ID */
libro
  .findByIdAndRemove('639845898e5d4dc641496877')
  .then((resultado) => {
    console.log('Libro eliminado ' + resultado)
  })
  .catch((error) => {
    console.log('Error: ' + error)
  })

/* Editar valor del precio de libro segun ID y incrementar la version 1 unidad cada vez */
libro
  .findByIdAndUpdate(
    '639845898e5d4dc641496876',
    { $set: { precio: 250 }, $inc: { __v: 1 } },
    { new: true }
  )
  .then((resultado) => {
    console.log('Libro Modificado: ' + resultado)
  })
  .catch((error) => {
    console.log('Error ' + error)
  })
