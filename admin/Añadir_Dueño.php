<?php 

include("DB/conexion.php");


if(isset($_POST['agregar_dueño'])){

$Doc = $_POST['Doc'];
$Nombre= $_POST['Nombre'];
$Celular = $_POST['Celular'];
$Telefono_Fijo = $_POST['Telefono_Fijo'];
$Dirección = $_POST['Dirección'];
$Ciudad = $_POST['Ciudad'];
$Correo = $_POST['Correo'];
$Fecha_Registro = $_POST['Fecha_Registro'];
$query = "INSERT INTO dueño (Doc,Nombre,Celular,Telefono_Fijo,Dirección,Ciudad,Correo,Fecha_Registro) VALUES ('$Doc', '$Nombre', '$Celular', '$Telefono_Fijo', '$Dirección', '$Ciudad', '$Correo', '$Fecha_Registro')" ;
$ResultadoAgregarDueño = $con->query($query);

if($ResultadoAgregarDueño){
echo "<script>alert('El cliente se ha agregado satisfactoriamente');window.location='Dueño.php'</script>";
}else{
  echo "<script>alert('los datos no se han podido guardar correctamente');</script>";
}
}
    

?>