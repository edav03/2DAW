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
        
        
        $id = $_GET['id'];
        
        echo "El registro a borrar es $id<br>";
        
        $sql = "DELETE FROM participantes WHERE IdParticipante = $id  ";   


    if (!mysqli_query($con, $sql)) {
        
        die('Error:'.mysqli_error($con)."<br>SQL:=".$sql);
    } 
    
    echo "registro borrado correctamente";
            
    mysqli_close($con);  
    
    header('Location: http://localhost/mysql/index.php');
    exit;
        
        
        
        
        
        ?>
    </body>
</html>
