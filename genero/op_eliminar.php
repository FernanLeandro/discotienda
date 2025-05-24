<?php
include('../class/c_genero.php');
$genero = new genero();
$genero->setGeneroID($_POST['cod_eliminar']);
$genero->eliminar();
header("Location: ../l_genero.php");
?>