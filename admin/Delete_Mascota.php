<?php

include("DB/conexion.php");

if(isset($_GET['Num_Registro'])) {
  $Registro = $_GET['Num_Registro'];
  $query = "DELETE FROM Tabla_mascotas WHERE Num_Registro = $Registro";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: Mascota.php');
}

?>