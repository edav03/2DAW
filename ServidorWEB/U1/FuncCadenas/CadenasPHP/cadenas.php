<?php
    $Nombre = $_POST['Nombre'];
    $Prefijo = $_POST['Prefijo'];
    $url = $_POST['url'];

    echo "
    <h3>1. Muestra el valor de un parámetro llamado nombre
    recibido por querystring eliminando los caracteres '/'
    del principio y el final si los hubiera (función trim).
    Si no se pasa un parámetro nombre se utilizará tu nombre de pila.</h3><br>
    ";
    $trimmed = trim($Nombre, "/");
    echo "El nombre es $trimmed";

    echo nl2br("
    <h3>\n2. Muestra la longitud del parámetro nombre (función strlen) Muestra el nombre en mayúsculas (función strtoupper) Muestra el nombre en minúsculas (función strtolower)</h3><br>
    ");
    echo strlen($Nombre) . "<br>";
    echo strtoupper($Nombre) . "<br>";
    echo strtolower($Nombre) . "<br>";

    echo nl2br("
    <h3>\n3. Pasa un segundo parámetro por querystring llamado prefijo (para pasar más de un parámetro por la querystring debes separarlos utilizando el carácter &). Después indica si el nombre comienza por el prefijo pasado
    o no (función strpos), se distinguirá entre mayúsculas y minúsculas. Si no se pasa el prefijo no se realizará esta operación.</h3><br>
    ");
    $strpos = strpos($Nombre, $Prefijo);
    if (empty($Prefijo)){
        echo "No se a indicado prefijo";
    } else if ($strpos === 0){
        echo "El nombre empieza por el prefijo pasado";
    } else {
        echo "El nombre no empieza por el prefijo pasado";
    }
    echo "<br>";

    echo nl2br("
    <h3>\n4. Muestra el número de veces que aparece la letra a (mayúscula o minúscula) en el parámetro nombre (funciones substr_count + (strtoupper o strtolower)).</h3><br> ");
    $letraA = strtolower($Nombre);
    echo substr_count($letraA, "a") . "<br>";

    echo nl2br("
    <h3>\n5. Muestra la posición de la primera a existente en el nombre (sea mayúscula o minúscula). Si no hay ninguna mostrará un texto indicándolo (función stripos).</h3><br>");
    echo stripos($Nombre, "a");


    echo nl2br("
    <h3>\n6. Muestra el nombre sustituyendo las letras ‘o’ por el número cero (sea mayúscula o minúscula) (función str_ireplace).</h3><br>");
    echo str_ireplace("o","0",$Nombre) . "<br>";

    echo nl2br("
    <h3>\n7. Utiliza la función parse_url para extraer y mostrar por pantalla las siguientes partes de la variable url del ejemplo:</h3><br>");
    var_dump(parse_url($url, PHP_URL_SCHEME));
    echo "<br>";
    var_dump(parse_url($url, PHP_URL_USER));
    echo "<br>";
    var_dump(parse_url($url, PHP_URL_PATH));
    echo "<br>";
    var_dump(parse_url($url, PHP_URL_QUERY));
?>