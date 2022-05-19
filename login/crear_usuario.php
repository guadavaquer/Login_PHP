<?php 

require '../base_de_datos/conexion.php'; 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['contraseña'];
$repetir_clave = $_POST['repetir_contraseña'];

 if (empty($nombre) || empty($apellido) || empty($email) || empty($clave) || empty($repetir_clave)) {
    header("Location: registrar.php?v=3");
    exit();
}
 if ($clave != $repetir_clave) {
    header("Location: registrar.php?v=0");
    exit();
}

$consulta_sql = "INSERT INTO usuarios(nombre, apellido, email, contraseña)
VALUES ('$nombre', '$apellido', '$email', '$clave');";

$ejecutar_consulta = mysqli_query($conectar, $consulta_sql);
var_dump($ejecutar_consulta);

if(isset($ejecutar_consulta) && !empty($ejecutar_consulta)){
    header("Location: registrar.php?v=2");
}   
else{
    header("Location: registrar.php?v=1");
}

mysqli_close($conectar);

?>