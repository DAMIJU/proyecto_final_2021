<?php

include("DB/conexion.php");

if(isset($_GET['Doc'])) {
  $Doc = $_GET['Doc'];
  $query = "DELETE FROM dueño WHERE Doc = $Doc";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: Dueño.php');
}

?>