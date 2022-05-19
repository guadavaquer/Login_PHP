<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login/login.php");
    exit();
}
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

    <title>Index</title>
</head>

<body class="h-100 gradient-form" style="background-color: #eee;">
    <nav class=" navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="crud_usuarios/consulta_users.php">Consulta usuarios</a>
                </li>
                
                <!-- <li class="nav-item">
                    <a class="nav-link" href="crud_usuarios/editar_users.php">Editar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crud_usuarios/eliminar_users.php">Eliminar usuarios</a>
                </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login/logout.php">Cerrar sesión</a>
            </li>
            </ul>
        </div>
    </nav>

    <section class="h-100 gradient-form mt-4 mb-4">
        <div class="container w-50 h-100">
            <div class="card rounded-3 text-black">
                <div class="card-body p-md-3 mx-md-2">

                <img class="img-fluid" src="../img/card.jpg" alt="php" width="800" height="449">

                </div>
            </div>
        </div>
    </section>

</body>