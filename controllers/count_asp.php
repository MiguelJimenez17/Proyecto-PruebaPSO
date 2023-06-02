<?php
include('../db/db.php');

$id = $_SESSION['id'];
$rol = $_SESSION['rol'];

if ($rol == 1) {
  $query = 'SELECT COUNT(*) AS doc_user FROM usuario';
  $result = mysqli_query($conn, $query);

  if ($row = mysqli_fetch_assoc($result)) {
    $total = $row['doc_user'];
  }

  echo $total;

} else {
  echo "no eres administrador";
}



?>