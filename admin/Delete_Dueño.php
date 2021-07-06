<?php

include("DB/conexion.php");

if(isset($_GET['Num_Registro_Dueño'])) {
  $Num_Registro_Dueño = $_GET['Num_Registro_Dueño'];
  $query = "DELETE FROM tabla_dueño WHERE Num_Registro_Dueño = $Num_Registro_Dueño";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Cliente eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Dueño.php');
}

?>