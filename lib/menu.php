
<?php

    $lang= $_SESSION['jugador']->getLang();

/*
if(isset($_POST['lang']) && strlen($_POST['lang'])>0){
    
    if($_POST['lang'] == 'sp' || $_POST['lang'] == 'en'){
        $lang = $_POST['lang'];
    }else{
        $lang = 'sp';
    }
}else{
    $lang = 'sp';
}
*/

$menu=array(
    "titulo"=>array(
        "sp"=>"Math Dice",
        "en"=>"Math Dice"
        ),
    "portada"=>array(
        "sp"=>"Inicio",
        "en"=>"Home"
        ),
    "tiposJuego"=>array(
        "sp"=>"Tipos de juego",
        "en"=>"Game modes",
        "submenu"=>array(
            "tipo1"=>array(
                "sp"=>"Junior",
                "en"=>"Junior"
                ),
            "tipo2"=>array(
                "sp"=>"Junior +",
                "en"=>"Junior +"
                ),
            )
        ),
    "instrucciones"=>array(
        "sp"=>"Instrucciones",
        "en"=>"Instructions"
        ),
    "acercaDe"=>array(
        "sp"=>"Acerca de",
        "en"=>"About"
        ),
    );
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="juego.php"><?php echo $menu['titulo'][$lang]?> </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="juego.php"><?php echo $menu['portada'][$lang]?></a></li>
        <!--
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['tiposJuego'][$lang]?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php // Foreach anidado para generar el submenú
            /*foreach( $menu['tiposJuego'] as $clave => $valor ){
                
                //If para comprobar si es un submenú (probablemente se puede prescindir de el)
                if($clave == 'submenu'){
                    
                    //Con este foreach insertamos el array anteriormente recorrido en unas nuevas listas ordenadas
                foreach ($valor as $tiposJu){ ?>
                    <li><a href="#"><?php echo $tiposJu[$lang] ?></a></li
            <?php //} ?>
            <?php //}
            //}*/?>
          </ul>
        </li>
        -->
        <li><a href="instrucciones.php"><?php echo $menu['instrucciones'][$lang]?></a></li>
        <li><a href="acercaDe.php"><?php echo $menu['acercaDe'][$lang]?></a></li>
      </ul>
      
    </div>
    
    <ul class="nav navbar-nav navbar-right">
        <div class="idioma">
            <a class="btn btn-primary btn-md"><?php if($jugador1->getLang() == 'en'){echo 'English';}else{echo 'Español';} ?></a>
        </div>
        <div class="perfil">
            <a href="perfil.php" class="btn btn-primary btn-md" ><?php if($jugador1->getLang() == 'en'){echo 'Profile';}else{echo 'Perfil';} ?></a>
        </div>
      </ul>
      
  </div>
</nav>


