<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <form method="POST">
            
            Introduce un numero:
            <input type="integer" name="variable"><br>

            <input type="submit" name="sub">
        </form>

        <?php
            $number = $_POST['variable'];
            $n = 1;

            while ($n < 11){
                echo $number . ' * ' . $n . " = " . $number*$n . "<br>";

                $n++;
            }
        ?>
    </body>
</html>