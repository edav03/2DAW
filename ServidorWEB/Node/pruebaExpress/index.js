const express = require('express');
const { clearCookie } = require('express/lib/response');
const app = express();

app.get('/', (req,res) => {

    res.send(`
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1>Mi primer pagina con Express</h1>
        </body>
        </html>`);

})

const server = app.listen(8888, () => {
    console.log('Servidor web inciado');
});

