const bodyParser = require("body-parser");
const express = require("express");
const mongoose = require("mongoose");

mongoose.Promise = global.Promise;
mongoose.connect("mongodb://localhost:27017/libros");

let libroSchema = new mongoose.Schema({
  titulo: {
    type: String,
    required: true,
    minlength: 3,
  },
  editorial: {
    type: String,
  },
  precio: {
    type: Number,
    required: true,
    min: 0,
  },
});

let libro = mongoose.model("libro", libroSchema);

let app = express();

app.use(bodyParser.json());
app.listen(8080);

app.get("/libros", (req, res) => {
  libro
    .find()
    .then((resultado) => {
      res.send(resultado);
    })
    .catch((error) => {
      res.send([]);
    });
});

app.get("/libros/:id", (req, res) => {
  libro
    .findById(req.params.id)
    .then((resultado) => {
      if (resultado) {
        res.send({ error: false, resultado: resultado });
      } else {
        res.send({
          error: true,
          mensajeError: "No se ha encontrado resultado",
        });
      }
    })
    .catch((error) => {
      res.send({
        error: true,
        mensajeError: "No es ha encontrado ningun resultado",
      });
    });
});

app.post("/libros", (req, res) => {
  let nuevoLibro = new libro({
    titulo: req.body.titulo,
    editorial: req.body.editorial,
    precio: req.body.precio,
  });
  nuevoLibro
    .save()
    .then((resultado) => {
      res.send({ error: false, resultado: resultado });
    })
    .catch((error) => {
      res.send({ error: true, mensaje: "Error añadiendo libro" });
    });
});

app.put("/libros/:id", (req, res) => {
  libro
    .findByIdAndUpdate(
      req.params.id,
      {
        $set: {
          titulo: req.body.titulo,
          editorial: req.body.editorial,
          precio: req.body.precio,
        },
      },
      { new: true }
    )
    .then((resultado) => {
      res.send({ error: false, resultado: resultado });
    })
    .catch((error) => {
      res.send({
        error: true,
        mensajeError: "Error actualizando libro",
      });
    });
});

app.delete("/libros/:id", (req, res) => {
  libro
    .findOneAndDelete(req.params.id)
    .then((resultado) => {
      res.send({ error: false, resultado: resultado });
    })
    .catch((error) => {
      res.send({ error: true, mensajeError: "Error eliminando el contacto" });
    });
});
