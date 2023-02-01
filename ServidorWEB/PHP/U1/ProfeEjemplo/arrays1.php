<?php

$numeros = array(3, 4, 6, 7, 2, 3, 5, 7, 3, 10);

$lon_array = count($numeros);
echo "<h1>ARRAY por posición</h1>";

echo "La longitud del array es " . $lon_array . "<br>";

for ($pos = 0; $pos < $lon_array; $pos++) {
    echo "En la posicion $pos = " . $numeros[$pos] . "<br>";
}

echo "<h1>ARRAY ASOCIATIVO</h1>";

$clientes = array(
    array(
        'nombre' => 'Pepe',
        'apellidos' => 'Martínez García',
        'dni' => '123456789'
    ),
    array(
        'nombre' => 'juan',
        'apellidos' => 'Millet Roig',
        'dni' => '1234562323'
    ),
    array(
        'nombre' => 'Rosa',
        'apellidos' => 'Escudero Mansilla',
        'dni' => '12344444'
    )
);


foreach ($clientes as $cliente) {
    print_r($cliente);
    echo "<hr>";
}

/*
foreach ($cliente as $indice => $valor) {
    echo "Clave: $indice => $valor <br>";
}*/