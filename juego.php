<?php
    //Dados
include 'lib/dado.php';

//Incluimos la clase Jugador

include('auth.php');

?>
<html>

<head>
        <?php
            include("lib/header.php");
        ?>
</head>

    <body>

        <?php
        include "lib/menu.php";
        include "lib/menuUsuario.php";
        ?>

        <!-- Formulario en el que se comprueba el valor del dado con el del campo de texto -->
        <!--
        <div class='container'>
-->
            <form role="form" action="resultado.php" method="post">
              
                <div class="eligeDados">
                    
                   <?php if($jugador1->getLang() == 'sp'){ ?>
                       <h1>Elige dados:</h1>
                    <?php }else {?>
                        <h1>Choose dice:</h1>
                    <?php } ?>


                    <?php
                        //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.

                        dadoAleatorio(1);
                        dadoAleatorio(2);
                        dadoAleatorio(3);
                        
                    ?><br><br><?php
                    
                        dadoDe3Aleatorio(1);
                        dadoDe3Aleatorio(2);
                        
                    ?><br><br><?php
                    
                        dadoDodecaedro(1);
                        
                    ?>
                
                </div>
                
                <div class="eligeSimbolo">
                
                    <?php if($jugador1->getLang() == 'sp'){ ?>
                       <h1>Elige simbolo:</h1>
                    <?php }else {?>
                        <h1>Choose sign:</h1>
                    <?php } ?>

                    <div class="simbolos">
                        
                        <?php if($jugador1->getTipo() == "junior+"){ ?>
                            <img class="operacion" src="img/mas.png" name="operacion" value="+" width='100px'></img>
                            <img class="operacion" src="img/menos.png" value="-" width='100px'></img>
                            <img class="operacion operando" src="img/division.png" value="/" width='100px'></img>
                            <img class="operacion operando" src="img/multiplicacion.png" value="*" width='100px'></img>
                            <input type="hidden" name="operacion1" value=""/>
                            <input type="hidden" name="operacion2" value=""/>
                            <input type="hidden" name="operacion3" value=""/>
                            <input type="hidden" name="operacion4" value=""/>
                        <?php }else{ ?>
                            <img class="operacion" src="img/mas.png" name="operacion" value="+" width='100px'></img>
                            <img class="operacion" src="img/menos.png" value="-" width='100px'></img>
                            <input type="hidden" name="operacion1" value=""/>
                            <input type="hidden" name="operacion2" value=""/>
                            <input type="hidden" name="operacion3" value=""/>
                            <input type="hidden" name="operacion4" value=""/>
                        <?php } ?>
                    </div>
                
                </div>

                <br>
                
                <div class="seleccion">
                
                    <?php if($jugador1->getLang() == 'sp'){ ?>
                       <h1>Seleccion:</h1>
                    <?php }else {?>
                        <h1>Your choice:</h1>
                    <?php } ?>
                    <div id="jugada">
                        
                        <input type="hidden" name="dadoTirada1" value=""/>
                        <input type="hidden" name="dadoTirada2" value=""/>
                        <input type="hidden" name="dadoTirada3" value=""/>
                        <input type="hidden" name="dadoTirada4" value=""/>
                        <input type="hidden" name="dadoTirada5" value=""/>
                        
                    </div>
                </div>
                <div id="btn-jugada"></div>
                
            </form>
        </div>

<script type="text/javascript" src="js/query.js"></script>
    </body>
</html>