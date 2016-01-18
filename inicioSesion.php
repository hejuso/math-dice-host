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
        <div class="col-xs-12">
          
          <div class="inicio-form">
        
            <form class="form-horizontal" action="juego.php" method="post">
              
                <fieldset>
                  <legend><h3 align="center">Formulario de registro</h3></legend><a href="index.php">Atras</a>

                <input type="hidden" name="jugador">
                <!-- Introducir nombre-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                  <div class="col-md-4">
                  <input id="nombre" name="nombre" type="text" placeholder="Introduzca su nombre" class="form-control input-md" required="*">
  
                 </div>
                </div>
                
                <!-- Introducir apellidos-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="apellidos">Apellidos</label>  
                  <div class="col-md-4">
                  <input id="apellidos" name="apellidos" type="text" placeholder="Introduzca sus apellidos" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <br>
  
                <!-- Submit -->
                <div class="form-group">
                  <label class="col-md-5 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="submit" class="btn btn-primary">Iniciar sesión</button>
                  </div>
                </div>
                </div>

                </fieldset>

            </form>
        </div>

        </div>
    </div>
  </div>
    </body>    
</html>