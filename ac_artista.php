<?php
include('class/c_artista.php');
$artista = new artista();
$artista->setArtistaID($_POST['cod_actualizar']);
$artista->consultar();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Artista</title>
</head>
<body>
    
</body>
</html>