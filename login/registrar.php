<?php
    if(isset($_GET["v"])){
        $validate = $_GET["v"];
    }
    else{
        $validate = -1;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>

    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">

    <script src="/js/jquery/jquery.slim.min.js"></script>
    <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

</head>

<body class="h-100 gradient-form" style="background-color: #eee;">
    <section class="h-100 gradient-form mt-4 mb-4">
        <div class="container w-50 h-100">
            <div class="card rounded-3 text-black">
                <div class="card-body p-md-3 mx-md-2">



    <?php
    if ($validate != "2"){
    ?>
                    <h2 class="mt-1 mb-4 pb-1">Registrar usuario</h2>

                    <form action="crear_usuario.php" method="POST">

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example11">Nombre</label>
                            <input type="name" id="form2Example11" class="form-control" placeholder="Ingresar nombre"
                                name="nombre" />
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example11">Apellido</label>
                            <input type="lastname" id="form2Example11" class="form-control"
                                placeholder="Ingresar apellido" name="apellido" />
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example11">Email</label>
                            <input type="email" id="form2Example11" class="form-control" placeholder="Ingresar email"
                                name="email" />
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example11">Contraseña</label>
                            <input type="password" id="form2Example11" class="form-control"
                                placeholder="Ingresar contraseña" name="contraseña" />
                        </div>

                        <div class="form-outline mb-3">
                            <label class="form-label" for="form2Example11">Repetir contraseña</label>
                            <input type="password" id="form2Example11" class="form-control"
                                placeholder="Ingresar nuevamente contraseña" name="repetir_contraseña" />
                        </div>
            <?php
                if ($validate == "0"){
                    echo "<div class='alert alert-danger mb-4 text-center'>Las contraseñas no coinciden.</div>";
                }
                if ($validate == "1"){
                    echo "<div class='alert alert-danger mb-4 text-center'>No se pudo completar la operación. Reintente más tarde.</div>";
                }
                if ($validate == "3"){
                    echo "<div class='alert alert-danger mb-4 text-center'>Se deben completar todos los campos.</div>";
                }
            ?>
                        <div class="text-center pt-1 mb-2 pb-1">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                type="submit">Registrarse
                            </button>
                        </div>

                       
        </form>

        <?php
    }
    else{
    ?>
                    <h2 class="mt-1 mb-5 pb-1 text-center">El usuario se registro correctamente</h2>
                    <form action="login.php">
                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Volver
                                a pantalla login</button>
                        </div>
                    </form>
                    <?php    
    }
    ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>