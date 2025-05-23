<?php
include('class/c_genero.php');
$genero = new genero();
$genero->setGenerID($_POST['cod_actualizar']);
$genero->consultar();    
?>