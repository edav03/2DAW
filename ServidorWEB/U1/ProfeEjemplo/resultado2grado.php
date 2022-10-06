<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$disc = $b * $b - (4 * $a * $c);

echo "Valor disc = $disc <br>";

if ($a == 0) {
    $x1 = -$c / $b;
    $x1 = number_format($x1, 2);
    echo "La solución es " . $x1;
    return;
}

if ($disc < 0) {
    echo "No existe solución<br>";
} elseif ($disc == 0) {
    //Unica solución
    $x1 = -$b / (2 * $a);
    echo "Solución única $x1<br>";
} else {
    //dos soluciones
    $x1 = (-$b + sqrt($disc)) / (2 * $a);
    $x2 = (-$b - sqrt($disc)) / (2 * $a);

    $x1 = number_format($x1, 2);
    $x2 = number_format($x2, 2);


    echo "Las soluciones son $x1 y $x2 <br>";
}