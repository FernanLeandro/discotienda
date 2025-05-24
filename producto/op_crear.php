<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../class/c_producto.php');
    $producto = new producto();
    $producto->setTitulo($_POST['titulo']);
    $producto->setAñoLanzamiento($_POST['año_lanzamiento']);
    $producto->setPrecio($_POST['precio']);
    $producto->insertar();

    header("Location: ../l_producto.php");
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Variables tipo GET <br> 
          Titulo: ".$_GET['titulo']."<br>
          Año Lanzamiento: ".$_GET['año_lanzamiento']."<br>
          Precio: ".$_GET['precio'];
          
          
} else {
    header("Location: ../index.php");
}
?>