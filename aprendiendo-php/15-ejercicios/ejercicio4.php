<?php

$variableArray = ["Vaca", "Pollo", "Cerdo"];

$variableString = "Hola, soy una variable String";

$variableInt = 11;

$variableBoolean = true;


if(is_int($variableInt)){
    echo "Es un número";
}
echo "<br>";
if(is_bool($variableBoolean)){
    echo "Es un boolean";
}
echo "<br>";

if(is_string($variableString)){
    echo "Es un texto";
}
echo "<br>";

if(is_array($variableArray)){
    echo "Es un array";
}