<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            Introduce un numero:
            <input type="integer" name="variable">

            <input type="submit" name="sub">
        </form>

        <?php
            $number = $_POST["variable"];
            $cont = 1;

            while ($cont <= $number) {

                if (($number % $cont) == 0) {
                    echo $cont . ', ';
                }

                $cont++;
            }
        ?>
    </body>
</html>