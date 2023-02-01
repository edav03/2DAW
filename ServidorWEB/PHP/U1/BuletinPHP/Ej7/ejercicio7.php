<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $rand = rand();

            if ($rand%2 != 0){
                echo "El numero ". $rand . " es impar";
            } else{
                echo "El numero ". $rand . " es par";
            }
        ?>
    </body>
</html>