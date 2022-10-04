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
        
        $dorsal = $_POST['dorsal'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $poblacion = $_POST['poblacion'];
        $club = $_POST['club'];
        $id = $_POST['id'];
        
        $sql= "UPDATE participantes SET
              Dorsal = $dorsal,
              Apellidos = '$apellidos',
              Nombre = '$nombre',
              Poblacion = '$poblacion',
              CLUB = '$club'
              WHERE IdParticipante = $id";    
        
        echo $sql;
        
        
        if (!mysqli_query($con, $sql)) {
        
        die('Error:'.mysqli_error($con)."<br>SQL:=".$sql);
        } 
                
        mysqli_close($con);
        
        header('Location: http://localhost/mysql/index.php');
        exit;
        
        
        ?>
    </body>
</html>
