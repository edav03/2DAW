const express = require('express');

let Restaurante = require(__dirname + '/../models/restaurante.js');

let router = express.Router();

// Rutas
router.post('/', (req, res) => {
    let nuevoRestaurante = new Restaurante({
        nombre: req.body.nombre,
        direccion: req.body.direccion,
        telefono: req.body.telefono
    });
    nuevoRestaurante.save().then(resultado => {
        if (resultado)
            res.send({error: false});
        else
            res.send({error: true});
    }).catch(error => {
        res.send({error: true});
    })
});

module.exports = router;