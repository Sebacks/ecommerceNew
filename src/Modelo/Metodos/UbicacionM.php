<?php

class UbicacionM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM UBICACION";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new Ubicacion();
                $e->setId($fila["ID"]);
                $e->setCoordenadas($fila["COORDENADAS"]);
                $e->setEstado($fila["ESTADO"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setIdUsuario($fila["IDUSUARIO"]);
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
        $e= new Ubicacion();
        $conexion=new Conexion();

        $sql="SELECT * FROM UBICACION WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {

                $e->setId($fila["ID"]);
                $e->setCoordenadas($fila["COORDENADAS"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setEstado($fila["ESTADO"]);
                $e->setIdUsuario($fila["IDUSUARIO"]);
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        return $e;
    }

    function Crear(Ubicacion $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO UBICACION("
                ." NOMBRE,"
                ." COORDENADAS,"
                ." ESTADO,"
                ." IDUSUARIO,)"
                ." VALUES ("
                ."'".$e->getNombre()."',"
                ."'".$e->getCoordenadas()."',"
                ."'".$e->getEstado()."',"
                ."'".$e->getIdUsuario()."',";
        }
        else{
            $sql="UPDATE UBICACION SET NOMBRE='".$e->getNombre().
                "', COORDENADAS='".$e->getCoordenadas().
                "', ESTADO='".$e->getEstado().
                "', IDUSUARIO='".$e->getIdUsuario().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function Desactivar(Ubicacion $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE UBICACION SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}