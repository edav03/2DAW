<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
            <p>
                Number 1:
                <input type="integer" name="numero1"><br>
            </p>

            <p>
                Number 2:
                <input type="integer" name="numero2"><br>
            </p>
            
            <button>SUBMIT</button>
        </form>
        <?php
            $n1 = $_GET['numero1'];
            $n2 = $_GET['numero2'];

            if ($n1 > 0 && $n2 < $n1) {
                echo "Edison David";
            }else if ($n1 > 0 && $n2 >= $n1){
                echo "Alcocer Valencia";
            }else {
                echo "Edison David Alcocer Valencia";
            }
        ?>
    </body>
</html>