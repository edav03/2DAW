/* Librerias externas */
const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')

/* Enrutadores */
const libros = require(__dirname + '/routes/libros.js')
const autores = require(__dirname + '/routes/autores.js')

/* Conexion a la BD */
mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/libros')

let app = express()
app.use((req, res, next) => {
  res.send('En mantenimiento')
})

/* Carga del middleware y enrutadores */
app.use(bodyParser.json())
app.use('/libros', libros)
app.use('/autores', autores)

/* Puesta en marcha del servidor */
app.listen(8080)
