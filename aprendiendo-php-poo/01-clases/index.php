<?php
// Programación Orientada a Objetos en PHP (POO)

// Definir una clase, molde para crear más objetos de tipo coche con características parecidas

class Coche{

    // Atributos o propiedades (Variable)
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballos = 500;
    public $plazas = 2;

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

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
}//Fin deficinion de la clase

// Crear un objeto / Instaciar la clase 

$coche = new Coche();

// Usar los métodos
// echo $coche->getVelocidad();

$coche->setColor("Amarillo");

echo "El color del coche es: ".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad actual: ".$coche->getVelocidad().'<br>';

$coche2 = new Coche();

$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);