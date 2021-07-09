<?php

include('DB/conexion.php');

if (isset($_POST['agregar_cita'])) {
  /* AQUI VA EL SELECT PARA EL QUE PAREZCA EL NOMBRE Y EL CELULAR */
  $Num_Dueño = $_POST['Num_Dueño'];
  $Num_Mascota = $_POST['Num_Mascota'];
  $Tipo_Cita = $_POST['Tipo_Cita'];
  $Fecha_Cita = $_POST['Fecha_Cita'];
  $Hora_Cita = $_POST['Hora_Cita'];
  $query2="SELECT * FROM tabla_dueño WHERE Num_Registro_Dueño = '$Num_Dueño'";
      $resultado= $con->query($query2);
      $row=$resultado->fetch_assoc();
  $Cel_Dueño = $row['Celular'];
  $query = "INSERT INTO tabla_citas(Cel_Dueño, Num_Registro_Cita, Num_Dueño, Num_Mascota, Tipo_Cita, Fecha_Cita, Hora_Cita, Estado_Cita) VALUES ('$Cel_Dueño', null, '$Num_Dueño', '$Num_Mascota', '$Tipo_Cita', '$Fecha_Cita', '$Hora_Cita', 'Pendiente')";
  $ResultadoInsertCita = mysqli_query($con, $query);
  
  if($ResultadoInsertCita){
    echo "<script>alert('La cita para ?????? se ha agregado satisfactoriamente');window.location='Citas.php'</script>";
    }else{
      echo "<script>alert('La cita para ??????? no se han podido guardar correctamente');</script>";
    }
}
?>