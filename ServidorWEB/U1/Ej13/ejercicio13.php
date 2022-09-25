<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Figura</title>
    </head>
    <body>
        <?php
            $n = 0;
            $i = 0;

            while ($n < 6) {

                while($i <= $n){
                    echo "*";
                    $i++;
                }

                echo "<br>";
                $n++;
                $i = 0;
            }

        ?>
    </body>
</html>