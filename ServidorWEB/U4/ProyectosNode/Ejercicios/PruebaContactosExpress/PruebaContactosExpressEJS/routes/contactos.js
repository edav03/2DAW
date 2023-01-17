const express = require('express');

let Contacto = require(__dirname + '/../models/contacto.js');

let router = express.Router();

// Rutas

router.get('/', (req, res) => {
    Contacto.find().then(resultado => {
        res.render('lista_contactos', {contactos: resultado});            
    }).catch(error => {
        res.render('lista_contactos', {contactos: []});
    })
});

router.get('/:id', (req, res) => {
    Contacto.findById(req.params.id)
    .populate('restauranteFavorito')
    .populate('mascotas')
    .then(resultado => {
        if (resultado)
            res.render('ficha_contacto', {contacto: resultado});
        else
            res.render('ficha_contacto', {contacto: null});
    }).catch (error => {
        res.render('ficha_contacto', {contacto: null});
    });
});

router.delete('/:id', (req, res) => {
    Contacto.findByIdAndRemove(req.params.id).then(resultado => {
        res.send({error: false});        
    }).catch(error => {
        res.render({error: true});        
    });
});

router.post('/', (req, res) => {
    let nuevoContacto = new Contacto({
        nombre: req.body.nombre,
        telefono: req.body.telefono,
        edad: req.body.edad,
        restauranteFavorito: req.body.restauranteFavorito,
        mascotas: req.body.mascotas
    });
    nuevoContacto.save().then(resultado => {
        if (resultado)
            res.send({error: false});
        else
            res.send({error: true});
    }).catch(error => {
        res.send({error: true});
    });
});

module.exports = router;