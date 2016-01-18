<?php

    function dadoAleatorio($num){
        
        //Necesito algo para no tener que repetir arrays.
        
        $arr1=array('dado1.png','dado2.png','dado3.png','dado4.png','dado5.png','dado6.png');
        
        $numAleatorio = rand(0,5);
        $numAleatorioMas1 = $numAleatorio+1;
            
        echo '<img class="dado6" value="'.$numAleatorioMas1.'" src="img/'.$arr1[$numAleatorio].'"></img>';
       
        //echo '<input type="hidden" name="dado'.$num.'" value="'.$numAleatorioMas1.'">';
        
    }
    
    function dadoDe3Aleatorio($num){
        
        //Necesito algo para no tener que repetir arrays.
        
        $arr1=array('dado1_3.png','dado2_3.png','dado3_3.png');
        
        $numAleatorio = rand(0,2);
        $numAleatorioMas1 = $numAleatorio+1;
            
        echo '<img class="dado3" value="'.$numAleatorioMas1.'" src="img/'.$arr1[$numAleatorio].'"></img>';
       
        //echo '<input type="hidden" name="dado'.$num.'_3" value="'.$numAleatorioMas1.'">';
        
    }
    
    function dadoDodecaedro($num){
        
        //Necesito algo para no tener que repetir arrays.
        
        $arr1=array('Dodecaedro1.png','Dodecaedro2.png','Dodecaedro3.png','Dodecaedro4.png','Dodecaedro5.png','Dodecaedro6.png','Dodecaedro7.png','Dodecaedro8.png','Dodecaedro9.png','Dodecaedro10.png','Dodecaedro11.png','Dodecaedro12.png',);
        
        $numAleatorio = rand(0,11);
        $numAleatorioMas1 = $numAleatorio+1;
            
        echo '<img class="dado12" value="'.$numAleatorioMas1.'" src="img/'.$arr1[$numAleatorio].'"></img>';
       
        echo '<input type="hidden" name="dodecaedro'.$num.'" value="'.$numAleatorioMas1.'">';
        
    }
    
    
    
    function compSumaDado($dado1, $dado2, $num1, $signo ,$num2){
        
        if($dado1 == $num1 && $dado2 == $num2){
        
            if($signo == "+"){
                $suma = $num1 + $num2;
                return "
                CORRECTO
                <br>
                La suma de ".$num1." y ".$num2." es igual a: ".$suma;
                
            }else if($signo == "-"){
                
                $resta = $num1 - $num2;
                return "CORRECTO
                <br>
                La resta de ".$num1." y ".$num2." es igual a: ".$resta;
                
            }
        
        }else{
            
            return "ERROR
                    <br>
                    El dado1: ".$dado1." o el dado2: ".$dado2." no coinciden con los numeros que has introducido.<br>
                    
                    Numero 1: ".$num1."<br>
                    Numero 2: ".$num2;
            
        }
        
    }
?>