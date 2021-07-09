<?php

include('DB/conexion.php');

if (isset($_POST['agregar_cita'])) {
  $Cel_Dueño = $_POST['Cel_Dueño'];
  $Num_Dueño = $_POST['Num_Dueño'];
  $Num_Mascota = $_POST['Num_Mascota'];
  $Tipo_Cita = $_POST['Tipo_Cita'];
  $Fecha_Cita = $_POST['Fecha_Cita'];
  $Hora_Cita = $_POST['Hora_Cita'];
  $Estado_Cita = $_POST['Estado_Cita'];
  $query = "INSERT INTO tabla_citas(Cel_Dueño, Num_Registro_Cita, Num_Dueño, Num_Mascota, Tipo_Cita, Fecha_Cita, Hora_Cita, Estado_Cita) VALUES ('$Cel_Dueño', null, '$Num_Dueño',  '$Num_Mascota', '$Tipo_Cita', '$Fecha_Cita', '$Hora_Cita', '$Estado_Cita'";
  $ResultadoInsertCita = mysqli_query($con, $query);
  

  if($ResultadoInsertCita){
    echo "<script>alert('La cita para $Nombre_Mascota se ha agregado satisfactoriamente');window.location='Mascota.php'</script>";
    }else{
      echo "<script>alert('los datos no se han podido guardar correctamente');</script>";
    }  
}
?>
