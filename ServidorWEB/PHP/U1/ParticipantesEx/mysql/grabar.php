<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
        
$nombre =$_POST['nombre'];
$dorsal =$_POST['dorsal'];
$apellidos =$_POST['apellidos'];
$club =$_POST['club'];
$poblacion =$_POST['poblacion'];


$sql = " INSERT INTO participantes(Dorsal,Apellidos,Nombre,
    Poblacion,CLUB ) VALUES ($dorsal,'$apellidos','$nombre',
     '$poblacion','$club') ";   


    if (!mysqli_query($con, $sql)) {
        
        die('Error:'.mysqli_error($con)."<br>SQL:=".$sql);
    } 
    
    echo "registro añadido correctamente";
            
    mysqli_close($con);  
    
    header('Location: http://localhost/mysql/index.php');
    exit;
            
    
            
            
            
            
            