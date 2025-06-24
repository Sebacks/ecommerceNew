<?php

class EnvioM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM ENVIO";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new Envio();
                $e->setId($fila["ID"]);
                $e->setTipoEnvio($fila["TIPOENVIO"]);
                $e->setCantidad($fila["CANTIDAD"]);
                $e->setCoordenadasEnvio($fila["COORDENADASENVIO"]);
                $e->setUbicacionEnvio($fila["UBICACIONENVIO"]);
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
        $e=new Envio();
        $conexion=new Conexion();

        $sql="SELECT * FROM ENVIO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e->setId($fila["ID"]);
                $e->setTipoEnvio($fila["TIPOENVIO"]);
                $e->setCantidad($fila["CANTIDAD"]);
                $e->setCoordenadasEnvio($fila["COORDENADASENVIO"]);
                $e->setUbicacionEnvio($fila["UBICACIONENVIO"]);
                $e->setEstado($fila["ESTADO"]);
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        return $e;
    }

    function Crear(Envio $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO ENVIO("
                ." TIPOENVIO,"
                ." CANTIDAD,"
                ." COORDENADASENVIO,"
                ." UBICACIONENVIO,"
                ." ESTADO,)"
                ." VALUES ("
                ."'".$e->getTipoEnvio()."',"
                ."'".$e->getCantidad()."',"
                ."'".$e->getCoordenadasEnvio()."',"
                ."'".$e->getUbicacionEnvio()."',"
                ."'".$e->getEstado()."',";
        }
        else{
            $sql="UPDATE ENVIO SET TIPOENVIO='".$e->getTipoEnvio().
                "', CANTIDAD='".$e->getCantidad().
                "', COORDENADASENVIO='".$e->getCoordenadasEnvio().
                "', UBICACIONENVIO='".$e->getUbicacionEnvio().
                "',ESTADO='".$e->getEstado().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function Desactivar(Envio $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE ENVIO SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}