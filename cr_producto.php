<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
        }

        header {
            background-color: rgb(118, 31, 75);
            color: white;
            padding: 1em;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .main-content {
            display: flex;
            min-height: calc(100vh - 120px);
        }

        .content {
            flex: 1;
            padding: 2em;
            color: rgb(118, 31, 75);
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 2em;
            background-color: rgb(233, 224, 228);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        form div {
            margin-bottom: 1.5em;
        }

        label {
            display: block;
            margin-bottom: 0.5em;
            color: rgb(118, 31, 75);
            font-weight: bold;
        }

        .dato_formulario {
            width: 100%;
            padding: 0.8em;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
            box-sizing: border-box;
        }

        .dato_formulario:focus {
            outline: none;
            border-color: rgb(118, 31, 75);
            box-shadow: 0 0 5px rgba(118, 31, 75, 0.5);
        }

        input[type="submit"],
        input[type="reset"],
        input[type="button"] {
            padding: 0.8em 1.5em;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"] {
            background-color: rgb(118, 31, 75);
            color: white;
        }

        input[type="submit"]:hover {
            background-color: rgb(148, 41, 95);
        }

        input[type="reset"] {
            background-color: #6c757d;
            color: white;
            margin-right: 1em;
        }

        input[type="reset"]:hover {
            background-color: #5a6268;
        }

        input[type="button"] {
            background-color: #800040;
            color: white;
        }

        input[type="button"]:hover {
            background-color: #660033;
        }

        .enviar_formulario,
        .limpiar_formulario {
            display: inline-block;
            margin-right: 1em;
        }

        footer {
            background-color: rgb(118, 31, 75);
            color: white;
            text-align: center;
            padding: 1em;
        }

        @media (max-width: 768px) {
            form {
                padding: 1em;
            }
            
            .enviar_formulario,
            .limpiar_formulario {
                display: block;
                margin-bottom: 1em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Crear Nuevo Producto</h1>
    </header>

    <div class="main-content">
        <div class="content">
            <form action="producto/op_crear.php" method="POST">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="dato_formulario" required maxlength="200">
                </div>
                <div>
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" name="nacionalidad" id="nacionalidad" class="dato_formulario" required">
                </div>
                <div>
                    <div class="enviar_formulario">
                        <input type="submit" value="Crear">
                    </div>
                    <div class="limpiar_formulario">
                        <input type="reset" value="Limpiar datos">
                    </div>
                    <div>
                        <input type="button" value="Volver" onclick="document.location.href='l_artista.php'">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>