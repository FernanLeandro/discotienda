<?php
include '../class/c_movimiento_inventario.php';
$movimiento_inventario = new movimiento_inventario();
$movimiento_inventario->setProductoID($_POST['movimientoID']);
$movimiento_inventario->consultar();
$movimiento_inventario->setFecha($_POST['fecha']);
$movimiento_inventario->setTipo($_POST['tipo']);
$movimiento_inventario->setCantidad($_POST['cantidad']);
$movimiento_inventario->setProductoID($_POST['productoID']);
$movimiento_inventario->setEmpleadoID($_POST['empleadoID']);
$movimiento_inventario->actualizar();
header("Location: ../l_proveedor.php");
exit;
?>