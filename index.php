<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index</title>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>
  <header>
    <img src="images/logo.png" alt="logo"> 
   <h1>Discotienda FDJM</h1>    
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
    <div class="content">
      <h1>Catálogo de Discos</h1>
      <div class="catalogo">
        <!-- Producto 1 -->
        <div class="producto">
          <img src="/images/dark side of the moon.jpg" alt="The Dark Side of the Moon">
          <h3>The Dark Side of the Moon</h3>
          <span class="precio">$25.99</span>
        </div>

        <!-- Producto 2 -->
        <div class="producto">
          <img src="/images/Thriller.jpg" alt="Thriller">
          <h3>Thriller</h3>
          <span class="precio">$22.50</span>
        </div>

        <!-- Producto 3 -->
        <div class="producto">
          <img src="/images/Back in Black.jpg" alt="Back in Black">
          <h3>Back in Black</h3>
          <span class="precio">$24.75</span>
        </div>

        <!-- Producto 4 -->
        <div class="producto">
          <img src="/images/Rumours.jpg" alt="Rumours">
          <h3>Rumours</h3>
          <span class="precio">$21.99</span>
        </div>

        <!-- Producto 5 -->
        <div class="producto">
          <img src="/images/The Wall.jpg" alt="The Wall">
          <h3>The Wall</h3>
          <span class="precio">$26.50</span>
        </div>

        <!-- Producto 6 -->
        <div class="producto">
          <img src="/images/Hotel California.jpg" alt="Hotel California">
          <h3>Hotel California</h3>
          <span class="precio">$23.25</span>
        </div>
      </div>
    </div>
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