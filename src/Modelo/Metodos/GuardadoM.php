<?php

class GuardadoM
{
    function Crear(Guardado $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO GUARDADO("
                ." ESTADO,"
                ." IDPRODUCTO,"
                ." IDCLIENTE,)"
                ." VALUES ("
                ."'".$e->getEstado()."',"
                ."'".$e->getIdProducto()."',"
                ."'".$e->getIdCliente()."',";
        }
        else{
            $sql="UPDATE GUARDADO SET ESTADO='".$e->getEstado().
                "', IDPRODUCTO='".$e->getIdProducto().
                "', IDCLIENTE='".$e->getIdCliente().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function Desactivar(Guardado $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE GUARDADO SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }

    //Retorna la cantidad de veces que se ha guardado un producto
    function BuscarCantGuardado($idProducto)
    {
        $conexion= new Conexion();
        $sql="SELECT * FROM GUARDADO WHERE IDPRODUCTO = '".$idProducto."'";
        $resul = $conexion->Ejecutar($sql);
        $todos=mysqli_num_rows($resul);
        $conexion->Cerrar();
        return $todos;
    }

    //Retorne la lista de productos guardados para x usuario
    function BuscarProductosGuardados($idUsuario)
    {
        $todos=array();
        $conexion=new Conexion();
        $sql="SELECT p.* FROM PRODUCTO p JOIN GUARDADO g ON p.ID = g.IDPRODUCTO WHERE g.IDUSUARIO = '".$idUsuario."'";
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