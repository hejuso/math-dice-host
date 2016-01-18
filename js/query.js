var contador=1; //Contador de dados clickados
var contadorOp=1; //Contador de operaciones realizadas
var realizarOperacion=false; //Semaforo para realizar operacion o dado
//Callback click sobre clase dado3 que son las imagenes de los dados de hasta 3
//fichero jugar.php --> <img src="img/dado<?=$dado1?>_3.png" width="100px" class="dado3" value="<?=$dado1?>"></img>
$(document).ready(function(){
    $('.dado3').click(function(){
        if(realizarOperacion==false){
            //Recogemos el valor que tiene la imagen ya que cada imagen es un valor aleatorio
            var value=$(this).attr("value");
            //Añadimos en la parte derecha  un dado con el mismo valor
            //fichero jugar.php --> <div class="items" id="jugada">
            $("#jugada" ).append( "<img src='img/dado"+value+"_3.png' width='100px'>" );
            //Desactivamos el click sobre ese elemento
            $(this).off("click");
            //Cambiamos esa imagen a gris
            $(this).attr("src","img/dadogris.png");
            //Cambiamos el valor dentro del campo hidden del formulario
            //fichero jugar.php --> <input type="hidden" name="dado1" value=""/>
            var dadoId="input[name='dadoTirada"+contador+"']";
            $(dadoId).val(value);
            console.log(value);
            //Si ya hemos colocaddo dos dados (una operación al menos) activamos el boton de calcular
            if(contador==2){
                $("#btn-jugada" ).append( "<button type='submit' class='input-md btn btn-lg btn-primary boton'>Math Dice!</button>" );
            }
            contador++;
            //Activamos seemaforo poder realizar operacion
            if(contador<=5){
                realizarOperacion=true;
            }
            console.log(value);
        }
    });
//Callback click sobre clase dado6 que son las imagenes de los dados de hasta 6
//<img src="img/dado<?=$dado4?>_6.png" width="100px" class="dado6" value="<?=$dado4?>"></img>
    $('.dado6').click(function(){
        if(realizarOperacion==false){
            var value=$(this).attr("value");
            $("#jugada" ).append( "<img src='img/dado"+value+".png' width='100px'>" );
            $(this).off("click");
            $(this).attr("src","img/dadogris.png");
            var dadoId="input[name='dadoTirada"+contador+"']";
            $(dadoId).val(value);
            console.log(value);
            if(contador==2){
                $("#btn-jugada" ).append( "<button type='submit' class='input-md btn btn-lg btn-primary boton'>Math Dice!</button>" );
            }
            contador++;
            realizarOperacion=true;
            if(contador<=5){
                realizarOperacion=true;
            }
            console.log(value);

        }
    });
});
//Callback click sobre operaciones de suma/resta
//<img src="img/suma.png" width="100px" class="operacion" value="+"></img>
//<img src="img/resta.png" width="100px" class="operacion" value="-"></img>
$(document).ready(function(){
    $('.operacion').click(function(){
        if(realizarOperacion==true){
            if(contadorOp<=4){
                var value=$(this).attr("value");
                var imgagen=$(this).attr("src");
                $("#jugada" ).append( "<img class='operando' src='"+imgagen+"' width='100px'>" );
                var opId="input[name='operacion"+contadorOp+"']";
                $(opId).val(value);
                contadorOp++;
                realizarOperacion=false;
            }
        }
    });
});

$(function(){
	$('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function(){
		$(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
		$(this).addClass('selected');
		$(this).find('input[type="radio"]').prop("checked", true);
		
	});
});