<?php
$FirstArray = ['Paul Hendea', 'Raul Ivars', 'Joan Barres', 'Isabel Millet', 'Toni Vidal', 'David Palau', 'Edison Alcocer'];

echo "<h3>1. Crea un array llamado nombres que contenga varios nombres Muestra el número de elementos que tiene el array (función count)</h3>";
var_dump(count($FirstArray));

echo "<h3>2. Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode) Muestra el array ordenado alfabéticamente (función asort)</h3>";

echo "<br>";
// asort($FirstArray);
$Second = asort($FirstArray);
print_r($Second);

echo "<h3>3. Muestra el array en el orden inverso al que se creó (función array_reverse) Muestra la posición que tiene tu nombre en el array (función array_search) Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.</h3>";
