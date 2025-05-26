<?php
include '../class/c_genero.php';
$genero = new genero();
$genero->setGeneroID($_POST['generoID']);
$genero->consultar();
$genero->setNombre($_POST['nombre']);
$genero->actualizar();
header("Location: ../l_genero.php");
?>


