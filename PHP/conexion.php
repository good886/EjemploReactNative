<?php
$server = "Tu servidor";
$user = "Usuario de la BD";
$pass = "Contraseña del Usuario";
$bd = "Base de dato o esquema al que se conectará el usuario";

$conexion =$conexion = mysqli_connect($server, $user, $pass,$bd);
if(!$conexion){
    echo 'FALLO AL CONECTARSE';
}
?>