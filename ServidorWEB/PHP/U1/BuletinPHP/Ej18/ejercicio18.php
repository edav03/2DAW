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

            for ($i=1; $i < 11 ; $i++) { 
                echo $number . "*" . $i . " = " . $number*$i . "<br>";
            }
        ?>
    </body>
</html>