<?php 
	
include("DB/conexion.php"); 

	$Portfolio_id= $_REQUEST['portfolio_id'];

	$DeleteRegistro = ("DELETE FROM tabla_portfolio WHERE portfolio_id = '".$Portfolio_id."'");
	mysqli_query($con, $DeleteRegistro);

	if($DeleteRegistro){
		echo "<script>alert('La imagen se ha eliminado correctamente');window.location='Config.php?modulo=Galeria'</script>";
	}else{
		echo "<script>alert('La imagen no se pudo eliminar');window.location='Config.php?modulo=Galeria'</script>";
	}

?>