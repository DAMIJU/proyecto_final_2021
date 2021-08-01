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
     color:yellow;
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
          <li><a style="color:yellow" href="Servicios.php">Servicios</a></li>
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
              <h4 class="title"><a href="">Vacunacion</a></h4>
              <p class="description"></p>
              <a id="btnabrir" class="btn-get-started btn btn-lg scrollto span2" data-toggle="modal" data-target="#ModalServicio_Vacunacion"><img src="https://img.icons8.com/small/16/000000/open-in-popup.png"></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><img src="https://img.icons8.com/ios/64/000000/poodle.png"/></div>
              <h4 class="title"><a href="">Estetica canina</a></h4>
              <p class="description"></p>
              <a id="btnabrir" class="btn-get-started btn btn-lg scrollto span2" data-toggle="modal" data-target="#Modal_EsteticaCanina"><img src="https://img.icons8.com/small/16/000000/open-in-popup.png"></a>
            </div>
          </div>    
        </div>
      </div>
      <br><br><br><br><br>
      <!---Modal Adiestramiento-->
      <div class="modal fade" id="Modal_ServicioAdiestramiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">Adiestramiento básico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Básica con correa” ¿Te gustaría entender a tu perro y mejorar tu relación con él? Conseguir que los paseos sean agradables y que el perro obedezca de manera natural es mucho más fácil de lo que puede parecer. Descúbrelo todo en este adiestramiento</p>
              <p>12 órdenes en total:</p>
              <div class="row">
                <div class="col-md-6">
                  <li>I. Caminado junto con correa. </li>
                  <li>II. Paso lento.</li>
                  <li>III. Paso normal.</li>
                  <li>IV. Paso rápido.</li>
                  <li>V. Vuelta a la derecha.</li>
                  <li>VI. Vuelta a la izquierda.</li>
                </div>
                <div class="col-md-6">
                  <li>VII. Media vuelta.</li>
                  <li>VIII. Sentado a la orden.</li>
                  <li>IX. Sentado automático.</li>
                  <li>X. Echado a la orden.</li>
                  <li>XI. Quieto sentado a 2 metros duración 1 minuto.</li>
                  <li>XII. Quieto echado a 2 metros duración 1 min</li>
                </div>
              </div>
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <center><p style="color:red;font-size:20px">¡Ejercita a tu perro!</p>
              <p>Ejercitamos a tu perro, llevamos un plan cardiobascular en caminadora, canina.</p>
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
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">Vacunación</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <center>¡Vacunamos a tu perrito según la edad!</p>
              <img class="Img_VacunamosTuPerrito img-fluid" src="assets/img/Vacunacion_Casme.jpg" style="width:40%" alt="Vacunamos tu perrito">
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>La mejor opción para nuestros perros en Tantoyuca y la región, nuestro servicio incluye:</p>
              <div class="row">
                <div class="col-md-6">
                  <li>Desenredado</li>
                  <li>Recuperación de pelaje</li>
                  <li>Baño control caída de pelo</li>
                  <li>Baño con shampoo hipo alergénico y aromaterapia</li>
                  <li>Lavanda y romero</li>
                  <li>Masaje relajante durante el baño</li>
                  <li>Limpieza de glándulas anales</li>
                  <li>Acondicionado y texturizado de pelo según la raza</li>
                </div>
                <div class="col-md-6">
                  <li>Secado rápido y a conciencia</li>
                  <li>Corte de uñas ya reblandecidas por el baño</li>
                  <li>Limpieza de oídos</li>
                  <li>Corte y arreglo estético que puede ser clásico</li>
                  <li>Diseño de imagen</li>
                  <li>Cambio de look o arreglo de fantasía</li>
                  <li>Adorno y perfume si es de su agrado</li>
                </div>
              </div>
            </div>
            <div class="modal-footer">
            <button style="margin-left:85%" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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