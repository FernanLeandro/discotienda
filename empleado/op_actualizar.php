<?php
include '../class/c_empleado.php';

//    echo "empleado".$_POST['empleadoID']." nombre".$_POST['nombre']." cargo".$_POST['cargo'];

$empleado = new empleado();
$empleado->setEmpleadoID($_POST['empleadoID']);
$empleado->consultar();
$empleado->setNombre($_POST['nombre']);
$empleado->setCargo($_POST['cargo']);
$empleado->actualizar();


 header("Location: ../l_empleado.php");
?>