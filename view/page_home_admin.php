<?php

include('../db/db.php');

if (empty($_SESSION['id'])) {
  header('location: ../index.php');
}

$id = $_SESSION['id'];
$rol = $_SESSION['rol'];

if ($rol == 1) {
  $query = 'SELECT COUNT(*) AS doc_user FROM usuario';
  $result = mysqli_query($conn, $query);

  if ($row = mysqli_fetch_assoc($result)) {
    $total = $row['doc_user'];
  }
} else {
  echo "no eres administrador";
}

if ($rol == 1) {
  $query = 'SELECT COUNT(*) AS puntaje_prueba FROM usuario WHERE puntaje_prueba > 0';
  $result = mysqli_query($conn, $query);

  if ($row = mysqli_fetch_array($result)) {
    $pruebas_realizadas = $row['puntaje_prueba'];
  }
}

if ($rol == 1) {
  $query = 'SELECT COUNT(*) AS puntaje_prueba FROM usuario WHERE puntaje_prueba <= 0';
  $result = mysqli_query($conn, $query);

  if ($row = mysqli_fetch_array($result)) {
    $pruebas_pendientes = $row['puntaje_prueba'];
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <title>Administrador</title>
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
            <a class="nav-link active" aria-current="page" href="page_home_admin.php" id="home">Inicio</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="../controllers/list_asp.php" id="list-asp">Aspirantes</a>
          </li>
          <li class="nav-item" id="item-menu">
            <a class="nav-link" href="../controllers/result_list.php" id="result-prueba">Resultados</a>
          </li>
          </li>
          <li class="nav-item" id="item-menu">
            <a href="../controllers/sign_out.php" class="nav-link">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
      <div id="panel" class="col-md-8 text-center">
        <div id="container-info">
          <h2 class="text-center" id="title-home">Panel De Control</h2>
          <div id="container-card">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header" >Aspirante</div>
              <div class="card-body">
                <h5 class="card-title" id="total-asp">Total Aspirantes Habilitados</h5>
                <p class="card-text" id="data-asp">
                  <?php echo $total ?>
                </p>
              </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header">Pruebas</div>
              <div class="card-body">
                <h5 class="card-title">Total Pruebas Realizadas</h5>
                <p class="card-text">
                  <?php echo $pruebas_realizadas ?>
                </p>
              </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header">Pendientes</div>
              <div class="card-body">
                <h5 class="card-title">Total Pruebas Pendientes</h5>
                <p class="card-text">
                  <?php echo $pruebas_pendientes ?>
                </p>
              </div>
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