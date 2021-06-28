<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Panel de administrador</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta content="Miguel Angel Arias, Darwin Meneses, Juan Esteban Alvarez" name="autor">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="assets/js/CaninosCasmeLogin.js"></script>

    <!-- Favicons -->
    <link href="assets/img/Logo.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v2.2.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<!--   <button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button> -->
  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/Logo sin fondo.png" alt="Caninos Casme"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li ><a href="Nosotros.php">Nosotros</a></li>     
            <li ><a href="Servicios.php">Servicios</a></li>
            <li ><a href="Galeria.php">Galería</a></li>              
            <li class="active"><a href="Login.php">Admin</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
</sesion>
  <br><br>
  <section class="admin">
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="https://login.santisimatrinidadacolitos.com/ingreso/1/static/img/user.png" th:src="@{/img/user.png}"/>
                    <br>       
                    <h4 style="color:#9ACD32">Panel administrador</h4>
                </div>
                <form class="col-12" action="admin/validar.php" method="POST" id="Form_InicioSesion">
                    <div class="form-group" id="user-group">
                        <input type="text" name="username" class="login-field form-control" value="" placeholder="Usuario" maxlength="10" id="login-name">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="login-field form-control" value="" placeholder="Contraseña" maxlength="" id="login-pass">
                    </div>             
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Acceder </button>
                </form>
                <br>
                <div class="col-12 forgot">    
                    <div class="col-12 forgot">
                        <a href="#" style="color:#9ACD32">¿Olvidó su contraseña?</a>
                    </div>
                <!-- <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            
		        </div> --><br><br>
                </div> <br><br>
            </div>
        </div>
    </div>
</div>
  </section>
<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>