<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="usuario">Nombre:</label><br> 
        <input type="text" name="usuario" autofocus="autofocus"><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellido" pattern="[A-Z]+2"><br>

        <!-- Tipo Botón -->
            <label for="button">Boton:</label><br>
            <input type="button" name="Boton"  value="Clickeam"><br>

        <!-- Tipo checkbox(cajita con tick): -->
            <label for="sexo">Sexo:</label><br>
            <input type="checkbox" name="sexo" value="Hombre">
            <input type="checkbox" name="sexo" value="Mujer"><br>
        <!-- Tipo pick color -->
            <label for="color">Color:</label><br>
            <input type="color" name="color" ><br>
        <!-- Tipo fecha: -->
            <label for="fecha">Apellidos:</label><br>
            <input type="date" name="fecha" pattern="[A-Z]+2"><br>
        <!-- Tipo correo -->
            <label for="correo">Apellidos:</label><br>
            <input type="email" name="correo" pattern="[A-Z]+2"><br>
        <!-- Tipo archivo -->
            <label for="archivo">Apellidos:</label><br>
            <input type="file" name="archivo" multiple="multiple"><br>
        <!-- Tipo oculto o hidden -->
            <label for="archivo">Archivo:</label><br>
            <input type="hidden" name="archivo"><br>
        <!-- Tipo número -->
            <label for="numero">Numero:</label><br>
            <input type="number" name="numero"><br>
        <!-- Tipo contraseña -->
            <label for="password">Contraseña:</label><br>
            <input type="password" name="password"><br>
        <!-- Tipo radio -->
            <label for="radio">Continente:</label><br>

                Ámerica del Sur: <input type="radio" name="radio" value="Ámerica del Sur">
                Europa:<input type="radio" name="radio" value="Europa">
                Asia: <input type="radio" name="radio" value="Asia">

        <!-- Tipo url -->
            <label for="url">Página web:</label><br>
            <input type="url" name="url"><br>


        <!-- Tipo select  -->
        Películas
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Gran torino">Gran torino</option>
                <option value="Batman">Batman</option>
                <option value="La jungla de Cristal">La jungla de Cristal</option>
            </select>
        <!-- Tipo submit(enviar): -->
            <br><input type="submit" value="Enviar"><br>
    </form>
</body>
</html>