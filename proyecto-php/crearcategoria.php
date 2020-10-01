<?php require_once 'includes/redirecion.php' ?>
<?php require_once 'includes/cabecera.php' ?>
<?php require_once 'includes/lateral.php' ?>
<div id="principal">
    <h1>Crear categorías</h1>  
    <p>Añade nuevas categorías al blog para que los usuarios puedan usarlas para crear sus entradas</p>
    <br>
        <form action="guardar-categoria.php" method="POST">
            <label for="nombre">Nombre de la categoria</label>
            <input type="text" name="nombre">

            <input type="submit" value="Guardar">
        </form>      
    </div> <!-- Fin principal-->
<?php require_once 'includes/pie.php' ?>