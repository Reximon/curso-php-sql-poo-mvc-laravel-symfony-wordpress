<?php

$juegos = [
        'Accion' => array("GTAV", "COD", "PUBG"),
        'Aventuras' => array("Asssins Creed", "Crash", "Prince of Persia"),
        'Deportes' => array("FIFA 19", "PES 19", "MOTO GP 19")
];

$categorias = array_keys($juegos);

?>

<table border="2">

    <?php require_once 'ejercicio5/encabezados.php'?>
    <?php require_once 'ejercicio5/primerafila.php'?>
    <?php require_once 'ejercicio5/segundafila.php'?>
    <?php require_once 'ejercicio5/tercerafila.php'?>

</table>