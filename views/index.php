<!-- 
<form novalidate class="formulario" action="controlls/ingreso.php" method="POST">
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" class="inputs" placeholder="Ingresa tu nombre..." autocomplete="off" require>
    </div>
    <div>
        <label for="apell">Apellido:</label>
        <input type="text" id="apell" name="apell" class="inputs" placeholder="Ingresa tu apellido..." autocomplete="off" require>
    </div>
    <div>
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" class="inputs" placeholder="Ingresa tu edad..." autocomplete="off" require>
    </div>
    <div>
        <label for="genero">Genero:</label>
        <input type="text" id="genero" name="genero" class="inputs" placeholder="Ingresa tu genero..." autocomplete="off" require>
    </div>
    <div>
        <label for="carr">Carrera:</label>
        <input type="text" id="carr" name="carr" class="inputs" placeholder="Ingresa tu carrera..." autocomplete="off" require>
    </div>
    <div>
        <label for="cuenta">Cuenta:</label>
        <input type="text" id="cuenta" name="cuenta" class="inputs" placeholder="Ingresa tu cuenta..." autocomplete="off" >
    </div>
    <div>
        <label for="prom">Promedio:</label>
        <input type="number" id="prom" name="prom" class="inputs" placeholder="Ingresa tu promedio..." autocomplete="off" >
    </div>
    <button type="submit">Enviar</button>
</form> -->


<?php
// require_once('services/mail.php');

$path = $_SERVER['SCRIPT_NAME'];
$url = $_SERVER['REQUEST_URI'];
$b = substr($url, strlen($path));
echo $url . " - " . $path . " - " . $b ;



// $messaje = "jhon dehe la pereza";
// $dubject = "Enviando un correo electronico";
// $body = "Hola a todos, (mundo)";
// $correo = "samueldavidruedasuarez3@gmail.com";
// $mail = new Mail($correo, $dubject, $messaje, $body);
// $mail->send();
 























// require_once __DIR__.'/libs/Database.php';
// require_once __DIR__.'/libs/Modelo.php';
// include_once ("clases/Persona.php"); // importamos Persona.php
// include_once ("clases/Instructor.php"); // importamos Instructor.php
// include_once ("clases/Aprendiz.php"); // importamos Aprendiz.php


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
// // var_dump($persona->saludar()); // var_dump par mostrar el contenido y el tipo de dato

// $database = new Database();
// $connection = $database->getConection();

// $aprendiz = new Aprendiz($connection);


// $respuesteId = $aprendiz->getById(1);

// // echo "<br>";
// // echo $respuesteId['nombre']." " .$respuesteId['apellido']."<br>";
// // echo "<br>";

// // $ingresar = $aprendiz->setValues("Yesid", "Pabon", 20, "Masculino", "ADSO", "2673126", 4.5);

// // echo $ingresar;

// // $aprendiz->store([
// //     'nombre'   => 'Carlos',
// //     'apellido' => 'Garcia',
// //     'edad'     => 18,
// //     'genero'   => 'Masculino',
// //     'carrera'  => 'ADSO'
// // ]);
    

// $aprendiz->delete(11);

// // $aprendiz->update(5, [
// //     'nombre' => 'Samie',
// //     'apellido' => 'Ariza',
// //     'edad' => '28'
// // ]);

// $resul = $aprendiz->getAll();
// echo "id | nombre | apellido <br>";
// foreach ($resul as $key => $value) {
//     echo $value['id']. " | " .$value['nombre']." | " .$value['apellido']."<br>";
// }

// $close = $database->closeConection();
// ?> 



