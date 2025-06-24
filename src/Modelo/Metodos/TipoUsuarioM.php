<?php

class TipoUsuarioM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM TIPOUSUARIO";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new Categoria();
                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setEstado($fila["ESTADO"]);
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
        $e=new TipoUsuario();
        $conexion=new Conexion();

        $sql="SELECT * FROM TIPOUSUARIO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setFechaCreacion($fila["ESTADO"]);
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        return $e;
    }
    function Desactivar(TipoUsuario $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE TIPOUSUARIO SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }

    function Crear(TipoUsuario $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO TIPOUSUARIO("
                ." NOMBRE,"
                ." DESCRIPCION,"
                ." ESTADO,)"
                ." VALUES ("
                ."'".$e->getNombre()."',"
                ."'".$e->getDescripcion()."',"
                ."'".$e->getEstado()."',";
        }
        else{
            $sql="UPDATE TIPOUSUARIO SET NOMBRE='".$e->getEstado().
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