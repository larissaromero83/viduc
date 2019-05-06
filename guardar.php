<?php
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");
error_log( "Hello, errors!" );
error_reporting(E_ALL);
ini_set('display_errors', 1);
$usuario     = getenv('MYSQL_USERNAME'); //en ste caso root por ser localhost
$password    = getenv('MYSQL_PASSWORD'); //contraseña por si tiene algun servicio de hosting 
$servidor    = getenv('MYSQL_SERVERNAME'); //localhost por lo del xampp
$basededatos = getenv('MYSQL_DBNAME'); //nombre de la base de datos
//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect( $servidor, $usuario, $password ) or die( "Error con el servidor de la Base de datos" );
//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db( $conexion, $basededatos ) or die( "Error conexion al conectarse a la Base de datos" );
//recuperar las variables
$nombre      = $_POST[ 'nombre' ]; //name="nombre"
$sexo        = $_POST[ 'sexo' ]; //name="correo"
$edad        = $_POST[ 'edad' ]; //name="mensaje" //name="mensaje"
$preferencia = $_POST[ 'preferencia' ];
//sentencia sql
$sql         = "INSERT INTO datos (nombre, sexo, edad, preferencia) VALUES ('$nombre','$sexo','$edad','$preferencia')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
//ejecutamos la sentencia de sql
$ejecutar    = mysqli_query( $conexion, $sql );
//verificacion de la ejecucioon
if ( !$ejecutar ) {
    //echo "huvo algun error"; //si algo sale mal mandanos este mensaje
    error_log("Error al ejecutar el insert: " . error_log(mysqli_error($conexion)));
    echo(mysqli_error($conexion));

} else {
    //Compruebo si hay algún resultado
    $row = mysqli_query( $conexion, "SELECT * FROM datos ORDER by id DESC limit 1 " ) or die( "problemas en consultas:" . mysqli_error() );
    $row  = mysqli_fetch_array( $row );
    //Guardo los datos de la BD en las variables de php
    $var1 = $row[ "preferencia" ];
    switch ( $var1 ) {
        case "Deportes":
            header( 'Location: deportes.php' );
            break;
        case "Idiomas":
            header( 'Location: idiomas.php' );
            break;
        case "Cocina":
            header( 'Location: cocina.php' );
            break;
        case "Baile":
            header( 'Location: baile.php' );
            break;
        case "Electricidad":
            header( 'Location: electricidad.php' );
            break;
        case "Manicura":
            header( 'Location: manicura.php' );
            break;
        case "Estilista":
            header( 'Location: peluqueria.php' );
            break;
        case "Plomeria":
            header( 'Location: plomeria.php' );
            break;
        case "Costura":
            header( 'Location: costura.php' );
            break;
        default:
            header( 'Location: buscadorGenerico.php' );
    }



    
}
?>




