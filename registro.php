<html>
<head>
        <?php
            include("lib/header.php");
        ?>
<script type="text/javascript" src="js/comprobaciones.js"></script>
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

                <input type="hidden" name="registro">
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
                
                <!-- Introducir Edad-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="edad">Edad</label>  
                  <div class="col-md-4">
                  <input id="edad" name="edad" type="text" placeholder="Introduzca su edad" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Modal -->
                  <div class="modal fade" id="aviso" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Cuidado</h4>
                        </div>
                        <div class="modal-body">
                          <p>Introduzca solo números.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                
                <!-- Modo de juego -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="tipoJuego">Tipo de juego</label>
                  <div class="col-md-4">
                    <select id="tipoJuego" name="tipoJuego" class="form-control">
                      <option value="junior">Junior</option>
                      <option value="junior+">Junior+</option>
                    </select>
                  </div>
                </div>
  
                <!-- Idioma -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="language">Idioma</label>
                  <div class="col-md-4"> 
                    <label class="radio-inline" for="language-0">
                      <input type="radio" name="lang" id="spanish" value="sp" checked="checked">
                      Español
                    </label> 
                    <label class="radio-inline" for="language-1">
                      <input type="radio" name="lang" id="english" value="en">
                      English
                    </label>
                  </div>
                  
                <br><br>
  
                <!-- Submit -->
                <div class="form-group">
                  <label class="col-md-5 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="submit" class="btn btn-primary">¡Registrarse!</button>
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