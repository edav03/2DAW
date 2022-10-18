<?php

$filas = array(
    array(
        'nombre' => 'Antonio', 'apellidos' => 'Gomez Gomez', 'telefono' => '675832145'),
    array(
        'nombre' =>'Pedro', 'apellidos' => 'Guillen Gaston', 'telefono' => '674562178'),
    array(
        'nombre' => 'Dolores', 'apellidos' => 'Candela Quema', 'telefono' => '689765432'),
    array(
        'nombre' =>'Ruben', 'apellidos' => 'Guardia Jurado', 'telefono' => '654213896')
);

echo "<table border='1'>";

foreach ($filas as $sol) {
    echo "<tr>";
    echo "<th>" . $sol['nombre'] . "</th>";
    echo "<th>" . $sol['apellidos'] . "</th>";
    echo "<th>" . $sol['telefono'] . "</th>";
    echo "</tr>";
}

echo "</table>";