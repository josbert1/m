<?php 
if (isset($_SESSION['user_fundacedis'])) {
header("Location: perfil");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesion - Fundacedis</title>
  <link rel="stylesheet" href="<?php echo $archivos; ?>css/font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="css/login.css">

  
</head>

<body>
  <div class="container">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">

            <div class="btn btn1">
             Iniciar sesion
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Olvido su contraseña?
            </p>
            <div class="btn btn1" >
              Recuperar
            </div>
            <br>
            <br>
            <br>
            <a href="inicio" class="btn btn1" style="text-decoration: none;color: white;">
              <i class="fa fa-reply"></i> Regresar 
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
          <form id="form-login" role="form">
            <input name="cedula" placeholder="Numero de Cedúla" type="text" autofocus="" required="" autocomplete="off">
            <input name="contra" placeholder="Contraseña" type="Password" required="" autocomplete="off">
            <input type="hidden" name="sesion">
            <div class="btn btn1 iniciar" id="btnlogin">
             <i class="fa fa-sign-in"></i>  Entrar
            </div>
            </form>
          </div>
        </div>
        <p class="alert alert-dismiss alert-warning">ws</p>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
            <input name="ced" placeholder="Cedúla" type="text" />
            <input name="fullName" placeholder="Correo" type="text" />
            <input name="Username" placeholder="Nueva Contraseña" type="text" />
            <input name="Password" placeholder="R Contraseña" type="Password" />
            <div class="btn">
              Enviar
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src='js/jquery-1.11.1.min.js'></script>
  <script src="<?php echo $archivos; ?>js/login.js"></script>
  <script src="<?php echo $archivos; ?>js/jquery.validate.js"></script>
    <script>
      $(".info-item .btn").click(function(){
        $(".container").toggleClass("log-in");
        $("input[name=ced]").focus();
      });
    </script>
</body>
</html>
