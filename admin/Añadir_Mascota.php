<?php

include('DB/conexion.php');

if (isset($_POST['Agregar_Mascota'])) {
  /* $Cel_Dueño = $_POST['Cel_Dueño']; */
  $Nombre_Mascota = $_POST['Nombre_Mascota'];
  $Raza = $_POST['Raza'];
  $Fecha_Nac = $_POST['Fecha_Nac'];
  $Sexo = $_POST['Sexo'];
  /* $Fecha_Registro_Mascota = $_POST['Fecha_Registro_Mascota']; */
  $Fecha_Registro_Mascota = date('m/d/Y h:i:s', time());
  $query = "INSERT INTO tabla_mascotas(Num_Registro_Mascota, Nombre_Mascota, Raza, Fecha_Nac, Sexo, Fecha_Registro_Mascota) VALUES (null, '$Nombre_Mascota', '$Raza',  '$Fecha_Nac', '$Sexo', '$Fecha_Registro_Mascota')";
  $ResultadoInsertMascota = mysqli_query($con, $query);

  if($ResultadoInsertMascota){
    echo "<script>alert('La mascota se ha agregado satisfactoriamente');window.location='Mascota.php'</script>";
    }else{
      echo "<script>alert('los datos no se han podido guardar correctamente');</script>";
    }  
}
?>
