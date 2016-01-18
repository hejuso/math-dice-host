<div class="container">
    <div class="infoUsu">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="prueba">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <img src="https://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4><?php echo "".$_SESSION['jugador']->getNombre()." ".$_SESSION['jugador']->getApellidos(); ?></h4>
                                <p>
                                    <br />
                                    
                                    <?php if($jugador1->getLang() == 'sp'){ ?>
                                       Tipo de juego:
                                    <?php }else {?>
                                        Game mode:
                                    <?php } ?> <?php echo " ".$jugador1->getTipo(); ?>
                                    <br />
                                    <?php if($jugador1->getLang() == 'sp'){ ?>
                                       Edad:
                                    <?php }else {?>
                                        Age:
                                    <?php } ?> <?php echo " ".$_SESSION['jugador']->getEdad(); ?>
                                    <br />
                                    <?php if($jugador1->getLang() == 'sp'){ ?>
                                       Puntos:
                                    <?php }else {?>
                                        Points:
                                    <?php } ?> <?php echo " ".$db->getPuntos($_SESSION['jugador']->getNombre(),$_SESSION['jugador']->getApellidos()); ?><br><br>
                                <!-- Botón -->
                                
                                <?php if($jugador1->getLang() == 'sp'){ ?>
                                   <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cerrar sesión</button>
                                <?php }else {?>
                                    <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Sign off</button>
                                <?php } ?>
                                <form action="juego.php" method="post">
                                    <input type="hidden" name="reiniciar">
                                    <input type="submit" value="<?php if($jugador1->getLang() == 'sp'){ ?>
                                       Reiniciar Puntos
                                    <?php }else {?>
                                        Reset Points
                                    <?php } ?>" class="btn btn-primary" role="button">
                                    </input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>