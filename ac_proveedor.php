<?php
include('class/c_proveedor.php');
$proveedor = new proveedor();
$proveedor->setProveedorID($_POST['cod_actualizar']);
$proveedor->consultar();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Proveedor</title>
</head>
<body>
    
</body>
</html>