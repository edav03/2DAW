const express = require('express')
const os = require('os')
const today = new Date()
const dia = today.getDate()
const mes = today.getMonth() + 1
const year = today.getFullYear()
const hora = today.getHours()
const min = today.getMinutes()

let app = express()

app.get('/fecha', (req, res) => {
  res.send(`Fecha ${dia}/${mes}/${year} ${hora}:${min}`)
})

app.get('/usuario', (req, res) => {
  res.send(`Bienvenido ${os.userInfo().username}`)
})

app.listen(8080)
