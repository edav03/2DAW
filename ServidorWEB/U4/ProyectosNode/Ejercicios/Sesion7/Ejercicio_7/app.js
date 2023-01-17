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

/* Definicion de la carpeta de contenido estatico */
app.use('/public', express.static(__dirname + '/public'))

/* Middleware bodyParser */
app.use(bodyParser.json())

/* Ruta '/' mapeada al enrutador 'index' */
app.get('/', (req, res) => {
  res.render('index')
})

/* Ruta '/tareas' mapeada al enrutador 'tareas' */
app.get('/tareas', (req, res) => {
  res.render('tareas')
})

app.listen(8080)
