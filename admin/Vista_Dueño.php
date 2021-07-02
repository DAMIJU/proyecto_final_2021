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
  <link href="../assets/css/style.css" rel="stylesheet">
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
    <img class="animation__shake" src="../assets/img/Logo sin fondo.png" alt="Casme Logo" height="90px" width="100px">
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
            <a href="Dueño.php" class="nav-link active" onclick="alert('Actualmente te encuentras en la sección de Dueño')"">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Dueño            
              </p>
            </a>    
          <li class="nav-item">
            <a href="Mascota.php" class="nav-link">
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
          <!-- <div class="Footer">
            <button class="btn btn-danger" onclick="location.href='#'">Cerrar sesión</button>
          </div> -->
      </nav>
    </div>
  </aside>
</div>
  </div>
  <div class="content-wrapper">
  <div class="text-center">
  <h1>DUEÑO</h1>
  <!-- <button class="btn btn-success" id="ModalEnsayo" data-toggle="modal" data-target="#staticBackdrop">Añadir Dueño</button>
  <button class="btn btn-warning" id="" data-toggle="" data-target="">Info</button> -->
    </div>
      <!-- MESSAGES -->
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- FORMULARIO AÑADIR DUEÑO -->
      
      <?php
      include("DB/conexion.php");

      $Doc = $_REQUEST['Doc'];
      
      
      $query="SELECT * FROM dueño WHERE Doc='$Doc'";
      $resultado= $con->query($query);
      $row=$resultado->fetch_assoc();

      ?>
  
  <div class="row">
    <div class="col-md-6">
<div class="datatable-responsive datatable-box">
<table class="table table-responsive table-sm  non-top-border">
                <tbody>
                                            <tr>
                            <th>Documento</th>
                            <td> <?php echo $row['Doc']; ?></td>
                        </tr>
                                        <tr>
                        <th>Nombre</th>
                        <td>
                         <?php echo $row['Nombre']; ?>
                                                    </td>
                    </tr>
                                            <tr>
                            <th>Celular</th>
                            <td><a href="tel:<?php echo $row['Celular']; ?>"><?php echo $row['Celular']; ?></a></td>
                        </tr>
                                                                                                                    <tr>
                                <th>Telefono_Fijo</th>
                                <td><a href="tel:<?php echo $row['Telefono_Fijo']; ?>"><?php echo $row['Telefono_Fijo']; ?></a></td>
                            </tr>
                                                <tr>
                            <th>Dirección</th>
                            <td><?php echo $row['Dirección']; ?></td>
                        </tr>
                        <tr>
                            <th>Ciudad</th>
                            <td><?php echo $row['Ciudad']; ?></td>
                        </tr>
                                                    <tr>
                                <th>
                                    Correo
                                                                    </th>
                                <td><a target="_blank" href="mailto:<?php echo $row['Correo']; ?>"><?php echo $row['Correo']; ?> <i class="fa fa-external-link-alt"></i></a> </td>
                            </tr>
                    <tr>
                        <th>Fecha_Registro</th>
                        <td><?php echo $row['Fecha_Registro']; ?></td>
                    </tr>
                </tbody>
            </table>
   </div>
          <div class="botones">
            <a href="Edit_Dueño.php?Doc=<?php echo $row['Doc']?>" class="btn btn-success">Editar</a>
            <a href="#" onclick="preguntar(<?php echo $row['Doc']?>)" class="btn btn-danger">Eliminar</a>
            <a href="Dueño.php" role="button" class="btn btn-primary">Volver</a>
          </div>
   </div> 
   <div class="col-md-6"> 
   <div class="datatable-responsive datatable-box">
<table class="table table-responsive table-sm   non-top-border">
                <tbody>
                                            <tr>
                            <th>Documento</th>
                            <td> <?php echo $row['Doc']; ?></td>
                        </tr>
                                        <tr>
                        <th>Nombre</th>
                        <td>
                         <?php echo $row['Nombre']; ?>
                                                    </td>
                    </tr>
                                            <tr>
                            <th>Celular</th>
                            <td><a href="tel:<?php echo $row['Celular']; ?>"><?php echo $row['Celular']; ?></a></td>
                        </tr>
                                                                                                                    <tr>
                                <th>Telefono_Fijo</th>
                                <td><a href="tel:<?php echo $row['Telefono_Fijo']; ?>"><?php echo $row['Telefono_Fijo']; ?></a></td>
                            </tr>
                                                <tr>
                            <th>Dirección</th>
                            <td><?php echo $row['Dirección']; ?></td>
                        </tr>
                        <tr>
                            <th>Ciudad</th>
                            <td><?php echo $row['Ciudad']; ?></td>
                        </tr>
                                                    <tr>
                                <th>
                                    Correo
                                                                    </th>
                                <td><a target="_blank" href="mailto:<?php echo $row['Correo']; ?>"><?php echo $row['Correo']; ?> <i class="fa fa-external-link-alt"></i></a> </td>
                            </tr>
                    <tr>
                        <th>Fecha_Registro</th>
                        <td><?php echo $row['Fecha_Registro']; ?></td>
                    </tr>
                </tbody>
            </table>
   </div>  
   </div>   
   </div> 
   <div class="botones">
            <button type="button" class="btn btn-success">Editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
            <a href="Dueño.php" role="button" class="btn btn-primary">Volver</a>
          </div> 
   </div> 
   
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script> $(document).ready(function() {
    $('#dueño').DataTable( {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        }
    } );
} );
</script>
<script type="text/javascript">
      function preguntar(Doc)
      {
        if(confirm('¿Estás seguro que quieres eliminar al cliente?'))
        {
          window.location.href = "Delete_Dueño.php?Doc="+Doc;
        }
      }
</script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>