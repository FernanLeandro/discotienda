<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

include('../class/c_artista.php');
    $artista = new artista();
    $artista->setNombre($_POST['nombre']);
    $artista->setNacionalidad($_POST['nacionalidad']);
    $artista->insertar();

    header("Location: ../l_artista.php");
} else if($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo"Variables tipo GET <br> 
        Nombre: ".$_GET['nombre']." Nacionalidad: ".$_GET['nacionalidad'];
} else {
    header("Location: ../index.php");
}
?>