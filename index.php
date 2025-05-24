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
    <img src="images/logo.png" alt="logo">
    <div >
      <img class="logo" src="images/horizontal.png" alt="">
   </div>
    
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

    <div class="content">
      <h1>Bienvenido</h1>
      <p>¡Bienvenidos a la Discotienda <strong>FDJM</strong>!. Un software de sistematización</p>
      <p>🎵 ¡La música vive aquí!</p>
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