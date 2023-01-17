const express = require('express');

let Restaurante = require(__dirname + '/../models/restaurante.js');
let Mascota = require(__dirname + '/../models/mascota.js');

let router = express.Router();

router.get('/', (req, res) => {
    res.render('index');
});

router.get('/nuevo_contacto', (req, res) => {
    Restaurante.find().then(restaurantes => {
        Mascota.find().then(mascotas => {
            res.render('nuevo_contacto', {restaurantes: restaurantes, mascotas: mascotas});
        }).catch (error => {
            res.render('index');
        });
    }).catch(error => {
        res.render('index');
    });
});

router.get('/nuevo_restaurante', (req, res) => {
    res.render('nuevo_restaurante');
});

router.get('/nueva_mascota', (req, res) => {
    res.render('nueva_mascota');
});

module.exports = router