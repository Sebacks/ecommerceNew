<?php

class ProductoM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM PRODUCTO";
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
    function Buscar($id)
    {
        $e=new Producto();
        $conexion=new Conexion();

        $sql="SELECT * FROM PRODUCTO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
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
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        return $e;
    }

    function Crear(Producto $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getHasDescuento()){
            $e->setDescuento(0);
        }
        if($e->getId()==null){
            $sql="INSERT INTO PRODUCTO("
                ." NOMBRE,"
                ." DESCRIPCION,"
                ." URLIMAGEN,"
                ." PRECIO,"
                ." CANTDISPONIBLE,"
                ." FECHACREACION,"
                ." ESTADO,"
                ." IDLOCALIDAD,"
                ." DESCUENTO,"
                ." HASDESCUENTO,)"
                ." VALUES ("
                ."'".$e->getNombre()."',"
                ."'".$e->getDescripcion()."',"
                ."'".$e->getUrlImagen()."',"
                ."'".$e->getPrecio()."',"
                ."'".$e->getCantDisponible()."',"
                ."'".$e->getFechaCreacion()."',"
                ."'".$e->getEstado()."',"
                ."'".$e->getIdLocalidad()."',"
                ."'".$e->getDescuento()."',"
                ."'".$e->getHasDescuento()."',";
        }
        else{
            $sql="UPDATE PRODUCTO SET NOMBRE='".$e->getNombre().
                "', DESCRIPCION='".$e->getDescripcion().
                "', URLIMAGEN='".$e->getUrlImagen().
                "', PRECIO='".$e->getPrecio().
                "',CANTDISPONIBLE='".$e->getCantDisponible().
                "',FECHACREACION='".$e->getFechaCreacion().
                "',ESTADO='".$e->getEstado().
                "',IDLOCALIDAD='".$e->getIdLocalidad().
                "',DESCUENTO='".$e->getDescuento().
                "',HASDESCUENTO='".$e->getHasDescuento().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function Desactivar(Producto $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE PRODUCTO SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}