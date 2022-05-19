<?php 

$user = $_POST['user'];
$password = $_POST['password'];

require '../base_de_datos/conexion.php'; 


$sql = "SELECT * FROM usuarios where email = '$user' and contraseña = '$password'";
//var_dump($sql);
$result = mysqli_query($conectar, $sql);
//var_dump($result);
if (mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['user'] = $user;
    header("Location: ../index.php");
}
else {
    header("Location: login.php?v=0");
}

mysqli_close($conectar);
?>