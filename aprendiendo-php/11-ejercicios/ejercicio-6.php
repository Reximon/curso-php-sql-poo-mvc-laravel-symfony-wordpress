<?php 


    echo "<table class = 'egt' border = '1' > <tr>";

        echo "<tr>"; // Fila 1 de celdas
            
            for($cabecera = 1; $cabecera <= 10; $cabecera++){
                echo "<td>Tabla del $cabecera</td>";
            }

        echo "</tr>"; // Cierre de fila

        echo "<tr>"; // Fila 2 de celdas
            for($i = 1; $i <= 10; $i++){
                echo "<td>";
                    

                    for($x = 1; $x<= 10; $x++){
                        echo "$i x $x =".($i*$x)."<br>";
                    }


                echo "</td>";
            }
        echo "</tr>"; // Cierre de fila

    echo "</table>";
?>



