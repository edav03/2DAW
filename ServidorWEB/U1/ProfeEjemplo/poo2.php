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
    class CabeceraPagina
    {
        private $titulo;
        private $ubicacion; //center, left , right

        public function __construct($tit, $ubi = "center")
        {
            $this->titulo = $tit;
            $this->ubicacion = $ubi;
        }
        public function imprimir()
        {

            echo '<div style="font-size:40px;text-align:' . $this->ubicacion . '">';
            echo $this->titulo;
            echo '</div>';
        }
    }

    $cabecera = new CabeceraPagina("El Blog del programador", "left");
    $cabecera->imprimir();

    ?>

</body>

</html>