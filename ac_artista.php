<?php
include('class/c_banco.php');
$artista = new artista();
$banco->($_POST['cod_actualizar']);
$banco->consultar();    
?>