<?php
include('auth.php');
?>
<html>
<head>
    <?php
        include("lib/header.php");
        include 'lib/menu.php';
        
        $db->comprobarUsuario("Hector","Juan")
    ?>

</head>
<body>
        
        <div class="container">
    <?php if($jugador1->getLang() == 'sp'){ ?>
                       <h2>Instrucciones:</h2>
                    <?php }else {?>
                        <h2>Instructions:</h2>
                    <?php } ?>
    <div class="row form-group product-chooser">
    
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected">
    			<img src="img/signos.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
    				<?php if($jugador1->getLang() == 'sp'){ ?>
    				    <span class="title">Calcula</span>
    				<?php }else {?>
        				<span class="title">Figure up</span>
        			<?php } ?>
        			<?php if($jugador1->getLang() == 'sp'){ ?>
    				<span class="description">Sumando, restando, multiplicando o dividiendo los dados haz los calculos que hagan falta para que el resultado sea el número del dado dodecaedro.</span>
    				<?php }else {?>
    				<span class="description">Adding, substracting, multiplying o dividing dices do the right calculations so the result equals the dodecahedron dice</span>
    				<?php } ?>
    				<input type="radio" name="product" value="mobile_desktop" checked="checked">
    			</div>
    			<div class="clear"></div>
    		</div>
    	</div>
    	
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item">
    			<img src="img/dadosInstrucciones.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
    				<?php if($jugador1->getLang() == 'sp'){ ?>
    				    <span class="title">Selecciona</span>
    				<?php }else {?>
        				<span class="title">Choose</span>
        			<?php } ?>
        			
                    <?php if($jugador1->getLang() == 'sp'){ ?>
    				    <span class="description">Una vez lo hayas pensado, haz click en los dados y acto seguido en un símbolo de operación. Cuando hayas hecho tu decisión, presiona el botón "Math Dice!"</span>
    				<?php }else {?>
    				    <span class="description">Once you figure it out, click on the dices and next click a sign. When you make up your decision, Press the "Math Dice!" button.</span>
    				<?php } ?>
    				<input type="radio" name="product" value="desktop">
    			</div>
    			<div class="clear"></div>
    		</div>
    	</div>
    	
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item">
    			<img src="img/misdies.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
    				<?php if($jugador1->getLang() == 'sp'){ ?>
    				    <span class="title">Resultado</span>
    				<?php }else {?>
        				<span class="title">Result</span>
        			<?php } ?>
        			
        			<?php if($jugador1->getLang() == 'sp'){ ?>
    				    <span class="description">Cuando hayas pulsado el botón "Math Dice!" obtendrás tu resultado y, si has acertado, habrás ganado puntos.</span>
                    <?php }else {?>
                        <span class="description">When you press "Math Dice!" button you will get your result and, if you were right, you will earn points.</span>
        			<?php } ?>
    				<input type="radio" name="product" value="mobile">
    			</div>
    			<div class="clear"></div>
    		</div>
    	</div>
    	
    </div>
</div>

    <script type="text/javascript" src="js/query.js"></script>

</body>
</html>