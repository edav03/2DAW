<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HOLA ESTO ES HTML</h1>

    <?php

    echo "VAR_DUMP<br>";
    var_dump($_SERVER);
    echo "<hr>";
    echo "PRINT_R<br>";
    print_r($_SERVER);
    echo "<hr>";
    //per a posar comentaris
    /*
        per a comentar varies linies
    */
    $nom = "Juanjo";  //Variable de tipo string
    $any = 1990;  //Variable de tipo entero.
    $tipo_interes = 2.3;
    $hoy = date('d/m/Y');
    echo "Hoy es $hoy";


    echo " La variable nom es $nom i any es $any";

    phpinfo();
    echo "Hola es el meu primer programa en PHP";

    ?>
    <hr>
    <h3>El valor de nom es:</h3>
    <?= $nom . " es un texto añadido" ?>
    <?php echo $nom ?>

</body>

</html>