<?php
include '../class/c_empleado.php';
$empleado = new empleado();
$empleado->setEmpleadoID($_POST['empleadoID']);
$empleado->consultar();
$empleado->setEmpleadoID($_POST['empleadoID']);
$empleado->setNombre($_POST['nombre']);
$empleado->setCargo($_POST['cargo']);
$empleado->actualizar();
header("Location: ../l_empleado.php");
?>