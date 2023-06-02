<?php
include('../db/db.php');

$id_user = $_SESSION['id'];
$num_preguntas = 10; // Número total de preguntas

$respuestasCorrectas = 0;
$puntaje = 0;

for ($i = 1; $i <= $num_preguntas; $i++) {
  $respuesta = $_POST['respuesta' . $i];
  $respuestaCorrecta = $_POST['respuestaCorrecta' . $i];

  if ($respuesta === $respuestaCorrecta) {
    $respuestasCorrectas++;
    $puntaje += 10;
  }

  // Validar que todas las respuestas sean respondidas
  if (empty($respuesta)) {
    echo "Debes responder todas las preguntas.";
    exit;
  }
}

if (!empty($puntaje)) {
  $query = "UPDATE `usuario` SET `puntaje_prueba` = $puntaje WHERE doc_user = $id_user";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die("Error") . '' . mysqli_error($conn);
  } else {
    $queryPun = "SELECT puntaje_prueba FROM usuario WHERE doc_user = $id_user";
    $resultPun = mysqli_query($conn, $queryPun);

    if ($row = mysqli_fetch_array($resultPun)) {
      $_SESSION['puntaje'] = $row['puntaje_prueba'];
      if ($_SESSION['puntaje'] = $row['puntaje_prueba'] !== "") {
        echo $estado_prueba = "prueba finalizada";
        session_destroy();
      }
    }
  }
} else {
  if ($respuestasCorrectas == 0) {
    echo "No respondiste ninguna pregunta correctamente";
    $query = "UPDATE `usuario` SET `puntaje_prueba` = $puntaje WHERE doc_user = $id_user";
    $result = mysqli_query($conn, $query);
    session_destroy();
  }
}
?>
