<?php 
    include("DB/conexion.php");

    if(isset($_POST['Agregar_Admin'])){
        
            $Nombre_Usuario = $_POST['Nombre_Usuario'];
            $Apellidos_Usuario = $_POST['Apellidos_Usuario'];
            $usuario = $_POST['usuario'];
            $clave = sha1($_POST['clave']);
            $Tel_User = $_POST['Tel_User'];
           $query="INSERT INTO usuarios(id_user,usuario,clave,Apellidos_Usuario,Nombre_Usuario,Tel_User) 
            VALUES (NULL,'$usuario','$clave','$Apellidos_Usuario','$Nombre_Usuario','$Tel_User')";
            $resultado = $con->query($query);

            if($resultado){
              echo "<script>alert('El usuario $Nombre_Usuario se ha agregado correctamente');window.location='Config.php?modulo=AddUser'</script>";
            }else{
              echo "<script type=\"text/javascript\">alert(\"No se podrán guardar los datos\");</script>";  
            }
          }
?>