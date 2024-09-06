<?php
require_once __DIR__.'/../libs/Database.php';
require_once __DIR__.'/../libs/Modelo.php';
include_once ("../clases/Aprendiz.php");

$database = new Database();
$connection = $database->getConection();
$obj = new Aprendiz($connection);
$id = $_GET['id'];
if(isset($id)){
    $usuario = $obj->getById($id);
    ?>
    <form class="formulario" action="../controlls/editar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']?>">
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="inputs" placeholder="Ingresa tu nombre..." autocomplete="off" value="<?php echo $usuario['nombre'] ?>">
        </div>
        <div>
            <label for="apell">Apellido:</label>
            <input type="text" id="apell" name="apell" class="inputs" placeholder="Ingresa tu apellido..." autocomplete="off" value="<?php echo $usuario['apellido'] ?>">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" class="inputs" placeholder="Ingresa tu edad..." autocomplete="off" value="<?php echo $usuario['edad'] ?>">
        </div>
        <div>
            <label for="genero">Genero:</label>
            <input type="text" id="genero" name="genero" class="inputs" placeholder="Ingresa tu genero..." autocomplete="off" value="<?php echo $usuario['genero'] ?>">
        </div>
        <div>
            <label for="carr">Carrera:</label>
            <input type="text" id="carr" name="carr" class="inputs" placeholder="Ingresa tu carrera..." autocomplete="off" value="<?php echo $usuario['carrera'] ?>">
        </div>
        <div>
            <label for="cuenta">Cuenta:</label>
            <input type="text" id="cuenta" name="cuenta" class="inputs" placeholder="Ingresa tu cuenta..." autocomplete="off" value="<?php echo $usuario['cuenta'] ?>">
        </div>
        <div>
            <label for="prom">Promedio:</label>
            <input type="text" id="prom" name="prom" class="inputs" placeholder="Ingresa tu promedio..." autocomplete="off" value="<?php echo $usuario['promedio'] ?>">
        </div>
        <button type="submit">Actualizar</button>
    </form>
    <?php
}
else{
    echo "ERROR 404";
}

?>
