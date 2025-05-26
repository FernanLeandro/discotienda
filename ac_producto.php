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
            <form action="producto/op_crear.php" method="POST">
                <div>
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="dato_formulario" required maxlength="200" value="<?php echo $producto->getTitulo(); ?>">
                </div>
                <div>
                    <label for="año_lanzamiento">Año Lanzamiento</label>
                    <input type="date" name="año_lanzamiento" id="año_lanzamiento" class="dato_formulario" value="<?php echo $producto->getTitulo(); ?>" required>
                </div>
                <div>
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="dato_formulario" value="<?php echo $producto->getPrecio(); ?>" required>
                </div>
                <div>
                    <div class="enviar_formulario">
                        <input type="submit" value="Crear">
                    </div>
                    <div class="limpiar_formulario">
                        <input type="reset" value="Limpiar datos">
                    </div>
                    <div>
                        <input type="button" value="Volver" onclick="document.location.href='l_producto.php'">
                    </div>
                </div>
            </form>
</body>

</html>