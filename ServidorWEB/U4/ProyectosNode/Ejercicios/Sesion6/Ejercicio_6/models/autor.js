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

module.exports = autor
