<?php
include '../class/c_proveedor.php';
$proveedor = new proveedor();
$proveedor->setProveedorID($_POST['proveedorID']);
$proveedor->consultar();
$proveedor->setNombreProveedor($_POST['nombre_proveedor']);
$proveedor->setContacto($_POST['contacto']);
$proveedor->setTelefono($_POST['telefono']);
$proveedor->setEmail($_POST['email']);
$proveedor->actualizar();
header("Location: ../l_proveedor.php");
exit;
?>