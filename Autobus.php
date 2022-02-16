<?php

// clase
class Autobus{

    //atributos
    var $marca;
    var $modelo;
    var $color;
    var $numserv;

    // métodos
    function setMarca($miMarca){

    $this->marca = $miMarca;

    }

    function getMarca(){

        return $this->marca;

    }

    function setModelo($miModelo){

        $this->modelo = $miModelo;

    }

    function getModelo(){

        return $this->modelo;

    }

    function setColor($miColor){

        $this->color = $miColor;

    }

    function getColor(){

        return $this->color;

    }

    function setNumserv($miNumserv){

        $this->numserv = $miNumserv;

    }

    function getNumser(){

        return $this->numserv;

    }

}
?>
