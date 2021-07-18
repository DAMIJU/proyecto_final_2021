<?php

include("DB/conexion.php");

if(isset($_GET['Num_Registro_Cita'])) {

  /* AQUI SE ATRAPAN LOS DATOS */
  $Num_Registro_Cita = $_GET['Num_Registro_Cita'];

  /* AQUI SE CREA Y SE EJECUTA EL QUERY PARA ELIMINAR LA CITA SELECCIONADA */
  $query = "DELETE FROM tabla_citas WHERE Num_Registro_Cita = $Num_Registro_Cita";
  $result = mysqli_query($con, $query);

  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Cita eliminada correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Citas.php');
}

?>