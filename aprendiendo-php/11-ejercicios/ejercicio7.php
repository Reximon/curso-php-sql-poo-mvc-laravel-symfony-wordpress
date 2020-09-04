<?php
if(isset($_GET['numero1']) && isset($_GET['numero1'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

    if( $numero1 < $numero2){
    for($i = $numero1; $i <= $numero2; $i++ ){

        if($i%2 != 0){
        echo "<h4>$i es IMPAR</h4>";
        }else{
            echo "<h4> $i Es PAR </h4>";
        }
    }
    }else{
        echo "<h1>El número 1 debe ser menor al número 2</h1>";
    }

}else{
    echo "<h1>Introduce números bro</h1>";
}
