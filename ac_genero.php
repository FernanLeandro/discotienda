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
    <form action="genero/op_actualizar.php" method="POST">
        <input type="hidden" name="artistaID" value="<?php echo $genero->getGeneroID(); ?>">
        <div>
            <label for="nombre">Nombre </label>
            <input type="text" name="nombre" id="nombre" class="dato_formulario" required maxlength="200" value="<?php echo $genero->getNombre(); ?>">
        </div>
        <div class="enviar_formulario">
            <input type="submit" value="Actualizar">
        </div>
        <div class="limpiar_formulario">
            <input type="reset" value="Limpiar datos">
        </div>
        <div>
            <input type="button" value="Volver" onclick="document.location.href='l_artista.php'">
        </div>
    </form>
</body>
</html>