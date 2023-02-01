const express = require('express')

let router = express.Router()

router.get('/', (req, res) => {
  res.render('index.ejs')
})

router.get('/nueva_tarea', (req, res) => {
  res.render('nueva_tarea.ejs')
})

module.exports = router
