<?php

class SolicitudVentaM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM SOLICITUDVENTA";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new SolicitudVenta();
                $e->setId($fila["ID"]);
                $e->setFechaSolicitud($fila["FECHASOLICITUD"]);
                $e->setFechaAprovacion($fila["FECHAAPROVACION"]);
                $e->setEstado($fila["ESTADO"]);
                $e->setEnvio($fila["ENVIO"]);
                $e->setTipoVenta($fila["TIPOVENTA"]);
                $e->setUrlComprobante($fila["URLCOMPROBANTE"]);
                $e->setIdEnvio($fila["IDENVIO"]);
                $e->setIdCliente($fila["IDCLIENTE"]);
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
        $e=new SolicitudVenta();
        $conexion=new Conexion();

        $sql="SELECT * FROM SOLICITUDVENTA WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e->setId($fila["ID"]);
                $e->setFechaSolicitud($fila["FECHASOLICITUD"]);
                $e->setFechaAprovacion($fila["FECHAAPROVACION"]);
                $e->setEstado($fila["ESTADO"]);
                $e->setEnvio($fila["ENVIO"]);
                $e->setTipoVenta($fila["TIPOVENTA"]);
                $e->setUrlComprobante($fila["URLCOMPROBANTE"]);
                $e->setIdEnvio($fila["IDENVIO"]);
                $e->setIdCliente($fila["IDCLIENTE"]);
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        return $e;
    }

    function Crear(SolicitudVenta $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        if($e->getId()==null){
            $sql="INSERT INTO SOLICITUDVENTA("
                ." FECHASOLICITUD,"
                ." FECHAAPROVACION,"
                ." ESTADO,"
                ." ENVIO,"
                ." TIPOVENTA,"
                ." URLCOMPROBANTE,"
                ." IDENVIO,"
                ." IDCLIENTE,)"
                ." VALUES ("
                ."'".$e->getFechaSolicitud()."',"
                ."'".$e->getFechaAprovacion()."',"
                ."'".$e->getEstado()."',"
                ."'".$e->getEnvio()."',"
                ."'".$e->getTipoVenta()."',"
                ."'".$e->getUrlComprobante()."',"
                ."'".$e->getIdEnvio()."',"
                ."'".$e->getIdCliente()."',";
        }
        else{
            $sql="UPDATE SOLICITUDVENTA SET FECHASOLICITUD='".$e->getFechaSolicitud().
                "', FECHAAPROVACION='".$e->getFechaAprovacion().
                "', ESTADO='".$e->getEstado().
                "', ENVIO='".$e->getEnvio().
                "',TIPOVENTA='".$e->getTipoVenta().
                "',URLCOMPROBANTE='".$e->getUrlComprobante().
                "',IDENVIO='".$e->getIdEnvio().
                "',IDCLIENTE='".$e->getIdCliente().
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
        $sql="UPDATE SOLICITUDVENTA SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}