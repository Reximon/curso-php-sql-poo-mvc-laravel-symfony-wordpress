<?php 

trait Utilidades{
    public function mostrarNombre()
    {
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class Videojuego{
    public $nombre;
    public $year;

    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Antonio Manchado";
$persona->mostrarNombre();

$videojuegos = new Videojuego();
$videojuegos->nombre = "League of Legends";
$videojuegos->mostrarNombre();






