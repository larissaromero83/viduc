<?php

//Chiphysi programación suscribete 
//V 0.1 original
//Autor: Chiphysi  Autor: Jhonatan Cardona  
//Derechos de autor(Suscribete)


    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="formulario1"; //nombre de la base de datos
    $boton1 =""; //variable

    $var1 = "";
    $var2 = "";
    $var3 = "";


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; //name="nombre"
    $sexo=$_POST['sexo']; //name="correo"
    $edad=$_POST['edad']; //name="mensaje" //name="mensaje"
    $intereses=$_POST['intereses']; //name="mensaje"
    $email=$_POST['email'];
    $preferencia=$_POST['preferencia'];

    //sentencia sql
    $sql="INSERT INTO datos VALUES ('','$nombre','$sexo','$edad','$intereses','$email','$preferencia')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);

    
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; //si algo sale mal mandanos este mensaje
        
    }else{
        //echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; //si todo sale bien mandanos este mensaje
         //Compruebo si hay algún resultado
         $row= mysqli_query($conexion,"SELECT * FROM datos ORDER by id DESC limit 1 ") or die ("problemas en consultas:".mysqli_error());
        $row = mysqli_fetch_array($row);
         //Guardo los datos de la BD en las variables de php
         $var1 = $row["sexo"];
         $var2 = $row["edad"];
         if ($var1=="femenino") {
            header('Location: interes2.php');
          }else{
            header('Location: interes3.php');
 }       
}      
       
        
    
     
?>﻿



