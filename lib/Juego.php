<?php

include('auth.php');

    function mathDice($valorEval,$dadoDode){

        ob_start();//Abrimos el búfer para almacenar todo lo que devuelva el eval
        
        eval("echo $valorEval;");
            
        $valor = ob_get_contents();
        
        ob_end_clean();//Lo cerramos
        
        if ($valor == $dadoDode){
            
            ganaPuntos();
           
            if($_SESSION['jugador']->getLang() == 'sp'){
                
                echo '<h1>¡Correcto! <br> Puntos: '.$_SESSION['jugador']->getPuntos().'</h1>';

            }else{
                echo '<h1>¡You won! <br> Points: '.$_SESSION['jugador']->getPuntos().'</h1>';
            }
            
            
        }else{
            
            if($_SESSION['jugador']->getLang() == 'sp'){
                echo '<h1>Incorrecto!</h1>';
            }else{
                echo '<h1>Incorrect!</h1>';
            }

        }

        
    }
    
    function ganaPuntos(){
        
        $_SESSION['jugador']->setPuntos($_SESSION['jugador']->getPuntos() + 10);
        
    }
    
?>