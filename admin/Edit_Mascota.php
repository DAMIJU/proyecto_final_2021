<?php

include("DB/conexion.php");
          
$Doc= '';
$Nombre= '';
$Celular= '';
$Telefono_Fijo= '';
$Dirección= '';
$Ciudad= '';
$Correo= '';
$Fecha_Registro= '';


if  (isset($_GET['Doc'])) {
  $id = $_GET['Doc'];
  $query = "SELECT * FROM dueño WHERE Doc=$Doc";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Doc = $row['Doc'];
    $Nombre = $row['Nombre'];
    $Celular = $row['Celular'];
    $Telefono_Fijo = $row['Telefono_Fijo'];
    $Dirección = $row['Dirección'];
    $Ciudad = $row['Ciudad'];
    $Correo = $row['Correo'];
    $Fecha_Registro = $row['Fecha_Registro'];
  }
}

if (isset($_POST['update'])) {
  $Doc = $_GET['Doc'];
  $Nombre= $_POST['Nombre'];
  $Celular = $_POST['Celular'];
  $Telefono_Fijo = $_POST['Telefono_Fijo'];
  $Dirección = $_POST['Dirección'];
  $Ciudad = $_POST['Ciudad'];
  $Correo = $_POST['Correo'];
  $Fecha_Registro = $_POST['Fecha_Registro'];

  $query = "UPDATE dueño set Doc = '$Doc', Nombre = '$Nombre', Celular = '$Celular', Telefono_Fijo = '$Telefono_Fijo', Dirección = '$Dirección', Ciudad = '$Ciudad', Correo = '$Correo', Fecha_Registro = '$Fecha_Registro' WHERE Doc=$Doc";
  mysqli_query($con, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: Dueño.php');
}

?>
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
  <title>Panel de Control</title>

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
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Bootstrap para DataTables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <style>
    li{
      list-style: none;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
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
            <a href="Mascota.php" class="nav-link active" onclick="alert('Actualmente te encuentras en la sección de Mascota')">
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
            <a href="Configuracion.php" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuración
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-bars nav-icon"></i>
                  <p>Menú</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-building nav-icon"></i>
                  <p>Datos de la empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-photo-video nav-icon"></i>
                  <p>Galería de imágenes</p>
                </a>
              </li>
            </ul>
          </li>
          <div class="Footer">
            <button class="btn btn-danger" onclick="location.href='#'">Cerrar sesión</button>
          </div>
      </nav>
    </div>
  </aside>
</div>
<div class="content-wrapper">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="Edit_Dueño.php?id=<?php echo $_GET['Doc']; ?>" method="POST">
        <div class="form-group">
        <input name="Doc" type="number" class="form-control" value="<?php echo $Doc; ?>" placeholder="Documento">
        </div>
        <div class="form-group">
        <input name="Nombre" type="number" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Nombre">
        </div>
        <div class="form-group">
        <input name="Celular" type="number" class="form-control" value="<?php echo $Celular; ?>" placeholder="Celular">
        </div>
        <div class="form-group">
        <input name="Telefono_Fijo" type="number" class="form-control" value="<?php echo $Telefono_Fijo; ?>" placeholder="Telefono_Fijo">
        </div>
        <div class="form-group">
        <input name="Dirección" type="number" class="form-control" value="<?php echo $Dirección; ?>" placeholder="Dirección">
        </div>
        <div class="form-group">
        <input name="Ciudad" type="number" class="form-control" value="<?php echo $Ciudad; ?>" placeholder="Ciudad">
        </div>
        <div class="form-group">
        <input name="Correo" type="number" class="form-control" value="<?php echo $Correo; ?>" placeholder="Correo">
        </div>
        <div class="form-group">
        <input name="Fecha_Registro" type="number" class="form-control" value="<?php echo $Fecha_Registro; ?>" placeholder="Fecha_Registro">
        </div>
        
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>



?>