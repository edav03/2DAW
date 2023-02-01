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

            if($number == 2){
                echo "Es un numero primo";
            }else{

                for ($i=2; $i <$number; $i++) { 

                    if (($number % $i) == 0) {
                        echo "No es numero primo";
                        break;
                    }
                
                    if($i == $number - 1){
                        echo "Es un numero primo";
                    }

                }

            }
        ?>
    </body>
</html>