const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')
const ejs = require('ejs')

/* Enrutadores */
const tareas = require(__dirname + '/routes/tareas')
const index = require(__dirname + '/routes/index')

/* Conexion a la BD */
mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/tareas')

let app = express()

/* Carga del motor de plantilla EJS */
app.set('view engine', 'ejs')

/* Cargar contenido estatico */
app.use('/public', express.static(__dirname + '/public'))

/* Middleware bodyParser para formato JSON*/
app.use(bodyParser.json())

/* Mapear ruta con respectivo enrutador*/
app.use('/', index)
app.use('/tareas', tareas)

/* Puerto de la APP */
app.listen(8080)
