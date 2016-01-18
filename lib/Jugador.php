<?php

class Jugador{
    
    //CONSTRUCTOR
    
    private $nombre;
    private $apellidos;
    private $edad;
    private $puntos;
    private $lang;
    
    public function Jugador($nombre, $apellidos, $edad, $tipo,$lang){
        
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->tipo = $tipo;
        $this->puntos = 0;
        $this->lang = $lang;
        
    }
    
    //GETTERS
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellidos(){
        return $this->apellidos;
    }
    
    public function getEdad(){
        return $this->edad;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function getPuntos(){
        return $this->puntos;
    }
    
    public function getLang(){
        return $this->lang;
    }
    
    //SETTERS
    
    public function setNombre($nombre1){
        $this->nombre = $nombre1;
    }
    
    public function setApellidos($apellidos1){
        $this->apellidos = $apellidos1;
    }
    
    public function setEdad($edad1){
        $this->edad = $edad1;
    }
    
    public function setTipo($tipo1){
        $this->tipo = $tipo;
    }
    
    public function setPuntos($puntos){
        $this->puntos = $puntos;
    }
    
    public function setLang($lang){
        $this->lang = $lang;
    }
    
    //FUNCIONES
    
    function comprobacionEdad($edad){
        
        if (!is_numeric($edad)) { 
            return false;
        }  
        else{
            return true;
        }
    }
    
}


?>