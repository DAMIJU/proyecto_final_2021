<?php 

include("DB/conexion.php");


if(isset($_POST['agregar_dueño'])){

$Celular = $_POST['Celular'];
$Nombre_Dueño= $_POST['Nombre_Dueño'];
$Telefono_Fijo = $_POST['Telefono_Fijo'];
$Dirección = $_POST['Dirección'];
$Ciudad = $_POST['Ciudad'];
$Correo = $_POST['Correo'];
$query = "INSERT INTO tabla_dueño (Num_Registro_Dueño,Celular,Nombre_Dueño,Telefono_Fijo,Dirección,Ciudad,Correo,Fecha_Registro_Dueño) VALUES (NULL,'$Celular', '$Nombre_Dueño', '$Telefono_Fijo', '$Dirección', '$Ciudad', '$Correo', CURDATE())";
$ResultadoAgregarDueño = $con->query($query);

if($ResultadoAgregarDueño){
echo "<script>alert('El cliente $Nombre_Dueño se ha agregado satisfactoriamente');window.location='Dueño.php'</script>";
}else{
  echo "<script>alert('los datos no se han podido guardar correctamente');</script>";
}
}
    

?>