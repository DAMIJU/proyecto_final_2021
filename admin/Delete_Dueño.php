<?php

include("DB/conexion.php");

if(isset($_GET['Num_Registro_Dueño'])) {

  /* AQUI SE ATRAPAN LOS DATOS */
  $Num_Registro_Dueño = $_GET['Num_Registro_Dueño'];

  /* AQUI SE CREA Y SE EJECUTA EL QUERY PARA ELIMINAR EL DUEÑO SELECCIONADO */
  $query = "DELETE FROM tabla_dueño WHERE Num_Registro_Dueño = $Num_Registro_Dueño";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Cliente Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Dueño.php');
}

?>