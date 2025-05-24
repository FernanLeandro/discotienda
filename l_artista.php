<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DiscoTienda FDJM</title>
  <link rel="stylesheet" href="css/master.css">
</head>

<body>
  <header>
    <a href="index.php">
      <img src="images/logo.png" alt="logo">
    </a>
    <h1>Lista Artista</h1>
    <div class="menu-icon" onclick="toggleSidebar()">☰</div>
  </header>

  <div class="main-content">
    <nav class="sidebar" id="sidebar">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="l_artista.php">Artista</a></li>
        <li><a href="l_genero.php">Género</a></li>
        <li><a href="l_empleado.php">Empleado</a></li>
        <li><a href="l_movimiento_inventario.php">Movimiento Inventario</a></li>
        <li><a href="l_proveedor.php">Proveedor</a></li>
        <li><a href="l_producto.php">Producto</a></li>
      </ul>
    </nav>
  </div>
     <table>
        <thead>
            <tr>
                <th>Artista ID</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th colspan="2">Acciones <a href="cr_artista.php" title="Crear nuevo artista">[+]</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($res as $registro) { ?>
                <tr>
                    <td><?php echo $registro['artistaID']; ?></td>
                    <td><?php echo $registro['nombre']; ?></td>
                    <td><?php echo $registro['nacionalidad']; ?></td>
                    <td>
                        <form action="ac_artista.php" method="POST">
                            <button name="cod_actualizar" value="<?php echo $registro['artistaID']; ?>">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form action="artista/op_eliminar.php" method="POST">
                            <button name="cod_eliminar" value="<?php echo $registro['artistaID']; ?>">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <thead>
            <tr>
                <th>Artista ID</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
    </table>


  <footer>
    © 2025 DiscoTienda, Todos los derechos reservados.
  </footer>

  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('hidden');
    }
  </script>
</body>

</html>