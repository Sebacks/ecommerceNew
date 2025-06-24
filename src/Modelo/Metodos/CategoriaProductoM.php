<?php

class CategoriaProductoM
{
    function Crear(CategoriaProducto $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO CATEGORIAPRODUCTO("
                ." ESTADO,"
                ." IDPRODUCTO,"
                ." IDCATEGORIA,)"
                ." VALUES ("
                ."'".$e->getEstado()."',"
                ."'".$e->getIdProducto()."',"
                ."'".$e->getIdCategoria()."',";
        }
        else{
            $sql="UPDATE CATEGORIAPRODUCTO SET ESTADO='".$e->getEstado().
                "', IDPRODUCTO='".$e->getIdProducto().
                "', IDCATEGORIA='".$e->getIdCategoria().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function Desactivar(CategoriaProducto $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE CATEGORIAPRODUCTO SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }

    //Retorna las categorias de un producto
    function BuscarCategorias($idProducto)
    {
        $todos=array();
        $conexion= new Conexion();
        $sql="SELECT c.* FROM CATEGORIA c JOIN CATEGORIAPRODUCTO cat ON c.ID = cat.IDCATEGORIA WHERE cat.IDPRODUCTO = '".$idProducto."'";
        $resultado=$conexion->Ejecutar($sql);
        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new Categoria();
                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setDescripcion($fila["DESCRIPCION"]);
                $e->setEstado($fila["ESTADO"]);
                $todos[]=$e;
            }
        }
        else
            $todos=null;
        $conexion->Cerrar();
        return $todos;
    }
    //Busca todos los productos de x categoria
    function BuscarProductos($idCategoria)
    {
        $todos=array();
        $conexion= new Conexion();
        $sql="SELECT p.* FROM PRODUCTO p JOIN CATEGORIAPRODUCTO cat ON p.ID = cat.IDPRODUCTO WHERE cat.IDCATEGORIA = '".$idCategoria."'";
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
}