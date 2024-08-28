<?php
class Persona
{
    // Inicizaciones de los atributos privados
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $genero;
    protected $carrera;

    // Constructor
    function __construct(){
        // echo "<p>Soy el constructor</p>";
    }
    
    //Metodos GET
    function getNombre(){
        return $this->nombre;
    }
    function getApellido(){
        return $this->apellido;
    }
    function getEdad(){
        return $this->edad;
    }
    function getGenero(){
        return $this->genero;
    }
    function getCarrera(){
        return $this->carrera;
    }

    //Metodos SET
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function setApellido($apellido){
        $this->apellido = $apellido;
    }
    function setEdad($edad){
        $this->edad = $edad;
    }
    function setGenero($genero){
        $this->genero = $genero;
    }
    function setCarrena($carrera){
        $this->carrera = $carrera;
    }

    function saludar(){
        return "Hola soy $this->nombre $this->apellido";
    }

}