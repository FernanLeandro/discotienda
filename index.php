<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index</title>
  <link rel="stylesheet" href="css/master.css">
</head>
<style>
  .catalogo {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px 0;
  }

  .producto img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    display: block;
    margin: 0 auto;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .producto h3 {
    margin: 10px 0;
    font-size: 1.1em;
  }

  .precio {
    display: block;
    font-weight: bold;
    color: #2c3e50;
    font-size: 1.2em;
  }

  .catalogo br {
    display: none;
  }

  .header-section {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-left: auto;
    padding-right: 20px;
  }

  .search-container {
    display: flex;
    gap: 10px;
  }

  .search-container input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    min-width: 200px;
  }

  .search-container select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .header-nav {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .header-nav ul {
    display: flex;
    gap: 15px;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .header-nav a {
    text-decoration: none;
    color: inherit;
  }

  .cart {
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .cart::before {
    content: "🛒";
    font-size: 1.2em;
  }

  /* Mantener estilos existentes */
  .catalogo br {
    display: none;
  }
</style>

<body>
  <header>

    <img src="images/logo.png" alt="logo">
    <div class="menu-icon" onclick="toggleSidebar()">☰</div>
    <div class="header-section">
      <h1>Discotienda FDJM</h1>
      <div class="search-container">
        <input type="text" placeholder="Buscar...">
        <select>
          <option>Todas las categorías</option>
          <option>Categoría 1</option>
          <option>Categoría 2</option>
          <option>Categoría 3</option>

        </select>
      </div>
      <nav class="header-nav">
        <ul>
          <li><a href="#">Iniciar sesión</a></li>
          <li><a href="#">Mi cuenta</a></li>
        </ul>
        <a href="#" class="cart">Carrito</a>
      </nav>
    </div>
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
          <img src="images/dark side of the moon.jpg" alt="The Dark Side of the Moon">
          <h3>The Dark Side of the Moon</h3>
          <span class="precio">$25.99</span>
        </div>
        <br>

        <!-- Producto 2 -->
        <br>
        <div class="producto">
          <img src="images/Thriller.jpg" alt="Thriller">
          <h3>Thriller</h3>
          <span class="precio">$22.50</span>
        </div>
        <br>

        <!-- Producto 3 -->
        <br>
        <div class="producto">
          <img src="images/Back in Black.jpg" alt="Back in Black">
          <h3>Back in Black</h3>
          <span class="precio">$24.75</span>
        </div>
        <br>

        <!-- Producto 4 -->
        <br>
        <div class="producto">
          <img src="images/Rumours.jpg" alt="Rumours">
          <h3>Rumours</h3>
          <span class="precio">$21.99</span>
        </div>
        <br>

        <!-- Producto 5 -->
        <br>
        <div class="producto">
          <img src="images/The Wall.jpg" alt="The Wall">
          <h3>The Wall</h3>
          <span class="precio">$26.50</span>
        </div>
        <br>

        <!-- Producto 6 -->
        <br>
        <div class="producto">
          <img src="images/Hotel California.jpg" alt="Hotel California">
          <h3>Hotel California</h3>
          <span class="precio">$23.25</span>
        </div>
        <br>
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