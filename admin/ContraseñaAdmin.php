<?php
// Solo se permite el ingreso con el inicio de sesion.
session_start();
require_once("ConectarBD_Mysql.php");
// Si el usuario no se ha logueado se le regresa al inicio.
if (!isset($_SESSION['loggedin'])) {
	echo "<script>alert('No has iniciado sesión');window.location='../Login.php'</script>";
	exit; }

  //Script para definirle la vida de duración a una sesión
  $inactivo = 14400;

    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
		if($vida_session > $inactivo)
		{
			session_destroy();
			echo "<script>alert('La sesión ha caducado');window.location='../Login.php'</script>";
		}
    }
    $_SESSION['tiempo'] = time();
    $NombreSesion_User = $_SESSION['name'];
    $Consulta_DatosSesion = "SELECT * FROM usuarios WHERE usuario ='$NombreSesion_User'";
    $ejecuta = $conn->query($Consulta_DatosSesion);
    $row = $ejecuta->fetch_assoc()
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel de admin</title>
    <!-- Favicons -->
  <link href="../assets/img/Logo.ico" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">

  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap para DataTables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="ContraseñaSegura/aaronBase.css" rel="stylesheet">
  <link href="ContraseñaSegura/strength.css" rel="stylesheet">
  <style>
    li{
      list-style: none;
    }

    label .FormLogin{
      font-weight: 1;
    }
.strength_meter{
width: 50%;
height:43px;
z-index:-1;
border-radius:5px;
padding-right:13px;
}
.button_strength {
text-decoration: none;
color: #000;
font-size: 13px;
}
.strength_meter div{
    width:0%;
height: 43px;
text-align: right;
color: #000;
line-height: 43px;
-webkit-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-o-transition: all .3s ease-in-out;
-ms-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
padding-right: 12px;
border-radius:5px;
}

.strength_meter div p{
position: absolute;
top: 22px;
right: 0px;
color: #FFF;
font-size:13px;
}

.veryweak{
    background-color: #FFA0A0;
border-color: #F04040!important;
width:25%!important;
}

.weak{
background-color: #FFB78C;
border-color: #FF853C!important;
width:50%!important;
}
.medium{
background-color: #FFEC8B;
border-color: #FC0!important;
width:75%!important;
}
.strong{
background-color: #C3FF88;
border-color: #8DFF1C!important;
width:102.4%!important;
}
  </style>
  <link rel="stylesheet" type="text/css" href="select2/select2.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="../assets/img/Logo.png" alt="Casme Logo" height="90px" width="100px">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="../index.php" class="nav-link">Inicio</a> -->
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->      
      <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exitModal">
              <i class="icofont-exit" aria-hidden="true"></i> Salir
          </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="color:white">  
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="../assets/img/Logo.ico" rel="icon" class="brand-image img-circle elevation-4" style="opacity: .8">
        </div>
        <div class="info">
        <span class="brand-text font-weight-light" style="font-size:2.5vh"><?php echo $row['Apellidos_Usuario']?><br><?php echo $row['Nombre_Usuario']?></span>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">       
          <li class="nav-item menu-open">
            <a href="Admin.php" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Dueño.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Dueño            
              </p>
            </a>    
          <li class="nav-item">
            <a href="Mascota.php" class="nav-link" >
              <i class="nav-icon fas fa-dog"></i>
              <p>
                Mascota             
              </p>
            </a>     
          </li>   
          <li class="nav-item">
            <a href="Citas.php" class="nav-link">
              <i class="nav-icon fa fa-calendar-alt"></i>
              <p>
                Citas
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="https://docs.google.com/spreadsheets/d/1SsyYU4b7Gv8p-rFFIoXW3fD_Xt6U8GWlxYRASe-5V_c/edit?usp=sharing" target="_blank" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>
              Form educación
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://docs.google.com/spreadsheets/d/14CeUn7SXvCSbLqx6X43VQaimSk4uE7s4iQjCJiLNsxc/edit?usp=sharing" target="_blank" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>
              Form adiestramiento
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://docs.google.com/spreadsheets/d/1UpHaj2hp8583jv18H2mekoe2OOlT6WxSP-NTTzLo1D8/edit?usp=sharing" target="_blank" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>
              Form modificación conductual
            </p>
          </a>
        </li>  
          <li class="nav-item">
            <a href="Configuracion.php" class="nav-link active">
            <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuración
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="Config.php?modulo=Galeria" class="nav-link">
                <i class="fas fa-photo-video nav-icon"></i>
                <p>Galería de imágenes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Config.php?modulo=AddUser" class="nav-link">
                <i class="fas fa-user nav-icon"></i>
                <p>Añadir admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Config.php?modulo=Passwords" class="nav-link active">
                <i class="fas fa-unlock nav-icon"></i>
                <p>Contraseñas</p>
              </a>
            </li>
            </ul>
          </li>
      </nav>
    </div>
  </aside>
</div>
<div class="modal fade" id="exitModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="staticBackdropLabel" style="font-weight:bold">¿Desea salir?</h3>
              </div>
              <div class="modal-body">Presione "Cerrar Sesión" si desea salir.</div>
                            <div class="modal-footer">
                                <button class="btn btn-raised btn-secondary" type="button" data-dismiss="modal">Cancelar</button>&nbsp;
                                <a class="btn btn-raised btn-danger" href="logout.php">Cerrar Sesión</a>
                            </div>
            </div>
          </div>
        </div>
<!-- <?php

/*

include("DB/conexion.php");

if(isset($_POST['GuardarDatosContrasenaPerfil'])){

$query2 = "SELECT * FROM usuarios WHERE clave = '$password'";
$resultado2 = $con->query($query2);
$row2 = $resultado2->fetch_assoc();
$id_user = $_REQUEST['id_user'];
$password = $_POST['password'];
$Contraseña = $row2['Contraseña']; 
$NewPasswordPerfil = sha1($_POST['NewPasswordPerfil']);
 
  if($Contraseña === $_POST['password']){

  $query="UPDATE usuarios SET clave='$NewPasswordPerfil' WHERE id_user='$id_user'";
  $ResultadoContrasenaPerfil = $con->query($query);

  if($ResultadoContrasenaPerfil){
  echo "<script>alert('La contraseña se ha actualizado correctamente');window.location='Config.php?modulo=Passwords'</script>";
  }else{
    echo "<script>alert('los datos no se han podido actualizar correctamente');</script>";
  }
}else{
  echo "<script>alert('Contraseña actual inválida')</script>";
}
}*/
?> -->
<?php

include("DB/conexion.php");

/* AQUI SE ATRAPAN LOS DATOS */

if(isset($_POST['GuardarDatosContrasenaPerfil'])){

   /* AQUI SE RECIBEN LOS DATOS DEL FORMULARIO */
  $password = sha1($_POST['password']);
  $query2 = "SELECT * FROM usuarios WHERE clave = '$password'";
  $resultado2 = $con->query($query2);
  $row2 = $resultado2->fetch_assoc();
  $id_user = $_REQUEST['id_user'];
  $NewPasswordPerfil = sha1($_POST['NewPasswordPerfil']);
  
  if($id_user === $_REQUEST['id_user']){
  /* AQUI REALIZAMOS EL UPDATE DEL REGISTRO QUE SE SELECCIONÓ */
  $query="UPDATE usuarios SET clave='$NewPasswordPerfil' WHERE clave = '$password'";
  $ResultadoContrasenaPerfil = $con->query($query);

if($ResultadoContrasenaPerfil){
  echo "<script>alert('La contraseña se ha actualizado correctamente');window.location='Config.php?modulo=Passwords'</script>";
  }else{
    echo "<script>alert('los datos no se han podido actualizar correctamente');</script>";
  }
}else{
  echo "<script>alert('Contraseña actual inválida')</script>";
}
}
?>
<div class="content-wrapper">    
    <div class="text-center">
      <h1>CONTRASEÑAS</h1>
    </div>
  <div class="wrapper2">
      <div class="card">
        <div class="card-header card-primary">
          <h2 class="title">Cambiar contraseña del panel de administrador</h2>
        </div>
        <div class="card-body">
        <form action="ContraseñaAdmin.php?id_user=<?php echo $row['id_user']?>" method="POST">
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label FormLogin" for="NombreCompleto"><span style="color:red">*</span></label>
                <input type="password" class="form-control" name="password" REQUIRED placeholder="Contraseña actual">
              </div>
            </div>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label FormLogin" for="password"><span style="color:red">*</span></label>
            <input type="password" id="myPassword" name="NewPasswordPerfil" REQUIRED class="form-control" placeholder="Contraseña nueva"/>
          </div>
          <button type="submit" name="GuardarDatosContrasenaPerfil" class="btn btn-success btn-block mb-4">Actualizar</button>
        </form>
        </div>
      </div>
      </div>  
  </div>
<script src="ContraseñaSegura/js/jquery.min.js"></script>
<script src="ContraseñaSegura/js/strength.min.js"></script>
<script id="rendered-js">
  $(document).ready(function ($) {
  $('#myPassword').strength({
    strengthClass: 'strength',
    strengthMeterClass: 'strength_meter',
    strengthButtonClass: 'button_strength',
    strengthButtonText: 'Mostrar Contraseña',
    strengthButtonTextToggle: 'Ocultar Password' });
});
</script>

<footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Servicios Caninos Casme.</b> 
      </div>
        <strong>Panel de administrador</a></strong> 
</footer>
  <!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- SCRIPTS DataTables -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
window.addEventListener('load',function(){
document.getElementById('fecha').type= 'text';
document.getElementById('fecha').addEventListener('blur',function(){
document.getElementById('fecha').type= 'text';
});
document.getElementById('fecha').addEventListener('focus',function(){
document.getElementById('fecha').type= 'date';
});
});
</script>
</body>
 <div class="container p-4">
   <div class="row">
     <div class="col-md-5 mx-auto">
       <div class="card card-body" style="background-color: #2D92CB;">
        <!-- AQUI ESTA EL MODAL QUE CONTIENE EL FORMULARIO QUE REALIZA LA ACCIÓN DE LA PÁGINA -->
        <h3 class="modal-title" id="staticBackdropLabel" style="font-weight:bold">Cambiar contraseña del panel</h3>
        <form action="ContraseñaAdmin.php?id_user=<?php echo $row['id_user']?>" method="POST">
            <div class="form-group">
              <input type="password" name="password" REQUIRED class="form-control" value="" placeholder="Contraseña actual">
            </div>
            <div class="form-group">
            <input type="password" name="NewPasswordPerfil" REQUIRED class="form-control" value="" placeholder="Contraseña nueva">
            </div>
            <div class="botones">
              <button type="submit" name="GuardarDatosContrasenaPerfil" class="btn btn-success">Actualizar</button>
              <a href="javascript: history.go(-1)" role="button" class="btn btn-danger">Cancelar</a>
            </div>             
        </form>
       </div>
     </div>
   </div>
 </div>
</div>

