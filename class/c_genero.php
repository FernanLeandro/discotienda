<?php
include_once ("basedatos.php");
//clase artista

class genero extends basedatos
{
    public $generoID;
    public $nombre;
    //public $nacionalidad;
    function __construct($generoID = NULL, $nombre = NULL) {
        $this->generoID = $generoID;
        $this->nombre = $nombre;
        // $this->nacionalidad = $nacionalidad;
    }
    //metodo get
    public function getGeneroID()
    {
        return $this->generoID;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    //public function getCodTransaccion()
    //{
    // return $this->cod_transaccion;
    //}
    //metodo set
    public function setGeneroID($generoID)
    {
         return $this->generoID = $generoID;
    }
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }
    //public function setCodTransaccion($cod_transaccion)
    //{
    // $this->cod_transaccion = $cod_transaccion;
    //}
    public function insertar()
    {
        $sql = sprintf(
            "INSERT INTO genero (nombre) VALUES ('%s')",
            $this->nombre,
            //$this->nacionalidad
        );
        $this->conectar();
        //echo $sql;
        $this->ejecutarSQL(sql: $sql);
        $this->desconectar();
    }
    public function listar()
    {
        $sql = "SELECT * FROM genero ORDER BY generoID ASC";
        $this->conectar();
        $this->ejecutarSQL( $sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }
    public function consultar()
    {
        $sql = sprintf("SELECT * FROM genero WHERE generoID = %s", $this->generoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre = $res["nombre"];
    }

    public function eliminar()
    {
        $sql = sprintf(
            "DELETE FROM genero WHERE generoID = %s", $this->generoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
    public function actualizar()
    {
        $sql = sprintf("UPDATE genero SET generoID = '%s', nombre = '%s' WHERE generoID = %s", $this->generoID, $this->nombre, $this->generoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
}
