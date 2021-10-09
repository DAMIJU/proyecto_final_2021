<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Servicios</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
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
  <style>
    .activo {
     color:#2C2E27;
}
  </style>
  
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<header id="header" class="">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/Logo.png" alt="Logo Caninos Casmes"></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="Nosotros.php">Nosotros</a></li>
          <li><a style="color:#2C2E27" href="Servicios.php">Servicios</a></li>
          <li><a href="Galeria.php">Galería</a></li>
          <li><a href="Login.php">Admin</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <br>
<main id="main">
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><img src="https://img.icons8.com/pastel-glyph/64/000000/dog-heart--v2.png"/></div>
              <h4 class="title"><a href="">Adiestramiento</a></h4>
              <p class="description"></p>
              <a id="btnabrir" class="btn-get-started btn btn-lg scrollto span2" data-toggle="modal" data-target="#Modal_ServicioAdiestramiento"><img src="https://img.icons8.com/small/16/000000/open-in-popup.png"></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><img src="https://img.icons8.com/ios/64/000000/gum-.png"/></div>
              <h4 class="title"><a href="">Gimnasio</a></h4>
              <p class="description"></p>
              <a id="btnabrir" class="btn-get-started btn btn-lg scrollto span2" data-toggle="modal" data-target="#Modal_ServicioGimnasio"><img src="https://img.icons8.com/small/16/000000/open-in-popup.png"></a>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><img src="https://img.icons8.com/wired/64/000000/syringe.png"></div>
              <h4 class="title"><a href="">Medicina Preventiva</a></h4>
              <p class="description"></p>
              <a id="btnabrir" class="btn-get-started2 btn btn-lg scrollto span2" data-toggle="modal" data-target="#ModalServicio_Vacunacion"><img src="https://img.icons8.com/small/16/000000/open-in-popup.png"></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><img src="https://img.icons8.com/ios/64/000000/poodle.png"/></div>
              <h4 class="title"><a href="">Estetica</a></h4>
              <p class="description"></p>
              <a id="btnabrir" class="btn-get-started btn btn-lg scrollto span2" data-toggle="modal" data-target="#Modal_EsteticaCanina"><img src="https://img.icons8.com/small/16/000000/open-in-popup.png"></a>
            </div>
          </div>    
        </div>
      </div>
      
      <!---Modal Adiestramiento-->
      <div class="modal fade" id="Modal_ServicioAdiestramiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">Adiestramiento Canino</h5>
            </div>
            <div class="modal-body">
              <center><!-- <p style="color:red;font-size:20px">Adiestramiento canino</p> -->
              <p>El adiestramiento consiste en entrenar al perro para que obedezca órdenes básicas o adquiera unas habilidades concretas. 
                El adiestramiento te proporciona herramientas para manejar ciertas situaciones en el día a día, es ganar en confianza y control.
                Ten muy en cuenta que un mal adiestramiento puede provocar severos daños emocionales a tu perro y, en algunos casos, también físicos.
                Así que si no sabes muy bien cómo adentrarte en el mundo de la educación canina, contáctanos, tenemos  más de 16 años de experiencia.
                Poseemos varios módulos los cuales están hechos para acoplarse a las necesidades de cada perrito y familia.</p>
                <p>Si te interesa, haz <a class="Adiestramiento" href ="Adiestramiento.php">clic aquí</a> para saber más:<p>   
              <img class="Img_Adiestramiento img-fluid" style="width:40%" src="assets/img/Adiestramiento.png" href="Adiestramiento.php" alt="Adiestramiento Canino"></center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!---Modal Gimnasio-->
      <div class="modal fade" id="Modal_ServicioGimnasio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">Gimnasia Canina</h5>
            </div>
            <div class="modal-body">
              <center><!-- <p style="color:red;font-size:20px">¡Ejercita a tu can!</p> -->
              <p>Cuando un perro realiza ejercicio constantemente, se cansa y libera mucha 
                energía y emociones, lo que reduce los problemas de comportamiento comunes, como ladrar 
                constantemente, morder cosas que no debe, excavar en los jardines y otros comportamientos 
                que se relacionan generalmente con la ansiedad.</p>
              <img class="Img_GimnasiaCanina img-fluid" style="width:40%" src="assets/img/Gimnasia_Casme.jpg" alt="Gimnasia Canina"></center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---Modal Vacunación-->
    <div class="modal fade" id="ModalServicio_Vacunacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">Medicina Preventiva</h5>
            </div>
            <div class="modal-body">
              <center><!-- <p style="color:red;font-size:20px">¡Vacunamos a tu perrito según la edad!</p> -->
              <p>La vacunación en las mascotas tiene como objetivo prevenir algunas de las enfermedades 
                infecciosas graves o contagiosas de las que afectan a nuestros caninos. 
                Éstas pueden resultar mortales o muy debilitantes. En muchos casos no existe 
                tratamiento o resulta muy difícil, largo o poco accesible, por lo que la vacunación es una 
                herramienta importante, y a veces puede ser la única herramienta para controlarlas y asegurar 
                el bienestar de tus mascotas.</p>
              <img class="Img_VacunamosTuPerrito img-fluid" src="assets/img/Vacuna.png" style="width:40%" alt="Vacunamos tu perrito">
              </center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!---Modal Estética-->
      <div class="modal fade" id="Modal_EsteticaCanina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
          <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">Estética Canina</h5>
            </div>
            <div class="modal-body">
              <p>La mejor opción para nuestros perros en Tantoyuca y la región, nuestro servicio incluye:</p>
              <div class="row">
                <div class="col-md-6">
                  <li>Desenredado</li>
                  <li>Recuperación de pelaje</li>
                  <li>Baño control caída de pelo</li>
                  <li>Baño con shampoo hipo alergénico</li>
                  <li>Lavanda y romero</li>
                  <li>Masaje relajante durante el baño</li>
                  <li>Limpieza de glándulas anales</li>
                  <li>Acondicionado y texturizado de pelo.</li>
                </div>
                <div class="col-md-6">
                  <li>Secado profundo</li>
                  <li>Corte de uñas ya reblandecidas por el baño</li>
                  <li>Limpieza de oídos</li>
                  <li>Corte y arreglo estético que puede ser clásico</li>
                  <li>Diseño de imagen</li>
                  <li>Cambio de look o arreglo de fantasía</li>
                  <li>Adorno y perfume si es de su agrado</li>
                </div>
              </div>
              <div class="col-md-12">
              <img class="Img_VacunamosTuPerrito img-fluid" src="assets/img/Estetica.png" style="width:40%" alt="Vacunamos tu perrito">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
</main>
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Casme</span></strong>. Todos los derechos reservados.
        </div>
        <div class="credits">
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

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div class="social">
		<ul>
			<li><a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook"></a></li>
			<li><a href="http://www.twitter.com/falconmasters" target="_blank" class="icon-twitter"></a></li>
			<li><a href="http://www.googleplus.com/falconmasters" target="_blank" class="icon-googleplus"></a></li>
			<li><a href="http://www.pinterest.com/falconmasters" target="_blank" class="icon-pinterest"></a></li>
			<li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
		</ul>
	</div>
  

</div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>
</html>