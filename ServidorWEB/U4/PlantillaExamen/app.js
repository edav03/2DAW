const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')
const ejs = require('ejs')

const index = require(__dirname + '/routes/index')
const participantes = require(__dirname + '/routes/participantes')
const categorias = require(__dirname + '/routes/participantes')

mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/carreras')

let app = express()

/* Cargar el motor de plantilla EJS */
app.set('view engine', 'ejs')

/* Middleware bodyParser */
app.use(bodyParser.json())

/* Definicion de la carpeta de contenido estatico */
app.use('/public', express.static(__dirname + '/public'))

/* Mapear rutas con el enrutador */
app.use('/', index)
app.use('/participantes', participantes)
app.use('/categorias', categorias)

app.listen(3000)
