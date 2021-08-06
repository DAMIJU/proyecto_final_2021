<?php 
	
include("DB/conexion.php"); 

	$Portfolio_id= $_REQUEST['portfolio_id'];

	$query="DELETE FROM tabla_portfolio WHERE portfolio_id ='$Porfolio_id'  ";
	$resultado = $con->query($query);

	if($resultado){
		echo "<script>('La imagen se ha eliminado correctamente');</script>";
	}else{
		echo "<script type=\"text/javascript\">alert(\"No se podrán guardar los datos\");</script>";  
	}

?>