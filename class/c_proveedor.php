<?php
include_once("basedatos.php");
class proveedor extends basedatos
{
    public $proveedorID;
    public $nombre_proveedor;
    public $contacto;
    public $telefono;
    public $email;
    function __construct($proveedorID = NULL, $nombre_proveedor = NULL, $contacto = NULL, $telefono = NULL, $email = NULL)
    {
        $this->proveedorID = $proveedorID;
        $this->nombre_proveedor = $nombre_proveedor;
        $this->contacto = $contacto;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    public function getProveedorID()
    {
        return $this->proveedorID;
    }

    public function getNombreProveedor()
    {
        return $this->nombre_proveedor;
    }

    public function getContacto()
    {
        return $this->contacto;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setProveedorID($proveedorID)
    {
        return $this->proveedorID = $proveedorID;
    }

    public function setNombreProveedor($nombre_proveedor)
    {
        return $this->nombre_proveedor = $nombre_proveedor;
    }

    public function setContacto($contacto)
    {
        return $this->contacto = $contacto;
    }
    public function setTelefono($telefono)
    {
        return $this->telefono = $telefono;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function insertar()
    {
        $sql = sprintf("INSERT INTO discotienda (proveedorID,nombre_proveedor,contacto,telefono,email) VALUES ('%s', '%s', '%s', '%s', '%s')", $this->proveedorID, $this->nombre_proveedor, $this->contacto, $this->telefono, $this->email);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM discotienda ORDER BY nombre_proveedor ASC";
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }

    public function consultar()
    {
        $sql = sprintf("SELECT * FROM discotienda WHERE proveedorID = %s", $this->proveedorID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre_proveedor = $res["nombre_proveedor"];
        $this->contacto = $res["contacto"];
        $this->telefono = $res["telefono"];
        $this->email = $res["email"];
    }

    public function eliminar()
    {
        $sql = sprintf("DELETE FROM discotienda WHERE proveedorID = %s", $this->proveedorID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function actualizar()
    {
        $sql = sprintf("UPDATE discotienda SET proveedorID = '%s', nombre_proveedor = '%s', contacto = '%s', telefono = '%s', email = '%s' WHERE proveedorID = '%s'", $this->proveedorID, $this->nombre_proveedor, $this->contacto, $this->telefono, $this->email, $this->proveedorID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
}
