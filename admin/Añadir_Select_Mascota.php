<?php

include('DB/conexion.php');

$dueño=$_POST['dueño'];

	$sql2="SELECT *
		from tabla_mascotas
		where Registro_Dueño ='$dueño'";

	$resultados=mysqli_query($con,$sql2);

	$cadena=" 
	<select name='Num_Mascota' id='controlBuscadora' style='width: 100%' >
	<option disabled selected>Seleccione Mascota</option>";

	while ($vermascota=mysqli_fetch_row($resultados)) {
		$cadena=$cadena.'<option value='.$vermascota[0].'>'.utf8_encode($vermascota[2]).'</option>';
	}

	echo  $cadena."</select>";
?>
