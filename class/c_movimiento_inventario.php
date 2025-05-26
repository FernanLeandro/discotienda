<?php
include_once("basedatos.php");
class movimiento_inventario extends basedatos
{
    public $movimientoID;
    public $fecha;
    public $tipo;
    public $cantidad;
    public $productoID;
    public $empleadoID;

    function __construct($movimientoID = NULL, $fecha = NULL, $tipo = NULL, $cantidad = NULL, $productoID = NULL, $empleadoID = NULL)
    {
        $this->movimientoID = $movimientoID;
        $this->fecha = $fecha;
        $this->tipo = $tipo;
        $this->cantidad = $cantidad;
        $this->productoID = $productoID;
        $this->empleadoID = $empleadoID;
    }

    public function getMovimientoID()
    {
        return $this->movimientoID;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function getProductoID()
    {
        return $this->productoID;
    }
    public function getEmpleadoID()
    {
        return $this->empleadoID;
    }

    public function setMovimientoID($movimientoID)
    {
        return $this->movimientoID = $movimientoID;
    }

    public function setFecha($fecha)
    {
        return $this->fecha = $fecha;
    }

    public function setTipo($tipo)
    {
        return $this->tipo = $tipo;
    }
    public function setCantidad($cantidad)
    {
        return $this->cantidad = $cantidad;
    }

    public function setProductoID($productoID)
    {
        return $this->productoID = $productoID;
    }
    public function setEmpleadoID($empleadoID)
    {
        return $this->empleadoID = $empleadoID;
    }

    public function insertar()
    {
        $sql = sprintf("INSERT INTO movimiento_inventario (movimientoID,fecha,tipo,cantidad,productoID,empleadoID) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')", $this->movimientoID, $this->fecha, $this->tipo, $this->cantidad, $this->productoID, $this->empleadoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM movimiento_inventario ORDER BY movimientoID ASC";
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }

    public function consultar()
    {
        $sql = sprintf("SELECT * FROM movimiento_inventario WHERE movimientoID = %s", $this->movimientoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->fecha =$res["fecha"];
        $this->tipo = $res["tipo"];
        $this->cantidad = $res["cantidad"];
        $this->productoID = $res["productoID"];
        $this->empleadoID = $res["empleadoID"];
    }

    public function eliminar()
    {
        $sql = sprintf("DELETE FROM movimiento_inventario WHERE movimientoId = %s", $this->movimientoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function actualizar()
    {
        $sql = sprintf("UPDATE movimiento_inventario SET movimientoID = '%s', fecha = '%s', tipo = '%s', cantidad = '%s', productoID = '%s', empleadoID = '%s'", $this->movimientoID, $this->fecha, $this->tipo, $this->cantidad,  $this->productoID, $this->empleadoID, $this->movimientoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
}
