<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../class/c_genero.php');
    $genero = new genero();
    $genero->setNombre($_POST['nombre']);
    $genero->insertar();

    header("Location: ../l_genero.php");
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Variables tipo GET <br> 
        Nombre: " . $_GET['nombre'];
} else {
    header("Location: ../index.php");
}
?>