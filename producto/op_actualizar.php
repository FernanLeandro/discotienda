<?php
include '../class/c_producto.php';
$producto = new producto();
$producto->setProductoID($_POST['productoID']);
$producto->consultar();
$producto->setTitulo($_POST['titulo']);
$producto->setAñoLanzamiento($_POST['año_lanzamiento']);
$producto->setPrecio($_POST['precio']);
$producto->actualizar();
header("Location: ../l_proveedor.php");
exit;
?>