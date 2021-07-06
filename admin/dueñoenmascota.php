<?php
include("DB/conexion.php");

function get_city($con , $term){	
	$query = "SELECT * FROM tabla_dueño WHERE Nombre_Dueño LIKE '%".$term."%' ORDER BY Nombre_Dueño ASC";
	$result = mysqli_query($con, $query);	
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $data;	
}

if (isset($_GET['term'])) {
	$getCity = get_city($con, $_GET['term']);
	$cityList = array();
	foreach($getCity as $city){
		$cityList[] = $city['Nombre_Dueño'];
	}
	echo json_encode($cityList);
}
?>