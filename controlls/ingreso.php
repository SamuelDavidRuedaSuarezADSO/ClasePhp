<?php
require_once __DIR__.'/../libs/Database.php';
require_once __DIR__.'/../libs/Modelo.php';
include_once ("../clases/Aprendiz.php");

$database = new Database();
$connection = $database->getConection();
$aprendiz = new Aprendiz($connection); 

// switch ($_SERVER['REQUEST_METHOD']) {
//     case 'GET':
//         $id = $_GET['id'];
//         echo $id;
//         $aprendiz->update($id, [
//             'nombre'   => $_GET['name'],
//             'apellido' => $_GET['apell'],
//             'edad'     => $_GET['edad'],
//             'genero'   => $_GET['genero'],
//             'carrera'  => $_GET['carr'],
//             'cuenta'   => $_GET['cuenta'],
//             'promedio' => $_GET['prom']
//         ]);
//         header("Location: http://127.0.0.1/php/clasePhp/views/lista.php");
//         break;
//     case 'POST':
//         $aprendiz->store([
//             'nombre'   => $_POST['name'],
//             'apellido' => $_POST['apell'],
//             'edad'     => $_POST['edad'],
//             'genero'   => $_POST['genero'],
//             'carrera'  => $_POST['carr'],
//             'cuenta'   => $_POST['cuenta'],
//             'promedio' => $_POST['prom']
//         ]);
//         header("Location: http://127.0.0.1/php/clasePhp/views/lista.php");
//         break;
    
//     default:
//         echo "ERROR 404: PAGE NO FOUND";
//         break;
// }

if(isset($_POST['name'])){
    $nombre = $_POST['name'];
    $apellido =  $_POST['apell'];
    $edad =  $_POST['edad'];
    $genero =  $_POST['genero'];
    $carrera =  $_POST['carr'];
    $cuenta =  $_POST['cuenta'];
    $promedio =  $_POST['prom'];

    $id = isset($_POST['id']) ? $_POST['id'] : false;
    
    if(!$id){
        $aprendiz->store([
            'nombre'   => $nombre,
            'apellido' => $apellido,
            'edad'     => $edad,
            'genero'   => $genero,
            'carrera'  => $carrera,
            'cuenta'   => $cuenta,
            'promedio' => $promedio
        ]);
    }
    header("Location: http://127.0.0.1/php/clasePhp/views/lista.php");
}