const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')
const ejs = require('ejs')

const tareas = require(__dirname + '/routes/tareas')
const index = require(__dirname + '/routes/index')

mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/tareas')

let app = express()

/* Carga del motor de plantilla EJS */
app.set('view engine', 'ejs')

/* Middleware bodyParser */
app.use(bodyParser.json())

/* Definicion de la carpeta de contenido estatico */
app.use('/public', express.static(__dirname + '/public'))

/* Maper rutas con el enrutador */
app.use('/', index)
app.use('/tareas', tareas)

app.listen(8080)
