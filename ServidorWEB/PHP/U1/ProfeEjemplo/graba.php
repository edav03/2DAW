<?php
$nombre = $_POST['nombre'];
$comentarios = $_POST['comentarios'];

// a -> añade al final, si no existe lo crea
// w -> crea fichero nuevo siempre, lo machaca
// r -> Leer fichero
$canal = fopen("datos.txt", "a");
fputs($canal, $nombre);
fputs($canal, "\n");
fputs($canal, $comentarios);
fputs($canal, "\n");
fputs($canal, "--------------------------------");
fputs($canal, "\n");
fclose($canal);

echo "Los datos se han grabado correctamente<br>";