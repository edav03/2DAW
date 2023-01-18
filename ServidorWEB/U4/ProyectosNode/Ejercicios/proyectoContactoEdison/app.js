const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')
const ejs = require('ejs')

const index = require(__dirname + '/routes/index.js')
const contactos = require(__dirname + '/routes/contactos.js')
const mascotas = require(__dirname + '/routes/mascotas.js')
const restaurantes = require(__dirname + '/routes/restaurantes.js')

mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/contactos')

let app = express()

/* Carpeta de contenido estatico */
app.use('/public', express.static(__dirname + '/public'))

/* Cargar el motor de plantilla EJS */
app.set('view engine', 'ejs')

/* Cargar el middleware BODY-PARSER para JSON */
app.use(bodyParser.json())

/* Mapeando direcciones a sus respectivas Rutas */
app.use('/', index)
app.use('/contactos', contactos)
app.use('/mascotas', mascotas)
app.use('/restaurantes', restaurantes)

/* Puerto de la APP */
app.listen(8080)
