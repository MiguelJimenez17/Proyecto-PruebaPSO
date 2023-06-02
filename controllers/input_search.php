<?php

include('../db/db.php');

$id = $_SESSION['id'];
$input_search = $_POST['data_input'];

if (isset($id) == 1) {
  $query = "SELECT doc_user, nombre_user FROM usuario WHERE  doc_user LIKE '%$input_search%' and id_rol_2 = 2";
  $result = mysqli_query($conn, $query);

  $json = array();

  if (!$result) {
    die("Error") . '' . mysqli_error($conn);
  } else {
    if ($row = mysqli_fetch_array($result)) {
      $json[] = array(
        'doc_user' => $row['doc_user'],
        'nombre_user' => $row['nombre_user']
      );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
  }
} else {
  
}



?>