<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $rnumber1 = rand(1, 50);
            $rnumber2 = rand(1, 50);
            $rnumber3 = rand(1, 50);
            $rnumber4 = rand(1, 50);
            $rnumber5 = rand(1, 50);

            $estrella1 = rand(1, 9);
            $estrella2 = rand(1, 9);

            echo "Numeros generados al azar: " . $rnumber1 . " " . $rnumber2 . " " . $rnumber3 . " " . $rnumber4 . " " . $rnumber5;
            echo "<br>Estrellas: " . $estrella1 . " " . $estrella2;
        ?>
    </body>
</html>