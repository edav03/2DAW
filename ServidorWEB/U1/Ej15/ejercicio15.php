<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>NUMERO PRIMO</title>
    </head>
    <body>
    <form method="POST">
            Introduce un numero:
            <input type="integer" name="variable">

            <input type="submit" name="sub">
        </form>

        <?php
            $number = $_POST["variable"];
            $cont = 2;

            if($number == 2){
                echo "Es un numero primo";
            }else{

                while ($cont < $number) {
                
                    if (($number % $cont) == 0) {
                        echo "No es numero primo";
                        break;
                    }
                
                    if($cont == $number - 1){
                        echo "Es un numero primo";
                    }
                
                    $cont++;
                }
            }
        ?>
    </body>
</html>