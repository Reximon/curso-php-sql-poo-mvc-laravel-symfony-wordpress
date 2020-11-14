<?php
// Programación Orientada a Objetos en PHP (POO)

// Definir una clase, molde para crear más objetos de tipo coche con características parecidas.

class Coche{

    // Atributos o propiedades (Variable)

    // Public: Podemos acceder desde cualquier lugar, dentro de la clase actual, dentro de clases que hereden esta clase o fuera de la clase.
    public $color;

    // Protected: Podemos acceder desde la clase que nos define(esta clase) y desde las clases que la herenden.
    protected $marca;

    // PRIVATE: unicamente se puede acceder desde esta clase.
    private $modelo;

    public $velocidad;
    public $caballos;
    public $plazas;

        public function __construct($color, $marca, $modelo, $velocidad, $caballos, $plazas){
            $this->color= $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $caballos;
            $this->caballos = $caballos;
            $this->plazas = $plazas;
        }

    // Métodos, son acciones que hace el objeto(Antes funciones)
    public function getColor(){
        // Busca en esta clase la propiedad x 
        return $this-> color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
    public function mostrarInformacion(Coche $miObjeto){
        if(is_object($miObjeto)){
        $informacion = "<h1>Información del coche</h1>";
        $informacion .= "Modelo: ".$miObjeto->modelo;
        $informacion .= "<br> Color: ".$miObjeto->color;
        $informacion .= "<br> Velocidad: ".$miObjeto->velocidad;
        }else{
            $informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;
    }
}//Fin deficinion de la clase
