const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const ejs = require('ejs');

const tareas = require(__dirname + '/routes/tareas');
const index = require(__dirname + '/routes/index');

mongoose.Promise = global.Promise;
mongoose.connect('mongodb://localhost:27017/tareas');

let app = express();

// Por completar

app.listen(8080);