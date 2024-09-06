<?php
require_once __DIR__.'/../libs/Database.php';
require_once __DIR__.'/../libs/Modelo.php';
include_once ("../clases/Aprendiz.php");

$database = new Database();
$connection = $database->getConection();
$aprendiz = new Aprendiz($connection); 

$nombre = $_POST['name'];
$apellido =  $_POST['apell'];
$edad =  $_POST['edad'];
$genero =  $_POST['genero'];
$carrera =  $_POST['carr'];
$cuenta =  $_POST['cuenta'];
$promedio =  $_POST['prom'];

$id = isset($_POST['id']);

$aprendiz->update($id, [
    'nombre'   => $nombre,
    'apellido' => $apellido,
    'edad'     => $edad,
    'genero'   => $genero,
    'carrera'  => $carrera,
    'cuenta'   => $cuenta,
    'promedio' => $promedio
]);

header("Location: http://127.0.0.1/php/clasePhp/views/lista.php");
