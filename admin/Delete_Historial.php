<?php

include("DB/conexion.php");

if(isset($_GET['Num_Historial_Cita'])) {

  /* AQUI SE RECIBEN LOS DATOS  */
  $Num_Historial_Cita = $_GET['Num_Historial_Cita'];

  /* AQUI SE CREA Y SE EJECUTA EL QUERY PARA ELIMINAR LA TAREA/PENDIENTE SELECCIONADA */
  $query = "DELETE FROM historial_mascota WHERE Num_Historial_Cita = $Num_Historial_Cita";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro eliminado correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Citas.php');
}

?>