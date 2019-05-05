<?php
$usuario     = getenv('MYSQL_USERNAME'); //en ste caso root por ser localhost
$password    = getenv('MYSQL_PASSWORD'); //contraseña por si tiene algun servicio de hosting
$servidor    = getenv('MYSQL_SERVERNAME'); //localhost por lo del xampp
$basededatos = getenv('MYSQL_DBNAME'); //nombre de la base de datos

$conexion = mysqli_connect( $servidor, $usuario, $password ) or die( "problemas al conectar server" );
mysqli_select_db( $conexion, $basededatos ) or die( "Error conexion al conectarse a la Base de datos" );
$registro = mysqli_query( $conexion, "SELECT * FROM datos ORDER by id DESC limit 1 " ) or die( "problemas en consultas:" . mysqli_error() );
while ( $reg = mysqli_fetch_array( $registro ) ) {
    echo $reg[ 'nombre' ];
}
?>
