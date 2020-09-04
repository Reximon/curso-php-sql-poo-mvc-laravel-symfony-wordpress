<?php
$error = 'faltan valores';
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['contraseña'])){
        $error = 'Perfecto';

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = (int) $_POST['edad'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];

        // Validar el nombre

        if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
            $error = 'nombre';
        }

        if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
            $error = 'apellidos';
        }

        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
            $error = 'edad';
        }

        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'email';
        }

        if(empty($contraseña) || strlen($contraseña)<5){
            $error = 'contrasñea';
        }

        // var_dump($_POST);
        // var_dump($error);
        // die();
    }else{
        $error = 'faltan valores';
    }


    if($error != 'perfecto'){
        header("Location:index.php?error=$error");
    }

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php if($error == 'Perfecto'): ?>
            <h1>Datos Validados correctamente:</h1>
            <p><?=$nombre?></p>
            <p><?=$apellidos?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <p><?=$contraseña?></p>
        <?php endif; ?>
</body>
</html>