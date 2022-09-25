<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>NOTAS</title>
    </head>
    <body>
        <form method="POST">
            Introduce tu nota:
            <input type="float" name="nota">
            <input type="submit" name="sub">
        </form>

        <?php
            $nota = $_POST['nota'];

            if ($nota < 5) {
                echo "Suspenso";
            } elseif ($nota >= 5 && $nota <= 6) {
                echo "Aprobado";
            } elseif ($nota > 6 && $nota <= 7) {
                echo "Bien";
            } elseif ($nota > 7 && $nota <= 8) {
                echo "Notable";
            } else {
                echo "Sobresaliente";
            }
        ?>
    </body>
</html>