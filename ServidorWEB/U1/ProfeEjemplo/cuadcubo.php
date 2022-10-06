<?php

function cuadradocubo($valor, &$cuadrado, &$cubo)
{

    $cuadrado = $valor * $valor;
    $cubo = $cuadrado * $valor;
}

$numero = 2;
$cuadrado = 25000;
$cubo = 40000;

cuadradocubo($numero, $cuadrado, $cubo);

echo "Cuadrado = $cuadrado<br>";
echo "Cubo = $cubo<br>";