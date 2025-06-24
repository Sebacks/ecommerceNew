<?php

class CategoriaM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM CATEGORIA";
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
    function Desactivar(Categoria $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE CATEGORIA SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }

    function Crear(Categoria $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO CATEGORIA("
                ." NOMBRE,"
                ." DESCRIPCION,"
                ." ESTADO,)"
                ." VALUES ("
                ."'".$e->getNombre()."',"
                ."'".$e->getDescripcion()."',"
                ."'".$e->getEstado()."',";
        }
        else{
            $sql="UPDATE CATEGORIA SET NOMBRE='".$e->getEstado().
                "', DESCRIPCION='".$e->getDescripcion().
                "', ESTADO='".$e->getEstado().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}