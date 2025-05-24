<?php
include('class/c_producto.php');
$producto = new producto();
$producto->setProductoId($_POST['cod_actualizar']);
$producto->consultar();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
    
</body>
</html>