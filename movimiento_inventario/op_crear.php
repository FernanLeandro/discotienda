<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../class/c_movimiento_inventario.php');
    $movimiento_inventario = new movimiento_inventario();
    $movimiento_inventario->setFecha($_POST['fecha']);
    $movimiento_inventario->setTipo($_POST['tipo']);
    $movimiento_inventario->setCantidad($_POST['cantidad']);
    $movimiento_inventario->setProductoID($_POST['productoID']);
    $movimiento_inventario->setEmpleadoID($_POST['empleadoID']);
    $movimiento_inventario->insertar();

    header("Location: ../l_movimiento_inventario.php");
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Variables tipo GET <br> 
          Fecha: ".$_GET['fecha']."<br>
          Tipo: ".$_GET['tipo']."<br>
          Cantidad: ".$_GET['cantidad']."<br>
          Producto ID: ".$_GET['productoID']."<br>
          Empleado ID: ".$_GET['empleadoID'];
          
} else {
    header("Location: ../index.php");
}
?>