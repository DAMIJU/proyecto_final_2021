<?php

include('DB/conexion.php');

if (isset($_POST['Agregar_Mascota'])) {

  /* AQUI VA EL SELECT PARA EL QUE PAREZCA EL NOMBRE Y EL CELULAR */
  $Registro_Dueño = $_POST['Registro_Dueño'];
  $Nombre_Mascota = $_POST['Nombre_Mascota'];
  $Raza = $_POST['Raza'];
  $Fecha_Nac = $_POST['Fecha_Nac'];
  $Sexo = $_POST['Sexo'];

  /* AQUI CREAMOS Y EJECUTAMOS EL QUERY PARA INSERTAR A LA NUEVA MASCOTA */
  $query = "INSERT INTO tabla_mascotas(Num_Registro_Mascota, Registro_Dueño, Nombre_Mascota, Raza, Fecha_Nac, Sexo, Fecha_Registro_Mascota) 
  VALUES (NULL,'$Registro_Dueño', '$Nombre_Mascota', '$Raza',  '$Fecha_Nac', '$Sexo', CURDATE())";
  $ResultadoInsertMascota = mysqli_query($con, $query);
  

  if($ResultadoInsertMascota){
    echo "<script>alert('La mascota $Nombre_Mascota se ha agregado satisfactoriamente');window.location='Mascota.php'</script>";
    }else{
      echo "<script>alert('los datos no se han podido guardar  correctamente');</script>";
    }  
}

?>
