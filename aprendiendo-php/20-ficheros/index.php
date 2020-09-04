<?php
/*// Abrir Archivo
$archivo = fopen("fichero_texto.txt", "a+");

// Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}
// Escribir en el archivo
fwrite($archivo,"soy un archivo metido desde php");
// Cerrar Archivo 
fclose($archivo);
*/

// Copiar 
// copy('fichero_texto.txt', 'fichero_copiado.txt' or die("Error al copiar"));

// Renombrar

// rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

// Eliminar 

// unlink('archivito_recopiadito.txt') or die('Error al borrar');

if(file_exists("fichero_texto.txt")){
    echo "El Archivo existe!";
}else{
    echo "NO EXISTE";
}

