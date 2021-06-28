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
<?php
include("DB/conexion.php");
$Dueño= '';
$Mascota= '';
$Raza= '';
$Fecha_Nac= '';
$Sexo= '';

if  (isset($_GET['Num_Registro'])) {
  $Registro = $_GET['Num_Registro'];
  $query = "SELECT * FROM tabla_mascotas WHERE Num_Registro=$Registro";
  $resultado = mysqli_query($con, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $mostrar = mysqli_fetch_array($resultado);
    $Dueño = $mostrar['Nombre_Dueño'];
    $Mascota = $mostrar['Nombre_Mascota'];
    $Raza = $mostrar['Raza'];
    $Fecha_Nac = $mostrar['Fecha/Nac-Edad'];
    $Sexo = $mostrar['Sexo'];
  }
}
if (isset($_POST['update'])) {
  $Dueño = $_POST['Nombre_Dueño'];
  $Mascota = $_POST['Nombre_Mascota'];
  $Raza = $_POST['Raza'];
  $Fecha_Nac = $_POST['Fecha/Nac-Edad'];
  $Sexo = $_POST['Sexo'];

  $query = "UPDATE tabla_mascotas set Nombre_Dueño = '$Dueño', Nombre_Mascota = '$Mascota', Raza = '$Raza', Fecha/Nac-Edad = '$Fecha_Nac', Sexo = '$Sexo' WHERE Num_Registro = $Registro";
  mysqli_query($con, $query);
  $_SESSION['message'] = 'Mascota actualizada correctamente';
  $_SESSION['message_type'] = 'warning';
  /* header('Location: Mascota.php'); */
}
?>
        <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="Edit_Mascota.php?id=<?php echo $_GET['Num_Registro']; ?>" method="POST">
        <div class="form-group">
        <input type="text" name="Dueño" class="form-control" value="<?php echo $Dueño; ?>" placeholder="Actualizar Dueño">
            </div>
            <div class="form-group">
              <input type="text" name="Mascota" class="form-control" value="<?php echo $Mascota; ?>" placeholder="Actualizar Mascota">
            </div>
            <div class="form-group">
            <input type="text" name="Raza" class="form-control" value="<?php echo $Raza; ?>" placeholder="Actualizar Raza">
            </div>
            <div class="form-group">
              <input type="text" name="Fecha Nac" class="form-control" value="<?php echo $Fecha_Nac; ?>" placeholder="Actualizar Fecha nacimiento">
            </div>
            <div class="form-group">
            <input type="text" name="Sexo" class="form-control" value="<?php echo $Sexo; ?>" placeholder="Actualizar Sexo">
            </div>
            <input type="submit" class="btn-success" name="update" value="Actualizar">                 
      </form>
      </div>
    </div>
  </div>
</div>
        
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
    $('#Tabla_mascotas').DataTable( {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        }
    } );
} );
</script>
</body>

