<?php
    //Dados
include 'lib/dado.php';

//Incluimos la clase Jugador
require("auth.php");


?>
<html>
    <head>
        <?php include("lib/header.php"); ?>
        
        <?php
        include "lib/menu.php";
        ?>
        <script type="text/javascript" src="js/comprobaciones.js"></script>

    </head>
    
    <body>
        
        <div class="inicio-form">
        
            <form class="form-horizontal" action="juego.php" method="post">
              
                <fieldset>
                <input type="hidden" name="jugador2">
                <!-- Introducir nombre-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                  <div class="col-md-4">
                  <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" value="<?php echo $jugador1->getNombre() ?>" required="*" readonly="readonly">

                 </div>
                </div>

                <!-- Introducir apellidos-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="apellidos">Apellidos</label>  
                  <div class="col-md-4">
                  <input id="apellidos" name="apellidos" type="text" placeholder="Introduzca sus apellidos" class="form-control input-md" value="<?php echo $jugador1->getApellidos() ?>" required="">

                  </div>
                </div>
                
                <!-- Introducir Edad-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="edad">Edad</label>  
                  <div class="col-md-4">
                  <input id="edad" name="edad" type="text" placeholder="Introduzca su edad" class="form-control input-md" value="<?php echo $jugador1->getEdad() ?>" required="">

                  </div>
                </div>
                  
                <br><br>
                
                <!-- Submit -->
                <div class="form-group">
                  <label class="col-md-5 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="submit" class="btn btn-primary">¡Guardar!</button>
                  </div>
                </div>
                

                </div>
                
                </fieldset>
            </form>
        </div>
    </body>
    
</html>