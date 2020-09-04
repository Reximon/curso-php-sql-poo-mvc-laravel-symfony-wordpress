<?php 

/*
    Cookie: Es un fichero que se almacena en el ordenador del usuario
    que visita la web con el fin de recordar datos o rastrear el comportamiento
    del mismo en la web.
*/

// Cookies

// setcookie("Nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

// Cookie básica
setcookie("micookie", "valor de mi cookie");

// Cookie con expiración

setcookie("unyear", "valor de mi cookie de 365 días", time()+(60*60*24*365));

header('location:ver_cookies.php');
?>

