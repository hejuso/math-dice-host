<?php
    //Dados
include 'lib/dado.php';

//Incluimos la clase Jugador

include('auth.php');

?>
<html>

<?php
    include("lib/header.php");
?>

    <body>

        <?php
        include "lib/menu.php";
        include "lib/menuUsuario.php";
        ?>
  
        <!-- Formulario en el que se comprueba el valor del dado con el del campo de texto -->
        
        <div class='container'>

                <form role="form" action="resultado.php" method="post">
                  
                    <div class="row">
                        <div class='col-xs-12'><h1>Dado aleatorio:</h1></div>
                    </div>
                        <div class="row">
                            <?php 
                                //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.

                                dadoAleatorio(1);
                                dadoAleatorio(2);
                                dadoAleatorio(3);
                                    
                                dadoDe3Aleatorio(1);
                                dadoDe3Aleatorio(2);
                                
                                
                            ?>
                        </div>
                        
                        <div class="row">
                            <?php 
                                dadoDodecaedro(1);
                            ?>
                        </div>
                    </div>
                   
                </form>
        </div>
        
    </body>
</html>