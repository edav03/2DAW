<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $cadena1 = "Hola a todo el mundo";
            $cadena2 = "Mi nombre es Edison Alcocer";
            $cadena3 = $cadena1 . " " . $cadena2;

            echo $cadena3;
            echo "<br>";

            $cadena1 = $cadena1 . $cadena2;

            echo $cadena1;
        ?>
    </body>
</html>