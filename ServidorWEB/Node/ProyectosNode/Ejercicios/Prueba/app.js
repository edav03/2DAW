var express = require('express')
var app = express()
const ejs = require('ejs')

let index = require(__dirname + '/routes/index')

app.set('view engine', 'html')
app.engine('html', require('ejs').renderFile)

app.use('/public', express.static(__dirname + '/public'))

app.use('/', index)

app.listen(8080)