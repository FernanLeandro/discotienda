<?php
include('class/c_empleado.php');
$empleado = new empleado();
$empleado->setEmpleadoID($_POST['cod_actualizar']);
$empleado->consultar();    
?>