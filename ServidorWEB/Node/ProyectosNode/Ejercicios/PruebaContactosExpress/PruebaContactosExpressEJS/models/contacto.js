const mongoose = require('mongoose');

// Definición del esquema 
let contactoSchema = new mongoose.Schema({
    nombre: {
        type: String,
        required: true,
        minlength: 1,
        trim: true
    },
    telefono: {
        type: String,
        required: true,
        unique: true,
        trim: true,
        match: /^\d{9}$/
    },
    edad: {
        type: Number,
        min: 18,
        max: 120
    },
    restauranteFavorito: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'restaurante'
    },
    mascotas: [{
        type: mongoose.Schema.Types.ObjectId,
        ref: 'mascota' 
    }]
});

// Asociación con el modelo
let Contacto = mongoose.model('contacto', contactoSchema);

module.exports = Contacto;