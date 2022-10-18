<?php

function promedio($a, $b)
{
    //  echo "El valor medio de $a y $b es" . ($a + $b) / 2;
    return ($a + $b) / 2;
}

$num1 = 6;
$num2 = 4;

echo "El valor medio de $num1 y $num2 es " . promedio($num1, $num2);