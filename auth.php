<?php

//El include de jugador va antes que el session start, si no, tira error de php incomplete class

//Incluimos la clase Jugador
include('lib/Jugador.php');

require_once('lib/baseDatos.php');
$db = new BaseDatos();

//Iniciamos la session
session_start();

if(isset($_POST['jugador2'])){

    $db->actualizarUsuario($_POST['nombre'], $_POST['apellidos'], $_POST['edad']);
    $_SESSION['jugador']->setApellidos($_POST['apellidos']);
    $_SESSION['jugador']->setEdad($_POST['edad']);
}

if(isset($_POST['registro'])){
    
    $db->anyadirUsuario($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['tipoJuego'],$_POST['lang']);
    $jugador1 = new Jugador($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['tipoJuego'],$_POST['lang']);
    $_SESSION['jugador'] = $jugador1;

}

if(isset($_POST['puntos'])){

    $puntos = $_SESSION['jugador']->getPuntos();

    $db->actualizarPuntos($_SESSION['jugador']->getNombre(),intval($puntos));

}

if(isset($_POST['reiniciar'])){

    $db->reiniciarPuntos($_SESSION['jugador']->getNombre(),0);
    $_SESSION['jugador']->setPuntos(0);
}


//Se crea el objeto jugador

if(isset($_POST['jugador'])){
    //Comprobamos un objeto creado en la sesion

    if (!$db->comprobarUsuario($_POST['nombre'],$_POST['apellidos'])) {

        header('Location: registro.php');
        //$jugador1 = new Jugador($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['tipoJuego'],$_POST['lang']);
        
            //Inicializamos al jugador
        //$_SESSION['jugador'] = $jugador1;
     
        }else{
            //Falta recoger los datos de la BBDD para hacer el login
            
            $jugador1 = new Jugador($_POST['nombre'],$_POST['apellidos'],$db->getEdad($_POST['nombre'],$_POST['apellidos']),$db->getTipoJuego($_POST['nombre'],$_POST['apellidos']),$db->getIdioma($_POST['nombre'],$_POST['apellidos']));
            $_SESSION['jugador'] = $jugador1;
    
        }
    
    
    }else{

    if(isset($_SESSION['jugador'])){
        
        //Inicializamos al jugador
        $jugador1 = $_SESSION['jugador'];
        
    }else{
        header('Location: index.php');
    }
}


?>