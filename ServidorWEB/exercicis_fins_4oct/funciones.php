<?php


$hoy = date('d/m/Y');

echo "Hoy es " . $hoy . "<br>";

$fecha = explode('/', $hoy);

$dia = $fecha[0];
$mes = $fecha[1];
$any = $fecha[2];

echo "Dia -> $dia, Mes -> $mes, Any -> $any <br>";

$linea = "pepe,garcia,perez,123456,gandia";

$campos = explode(",", $linea);

//print_r($campos);

$nom = $campos[0];
$apellido1 = $campos[1];
$apellido2 = $campos[2];
$dni = $campos[3];
$poblacion = $campos[4];