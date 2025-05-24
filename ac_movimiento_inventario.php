<?php
include('class/c_movimiento_inventario.php');
$movimiento_inventario = new movimiento_inventario();
$movimiento_inventario->setMovimientoID($_POST['cod_actualizar']);
$movimiento_inventario->consultar();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Movimiento Inventario</title>
</head>
<body>
    
</body>
</html>