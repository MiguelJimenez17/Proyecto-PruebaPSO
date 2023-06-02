<?php

session_start();
$conn = mysqli_connect(
  "localhost",
  "root",
  "",
  "PruebaPSO"
);

if ($conn) {
} else {
  echo "Error al conectar la base de datos";
}

?>