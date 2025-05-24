<?php
include('../class/c_proveedor.php');
$proveedor = new proveedor();
$proveedor->setProveedorID($_POST['cod_eliminar']);
$proveedor->eliminar();
header("Location: ../l_proveedor.php");
?>