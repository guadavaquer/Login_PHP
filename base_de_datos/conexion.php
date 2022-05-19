<?php


$servidor ='localhost';
$usuario = 'root';
$clave = "";
$bd = 'tp1_programacion_web';
$port = 3308;

$conectar = mysqli_connect($servidor, $usuario, $clave, $bd,$port);

if($conectar == false){
    die('Error al conectar la base de datos');
}


?>