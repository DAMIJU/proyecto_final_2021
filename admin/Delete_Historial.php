<?php

include("DB/conexion.php");

if(isset($_GET['Num_Historial_Cita'])) {
  $Num_Historial_Cita = $_GET['Num_Historial_Cita'];
  $query1= "SELECT * FROM historial_mascota WHERE Num_Historial_Cita = $Num_Historial_Cita";
  $resultado = mysqli_query($con, $query1);
  $mostrar=$resultado->fetch_assoc();
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