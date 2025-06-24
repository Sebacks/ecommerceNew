<?php

class CarritoM
{
    function Desactivar(Carrito $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE CARRITO SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function Crear(Carrito $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO CARRITO("
                ." CANTIDAD,"
                ." IDUSUARIO,"
                ." IDPRODUCTO,"
                ." ESTADO,)"
                ." VALUES ("
                ."'".$e->getCantidad()."',"
                ."'".$e->getIdUsuario()."',"
                ."'".$e->getIdProducto()."',"
                ."'".$e->getEstado()."',";
        }
        else{
            $sql="UPDATE CARRITO SET CANTIDAD='".$e->getCantidad().
                "', IDUSUARIO='".$e->getIdUsuario().
                "', IDPRODUCTO='".$e->getIdProducto().
                "', ESTADO='".$e->getEstado().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function BuscarProductosCarrito($idUsuario)
    {
        $todos=array();
        $conexion=new Conexion();
        $sql="SELECT p.* FROM PRODUCTO p JOIN CARRITO g ON p.ID = g.IDPRODUCTO WHERE g.IDUSUARIO = '".$idUsuario."'";
        $resultado = $conexion->Consulta($sql);
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
}