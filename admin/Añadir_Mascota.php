<?php

include('DB/conexion.php');

if (isset($_POST['Agregar_Mascota'])) {
  $Doc_Dueño = $_POST['Doc_Dueño'];
  $NombreDueño = $_POST['Nombre_Dueño'];
  $NombreMascota = $_POST['Nombre_Mascota'];
  $Raza = $_POST['Raza'];
  $Fecha_Nac_Edad = $_POST['Fecha_Nac_Edad'];
  $Sexo = $_POST['Sexo'];
  $Fecha_Registro = $_POST['Fecha_Registro'];
  $query = "INSERT INTO tabla_mascotas(Num_Registro, Doc_Dueño, Nombre_Dueño, Nombre_Mascota, Raza, Fecha_Nac_Edad, Sexo, Fecha_Registro ) VALUES (null, $Doc_Dueño, '$NombreDueño', '$NombreMascota', '$Raza',  '$Fecha_Nac_Edad', '$Sexo', '$Fecha_Registro')";
  $ResultadoInsertMascota = mysqli_query($con, $query);

  if($ResultadoInsertMascota){
    echo "<script>alert('La mascota ha sido añadida a la base de datos');window.location='Mascota.php'</script>";
    }else{
      echo "<script>alert('La mascota no se ha podido ingresar a la base de datos');</script>";
    }  
}
?>