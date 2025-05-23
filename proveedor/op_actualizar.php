<?php
//incluyo la clase banco al archivo
include '../class/c_empleado.php';
//creo el objeto banco
$empleado = new empleado();
//asigno los valores a los atributos del objeto cajero
//$_POST['id_cajero'] es el valor del campo oculto que se envia desde el formulario
$empleado->setEmpleadoID($_POST['empleado_id']);

//se consulta el cajero para obtener los valores actuales
$empleado->consultar();
//asigno los valores a los atributos del objeto banco
//$_POST['nombre'] es el valor del campo nombre que se envia desde el formulario
//$_POST['cod_transaccion'] es el valor
//del campo cod_transaccion que se envia desde el formulario
$empleado->setEmpleadoID($_POST['empleadoID']);
$empleado->setNombre($_POST['nombre']);
$empleado->setCargo($_POST['cargo']);





//actualizo el registro en la base de datos
//el metodo actualizar se encarga de ejecutar la consulta de actualizacion
$empleado->actualizar();

//redirecciono a la pagina de listar banco
header("Location: ../l_empleado.php");
//cierro la conexion a la base de datos
?>