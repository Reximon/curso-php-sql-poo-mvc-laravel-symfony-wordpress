<?php


/*
Tipos de Datos:
 * Entero(int / integer) = 99
 * Coma Flotante / decimales (float / double) = 3.15
 * Cadenas( strings) = "Hola yo soy un string"
 * Booleanos (bool) = 1 0. true / false
 * Array (colección de datos)
 * Objetos.
*/

$numero = 100;
$decimal = 27.9;

$texto = "Soy un texto";

$verdadero = true;

echo gettype($verdadero);
echo "<br>";
echo gettype($texto);
echo "<br>";        
echo gettype($decimal);
echo "<br>";
echo gettype($numero);

