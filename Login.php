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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="assets/js/CaninosCasmeLogin.js"></script>

    <!-- Favicons -->
    <link href="assets/img/Logo.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/LoginStyles.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/Logo.png" alt="Caninos Casme"></a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Nosotros.php">Nosotros</a></li>     
            <li><a href="Servicios.php">Servicios</a></li>
            <li><a href="Galeria.php">Galería</a></li>              
            <li><a style="color:#2C2E27" href="Login.php">Admin</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="global-container">
	  <div class="card login-form" style="margin-top:-100px">
	    <div class="card-body">
		    <h4 style="font-weight:bold" class="card-title text-center">Panel Administrador</h4>
		    <div class="card-text">
			    <form action="admin/validar.php" method="POST" id="Form_InicioSesion">
				    <div class="form-group">
					    <label for="exampleInputEmail1">Nombre de usuario<span style="color:red">*</span></label>
					    <input type="text" name="username" class="form-control form-control-sm" placeholder="Usuario" maxlength="10" id="login-name">
				    </div>
				    <div class="form-group">
					    <label for="exampleInputPassword1">Contraseña<span style="color:red">*</span></label>
					    <a href="#" onclick="alert('Acción aún no disponible')" style="float:right;font-size:12px;">¿Olvidó su contraseña?</a>
					    <input type="password" name="password" class="form-control form-control-sm" placeholder="Contraseña" maxlength="" id="login-pass">
				    </div>
				  <button type="submit" class="btn btn_AccederNewLogin btn-block">Acceder</button>
			    </form>
		  </div>
	  </div>
  </div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>
</body>
</html>