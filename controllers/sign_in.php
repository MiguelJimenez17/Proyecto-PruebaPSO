<?php
include('../db/db.php');

//$current_url = $_SERVER['REQUEST_URI'];


$documento = $_POST['documento'];
$password = $_POST['password'];

$documento = mysqli_real_escape_string($conn, $documento);
$password = mysqli_real_escape_string($conn, $password);

try {
  if (isset($_POST['documento']) && isset($_POST['password'])) {


    $query = "SELECT * FROM usuario WHERE doc_user = $documento and  pass_user = $password";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_array($result)) {
      $_SESSION['id'] = $row['doc_user'];
      $_SESSION['nombre'] = $row['nombre_user'];
      $_SESSION['puntaje_prueba'] = $row['puntaje_prueba'];
      $_SESSION['rol'] = $row['id_rol_2'];
      if ($_SESSION['rol'] == 1) {
        echo "administrador";
      } elseif ($_SESSION['rol'] == 2) {
        echo "usuario";
      }
      if ($_SESSION['puntaje_prueba'] > 0) {
        echo "ya realizaste la prueba";
        session_destroy();
      }


    }
  }
} catch (\Throwable $th) {
  die($th) . '' . mysqli_error($conn);
}


?>