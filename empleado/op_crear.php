<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

include('../class/c_empleado.php');
    $empleado = new empleado();
    $empleado->setNombre($_POST['nombre']);
    $empleado->setCargo($_POST['cargo']);
    $empleado->insertar();

    header("Location: ../l_empleado.php");
} else if($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo"Variables tipo GET <br> 
        Nombre: ".$_GET['nombre']." Cargo: ".$_GET['cargo'];
} else {
    header("Location: ../index.php");
}
?>