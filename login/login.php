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

  <title>Login usuario</title>
</head>

<body class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-4 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-3 mx-md-2">

                  <div class="text-center">
                    <img class="img-fluid" src="../img/logo.png" alt="php" width="80" height="80">
                    <h1 class="mt-4 mb-4 pb-1 single-line">¡Bienvenido a PHP!</h1>
                  </div>

                  <form action="validar_usuario.php" method="POST">
                    <!-- <p>Por favor ingresa tu cuenta</p> -->

                    <div class="form-outline mb-4">
                      <label class="form-label" >Usuario</label>
                      <input type="email" class="form-control" placeholder="Ingresar email"
                        name="user" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="password"
                        placeholder="Ingresar contraseña" />
                    </div>

                    <?php 
                  if(isset($_GET["v"])){
                      $validate = $_GET["v"];
                      if ($validate == "0"){
                      echo "<div class='alert alert-danger mb-4 text-center'> El usuario y/o la contraseña son incorrectos.</div>";
                      }
                    }
                  ?>

                    <div class="text-center pt-1 mb-4 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar sesión</button>
                    </div>


                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">No tenes una cuenta?</p>
                      <a href="registrar.php"><button style="margin-left: 10px" type="button"
                          class="btn btn-outline-success"> Nuevo usuario</button></a>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
