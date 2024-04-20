<?php
#Archivos de configuracion de conexion al servidor
#Creamos las variables de para conectarnos al servidor
$server = "localhost";
$user = "root";
$pass = "";
#Creamos la conexion mysql
$conexion = new mysqli($server,$user,$pass);
#evaluamos la conexion con el if
if($conexion->connect_error){
    die("Error de conexion: ".$conexion->connect_error);
}
echo "Conexion Establecida";
?>

