<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Iniciar Sesión - Servidores del Altar</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="assets/js/CaninosCasmeLogin.js"></script>

    <!-- Nuestro css-->
    <style>
    .main-section{
        margin:0 auto;
        margin-top:25%;
        padding: 0;
    }

    .modal-content{
        background-color: #3b4652;
        opacity: .85;
        padding: 0 20px;
        box-shadow: 0px 0px 3px #848484;
    }
    .user-img{
        margin-top: -50px;
        margin-bottom: 35px;
    }

    .user-img img{
        width: 100xp;
        height: 100px;
        box-shadow: 0px 0px 3px #848484;
        border-radius: 50%;
    }

    .form-group input[type=text],[type=password]{
        height: 42px;
        font-size: 18px;
        border:0;
        padding-left: 54px;
        color: black;
        border-radius: 5px;
    }

    .form-group::before{
        font-family: "Font Awesome\ 5 Free";
        position: absolute;
        left: 28px;
        font-size: 22px;
        padding-top:4px;
    }

    .form-group#user-group::before{
        content: "\f007";
    }

    .form-group#contrasena-group::before{
        content: "\f023";
    }

    button{
        width: 60%;
        margin: 5px 0 25px;
    }

    .forgot{
        padding: 5px 0;
    }

    .forgot a{
        color: white;
    }

    input[type=checkbox] {
  transform: scale(1.5);
}
    </style>

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="https://login.santisimatrinidadacolitos.com/ingreso/1/static/img/user.png" th:src="@{/img/user.png}"/>
                    <br>
                    <h4 style="color:yellow">Iniciar Sesión - Panel administrador</h4>
                </div>
                <form class="col-12" action="admin/validar.php" method="POST" id="Form_InicioSesion">
                    <div class="form-group" id="user-group">
                        <input type="text" name="username" class="login-field form-control" value="" placeholder="Usuario" maxlength="10" id="login-name" autocomplete="off">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="login-field form-control" value="" placeholder="Contraseña" maxlength="" id="login-pass" autocomplete="off">
                    </div>
                    <div class="">
                      <div style="width:10px"><input type="checkbox" class="form-control"></div><div style="margin-top:-18px;margin-left:10px;width:90%;"><label style="color:white;margin-left:-30px">Mantener la sesión iniciada</label></div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Acceder </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#" style="">¿Olvidó su contraseña?</a>
                </div>
                <!-- <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            
		        </div> --><br><br>
            </div>
        </div>
    </div>
</body>
</html>