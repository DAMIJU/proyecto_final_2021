<?php 
	session_start();
	include("DB/conexion.php");

	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$res = $con->query("SELECT * FROM usuarios WHERE usuario='".$username."' AND clave='".$password."'")or die($con->error);
	session_regenerate_id();
	$_SESSION['loggedin'] = TRUE;
	$_SESSION['name'] = $_POST['username'];
	if(mysqli_num_rows($res) > 0 ){
		echo "<script>location.href='Admin.php'</script>";
	}else{
		echo "<script>alert('Usuario o contraseña incorrecto');window.location='../Login.php'</script>";
	}
?>