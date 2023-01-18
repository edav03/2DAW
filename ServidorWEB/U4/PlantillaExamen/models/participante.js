const mongoose = require('mongoose')

/* Definicion del esquema */
let participanteSchema = new mongoose.Schema({
  dorsal: {
    type: Number,
    min: 1,
    required: true,
  },
  nombre: {
    type: String,
    minlength: 3,
    required: true,
  },
  apellidos: {
    type: String,
    minlength: 3,
    required: true,
  },
  fechaNacimiento: {
    type: Date,
    required: true,
  },
  categoria: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'categoria',
  },
})

/* Asociacion con el modelo */
let Participante = mongoose.model('participante', participanteSchema)

module.exports = Participante
