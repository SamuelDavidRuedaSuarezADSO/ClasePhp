<?php
// include_once ("clases/Persona.php"); // importamos Persona.php
// include_once ("clases/Instructor.php"); // importamos Instructor.php
include_once ("clases/Aprendiz.php"); // importamos Aprendiz.php


$persona = new Aprendiz; // Instaciamos un nuevo Objeto Pesona

// $persona->setApellido("Rueda");
// $persona->setCuenta("samuel85");
// $persona->setPromedio("5.0");

$persona->setNombre("Brayan");
$persona->cancelarMetricula();

// echo $persona->saludar();// echo para mostrar el contrnido
// echo "<br>";
// echo $persona->miPromedio(); // echo para mostrar el contrnido
// echo "<br>"; // echo tambien sirver agrandole etiquetas htlm
// var_dump($persona->saludar()); // var_dump par mostrar el contenido y el tipo de dato



