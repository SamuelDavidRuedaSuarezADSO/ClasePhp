<?php
require_once __DIR__.'/../libs/Database.php';
require_once __DIR__.'/../libs/Modelo.php';
include_once ("../clases/Aprendiz.php");

$database = new Database();
$connection = $database->getConection();
$obj = new Aprendiz($connection); 
$usuarios = $obj->getAll();
// echo "<pre>";
// print_r($usuarios);
// echo "</pre>";


?>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Carrera</th>
            <th>Promedio</th>
            <th>Mod.</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i=0; $i < count($usuarios) ; $i++) { 
            ?>
            <tr>
                <td><?php echo $usuarios[$i]['id']?></td>
                <td><?php echo $usuarios[$i]['nombre']?></td>
                <td><?php echo $usuarios[$i]['apellido']?></td>
                <td><?php echo $usuarios[$i]['edad']?></td>
                <td><?php echo $usuarios[$i]['genero']?></td>
                <td><?php echo $usuarios[$i]['carrera']?></td>
                <td><?php echo $usuarios[$i]['promedio']?></td>
                <td>
                    <a href="editar.php?id=<?php echo $usuarios[$i]['id']?>" >Editar</a>
                    <form action="../controlls/eliminar.php" method="post">
                        <input type="hidden" value="<?php echo $usuarios[$i]['id'] ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                    
                </td>
            </tr>   
            <?php
        }
        // echo $usuarios->length;
        // foreach ($usuarios as $key => $value) {
        //     echo "<tr>";
        //     foreach ($value as $key2 => $value2) {
        //         echo "<td>";
        //         echo $value2;
        //         echo "</td>";
        //     }
        //     echo "</tr>";
        // }
        ?>
    </tbody>
</table>

<a href="../index.php">Volver</a>

