<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galería</title>
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
          <li><a style="color:#2C2E27" href="Galeria.php">Galería</a></li>
          <li><a href="Login.php">Admin</a></li>
        </ul>
      </nav>
    </div>
  </header>
 <section id="portfolio" class="portfolio">
      <div class="container text-center">
        <div class="row portfolio-container">
        <?php  
          include("admin/DB/conexion.php");
          $query="SELECT * FROM tabla_portfolio";
          $resultado= $con->query($query);
          while($mostrar=$resultado->fetch_assoc()){
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']);?>" loading="lazy" class="img-fluid" alt="Imagen Casme">
          </div>
          <?php } ?>
      </div>
    <a class="btn-get-started btn btn-lg scrollto span2">Ver más</a>
</div>
 </section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(".portfolio-item").slice(0, 6).show()
  $(".btn-get-started").on("click", function(){
      $(".portfolio-item:hidden").slice(0, 6).slideDown()
      if ($(".portfolio-item:hidden").length == 0) {
          $(".btn-get-started").fadeOut('slow')
      }
    })
</script>
<script>
  document.querySelectorAll(".portfolio").forEach(el=>{
    el.addEventListener("click",function(ev){
    ev.stopPropagation();
    this.parentNode.classList.add("active");
  })
});
document.querySelectorAll(".container").forEach(el=>{
    el.addEventListener("click", function(ev){  
    this.classList.remove("active");
  })
})
</script>
<br><br><br>
<footer id="footer" style="position:relative">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
         &copy; Copyright <strong><span>Casme</span></strong>. Todos los derechos reservados.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.tiktok.com/@diego_casme?lang=es" target="_blank" class="tiktok"><iconify-icon data-icon="simple-icons:tiktok" style="font-size:14px"></iconify-icon></a> 
        <a href="https://www.facebook.com/Servicios-caninos-Casme-905518146207815" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>     
        <a href="https://www.instagram.com/servicioscaninoscasme/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://wa.me/527891017905" target="_blank" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://www.youtube.com/user/Diegocasme/videos" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>
</html>