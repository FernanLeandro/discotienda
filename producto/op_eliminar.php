<?php
include('../class/c_producto.php');
$producto = new producto();
$producto->setProductoId($_POST['cod_eliminar']);
$producto->eliminar();
header("Location: ../l_producto.php");
?>