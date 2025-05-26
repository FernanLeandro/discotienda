<?php
include ('../class/c_genero.php');
$genero = new genero();
$genero->setGeneroID($_POST['generoID']);
$genero->consultar();
$genero->setNombre($_POST['nombre']);
$genero->actualizar();

//echo "Actualizando el genero con ID: " . $_POST['generoID'] . "<br>";
//echo "Nuevo nombre: " . $_POST['nombre'] . "<br>";
header("Location: ../l_genero.php");
?>