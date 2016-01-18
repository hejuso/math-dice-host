<?php
//Se borran las cookies
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]
  );
}

    if(isset($_SESSION)){
      session_destroy();
    }
?>
<html>

<head>
  <?php
    include("lib/header.php");
  ?>
</head>

    <body>

      <div class="container">

        <div class="row">
          <div class="col-xs-12">
            
            <img class="logo" src="img/MathDice.png"></img>
            
          </div>
        </div>
        
        <div class="row">

          <div class="col-xs-6">
            <a href="inicioSesion.php" class="myButton1">Entrar</a>
          </div>

          <div class="col-xs-6">
            <a href="registro.php" class="myButton2">Registrarse</a>
          </div>
          
        </div>
      </div>

    </body>    
</html>