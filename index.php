<?php

require_once('db/db.php');

if (isset($_SESSION['id'])) {
  header('location: view/page_home_admin.php');
}


?>


<!doctype html>
<html lang="en">

<head>
  <title>Inicio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/index.css">
</head>

<body>
  <main class="container">
    <div class="row">
      <container id="elements">
        <h1 class="text-center" id="title-home">PRUEBA FASE II SALUD OCUPACIONAL</h1>
        <div class="row">
          <img src="assets/logo-sena-verde-png-sin-fondo.png" class="img-fluid rounded-top col-md-5" alt="Escudo SENA"
            id="logoSena">
          <div id="form" class="col-md-5">
            <div class="card" id="card-form">
              <h2 id="text-form" class="text-center">Bienvenido</h2>
              <form method="post" class="card-body" action="index.php">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id_user" name="id_user">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="input-document" placeholder="Numero de documento"
                    name="doc_user">
                  <span id="alerta-documento"></span>
                </div>
                <br>
                <div class="form-group">
                  <input type="password" class="form-control" id="input-password" placeholder="Contraseña"
                    name="pass_user">
                  <span id="alerta-contraseña"></span>
                </div>
                <div class="btn">
                  <button class="btn btn-success" id="btn-success" type="submit">Ingresar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </container>
    </div>
  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>