<?php
//incluyo la clase banco al archivo
include '../class/c_artista.php';
//creo el objeto banco
$artista = new artista();
//asigno los valores a los atributos del objeto cajero
//$_POST['id_cajero'] es el valor del campo oculto que se envia desde el formulario
$artista->setartistaID($_POST['artista_id']);

//se consulta el cajero para obtener los valores actuales
$artista->consultar();
//asigno los valores a los atributos del objeto banco
//$_POST['nombre'] es el valor del campo nombre que se envia desde el formulario
//$_POST['cod_transaccion'] es el valor
//del campo cod_transaccion que se envia desde el formulario
$artista->setArtistaID($_POST['artistaID']);
$artista->setNombre($_POST['nombre']);
$artista->setNacionalidad($_POST['nacionalidad']);





//actualizo el registro en la base de datos
//el metodo actualizar se encarga de ejecutar la consulta de actualizacion
$artista->actualizar();

//redirecciono a la pagina de listar banco
header("Location: ../l_artista.php");
//cierro la conexion a la base de datos
?>