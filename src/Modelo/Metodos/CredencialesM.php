<?php

class CredencialesM
{
    function Crear(Credenciales $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        $e->setPass();
        $hash = password_hash($e->getPass(), PASSWORD_DEFAULT);
        if($e->getId()==null){
            $sql="INSERT INTO CREDENCIALES("
                ." PASS,"
                ." TOKEN,"
                ." IDUSUARIO,)"
                ." VALUES ("
                ."'".$hash."',"
                ."'".$e->getToken()."',"
                ."'".$e->getIdUsuario()."',";
        }
        else{
            $sql="UPDATE CREDENCIALES SET PASS='".$hash.
                "', TOKEN='".$e->getToken().
                "', IDUSUARIO='".$e->getIdUsuario().
                "' WHERE ID='".$e->getId()."'";
        }
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
    function ValidarToken(){
        $retVal=false;
        $conexion = new Conexion();
        $sql="SELECT TOKEN FROM CREDENCIALES WHERE (IDUSUARIO='".$_SESSION["id"]."')";
        $result = $conexion->Ejecutar($sql);
        $token='';
        $result->bind_result($token);
        if($token==$_SESSION["token"])
            $retVal=true;
        return $retVal;
    }
}