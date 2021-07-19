<?php
session_start();
require_once("ConectarBD_Mysql.php");

	if ( !isset($_POST['username'], $_POST['password']) )
	{
	echo "<script>alert('Por favor llene todos los campos requeridos.');window.location=''</script>";
	}

	if ($stmt = $conn->prepare('SELECT id_user , clave FROM usuarios WHERE usuario = ?'))
 	{
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

     if ($stmt->num_rows > 0)
      {
		$stmt->bind_result($id_user, $clave);
		$stmt->fetch();
        
          	if(password_verify( $_POST['password'],$clave))
        		{
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['name'] = $_POST['username'];
					$_SESSION['id_user'] = $id_user;
                    header('Location: Admin.php');
                   
				}       
                   	else { echo "<script>alert('Nombre de usuario o contraseña inválido');window.location='../Login.php'</script>"; }
       	}  
          		else { echo "<script>alert('Este usuario no existe o es inválido');window.location='../Login.php'</script>"; }
	$stmt->close();
}
?>