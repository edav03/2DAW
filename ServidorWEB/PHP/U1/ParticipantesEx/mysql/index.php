<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <a href="insertar.php"><h2>INSERTAR PARTICIPANTE</h2></a>   
        
        
        <?php
        $host="localhost";
        $user = "root";
        $password="root";
        $database = "carreras";
        //Crear conexion 
        $con=mysqli_connect($host, $user, $password, $database );
        //Comprobar conexion.
        if (mysqli_connect_errno($con)){
            
            echo "Fallo al conectar a MYSQL".
                    mysqli_connect_error();
            
        }
        else {
            echo "Conexion Correcta<br>";
        }
        
        $orden = 'Apellidos';
        
        if (isset($_GET['orden'])) {
        
            $orden=$_GET['orden'];
        }
        
        
        $sql =  "SELECT * FROM participantes ORDER BY $orden";
        echo "<table border=1>";
        
        $result = mysqli_query($con, $sql);
                
        //print_r($result);
        echo "<th><a href='index.php?orden=Dorsal'>Dorsal</a></th>"
        . "<th><a href='index.php?orden=Apellidos'>Apellidos</a></th><th>Nombre</th>"
        . "   <th>Poblacion</th><th>CLUB</th><th colspan='2'>Operaciones</th>";
        while ( $fila = mysqli_fetch_array($result)) {
           // print_r($fila);
            echo "<tr>";
            echo "<td>".$fila['Dorsal']."</td><td>".$fila['Apellidos'].
            "</td><td>".$fila['Nombre']."</td><td>".$fila['Poblacion'].
            "</td><td>".$fila['CLUB'];
            
            $id=$fila['IdParticipante'];
            echo "<td><a href='editar.php?id=$id'>Editar</a></td>";
            echo "<td><a href='borrar.php?id=$id'>Borrar</a></td>";
            
            echo "</tr>";
        }
        
        
        
        echo "</table>";
        
        
        //Tancar connexio
        mysqli_close($con);
        ?>
    </body>
</html>
