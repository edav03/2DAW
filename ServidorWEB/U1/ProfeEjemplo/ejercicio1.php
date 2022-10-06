<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Numero Aleatorio
    <?php
    $numero = rand(1, 100);
    ?>

    <h1><?= $numero ?></h1>

    <h2>
        <?php
        if ($numero < 10) {
            echo "Tiene 1 dígito<br>";
        } elseif ($numero < 100) {
            echo "Tiene 2 dígitos<br>";
        } else
            echo "Tiene 3 dígito<br>";
        ?>
    </h2>

</body>

</html>