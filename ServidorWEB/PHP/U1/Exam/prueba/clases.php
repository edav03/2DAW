<?php
$fila = array(
    array('nombre' => 'Antonio', 'apellidos' => 'Gomez Gomez', 'telefono' =>'657832145'),
    array('nombre' => 'Edison', 'apellidos' => 'Alcocer Valencia', 'telefono' =>'657616761'),
    array('nombre' => 'Alejandro', 'apellidos' => 'Millet Mantas', 'telefono' =>'654321456'),
    array('nombre' => 'Quique', 'apellidos' => 'Barres Peiro', 'telefono' =>'987456123'),
);
    $s = "<table border = '1'>";

    foreach($fila as $a){
        $s .= "<tr>";
        foreach ($a as $v) {
            $s .= "<td>" . $v . "</td>";
        }
        $s .= "</tr>";
    }

    $s .= "</table>";
    echo $s;
?>