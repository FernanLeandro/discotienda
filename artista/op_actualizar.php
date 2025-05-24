<?php
include '../class/c_artista.php';
$artista = new artista();
$artista->setArtistaID($_POST['artistaID']);
$artista->consultar();
$artista->setNombre($_POST['nombre']);
$artista->setNacionalidad($_POST['nacionalidad']);
$artista->actualizar();
header("Location: ../l_artista.php");
exit;
?>