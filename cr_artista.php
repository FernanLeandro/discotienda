<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Artista</title>
</head>
<body>
    <form action="artista/op_crear.php" method="POST">
        <div>
            <label for="nombre">Nombre </label>
            <input type="text" name="nombre" id="nombre" class="dato_formulario" required maxlength="200"">
        </div>
        <div>
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="dato_formulario" required">
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