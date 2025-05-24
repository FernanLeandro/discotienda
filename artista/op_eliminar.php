<?php
include('../class/c_artista.php');
$artista = new artista();
$artista->setArtistaID($_POST['cod_eliminar']);
$artista->eliminar();
header("Location: ../l_banco.php");
?>