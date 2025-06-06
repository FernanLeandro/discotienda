<?php
require_once('class/c_artista.php');
$artista = new artista();
$res = $artista->listar();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista Artista</title>
  <link rel="stylesheet" href="css/master.css">
  <style>
    .main-content {
      display: flex;
      min-height: calc(100vh - 160px);
    }
    
    table {
      width: 95%;
      margin: 20px auto;
      border-collapse: separate;
      border-spacing: 0;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }
    
    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #dddddd;
    }
    
    th {
      background-color: #761f4b;
      color: white;
      position: sticky;
      top: 0;
    }
    
    tr:nth-child(even) {
      background-color: #f3f3f3;
    }
    
    tr:hover {
      background-color: #f1e0e6;
    }
    
    button {
      padding: 8px 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    button[name="cod_actualizar"] {
      background-color: #761f4b;
      color: white;
    }
    
    button[name="cod_eliminar"] {
      background-color: #d32f2f;
      color: white;
    }
    
    button:hover {
      opacity: 0.9;
      transform: translateY(-1px);
    }
    
    a[title="Crear nuevo artista"] {
      color: white;
      text-decoration: none;
      font-weight: bold;
      margin-left: 5px;
    }
    
    footer {
      position: relative;
      bottom: 0;
      width: 100%;
      background-color: rgb(118, 31, 75);
      color: white;
      text-align: center;
      padding: 1em 0;
      margin-top: auto;
    }
    
    @media (max-width: 768px) {
      table {
        width: 100%;
        font-size: 14px;
        border-radius: 8px;
      }
      
      th, td {
        padding: 8px 10px;
      }
      
      button {
        padding: 6px 10px;
        font-size: 14px;
      }
    }
  </style>
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
    <div style="flex: 1; padding: 20px;">
      <table>
        <thead>
            <tr>
                <th>Artista ID</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th colspan="2">Acciones <a href="cr_artista.php" title="Crear nuevo artista">➕</a></th>
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
                <th colspan="2">Acciones</a></th>
            </tr>
        </thead>
      </table>
    </div>
  </div>

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