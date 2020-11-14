<?php

interface Ordenador{
    
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

class iMac implements Ordenador{
    private  $modelo;

    function getModelo()
    {
        return $this->modelo;
    }

    function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function encender()
    {
        return "OLA";
    }

    public function apagar()
    {
        return "OLA";
    }

    public function reiniciar()
    {
        return "OLA";
    }

    public function desfragmentar()
    {
        return "OLA";
    }

    public function detectarUSB()
    {
        return "OLA";
    }
}

$maquintos = new iMac();
$maquintos->setModelo('MacBook PRO 2019');

echo $maquintos->getModelo();