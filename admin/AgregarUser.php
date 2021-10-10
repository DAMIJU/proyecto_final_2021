<?php 
    include("DB/conexion.php");
        
            $FullName = $_POST['FullName'];
            $Apellidos_Usuario = $_POST['Apellidos_Usuario'];
            $id_user = $_POST['id_user'];
            $usuario = $_POST['usuario'];
            $password = sha1($_POST['password']);
           $query="INSERT INTO usuarios(id_user, usuario, clave, Apellidos_Usuario, Nombre_Usuario) 
            VALUES ('$id_user','$usuario','$password','$Apellidos_Usuario','$FullName')";
            $resultado = $con->query($query);

            if($resultado){
              echo "<script>alert('El usuario ".$FullName." se ha agregado correctamente');window.location='Config.php?modulo=AddUser'</script>";
            }else{
              echo "<script type=\"text/javascript\">alert(\"No se podrán guardar los datos\");</script>";  
            }
?>