<?php
include("DB/conexion.php");

if(isset($_GET['Num_Registro_Cita'])) {
  $Num_Registro_Cita = $_GET['Num_Registro_Cita'];
  $query1= "SELECT * FROM tabla_citas WHERE Num_Registro_Cita = $Num_Registro_Cita";
  $resultado = mysqli_query($con, $query1);
  $mostrar=$resultado->fetch_assoc();
  $Cel_Dueño = $mostrar['Cel_Dueño'];
  $Num_Dueño = $mostrar['Num_Dueño'];
  $Num_Mascota = $mostrar['Num_Mascota'];
  $Tipo_Cita = $mostrar['Tipo_Cita'];
  $Notas_Internas = $mostrar['Notas_Internas'];
  $Fecha_Cita = $mostrar['Fecha_Cita'];
  $Hora_Cita = $mostrar['Hora_Cita'];
  $query3 = "INSERT INTO historial_mascota (Cel_Dueño, Num_Historial_Cita, Num_Dueño, Num_Mascota, Tipo_Cita, Notas_Internas, Fecha_Cita, Hora_Cita, Estado_Cita) VALUES ('$Cel_Dueño', '$Num_Registro_Cita', '$Num_Dueño', '$Num_Mascota', '$Tipo_Cita', '$Notas_Internas', '$Fecha_Cita', '$Hora_Cita', 'Completada')";
  $ResultadoInsertHistorial = mysqli_query($con, $query3);
  if(!$ResultadoInsertHistorial) {
    die("Query Failed.");
  }
  $query2 = "DELETE FROM tabla_citas WHERE Num_Registro_Cita = $Num_Registro_Cita";
  $result = mysqli_query($con, $query2);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Cliente $ eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Citas.php');
}
?>