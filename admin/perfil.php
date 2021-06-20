<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <style>
    .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('loading_2.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
  }
  </style>
</head>
<body>
  <div class="loader"></div>
  <div>
    <h1>Hola esto es el perfil de administrador</h1>
  </div>

  <script>
    $(window).load(function() {
      $(".loader").fadeOut("slow");
    }, 3000);
  </script>
</body>
</html>