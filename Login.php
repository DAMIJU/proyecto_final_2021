<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Iniciar sesión</title>
    <style>
      body{
        background: #ffe259;
        background: linear-gradient(to right, #0A959E, #0C8289);
      }

      .bg{
        background-image: url('../img/Prueba 1.jpg');
        background-position: center center;
      }

      label{
        font-weight: bold;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container bg-primary mt-5 rounded shadow w-75">
      <div class="row align-items-strech">
        <div class="col bg d-none d-lg-block col-md-5 col-lg ">

        </div>
        <div class="col bg-white p-5 rounded-end">
          <div class="text-end">
            <img src="../img/logo sin fondo.png" width="60px" alt="Caninos Casme - Logo">
          </div>

          <h2 class="fw-bold text-center py-5" style="color:red">¡Bienvenido!</h2>
          <form action="#" method="POST">
            <div class="mb-4">
              <center><label for="Usuario" class="form-label">Usuario:</label></center>
              <input type="text" class="form-control" name="Usuario" placeholder="Ingrese su usuario" autocomplete="off">
            </div>
            <div class="mb-4">
              <center><label for="Password" class="form-label">Contraseña:</label></center>
              <input type="password" class="form-control" placeholder="Ingrese su contraseña" name="Password_Contraseña">
            </div>

            <div class="d-grid">
              <input type="submit" class="btn btn-primary" value="Iniciar sesión" name="Enviar_Acceder">
            </div>

            <div class="my-3">
              <span><a href="#">Restablecer contraseña</a></span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>