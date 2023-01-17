const express = require('express');

let Mascota = require(__dirname + '/../models/mascota.js');

let router = express.Router();

// Rutas
router.post('/', (req, res) => {
    let nuevaMascota = new Mascota({
        nombre: req.body.nombre,
        tipo: req.body.tipo
    });
    nuevaMascota.save().then(resultado => {
        if (resultado)
            res.send({error: false});
        else
            res.send({error: true});
    }).catch(error => {
        res.send({error: true});
    })
});

module.exports = router;