<?php
include('class/c_producto.php');
$producto = new producto();
$producto->setProductoId($_POST['cod_actualizar']);
$producto->consultar();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
    <form action="producto/op_actualizar.php" method="POST">
        <input type="hidden" name="artistaID" value="<?php echo $artista->getArtistaID(); ?>">
        <div>
            <label for="nombre">Nombre </label>
            <input type="text" name="nombre" id="getNombre" class="dato_formulario" required maxlength="200" value="<?php echo $artista->getNombre(); ?>">
        </div>
        <div>
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="dato_formulario" required value="<?php echo $artista->getNacionalidad(); ?>">
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