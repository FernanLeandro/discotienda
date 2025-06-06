<?php
include_once("basedatos.php");
class empleado extends basedatos
{
    public $empleadoID;
    public $nombre;
    public $cargo;
    function __construct($empleadoID = NULL, $nombre = NULL, $cargo = NULL)
    {
        $this->empleadoID = $empleadoID;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
    }

    public function getEmpleadoID()
    {
        return $this->empleadoID;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setEmpleadoID($empleadoID)
    {
        return $this->empleadoID = $empleadoID;
    }

    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }

    public function setCargo($cargo)
    {
        return $this->cargo = $cargo;
    }

    public function insertar()
    {
        $sql = sprintf("INSERT INTO empleado (empleadoID,nombre,cargo) VALUES ('%s', '%s', '%s')", $this->empleadoID, $this->nombre, $this->cargo);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM empleado ORDER BY nombre ASC";
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }

    public function consultar()
    {
        $sql = sprintf("SELECT * FROM empleado WHERE empleadoID = %s", $this->empleadoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre = $res["nombre"];
        $this->cargo = $res["cargo"];
    }

    public function eliminar()
    {
        $sql = sprintf("DELETE FROM empleado WHERE empleadoID = %s", $this->empleadoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function actualizar()
    {
        $sql = sprintf("UPDATE empleado SET empleadoID = '%s', nombre = '%s', cargo = '%s' WHERE empleadoID = %s", $this->empleadoID, $this->nombre, $this->cargo, $this->empleadoID);
        $this->conectar();
    //    echo $sql;
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
}
