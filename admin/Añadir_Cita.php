<?php

include('DB/conexion.php');

if (isset($_POST['agregar_cita'])) {
  /* AQUI VA EL SELECT PARA EL QUE PAREZCA EL NOMBRE Y EL CELULAR */
  $Num_Dueño = $_POST['Num_Dueño'];
  $Num_Mascota = $_POST['Num_Mascota'];
  $Tipo_Cita = $_POST['Tipo_Cita'];
  $Notas_Internas = $_POST['Notas_Internas'];
  $Fecha_Cita = $_POST['Fecha_Cita'];
  $Hora_Cita = $_POST['Hora_Cita'];

  /* AQUI SOLICITAMOS LOS DATOS DEL DUEÑO PARA OBTENER EL CELULAR DEL DUEÑO */
  $query2="SELECT * FROM tabla_dueño WHERE Num_Registro_Dueño = '$Num_Dueño'";
  $resultado2= $con->query($query2);
  $row2=$resultado2->fetch_assoc();
  $Cel_Dueño = $row2['Celular'];

  /* AQUI SOLICITAMOS LOS DATOS DE LA MASCOTA PARA OBTENER EL NOMBRE DE LA MASCOTA */
  $query3="SELECT * FROM tabla_mascotas WHERE Num_Registro_Mascota = '$Num_Mascota'";
  $resultado3= $con->query($query3);
  $row3=$resultado3->fetch_assoc();
  $Nombre_Mascota = $row3['Nombre_Mascota'];

  /* AQUI CREAMOS Y EJECUTAMOS EL QUERY PARA INSERT UNA NUEVA CITA CON LOS DATOS QUE SE HAN RECOPILADO EN AÑADIR_CITA.PHP */
  $query = "INSERT INTO tabla_citas(Cel_Dueño, Num_Registro_Cita, Num_Dueño, Num_Mascota, Tipo_Cita, Notas_Internas, Fecha_Cita, Hora_Cita, Estado_Cita) 
  VALUES ('$Cel_Dueño', null, '$Num_Dueño', '$Num_Mascota', '$Tipo_Cita', '$Notas_Internas', '$Fecha_Cita', '$Hora_Cita', 'Pendiente')";
  $ResultadoInsertCita = mysqli_query($con, $query);
  
  if($ResultadoInsertCita){
    echo "<script>alert('La cita para $Nombre_Mascota se ha agregado satisfactoriamente');window.location='Citas.php'</script>";
   
  }else{
      echo "<script>alert('La cita para $Nombre_Mascota no se han podido guardar correctamente');</script>";
    }
}

?>