<?php
include('class/c_empleado.php');
$empleado = new empleado();
$empleado->setEmpleadoID($_POST['cod_actualizar']);
$empleado->consultar();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar empleado</title>
</head>
<body>
    
</body>
</html>