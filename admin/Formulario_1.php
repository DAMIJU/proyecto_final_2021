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
    <img class="animation__shake" src="../assets/img/Logo.png" alt="Casme Logo" height="90px" width="100px">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block"></li>  
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
          <a href="Admin.php" class="nav-link active" onclick="alert('Actualmente te encuentras en la sección de Inicio')">
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
        </li>
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
          <a href="Citas.php" class="nav-link">
            <i class="nav-icon fa fa-calendar-alt"></i>
            <p>
              Formulario 1
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://docs.google.com/spreadsheets/u/7/d/e/2PACX-1vTAFoA7hRKKQs-WyXTMEPjY23xfgP3XgzBsWNTj1tCLZKja7ddqzfE7ZwIuxL6f0u2tgLpkraUPcJpe/pubhtml" class="nav-link">
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
                <p>Añadir usuario</p>
              </a>
            </li>
          </ul>
          </ul>
        </li>
      </nav>
    </div>
  </aside>
  
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
<script>
		$(document).ready(function() {
			// Show Tasks
			function loadTasks() {
				$.ajax({
					url: "show-tasks.php",
					type: "POST",
					success: function(data) {
						$("#tasks").html(data);
					}
				});
			}

			loadTasks();

			// Add Task
			$("#addBtn").on("click", function(e) {
				e.preventDefault();

				var task = $("#taskValue").val();

				$.ajax({
					url: "add-task.php",
					type: "POST",
					data: {task: task},
					success: function(data) {
						loadTasks();
						$("#taskValue").val('');
						if (data == 0) {
							alert("Something wrong went. Please try again.");
						}
					}
				});
			});

			// Remove Task
			$(document).on("click", "#removeBtn", function(e) {
				e.preventDefault();
				var id = $(this).data('id');
				
				$.ajax({
					url: "remove-task.php",
					type: "POST",
					data: {id: id},
					success: function(data) {
						loadTasks();
						if (data == 0) {
							alert("Something wrong went. Please try again.");
						}
					}
				});
			});
		});
	</script>
</body>
</html>