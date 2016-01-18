<?php
class BaseDatos{
    
    private $host="mysql.hostinger.es";
    private $db="u623472388_md";
    private $user="u623472388_admin";
    private $pass="2h7qN6awrlXA6pxR";
    private $conexion;
    
    //CREAMOS EL CONSTRUCTOR
    function __construct() {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
    }
    
    function comprobarConexion(){
        if ($this->conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }
    }
    
    //Este me lo dejo en la reserva por si me hace falta mas adelante.
    
    /*function getJugadores(){
        
        $consulta ="SELECT * FROM jugadores";
        $resultado = $this->conexion->query($consulta);
        
        echo $resultado->fetch_assoc()['nombre'];
    }*/
    
    //Aqui sacamos solo el nombre y apellido del jugador
    
    function getNombreJugador($nombre,$apellidos){
        
        $consulta ="SELECT * FROM jugadores WHERE nombre = '".$nombre."' AND apellidos = '".$apellidos."'";
        $resultado = $this->conexion->query($consulta);
        
        while ($fila = $resultado->fetch_assoc()) {

            echo $fila['nombre']." ".$fila['apellidos'];

        }
        
        $resultado->free();
    }
    
    function getTipoJuego($nombre, $apellidos){
        
        $consulta ="SELECT * FROM jugadores WHERE nombre = '".$nombre."' AND apellidos = '".$apellidos."'";
        $resultado = $this->conexion->query($consulta);
        
        while ($fila = $resultado->fetch_assoc()) {

            return $fila['modoJuego'];

        }
        
        $resultado->free();
        
    }
    
    function getEdad($nombre, $apellidos){
        
        $consulta ="SELECT * FROM jugadores WHERE nombre = '".$nombre."' AND apellidos = '".$apellidos."'";
        $resultado = $this->conexion->query($consulta);
        
        while ($fila = $resultado->fetch_assoc()) {

            return $fila['edad'];

        }
        
        $resultado->free();
        
    }
    
    function getPuntos($nombre, $apellidos){
        
        $consulta ="SELECT * FROM jugadores WHERE nombre = '".$nombre."' AND apellidos = '".$apellidos."'";
        $resultado = $this->conexion->query($consulta);
        
        while ($fila = $resultado->fetch_assoc()) {

            return $fila['puntos'];

        }
        
        $resultado->free();
        
    }
    
    function getIdioma($nombre, $apellidos){
        
        $consulta ="SELECT * FROM jugadores WHERE nombre = '".$nombre."' AND apellidos = '".$apellidos."'";
        $resultado = $this->conexion->query($consulta);
        
        while ($fila = $resultado->fetch_assoc()) {

            return $fila['idioma'];

        }
        
        $resultado->free();
        
    }
    
    function comprobarUsuario($nombre, $apellidos){
        
        $consulta ="SELECT * FROM jugadores WHERE nombre = '".$nombre."' AND apellidos = '".$apellidos."'";
        $resultado = $this->conexion->query($consulta);
        
        if(null!==$resultado->fetch_assoc()){
            
            $match = true;
        
        }else{
            $match = false;
        }
        
        return $match;
        $resultado->free();
    }
    
    function anyadirUsuario($nombre, $apellidos, $edad, $modoJuego, $idioma){
        
        $consulta ="INSERT INTO jugadores VALUES (NULL, '".$nombre."', '".$apellidos."', ".$edad.", '".$modoJuego."', '".$idioma."', 0)";
        $this->conexion->query($consulta);

    }
    
    function actualizarUsuario($nombre, $apellidos, $edad){
        
        $consulta ="UPDATE jugadores SET nombre='".$nombre."', apellidos='".$apellidos."', edad=".$edad." WHERE nombre='".$nombre."'";
        $this->conexion->query($consulta);
        
    }
    
    function actualizarPuntos($nombre,$puntos){

        $consulta ="UPDATE jugadores SET puntos=".$puntos." WHERE nombre='".$nombre."'";
        $this->conexion->query($consulta);
        
    }
    
    function reiniciarPuntos($nombre,$puntos){
        
        $consulta ="UPDATE jugadores SET puntos=".$puntos." WHERE nombre='".$nombre."'";
        $this->conexion->query($consulta);
    }
    
}

?>