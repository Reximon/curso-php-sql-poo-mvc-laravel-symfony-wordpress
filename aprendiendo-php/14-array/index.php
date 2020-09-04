<?php

/*
Array:

Un array es una colección o un conjunto de datos/valores, bajo un único nombre. Y para acceder a esos valores podemos usar un índice númerico
o alfanúmerico

*/

$pelicula = "Batman";

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');

$cantantes = ['2pac', 'Drake', ' Jennifer López'];

// Array asociativo

$personas = array (
            'nombres' => 'Cristian',
            'apellidos' => 'Cornielle',
            'web' => 'rexicode.com',


);

var_dump($personas['apellidos']);

echo $peliculas[0];
echo $cantantes[2];

// Recorrer con FOR

echo "<h1> Listado de Peliculas </h1>";

echo "<ul>";

for($i = 0; $i < count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}

echo "</ul>";

// Recorrer Foreach

echo "<h1> Listado de Peliculas </h1>";


echo "<ul>";

foreach ($cantantes as $cantante) {
    echo "<li>$cantante</li>";
}

echo "</ul>";

// Array multidimensionales

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'salvador@salvador.com'
    )
);

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}