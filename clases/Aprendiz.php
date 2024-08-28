<?php
include_once("Persona.php");

class Aprendiz extends Persona
{
    private $cuenta;
    private $promedio;

    function __construct() {

    }

    function getCuenta(){
        return $this->cuenta;
    }
    function getPromedio(){
        return $this->promedio;
    }

    function setCuenta($cuenta){
        $this->cuenta = $cuenta;
    }
    function setPromedio($promedio){
        $this->promedio = $promedio;
    }

    function miPromedio(){
        return "Este esta es mi cuenta $this->cuenta y este es mi promedio $this->promedio";
    }

    function cancelarMetricula(){
        echo "<p> Cancelar matricula del aprendiz ". $this->nombre . "</p>";
    }
}