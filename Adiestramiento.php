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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <style>
    .activo {
     color:#2C2E27;
}
  </style>
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="sticky-container">
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
  <section id="Direccionamiento_forms">
<div class="container">
  <div class="row">
  <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/img/Educacion_img.png" class="card-img-top" alt="Imagen educacion canina">
      <div class="card-body">
        <h5 class="card-title">Educación</h5>
        <p class="card-text">Tengo un cachorro menor a 5 meses y quiero educarlo.</p>
        <a href="https://forms.gle/HkcuqNQ4MNmQVRtz8" title="Formulario de educacion" target="_blank" class="btn-get-started-forms">Si</a>
        <a id="btnabrir" class="btn-get-started-forms" title="Videos de educacion" data-toggle="modal" data-target="#Modal_Educacion"><img src="https://img.icons8.com/dotty/17/000000/movies-folder--v1.png"></a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="assets/img/Adiestramiento_img.png" class="card-img-top" alt="Imagen adiestramiento canino">
      <div class="card-body">
        <h5 class="card-title">Adiestramiento</h5>
        <p class="card-text">Quiero que mi perro obedezca a través de comandos o que hiciera trucos.</p>
        <a href="https://forms.gle/hF1FzV6gJtkNirhu6F" title="Formulario de adiestramiento" target="_blank" class="btn-get-started-forms">Si</a>
        <a id="btnabrir" class="btn-get-started-forms" title="Videos de adiestramiento" data-toggle="modal" data-target="#Modal_Adiestramiento"><img src="https://img.icons8.com/dotty/17/000000/movies-folder--v1.png"></a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="assets/img/ModificacionConductual_img.png" class="card-img-top" alt="Imagen modificacion conductual canina">
      <div class="card-body">
        <h5 class="card-title">Modificación conductual</h5>
        <p class="card-text">Mi perro es agresivo, destructor y no obedece.</p>
        <a href="https://forms.gle/C9tRhMggUn5XsLgq7" title="Formulario de modificación conducual" target="_blank" class="btn-get-started-forms">Si</a>
        <a id="btnabrir" class="btn-get-started-forms" title="Videos de modificacion conductual"data-toggle="modal" data-target="#Modal_Modificacion_Conductual"><img src="https://img.icons8.com/dotty/17/000000/movies-folder--v1.png"></a>
      </div>
    </div>
  </div>
  </div>
</div>
</section>
<!---Modal Educacion-->
<div class="modal fade" id="Modal_Educacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">VIDEOS EDUCACION CANINA</h5>
            </div>
            <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Educacion_video1.mp4">
               </video>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Educacion_video2.mp4">
               </video>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
</div>
      <!---Modal Adiestramiento-->
<div class="modal fade" id="Modal_Adiestramiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">VIDEOS ADIESTRAMIENTO CANINO</h5>
            </div>
            <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Adiestramiento_video1.mp4">
               </video>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Adiestramiento_video2.mp4">
               </video>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Adiestramiento_video3.mp4">
               </video>
            </div>       
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <!---Modal Modificacion conductual-->
<div class="modal fade" id="Modal_Modificacion_Conductual" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9ACD32">
              <h5 class="modal-title" style="font-weight:bold" id="exampleModalLabel">VIDEOS MODIFICACION CONDUCTUAL</h5>
            </div>
            <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Modificacion_conductual_video1.mp4">
               </video>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Modificacion_conductual_video2.mp4">
               </video>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
               <video controls>
                 <source src="assets/video/Modificacion_conductual_video3.mp4">
               </video>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

<section id="Adiestramiento">
<div class="container">
    <div class="row"> 
      <div class="col-md-6"><img src="assets/img/Galeria_opt/Galeria-15-min.jpg" alt="Imagen casme" class="img-fluid" style="width:100%;border-radius:5px;">
      <img src="assets/img/Galeria_opt/Galeria-19-min.jpg" alt="Imagen casme" class="Img-Adiestramiento" style="width:100%;border-radius:5px;">
    </div>
    <div class="col-md-6">
        <h2 style="color:#138fcb;font-family:Roboto Condensed;font-weight:bold">Importancia de educar y adiestrar a tu perro</h2>
        <p>Cuando hablamos de adiestrar a un perro, mucha gente suele asociar el concepto adiestramiento con algo negativo para el animal. Pero, en realidad, educar y adiestrar a un perro tiene muchos aspectos positivos si se hace de forma correcta. Hoy queremos hablarte de algunos de ellos, ¡vamos allá!</p>       
        <p>En primer lugar, es muy importante que quede clara la diferencia entre educar a un perro y adiestrarlo: la educación canina tiene como objetivos mejorar la relación entre el perro y su guía, mejorando la comunicación entre ambos y ayudando al perro a encontrar un equilibrio emocional que facilite su adaptación al entorno. Por simplificarlo un poco, consiste en ganarse la confianza del perro para poder guiarle en su aprendizaje, en entender qué necesita para estar equilibrado y en saber cómo comunicarle lo que está permitido y lo que no.</p>
        <p>Por otra parte, el adiestramiento consiste en entrenar al perro para que obedezca órdenes básicas o adquiera unas habilidades concretas. El adiestramiento te proporciona herramientas para manejar ciertas situaciones en el día a día, es ganar en confianza y control. Por ejemplo: Si enseñas a tu perro a venir a la llamada, tendrás más confianza para dejarlo suelto y tu perro disfrutará de mucha más libertad.</p>
        <p>Por tanto, si lo que quieres conseguir es que tu perro aprenda unas órdenes básicas y sea capaz de convivir mejor con el entorno en el que vive, deberás combinar el adiestramiento con la educación canina para conseguir los mejores resultados. Y, sobre todo, deberás tener en cuenta que este trabajo no pasa solo por las manos del educador: tú también eres una parte vital del proceso y deberás aprender a entender el lenguaje y las necesidades de tu perro, mejorar tu comunicación con él y explicarle con claridad qué es lo que esperas de vuestra relación.</p>
      </div>
    </div>
  </div>
</section><br>
<section id="cta" class="cta">
      <div class="container">
        <div class="section-title">
          <h3>¡Adiestramos a tu perro para que tu lo disfrutes!</h3>
          <p></p>
        </div>
      </div>
    </section> 
<section id="Adiestramiento">
<div class="container">
    <div class="row">  
    <div class="col-md-6">
        <h2 style="color:#138fcb;font-family:Roboto Condensed;font-weight:bold">Beneficios de adiestrar y educar a tu perro</h2>
        <p>Algunos ya te los hemos contado más arriba: la educación canina hará que tu perro sepa reaccionar mejor ante diferentes estímulos de su día a día y mejorará nuestra convivencia. Pero también conseguirás otros beneficios: un perro educado se porta mejor y, por tanto:</p>       
        <p>#1 Mejorarás el vínculo que te une a tu perro.
Un perro educado es un perro con el que no tienes conflictos constantes. Tu  relación con el será menos tensa y más confiable, tu perro se sentirá más seguro y estará menos estresado: tener a un perro educado te permitirá compartir muchas más experiencias positivas con él.</p>
        <p>#2 Corregirás conductas inapropiadas como el estrés, la ansiedad u otros problemas como la agresividad, estos pueden trabajarse mediante la educación canina y el adiestramiento. Tendrás que ser muy constante y contar con apoyo profesional pero, si se suman esfuerzos, podrás revertir las conductas que hacen sufrir a tu perro y disfrutará más del día a día.</p>
        <p>#3 Te entendera mejor,
parece una obviedad, pero tu perro no entiende las palabras que le dices. Un perro educado puede responder ante determinadas órdenes pero su lenguaje y el nuestro son radicalmente distintos, así que a través de la educación canina tanto tú como tu perro aprenderán a comunicarse y a entender qué es lo que el otro necesita.</p>
        <p>Educar y adiestrar en obediencia a un perro te ayudará a mejorar el control que tienes sobre él o ella como guía y a que él mismo conozca la estructura de los paseos y mejore su autocontrol. En cualquier caso, una supervisión activa siempre es necesaria en los paseos de perros.</p>
        <p></p>
      </div>
      <div class="col-md-6"><img src="assets/img/Galeria_opt/Galeria-14-min.jpg" alt="Imagen_Casme" class="img-fluid" style="width:100%;border-radius:5px;">
      <img src="assets/img/Galeria_opt/Galeria-26-min.jpg" alt="Imagen_Casme" class="Img-Adiestramiento" style="width:100%;border-radius:5px;">
    </div>
    </div>
  </div>
</section>
<section id="cta" class="cta">
      <div class="container">
        <div class="section-title">
          <h3>¡Adiestramos a tu perro para que tu lo disfrutes!</h3>
          <p></p>
        </div>
      </div>
    </section> 
<section id="Adiestramiento">
<div class="container">
    <div class="row">  
      <div class="col-md-6"><img src="assets/img/Galeria_opt/Galeria-5-min.jpg" alt="Imagen_Casme Conocenos" class="img-fluid" style="width:100%;border-radius:5px;">
    </div>
    <div class="col-md-6">
        <h2 style="color:#138fcb;font-family:Roboto Condensed;font-weight:bold">Quiero educar a mi perro, ¿Qué hago?</h2>
        <p>En primer lugar, ármate de paciencia. Ningún perro nace educado, claro está, y es un proceso que necesita tiempo. Además, ten en cuenta que una vez el perro esté adiestrado deberéis seguir practicando lo aprendido, para que no se les olvide a ninguno de los dos: como en cualquier otro aprendizaje, cuanto más practiquen más mejorarán.</p>
        <p>También es importantísimo que no olvides que la educación debe ser algo positivo para el perro: tiene que divertirse aprendiendo. ¿Qué clases recuerdas tú con más cariño, aquellas con el profe más severo del cole o las que eran amenas y divertidas?</p>
        <p>Por último, ten muy en cuenta que un mal adiestramiento puede provocar severos daños emocionales a tu perro y, en algunos casos, también físicos. Así que si no sabes muy bien cómo adentrarte en el mundo de la educación canina, contáctanos,  tenemos  más de 16 años en el camino interminable de la educación Canina, escuela profesional de adiestramiento Canino CASME tenemos varios módulos los cuales están hecho par acoplarnos a las necesidades de cada perrito y cada familia</p>
      </div>
    </div>
  </div>
</section>
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