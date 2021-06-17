<?php 
$conn = mysqli_connect("localhost","root","","Login_Veterinaria");
 
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>