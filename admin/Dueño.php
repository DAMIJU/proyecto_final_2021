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
          <div class="Footer">
            <button class="btn btn-danger" onclick="location.href='#'">Cerrar sesión</button>
          </div>
      </nav>
    </div>
  </aside>
</div>
  </div>
  <div class="content-wrapper">
  <h1>DUEÑO</h1><button type="button" class="btn btn-success" id="ModalEnsayo" data-toggle="modal" data-target="#staticBackdrop"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABnUlEQVRIic3VT4hNcRQH8M958xIhMauZldQsxGo2iizt1BQpJbYSOwuWVrKyGrEYZmNjYUG2bEVWylKxUJSFmh6vifla3EtTmveHeeVbt+6955zv99x7/vwqyTxOoGtz8R0PK8kH3MHqJgtswflK0quq7UnOYC9u4CLWqmoxyTXM/IXAZXyqJD1Mo4cOLuB26zSHx3iEL2OQX21j33ehqvpJbmIfHuAQgnd4g2NjZv9WUwOVpI/jYxKMiiddTfdcmZBAV1uDiSBJrzMp8l8YSyBJJ8lYMSM7t8RLWBpLZJQatJkvJ/naXsujiCTp/Z7kIZnfxSxeYg3zWMHZqvoxSGBgFi35vZZ8AX3NzjqJnbifZGoQx7DPPIitWKiq/q+XVbWKUygcGEQwcEVX1Wuc3sDW38i2Hv/XHLTIJAV2GW9t62Iqyashfreqahn78aztnKfYMSSuU0lmsG2I40fs0czBXFX1ksxqOmwQvg2xN0gym+RFkksjBazDH22a5DCOto/TmqPvCK5X1eI/C2j+6+72/jOe41xVrYxLDj8BTZCtqgedHwgAAAAASUVORK5CYII="></button>
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
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#9ACD32">
                  <h5 class="modal-title" id="staticBackdropLabel" style="font-weight:bold">Añadir Dueño</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="Doc" class="form-control" placeholder="Documento" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="Nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Celular" class="form-control" placeholder="Celular" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="Telefono_Fijo" class="form-control" placeholder="Telefono FIjo" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Dirección" class="form-control" placeholder="Dirección" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Correo" class="form-control" placeholder="Correo" autofocus>
          </div>
          <div class="form-group">
          <input type="date" name="Fecha_Registro" class="form-control" placeholder="Fecha_Registro" autofocus>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  <table id="dueño" class="table table-striped table-sm non-top-border " width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Doc</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Telefono_Fijo</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Correo</th>
                <th>Fecha_Registro</th> 
                <th>Acción</th>                 
            </tr>
        </thead>
        <tbody>
        <?php  
          include("DB/conexion.php");
          $query="SELECT * FROM dueño";
          $resultado= $con->query($query);
          while($mostrar=$resultado->fetch_assoc()){
        ?>   
            <tr>
                <td><?php echo $mostrar['Doc'] ?></td>
                <td><?php echo $mostrar['Nombre'] ?></td>
                <td><?php echo $mostrar['Celular'] ?></td>
                <td><?php echo $mostrar['Telefono_Fijo'] ?></td>
                <td><?php echo $mostrar['Dirección'] ?></td>
                <td><?php echo $mostrar['Ciudad'] ?></td>
                <td><?php echo $mostrar['Correo'] ?></td>
                <td><?php echo $mostrar['Fecha_Registro'] ?></td>
                <td>
              <a href="Edit_Dueño.php?Doc=<?php echo $mostrar['Doc']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="Delete_Dueño.php?Doc=<?php echo $mostrar['Doc']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
            </tr>
            <?php
              }
            ?>   
        </tbody>
        <tfoot>
            <tr>
                <th>Doc</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Telefono_Fijo</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Correo</th>
                <th>Fecha_Registro</th>  
                <th>Acción</th>        
            </tr>
        </tfoot>
    </table>
   </div>  
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
</body>