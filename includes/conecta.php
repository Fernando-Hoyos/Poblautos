<?php
//declarar las variables donde guardas los valores de la conexion

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "basededatos";
$conecta = new mysqli($servidor, $usuario, $password, $bd);
if($conecta->connect_error){
    die("Error al conectar la base de datos de la pagina".$conecta->connect_error);
}
?>