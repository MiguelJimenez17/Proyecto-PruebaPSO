<?php
include('../db/db.php');

if (empty($_SESSION['id'])) {
  header('location: ../index.php');
}

$id = $_SESSION['id'];
$rol = $_SESSION['rol'];

if ($rol == 1) {
  $query = "SELECT id_user, doc_user, nombre_user FROM usuario WHERE id_rol_2 = 2";
  $result = mysqli_query($conn, $query);

  // $json = array();

  // while ($row = mysqli_fetch_array($result)) {
  //   $json[] = array(
  //     'doc_user' => $row['doc_user'],
  //     'nombre_user' => $row['nombre_user']
  //   );
  // }

  // $jsonString = json_encode($json);
  // // echo $jsonString;


} else {
  echo "no eres administrador";
}

?>


<!doctype html>
<html lang="es">

<head>
  <title>listado aspirante</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/page_home.css">
  <link rel="stylesheet" href="../styles/style_pages_admin/style_view_list_asp.css">
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
          <h2 id="text-panel-home">Listado Aspirantes</h2>
          <div id="new-asp">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
              id="btn-new-asp">
              Registrar nuevo aspirante
            </button>
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                <form class="d-flex" id="barra-busqueda">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    id="input-search">
                  <button class="btn btn-outline-success" type="submit" id="btn-search">Search</button>
                </form>
              </div>
            </nav>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog" id="modal-data">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="staticBackdropLabel">Registrar nuevo aspirante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div id="container-new-asp">
                      <form id="form-new-asp">
                        <select class="form-select" aria-label="Default select example" id="option-document">
                          <option selected>Tipo de documento</option>
                          <option value="CC" id="document-CC">Cedula de ciudadania</option>
                          <option value="TI" id="document-TI"> Tarjeta de identidad</option>
                          <option value="CE" id="document-CE">Cedula de extranjeria</option>
                          <option value="PPT" id="document-PPT"> Permiso por proteccion temporal</option>
                        </select>
                        <div class="form-group">
                          <input type="text" class="form-control" id="name-asp" placeholder="Nombre Del Aspirante">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="document-asp" placeholder="Numero De Documento">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="password-asp">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="roll-asp" value="2">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="puntaje-asp" value="0">
                        </div>
                        <hr>
                        <div id="btns">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <table class="table  table-striped" id="table-asp">
              <thead id="table-head">
                <tr>
                  <th scope="col" id="title-table">Documento Aspirante</th>
                  <th scope="col" id="title-table">Nombre Aspirante</th>
                </tr>
              </thead>
              <tbody id="dataList">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                  <tr>
                    <td id="doc_user">
                      <?php echo $row['doc_user'] ?>
                    </td>
                    <td id="nombre_user">
                      <?php echo $row['nombre_user'] ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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
  <script src="../js/page_home/input_search.js"></script>
  <script src="../js/admin/new_asp.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>