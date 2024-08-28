<?php
require_once __DIR__.'/libs/Database.php';
require_once __DIR__.'/libs/Modelo.php';
// include_once ("clases/Persona.php"); // importamos Persona.php
// include_once ("clases/Instructor.php"); // importamos Instructor.php
include_once ("clases/Aprendiz.php"); // importamos Aprendiz.php


// $persona = new Aprendiz; // Instaciamos un nuevo Objeto Pesona

// $persona->setApellido("Rueda");
// $persona->setCuenta("samuel85");
// $persona->setPromedio("5.0");

// $persona->setNombre("Brayan");
// $persona->cancelarMetricula();

// echo $persona->saludar();// echo para mostrar el contrnido
// echo "<br>";
// echo $persona->miPromedio(); // echo para mostrar el contrnido
// echo "<br>"; // echo tambien sirver agrandole etiquetas htlm
// var_dump($persona->saludar()); // var_dump par mostrar el contenido y el tipo de dato

$database = new Database();
$connection = $database->getConection();

$aprendiz = new Aprendiz($connection);
$resul = $aprendiz->getAll();

foreach ($resul as $key => $value) {
    echo $value['nombre']." " .$value['apellido']."<br>";
}

$respuesteId = $aprendiz->getById(5);

echo "<br>";
echo $respuesteId['nombre']." " .$respuesteId['apellido']."<br>";
echo "<br>";

$ingresar = $aprendiz->setValues("Yesid", "Pabon", 20, "Masculino", "ADSO", "2673126", 4.5);

echo $ingresar;
$close = $database->closeConection();



