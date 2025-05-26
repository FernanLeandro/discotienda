<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../class/c_proveedor.php');
    $proveedor = new proveedor();
    $proveedor->setNombreProveedor($_POST['nombre_proveedor']);
    $proveedor->setContacto($_POST['contacto']);
    $proveedor->setTelefono($_POST['telefono']);
    $proveedor->setEmail($_POST['email']);
    $proveedor->insertar();

    header("Location: ../l_proveedor.php");
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Variables tipo GET <br> 
          Nombre Proveedor: " . $_GET['nombre_proveedor'] . "<br>
          Contacto: " . $_GET['contacto'] . "<br>
          Telefono: " . $_GET['telefono'] . "<br>
          Email: " . $_GET['email'];


} else {
    header("Location: ../l_proveedor.php");
}
?>