const mongoose = require('mongoose')

/* Definicion del esquema */
let categoriaSchema = new mongoose.Schema({
  codigo: {
    type: String,
    minlength: 1,
    maxlength: 6,
    required: true,
  },
  descripcion: {
    type: String,
    minlength: 5,
    required: true,
  },
  edadMinima: {
    type: Number,
    required: true,
  },
  edadMaxima: {
    type: Number,
    required: true,
  },
})

/* Asociacion con el modelo */
let Categoria = mongoose.model('categoria', categoriaSchema)

module.exports = Categoria
