<?php

/*
    Variables Locales:Son las que se definen dentro de una función y pueden
    ser usadas fuera de la función, solo están disponibles dentro. A no ser
    que hagamos un return.

    Variables globales: Son las que se declaran fuera de una función y están
    disponibles dentro y fuera de la funciones.
*/

// Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";

}

holaMundo();

// Funciones variables

function buenosDias (){
    return "Hola! Buenos días :)";
}

function buenasTardes(){
    return "Hey! Qué tal ha ido la comida?";
}

function buenasNoches(){
    return "Buenas noches";
}

$horario = "buenasNoches";

echo $horario();