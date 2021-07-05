<?php

include("DB/conexion.php");

if(isset($_GET['Celular'])) {
  $Celular = $_GET['Celular'];
  $query2="SELECT * FROM tabla_dueño INNER JOIN tabla_mascotas ON tabla_dueño.Celular = tabla_mascotas.Cel_Dueño WHERE Celular='$Celular'";
      $resultado= $con->query($query2);
      $row=$resultado->fetch_assoc();
  $id = $row['Celular'];    
  $query = "DELETE FROM tabla_dueño WHERE Celular = $Celular";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'El cliente <?php echo $id ?> fue eliminado correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Dueño.php');
}

?>