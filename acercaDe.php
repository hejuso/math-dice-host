<?php
include('auth.php');
?>
<html>
    <head>
    <?php
        include("lib/header.php");
        include 'lib/menu.php';
        include "lib/menuUsuario.php";

    ?>
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="css/about.css" rel="stylesheet">


</head>

<body>
    
    <div class="container">
    	<div class="row">
    		<div class="col-lg-3 col-sm-6">
    
                <div class="card hovercard">
                    <div class="cardheader">
    
                    </div>
                    <div class="avatar">
                        <img alt="" src="img/img208.jpg">
                    </div>
                    <div class="info">
                        <div class="title">
                            <a target="_blank" href="http://scripteden.com/">Héctor Juan Soria</a>
                        </div>
                        <div class="desc">Passionate designer</div>
                        <div class="desc">Curious developer</div>
                        <div class="desc">Tech geek</div>
                        <div class="desc">Developer of Math Dice! and Click n' Tick</div>
                    </div>
                    
                    <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/Linkerk">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" rel="publisher"
                           href="https://plus.google.com/103351300489577069320">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" rel="publisher"
                           href="https://www.facebook.com/linkerk">
                            <i class="fa fa-facebook"></i>
                        </a>
                        
                        <a class="btn btn-primary btn-sm" rel="publisher"
                           href="https://github.com/hejuso">
                            <i class="fa fa-github"></i>
                        </a>
    
                </div>
    
            </div>
    
    	</div>
    	
    	<div class="col-lg-5 col-sm-6">
    	    
    	        <?php if($jugador1->getLang() == 'sp'){ ?>
                       <h2>Acerca de:</h2>
                    <?php }else {?>
                        <h2>About:</h2>
                    <?php } ?>
    	    
    	        <?php if($jugador1->getLang() == 'sp'){ ?>
    	                <p>Math dicees un juego de mesa que he desarrollado y adaptado para que sea una aplicación web. Espero que todo el mundo lo disfrute.</p>
                    <?php }else {?>
    	                <p>Math dice is a board game that I developed and adapted it to a web application. I hope everyone enjoy it.</p>
                    <?php } ?>
    	    
    	</div>
    	
    </div>
    
</body>
</html>