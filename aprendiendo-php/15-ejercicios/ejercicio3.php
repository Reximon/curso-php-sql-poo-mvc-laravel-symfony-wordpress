<?php

$texto = "";

if(empty($texto)){
    $texto = "Estaba vacia la variable y la hemos llenado";
    
    $textoUpper = strtoupper($texto);

    echo "<strong>$textoUpper</strong>";
}