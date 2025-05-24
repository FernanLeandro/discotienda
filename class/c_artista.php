<?php
include_once("basedatos.php");
class artista extends basedatos
{
    public $artistaID;
    public $nombre;
    public $nacionalidad;
    function __construct($artistaID = NULL, $nombre = NULL, $nacionalidad = NULL)
    {
        $this->artistaID = $artistaID;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }

    public function getArtistaID()
    {
        return $this->artistaID;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    public function setArtistaID($artistaID)
    {
        return $this->artistaID = $artistaID;
    }

    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }

    public function setNacionalidad($nacionalidad)
    {
        return $this->nacionalidad = $nacionalidad;
    }

    public function insertar()
    {
        $sql = sprintf("INSERT INTO artista (artistaID,nombre,cargo) VALUES ('%s', '%s', '%s')", $this->artistaID, $this->nombre, $this->nacionalidad);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM artista ORDER BY nombre ASC";
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }

    public function consultar()
    {
        $sql = sprintf("SELECT * FROM artista WHERE artistaID = %s", $this->artistaID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre = $res["nombre"];
        $this->nacionalidad = $res["nacionalidad"];
    }

    public function eliminar()
    {
        $sql = sprintf("DELETE FROM artista WHERE artistaID = %s", $this->artistaID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function actualizar()
    {
        $sql = sprintf("UPDATE artista SET artistaID = '%s', nombre = '%s', codigo = '%s' WHERE artistaID = '%s'", $this->artistaID, $this->nombre, $this->nacionalidad, $this->artistaID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
}
