<?php
include('../db/db.php');

if (empty($_SESSION['id'])) {
  header('location: ../index.php');
}

$id = $_SESSION['id'];
$rol = $_SESSION['rol'];

if ($rol == 1) {
  $query = "SELECT id_user, doc_user, nombre_user, puntaje_prueba,fecha_prueba  FROM usuario WHERE id_rol_2 = 2";
  $result = mysqli_query($conn, $query);

  // $json = array();

  // while ($row = mysqli_fetch_array($result)) {
  //   $json[] = array(
  //     'doc_user' => $row['doc_user'],
  //     'nombre_user' => $row['nombre_user'],
  //     'puntaje_prueba' => $row['puntaje_prueba'],
  //     'fecha_prueba' => $row['fecha_prueba'],
  //   );
  // }

  // $jsonString = json_encode($json);
  // echo $jsonString;


} else {
  echo "no eres administrador";
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Resultados</title>
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
            <a class="nav-link active" aria-current="page" href="../view/page_home_admin.php" id="home">Inicio</a>
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
          <h2 class="text-center" id="text-panel-home">Resultados</h2>
          <div id="table-result">
            <table class="table  table-striped" id="table-asp">
              <thead id="table-head">
                <tr>
                  <th scope="col" id="title-table">Documento Aspirante</th>
                  <th scope="col" id="title-table">Nombre Aspirante</th>
                  <th scope="col" id="title-table">Puntaje Prueba</th>
                  <th scope="col" id="title-table">Fecha Prueba</th>
                </tr>
              </thead>
              <tbody id="dataList">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                  <tr>
                    <td>
                      <?php echo $row['doc_user'] ?>
                    </td>
                    <td>
                      <?php echo $row['nombre_user'] ?>
                    </td>
                    <td>
                      <?php echo $row['puntaje_prueba'] ?>
                    </td>
                    <td>
                      <?php echo $row['fecha_prueba'] ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <a class="btn btn-success" id="reload-view-result" href="../controllers/result_list.php">Actualizar</a>
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