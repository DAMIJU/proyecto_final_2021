<?php

include("DB/conexion.php");

if(isset($_GET['Num_Registro_Mascota'])) {
  $Registro = $_GET['Num_Registro_Mascota'];
  $query = "DELETE FROM tabla_mascotas WHERE Num_Registro_Mascota = $Registro";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: Mascota.php');
}
?>