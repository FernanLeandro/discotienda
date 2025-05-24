<?php
include('class/c_empleado.php');
$empleado = new empleado();
$empleado->setEmpleadoID($_POST['cod_actualizar']);
$empleado->consultar();    
?>
<!DOCTYPE html>
<html lang="es">
    <style>
        
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Empleado</title>
</head>
<body>
    <form action="empleado/op_actualizar.php" method="POST">
        <input type="hidden" name="empleadoID" value="<?php echo $empleado->getEmpleadoID(); ?>">
        <div>
            <label for="nombre">Nombre </label>
            <input type="text" name="nombre" id="getNombre" class="dato_formulario" required maxlength="200" value="<?php echo $empleado->getNombre(); ?>">
        </div>
        <div>
            <label for="cargo">Cargo</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="dato_formulario" required value="<?php echo $empleado->getCargo(); ?>">
        </div>
        <div class="enviar_formulario">
            <input type="submit" value="Actualizar">
        </div>
        <div class="limpiar_formulario">
            <input type="reset" value="Limpiar datos">
        </div>
        <div>
            <input type="button" value="Volver" onclick="document.location.href='l_empleado.php'">
        </div>
    </form>
</body>
</html>