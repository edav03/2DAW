const mongoose = require('mongoose');

// Definición del esquema
let mascotaSchema = new mongoose.Schema({
    nombre: {
        type: String,
        required: true,
        minlength: 1,
        trim: true
    },
    tipo: {
        type: String,
        required: true,
        enum: ['perro', 'gato', 'otros']
    }
});

// Asociación con el modelo
let Mascota = mongoose.model('mascota', mascotaSchema);

module.exports = Mascota;
