<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan valores'){
                echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
            }

            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }
            if($error == 'apellidos'){
                echo '<strong style="color:red">Introduce bien los apellidos</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color:red">Introduce bien el email</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">Introduce bien la edad</strong>';
            }
            if($error == 'contraseña'){
                echo '<strong style="color:red">Introduce contraseña</strong>';
            }

        }
    ?>
    <form action="procesear_formulario.php" method="POST">

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required="require" pattern="[a-zA-Z]+"><br>

        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="apellidos" required="require" pattern="[a-zA-Z]+"><br>

        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" required="require" pattern="[0-9]+"><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" required="require" ><br>

        <label for="contraseña">Contraseña:</label><br>
        <input type="password" name="contraseña" required="require" minlength="5"><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>