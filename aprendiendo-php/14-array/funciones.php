<?php

$cantantes = ['2pac', 'Drake', 'Jennifer López', 'Alfredo'];

$numeros = [1,2,8,5,4];

sort($numeros);
var_dump($numeros);

// Añadir elementos array

$cantantes [] = "Natos";
array_push($cantantes,"Waor");
// Eliminar elementos array
array_pop ($cantantes);
unset($cantantes[2]);


// Aleatorio

$indice = array_rand($cantantes);

echo $cantantes[$indice];

// Dar la vuelta 

var_dump(array_reverse($numeros));

// Buscar en un array
$resultado = array_search('Drake', $cantantes);

var_dump($resultado);

// Contar número de elementos

echo sizeof($cantantes);


