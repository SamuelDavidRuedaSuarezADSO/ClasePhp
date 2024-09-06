<?php
require_once __DIR__.'/../libs/Database.php';
require_once __DIR__.'/../libs/Modelo.php';
include_once ("../clases/Aprendiz.php");

$database = new Database();
$connection = $database->getConection();
$aprendiz = new Aprendiz($connection);
$id = $_POST['id'];
$aprendiz->delete($id);