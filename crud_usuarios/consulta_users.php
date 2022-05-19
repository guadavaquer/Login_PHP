<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: /login/login.php");
    exit();
}

require '../base_de_datos/conexion.php';

$sql = "SELECT * FROM usuarios order by id_usuario";
//var_dump($sql);


$result = mysqli_query($conectar, $sql);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">

    <script src="/js/jquery/jquery.slim.min.js"></script>
    <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <title>Consulta usuarios</title>
</head>

<body class="h-100 gradient-form" style="background-color: #eee;">
    <nav class=" navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="editar_users.php">Editar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="eliminar_users.php">Eliminar usuarios</a>
                </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/login/logout.php">Cerrar sesión</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="container justify-content-md-center">
        <div class="card rounded-3 text-black">
            <div class="card-body p-md-3 mx-md-2">
                <h2 class="mt-1 mb-4 pb-1">Consulta de usuarios</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th scope='row'>".$row["id_usuario"]."</th>"; 
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellido"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["contraseña"]."</td>";
        echo "</tr>";  
    }
}
else {
    echo "<div class='row'><div class='col'>No se encontraron registros</div></div>";
}
mysqli_close($conectar);
   ?>

            </div>
        </div>
    </div>
    </div>
</body>