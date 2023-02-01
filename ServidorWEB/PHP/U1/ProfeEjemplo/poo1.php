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
    class Persona
    {
        private $nombre;
        public function __construct($nom)
        {
            $this->nombre = $nom;
        }
        public function imprimir()
        {
            echo "<br>Hola mi nombre es " . $this->nombre;
            echo "<br>";
        }
    }

    $persona1 = new Persona("Juanjo");
    $persona1->imprimir();
    $persona2 = new Persona("Pepito");
    $persona2->imprimir();


    ?>

</body>

</html>