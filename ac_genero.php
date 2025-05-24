<?php
include('class/c_genero.php');
$genero = new genero();
$genero->setGeneroID($_POST['cod_actualizar']);
$genero->consultar();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Genero</title>
</head>
<body>
    
</body>
</html>