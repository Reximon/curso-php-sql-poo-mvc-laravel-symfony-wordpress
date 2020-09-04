<?php

function calculadora($numero1, $numero2){

    // Conjunto de instrucciones

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "Suma: $suma  <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multi <br>";
    echo "División: $division <br>";
    echo "<hr>";

}

calculadora(1,2);
calculadora(10,20);
calculadora(100,200);