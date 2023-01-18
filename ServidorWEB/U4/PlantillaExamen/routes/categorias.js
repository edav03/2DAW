const express = require('express')

let Categoria = require(__dirname + '/../models/categoria.js')

let router = express.Router()

router.post('/', (req, res) => {
  console.log('Entra en el post')
  let nuevaCategoria = new Categoria({
    codigo: req.body.codigo,
    descripcion: req.body.descripcion,
    edadMinima: req.body.edadMinima,
    edadMaxima: req.body.edadMaxima,
  })

  nuevaCategoria
    .save()
    .then((respuesta) => {
      res.send({ error: false })
    })
    .catch((error) => {
      res.send({ error: true })
    })
})

module.exports = router
