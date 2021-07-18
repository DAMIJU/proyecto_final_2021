<?php 

include("DB/conexion.php");

/* AQUI SE ATRAPAN LOS DATOS */
if(isset($_POST['agregar_dueño'])){

/* AQUI ATRAPAMOS LOS DATOS */  
$Celular = $_POST['Celular'];
$Nombre_Dueño= $_POST['Nombre_Dueño'];
$Telefono_Fijo = $_POST['Telefono_Fijo'];
$Dirección = $_POST['Dirección'];
$Ciudad = $_POST['Ciudad'];
$Correo = $_POST['Correo'];

/* AQUI SE VERIFICA POR MEDIO DE UN SELECT SI EL CELULAR (DATO UNICO) NO SE ENCUENTRA YA ASIGNADO A OTRO CLIENTE REGISTRADO EN LA BASE DE DATOS */
$query="SELECT Celular FROM tabla_dueño WHERE Celular = $Celular";
$resultado= $con->query($query);
$row=$resultado->fetch_assoc();

if($row>0){
  echo "<script>alert('El dueño con el numero $Celular ya se encuentra registrado');window.location='Dueño.php'</script>";
}else{
  /* AQUI CREAMOS Y EJECUTAMOS EL QUERY PARA INSERTAR AL NUEVO CLIENTE/DUEÑO */
  $query = "INSERT INTO tabla_dueño (Num_Registro_Dueño,Celular,Nombre_Dueño,Telefono_Fijo,Dirección,Ciudad,Correo,Fecha_Registro_Dueño)
  VALUES (NULL,'$Celular', '$Nombre_Dueño', '$Telefono_Fijo', '$Dirección', '$Ciudad', '$Correo', CURDATE())";
  $ResultadoAgregarDueño = $con->query($query);
}

if($ResultadoAgregarDueño){
  echo "<script>alert('El cliente $Nombre_Dueño se ha agregado satisfactoriamente');window.location='Dueño.php'</script>";
}else{
  echo "<script>alert('Los datos no se han podido guardar correctamente');window.location='Dueño.php'</script>";
}
}

?>