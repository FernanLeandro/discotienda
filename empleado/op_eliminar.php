<?php
include('../class/c_empleado.php');
$empleado = new empleado();
$empleado->setEmpleadoID($_POST['cod_eliminar']);
$empleado->eliminar();
header("Location: ../l_empleado.php");
?>