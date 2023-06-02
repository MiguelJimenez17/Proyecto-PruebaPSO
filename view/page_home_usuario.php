<?php

include('../db/db.php');

if (empty($_SESSION['id'])) {
  header('location: ../index.php');
}
?>


<!doctype html>
<html lang="en">

<head>
  <title>Usuario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/page_home.css">
</head>

<body>
  <?php include('../partials/partial_page_home/header.php') ?>
  <main class="container-fluid">
    <div class="row" id="container-home">
      <div id="menu" class="col-sm-5">
        <ul class="nav flex-column">
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="#" id="btn-prueba">Prueba 1</a>
          </li>
          <!-- <li class="nav-item" id="item-menu">
            <a class="nav-link" href="../view/user_view/view_prueba_II.php" id="btn-prueba">Prueba 2</a>
          </li> -->
          <li class="nav-item" id="item-menu">
            <a href="../controllers/sign_out.php" class="nav-link">Cerrar Sesión</a>
          </li>
        </ul>
      </div>

      <div id="panel" class="col-md-8 text-center">
        <div id="container-info">
          <div class="card">
            <h5 class="card-header">Bienvenido/a
              <?php echo $_SESSION['nombre'] ?>
            </h5>
            <div class="card-body">
              <p class="card-text">Esta evaluación consta de dos series que pondrán a prueba tus conocimientos previos
                antes de comenzar tu programa de formación. El objetivo de esta prueba es seleccionar a las personas con
                el mejor rendimiento y evaluar su nivel de capacitación al momento de iniciar su carrera.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include('../partials/partial_page_home/footer.php') ?>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="../js/page_home/data_home.js"></script>
  <script src="../js/page_user/prueba.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>