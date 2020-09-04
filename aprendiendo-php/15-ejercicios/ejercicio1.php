<?php

// Función

function mostrarArray($numeros){
    $resultado = " ";
    foreach ($numeros as $numero) {
        // $resultado = $resultado.$numero."<br/>"
        $resultado .= $numero."<br>";
    }
    return $resultado;
}



$numeros = [1, 2, 5, 7, 6, 4, 3, 8];


echo mostrarArray($numeros);

echo "<hr>";
echo "<br>";

sort($numeros);

echo mostrarArray($numeros);



echo "<hr>";
echo "<br>";

echo sizeof($numeros);

echo "<hr>";
echo "<br>";
if (isset($_GET['busqueda'])) {

$busqueda = $_GET["busqueda"];

$search = array_search($busqueda, $numeros);

if (!empty($search)){
    echo "<h4>"."Tu número que has buscado está en el índice: ".$search."</h4>";

}else{
    echo "<h4> Este número no está</h4>";
}
}