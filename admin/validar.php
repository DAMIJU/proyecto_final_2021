<?php
session_start();
require_once("ConectarBD_Mysql.php");

//VERIFICACION DE ESCRITURA DE DATOS EN EL FORM
			if ( !isset($_POST['username'], $_POST['password']) )
            {
			// Could not get the data that should have been sent.
			echo "<script>alert('Por favor llene todos los campos requeridos.');window.location=''</script>";
			}

//  SI SE CONECTO Y SI SE ENVIARON AMBOS DATOS SE PROCEDE CON LA CONSULTA DE EXISTENCIA DEL USUARIO EVITANDO INYECCIONES SQL ?
// El valor DNI se reemplaza por id_user.
if ($stmt = $conn->prepare('SELECT id_user , clave FROM usuarios WHERE usuario = ?'))
 {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
     
     // SI EL USUARIO EXISTE EN LA TABLA SE EXTRAE Y SE APUNTA SU DNI Y SU CLAVE
     if ($stmt->num_rows > 0)
      {
		$stmt->bind_result($id_user, $clave);
		$stmt->fetch();
        
			// AHORA VERIFICA SI LA CLAVE QUE SE EXTRAJO DE LA TABLA ES IGUAL A LA QUE SE ENVIA DESDE EL FORMULARIO         
        	//if ($_POST['password'] === $clave) 
          	if(password_verify( $_POST['password'],$clave))
        		{
                    // SI COINICIDEN AMBAS CONTRASEÑAS SE INICIA LA SESION Y SE LE DA LA BIENCENIDA AL USUARIO CON ECHO
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['name'] = $_POST['username'];
					$_SESSION['id_user'] = $id_user;
			        // echo 'BIENVENIDO USUARIOP : ' . $_SESSION['name'] .' CON TU DNI NUMERO : '. $_SESSION['dni'] . '!';
                    header('Location: Admin.php');
                   
				} 
           
       				// SI EL USUARIO EXISTE PERO EL PASSWORD NO COINCIDE IMPRIMIR EN PANTALLA PASSWORD INCORRECTO
       
                   		else { echo "<script>alert('Nombre de usuario y contraseña no coninciden');window.location='../Login.php'</script>"; }
       	}  

      			   // SI EL USUARIO NO EXISTE MOSTRAR USUARIO INCORRECTO
          				else { echo "<script>alert('Este usuario no existe o es inválido');window.location='../Login.php'</script>"; }

	$stmt->close();
}
?>