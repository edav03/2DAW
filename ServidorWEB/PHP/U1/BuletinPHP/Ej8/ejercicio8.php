<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $numero1 = 3;
            $numero2 = 2;

            if ($numero1 * $numero2 > $numero1 + $numero2) {
                echo "El producto es mayor que la suma";
            } else {
                echo "La suma es mayor que el producto";
            }
        ?>
    </body>
</html>