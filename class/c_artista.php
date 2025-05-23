<?php
include_once("basedatos.php");
class artista extends basedatos
{
    public $artistaID;
    public $nombre;
    public $nacionalidad;
    function __construct($artistaID = NULL, $nombre = NULL, $nacionalidad = NULL, $cargo = NULL)
    {
        $this->artistaID = $artistaID;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->cargo = $cargo;
    }

    public function getartistaID()
    {
        return $this->artistaID;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setartistaID($artistaID)
    {
        return $this->artistaID = $artistaID;
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
        $sql = sprintf("INSERT INTO discotienda (artistaID,nombre,cargo) VALUES ('%s', '%s', '%s')", $this->artistaID, $this->nombre, $this->cargo);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM discotienda ORDER BY nombre ASC";
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }

    public function consultar()
    {
        $sql = sprintf("SELECT * FROM discotienda WHERE artistaID = %s", $this->artistaID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre = $res["nombre"];
        $this->cargo = $res["cargo"];
    }

    public function eliminar()
    {
        $sql = sprintf("DELETE FROM discotienda WHERE artistaID = %s", $this->artistaID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function actualizar()
    {
        $sql = sprintf("UPDATE discotienda SET artistaID = '%s', nombre = '%s', codigo = '%s' WHERE artistaID = '%s'", $this->artistaID, $this->nombre, $this->cargo, $this->artistaID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
}
