const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/contactos');

let contactoSchema = new mongoose.Schema({
    nombre: String,
    telefono: String,
    edad: Number
});

let Contacto = mongoose.model('contactos', contactoSchema);
let contacto1 = new Contacto({
    nombre: "Juanjo",
    telefono: "639639639",
    edad: 39
});

contacto1.save().then( resultado => {
    console.log("Contacto añadido: ", resultado);
}).catch(error => {
    console.log("Error añadiendo contacto", error);
});