const express = require('express');

let Tarea = require(__dirname + '/../models/tarea.js');

const prioridades = ['ALTA', 'NORMAL', 'BAJA'];
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

let router = express.Router();

// Definir las rutas aquí

module.exports = router;