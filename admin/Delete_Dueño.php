<?php

include("DB/conexion.php");

if(isset($_GET['Celular'])) {
  $Celular = $_GET['Celular'];
  $query = "DELETE FROM tabla_dueño WHERE Celular = $Celular";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Cliente eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Dueño.php');
}

?>