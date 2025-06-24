<?php

class VentaDetalleM
{
    function BuscarProductos($idVenta)
    {
        $todos=array();
        $conexion= new Conexion();
        $sql="SELECT p.* FROM PRODUCTO p JOIN VENTADETALLE vd ON p.ID = vd.IDPRODUCTO WHERE vd.IDVENTA = '".$idVenta."'";
        $resultado=$conexion->Ejecutar($sql);
        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new Producto();
                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setDescripcion($fila["DESCRIPCION"]);
                $e->setUrlImagen($fila["URLIMAGEN"]);
                $e->setPrecio($fila["PRECIO"]);
                $e->setCantDisponible($fila["CANTDISPONIBLE"]);
                $e->setFechaCreacion($fila["FECHACREACION"]);
                $e->setEstado($fila["ESTADO"]);
                $e->setIdLocalidad($fila["IDLOCALIDAD"]);
                $e->setDescuento($fila["DESCUENTO"]);
                $e->setHasDescuento($fila["HASDESCUENTO"]);
                $todos[]=$e;
            }
        }
        else
            $todos=null;
        $conexion->Cerrar();
        return $todos;
    }

    function Desactivar(VentaDetalle $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE VENTADETALLE SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }

    function Crear(VentaDetalle $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO VENTADETALLE("
                ." CANTIDAD,"
                ." IDPRODUCTO,"
                ." IDVENTA,)"
                ." VALUES ("
                ."'".$e->getCantidad()."',"
                ."'".$e->getIdProducto()."',"
                ."'".$e->getIdVenta()."',";
        }
        else{
            $sql="UPDATE VENTADETALLE SET CANTIDAD='".$e->getCantidad().
                "', IDPRODUCTO='".$e->getIdProducto().
                "', IDVENTA='".$e->getIdVenta().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}