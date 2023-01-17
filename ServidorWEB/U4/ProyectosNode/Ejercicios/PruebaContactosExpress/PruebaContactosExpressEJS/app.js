const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')
const ejs = require('ejs')

const restaurantes = require(__dirname + '/routes/restaurantes')
const mascotas = require(__dirname + '/routes/mascotas')
const contactos = require(__dirname + '/routes/contactos')
const index = require(__dirname + '/routes/index')

mongoose.Promise = global.Promise
mongoose.connect('mongodb://localhost:27017/contactos')

let app = express()

app.set('view engine', 'ejs')

app.use('/public', express.static(__dirname + '/public'))
app.use(bodyParser.json())

app.use('/', index)
app.use('/restaurantes', restaurantes)
app.use('/mascotas', mascotas)
app.use('/contactos', contactos)

app.listen(3000)
