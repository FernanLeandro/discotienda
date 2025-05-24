<?php
include('../class/c_movimiento_inventario.php');
$movimiento_inventario = new movimiento_inventario();
$movimiento_inventario->setMovimientoID($_POST['cod_eliminar']);
$movimiento_inventario->eliminar();
header("Location: ../l_movimiento_inventario.php");
?>