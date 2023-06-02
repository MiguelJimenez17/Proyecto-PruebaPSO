<?php
include("../db/db.php");

$document = $_POST['documentAsp'];


if (!empty($document)) {
  $query = "SELECT * FROM usuario WHERE doc_user = $document";
  $result = mysqli_query($conn, $query);


  if (!$result) {
    die("Error al realizar la consulta");
  } else {
    if ($row = mysqli_fetch_row($result)) {
      echo "El numero de documento ya esta registrado";
    } else {
      // codigo que registra al usuario si el numero de documento no se encuentra registrado en base de datos.
      $typeDocumentAsp = $_POST['typeDocumentAsp'];
      $documentAsp = $_POST['documentAsp'];
      $passwordAsp = $_POST['passwordAsp'];
      $name_asp = $_POST['name_asp'];
      $rollAsp = $_POST['rollAsp'];
      $puntajeAsp = $_POST['puntajeAsp'];

      $queryNewUser = "INSERT INTO usuario(tipo_doc_user, doc_user,pass_user,nombre_user,id_rol_2, puntaje_prueba)VALUES('$typeDocumentAsp', $documentAsp, '$passwordAsp', '$name_asp', $rollAsp, $puntajeAsp)";
      $result = mysqli_query($conn, $queryNewUser);

      if (!$result) {
        die("Error") . '' . mysqli_errno($conn);
      } else {
        echo "Registro exitoso.";
      }
    }
  }
}



?>