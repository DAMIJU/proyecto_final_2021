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

$Celular = $_REQUEST['Celular'];

$query="SELECT * FROM tabla_dueño WHERE Celular='$Celular'";
$resultado= $con->query($query);
$row=$resultado->fetch_assoc();

if(isset($_POST['update'])){
  $Celular = $_REQUEST['Celular'];
  $celular = $_POST['celular'];
  $Nombre_Dueño= $_POST['Nombre_Dueño'];
  $Telefono_Fijo = $_POST['Telefono_Fijo'];
  $Dirección = $_POST['Dirección'];
  $Ciudad = $_POST['Ciudad'];
  $Correo = $_POST['Correo'];
  $Fecha_Registro_Dueño = $_POST['Fecha_Registro_Dueño'];
  $query = "UPDATE tabla_dueño set Celular = '$celular', Nombre_Dueño = '$Nombre_Dueño', Telefono_Fijo = '$Telefono_Fijo', Dirección = '$Dirección', Ciudad = '$Ciudad', Correo = '$Correo', Fecha_Registro_Dueño = '$Fecha_Registro_Dueño' WHERE Celular=$Celular";
  $ResultadoEditDueño = $con->query($query);

  if($ResultadoEditDueño){
  echo "<script>alert('Los datos se han guardado correctamente');window.location='Dueño.php'</script>";
  }else{
    echo "<script>alert('los datos no se han podido guardar correctamente');</script>";
  }
}
?>
        <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="" method="POST">
        <div class="form-group">
        <input name="celular" type="text" class="form-control" value="<?php echo $row['Celular'];  ?>" placeholder="Celular">
        </div>
        <div class="form-group">
        <input name="Nombre_Dueño" type="text" class="form-control" value="<?php echo $row['Nombre_Dueño']; ?>" placeholder="Nombre">
        </div>
        <div class="form-group">
        <input name="Telefono_Fijo" type="text" class="form-control" value="<?php echo $row['Telefono_Fijo'];  ?>" placeholder="Telefono_Fijo">
        </div>
        <div class="form-group">
        <input name="Dirección" type="text" class="form-control" value="<?php echo $row['Dirección'];  ?>" placeholder="Dirección">
        </div>
        <div class="form-group">
        <input name="Ciudad" type="text" class="form-control" value="<?php echo $row['Ciudad'];  ?>" placeholder="Ciudad">
        </div>
        <div class="form-group">
        <input name="Correo" type="text" class="form-control" value="<?php echo $row['Correo'];  ?>" placeholder="Correo">
        </div>
        <div class="form-group">
        <input name="Fecha_Registro_Dueño" type="date" class="form-control" value="<?php echo $row['Fecha_Registro_Dueño'];  ?>" placeholder="Fecha_Registro">
        </div>
        
        <button class="btn-success" name="update">
          Actualizar
</button>
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

