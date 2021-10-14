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

	/* if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower ($_SERVER['HTTP_X_REQUESTED_WITH']) = 'xmlhttprequest'){
		require 'DB/conexion.php';
		sleep(2);
		
		$mysqli->set_charset('utf-8');

		$usuario = $mysqli->real_escape_string($_POST['username']);
		$pas = $mysqli->real_escape_string($_POST['password']);

		if($nueva_consulta = $mysqli->prepare("")){
			$nueva_consulta->bind_param('ss', $usuario, $pas);

			$nueva_consulta->execute();

			$resultado = $nueva_consulta->get_result();

			if($resultado->num_rows == 0){
				$datos = $resultado->fetch_assoc();
				echo "<script>location.href='Admin.php'</script>"; 
			}else{
				echo "<script>alert('Usuario o contraseña incorrecto');window.location='../Login.php'</script>";
			}

			$nueva_consulta->close();
		}
	}

	$mysqli->close(); */
?>