<?php
include_once("basedatos.php");
class producto extends basedatos
{
    public $productoID;
    public $titulo;
    public $año_lanzamiento;
    public  $precio;
    function __construct($productoID = NULL, $titulo = NULL, $año_lanzamiento = NULL, $precio = NULL)
    {
        $this->productoID = $productoID;
        $this->titulo = $titulo;
        $this->año_lanzamiento = $año_lanzamiento;
        $this->precio = $precio;
    }

    public function getProductoID()
    {
        return $this->productoID;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAñoLanzamiento()
    {
        return $this->año_lanzamiento;
    }
    public function getPrecio()
    {
        return $this->precio;
    }

    public function setProductoId($productoID)
    {
        return $this->productoID = $productoID;
    }

    public function setTitulo($titulo)
    {
        return $this->titulo = $titulo;
    }

    public function setAñoLanzamiento($año_lanzamiento)
    {
        return $this->año_lanzamiento = $año_lanzamiento;
    }
    public function setPrecio($precio)
    {
        return $this->precio = $precio;
    }

    public function insertar()
    {
        $sql = sprintf("INSERT INTO discotienda (productoID,titulo,año_lanzamiento,precio) VALUES ('%s', '%s', '%s', '%s')", $this->productoID, $this->titulo, $this->año_lanzamiento, $this->precio);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM discotienda ORDER BY titulo ASC";
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }

    public function consultar()
    {
        $sql = sprintf("SELECT * FROM discotienda WHERE productoID = %s", $this->productoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->titulo = $res["titulo"];
        $this->año_lanzamiento = $res["año_lanzamiento"];
        $this->precio = $res["precio"];
    }

    public function eliminar()
    {
        $sql = sprintf("DELETE FROM discotienda WHERE productoID = %s", $this->productoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function actualizar()
    {
        $sql = sprintf("UPDATE discotienda SET productoID = '%s', titulo = '%s', año_lanzamiento = '%s', precio = '%s' WHERE productoID = '%s'", $this->productoID, $this->titulo, $this->año_lanzamiento, $this->precio, $this->productoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
}
