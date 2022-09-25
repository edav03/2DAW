<?php

$cont = 0;
$n1 = 0;
$n2 = 1;

echo $n1 . ", " . $n2 . ", ";

while ($cont < 20) {
    $n3 = $n2 + $n1;

    echo $n3 . ", ";

    $n1 = $n2;
    $n2 = $n3;
    $cont++;
}