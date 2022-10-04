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
        <?php
        $id = $_GET['id'];
        
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
        
        $sql =  "SELECT * FROM participantes WHERE IdParticipante = $id ";
        
        $result = mysqli_query($con, $sql);
        
 while ( $fila = mysqli_fetch_array($result)) {
            $dorsal= $fila['Dorsal'];
            $apellidos = $fila['Apellidos'];
            $nombre = $fila['Nombre'];
            $poblacion = $fila['Poblacion'].
            $club = $fila['CLUB'];
                                    
        }        

        ?>
        <form name="form1" action="actualizar.php" method="POST">
        Dorsal:
        <input type="text" name="dorsal" value="<?php echo $dorsal; ?>" /><br>
        Apellidos:
        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" /><br>
        Nombre:
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" /><br>
        Poblacion:
        <input type="text" name="poblacion" value="<?php echo $poblacion; ?>" /><br>
        Club:
        <input type="text" name="club" value="<?php echo $club; ?>" /><br>
        
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="submit" value="Actualizar" name="actualizar" />
        
        
        </form>  
        
        
        
    </body>
</html>
