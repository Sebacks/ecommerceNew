<?php

class LocalidadM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM LOCALIDAD";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new Localidad();
                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setUbicacion($fila["UBICACION"]);
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
        $e= new Localidad();
        $conexion=new Conexion();

        $sql="SELECT * FROM LOCALIDAD WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {

                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setUbicacion($fila["UBICACION"]);
                $e->setEstado($fila["ESTADO"]);
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        return $e;
    }

    function Crear(Localidad $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO LOCALIDAD("
                ." NOMBRE,"
                ." UBICACION,"
                ." ESTADO,)"
                ." VALUES ("
                ."'".$e->getNombre()."',"
                ."'".$e->getUbicacion()."',"
                ."'".$e->getEstado()."',";
        }
        else{
            $sql="UPDATE LOCALIDAD SET NOMBRE='".$e->getEstado().
                "', UBICACION='".$e->getUbicacion().
                "', ESTADO='".$e->getEstado().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function Desactivar(Localidad $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE LOCALIDAD SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}