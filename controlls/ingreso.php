<?php
require_once __DIR__.'/../libs/Database.php';
require_once __DIR__.'/../libs/Modelo.php';
include_once ("../clases/Aprendiz.php");

$database = new Database();
$connection = $database->getConection();
$aprendiz = new Aprendiz($connection); 
if(isset($_POST['name'])){
    $aprendiz->store([
        'nombre'   => $_POST['name'],
        'apellido' => $_POST['apell'],
        'edad'     => $_POST['edad'],
        'genero'   => $_POST['genero'],
        'carrera'  => $_POST['carr'],
        'cuenta'   => $_POST['cuenta'],
        'promedio' => $_POST['prom']
    ]);
    // header("Location: http://127.0.0.1/php/clasePhp/index.php");


} 