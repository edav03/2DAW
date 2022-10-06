<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $canal = fopen("datos.txt", "r") or
        die("No se puede abrir el fichero");
    while (!feof($canal)) {
        $linea = fgets($canal);
        $linea_con_salto = nl2br($linea);
        echo $linea_con_salto;
    }



    fclose($canal);
    ?>
</body>

</html>